# WebSEO Pro hook bootstrap overview

This note captures where Pro-specific hooks are registered during plugin bootstrap and how they fit into the main initialization flow.

## Core load order
- `webseo/webseo.php` loads the shared autoloader and helper functions when Composer assets exist, executes the base Kernel, and only then boots the bundled Pro addon if its main file is present. This keeps Pro loading after the free core has prepared the container and compatibility helpers such as `webseo_add_action_compat()`.【F:webseo/webseo.php†L95-L118】
- The Pro entry point (`pro-addon/seopress-pro.php`) requires its own autoloader, utility functions, and admin cron definitions before invoking the Pro Kernel. Kernel execution builds a container from `src/Services`, `src/Thirds`, and `src/Actions`, then wires lifecycle hooks (`plugins_loaded`, activation, deactivation) for the action classes. Admin cron/scheduling functions become available as soon as the file loads because they are required before Kernel execution.【F:pro-addon/seopress-pro.php†L69-L88】【F:pro-addon/src/Core/Kernel.php†L36-L155】

## Container-driven hook registration
- On `plugins_loaded` (priority 20), the Pro Kernel instantiates each action class and calls its `hooks()` method. Backend-only actions run when `is_admin()` is true, frontend-only actions when false, and generic actions always run. Activation/deactivation hooks also loop over action classes to trigger any implementations of the corresponding interfaces, so lifecycle handlers live alongside runtime hooks without separate registration code.【F:pro-addon/src/Core/Kernel.php†L36-L94】【F:pro-addon/src/Core/Kernel.php†L147-L155】
- Example: `src/Actions/Commands.php` registers CLI commands during `cli_init` from inside its `hooks()` method, so it becomes active once the container-driven bootstrap runs on `plugins_loaded`. This pattern is shared by other action classes (Ajax handlers, sitemap renderers, filters, etc.), keeping hook wiring centralized in the Kernel.【F:pro-addon/src/Actions/Commands.php†L9-L18】

## Explicit bootstrap hooks in `seopress-pro.php`
- **Dependency guard:** `seopress_pro_loaded()` runs on `plugins_loaded` to deactivate Pro and show a notice if the free plugin is missing, preserving the existing license/availability check before any other Pro features load.【F:pro-addon/seopress-pro.php†L137-L149】
- **Cron scheduling:** `seopress_pro_cron()` schedules Pro cron events (404 cleanup, analytics, PSI, alerts) and is called both on activation and every `plugins_loaded` run, ensuring events stay scheduled without changing the timetable.【F:pro-addon/seopress-pro.php†L95-L130】【F:pro-addon/seopress-pro.php†L308-L311】
- **Admin/bootstrap includes:** `seopress_pro_plugins_loaded()` (priority 999) conditionally requires admin modules, metaboxes, dashboards, importers, bot tools, redirections, Elementor integration, updater, and block registration based on context flags like `$pagenow`, `wp_doing_ajax()`, feature toggles, and builder query args. This keeps heavy admin code lazy-loaded and preserves feature gating (e.g., only load redirections when the 404 module is enabled).【F:pro-addon/seopress-pro.php†L308-L377】
- **Localization and assets:** An `init` hook loads translations (and optional TranslationsPress updater), while other hooks enqueue AI, PageSpeed, dashboard, and license assets only when relevant admin screens or toggles are active (e.g., `seopress_seo_metabox_init`, `admin_enqueue_scripts`).【F:pro-addon/seopress-pro.php†L385-L396】【F:pro-addon/seopress-pro.php†L398-L520】

## Admin bootstrap class
- When the admin loader includes `inc/admin/admin.php`, the `seopress_pro_options` constructor immediately registers numerous `admin_menu` and `admin_init` callbacks for license handling, section loading, metabox setup, and option persistence. These hooks only attach in admin contexts because the file is required inside the admin guard in `seopress_pro_plugins_loaded()`.【F:pro-addon/inc/admin/admin.php†L15-L31】【F:pro-addon/seopress-pro.php†L320-L333】

## Compatibility and custom events
- Pro uses the shared compatibility helpers to expose custom events under both the new `webseo_*` and legacy `seopress_*` names. For example, PageSpeed cron execution is registered via `webseo_add_action_compat()` so both hook names fire the same handler, preserving backward compatibility without duplicating logic.【F:pro-addon/inc/admin/cron.php†L73-L88】
- Additional filters are applied at load time, such as enabling Google Suggestions in the meta box UI through `add_filter( 'seopress_ui_metabox_google_suggest', '__return_true' );`, which runs as soon as Pro functions load.【F:pro-addon/seopress-pro-functions.php†L11-L32】

## Initialization map (high level)
1. **Free plugin bootstrap:** load autoloaders and `seopress-functions.php`, execute base Kernel to register free hooks, then require Pro if bundled.【F:webseo/webseo.php†L95-L118】
2. **Pro bootstrap:** load Pro autoloader, functions, cron helpers, and build the Pro container; register container-driven hooks for lifecycle and runtime events.【F:pro-addon/seopress-pro.php†L69-L88】【F:pro-addon/src/Core/Kernel.php†L36-L155】
3. **Environment checks:** run `seopress_pro_loaded()` on `plugins_loaded` to enforce dependency requirements; schedule cron via `seopress_pro_cron()`.【F:pro-addon/seopress-pro.php†L137-L149】【F:pro-addon/seopress-pro.php†L95-L130】
4. **Admin/bootstrap includes:** late `plugins_loaded` handler loads admin/UI modules based on request context and feature toggles, ensuring conditional behavior stays intact.【F:pro-addon/seopress-pro.php†L308-L377】
5. **Runtime hook execution:** container actions attach their own actions/filters when `plugins_loaded` fires (priority 20), with scope-aware execution for admin vs. frontend. Compatibility helpers keep legacy hook names available for custom events like cron handlers.【F:pro-addon/src/Core/Kernel.php†L36-L94】【F:pro-addon/inc/admin/cron.php†L73-L88】

This mapping keeps existing conditional loading (license guard, feature toggles, builder exclusions) intact while clarifying where Pro hooks enter the lifecycle.

## Migration notes for unified plugin
- Move the bootstrap responsibilities from `pro-addon/seopress-pro.php` into the main `webseo.php` (or an adjacent loader) so the hook wiring no longer depends on a nested plugin entry point.
- Replace `pro-addon/inc/...` include paths in admin bootstrapping with the consolidated `inc/` equivalents referenced in the migration map so comments, docs, and future refactors all point at the same directory.
