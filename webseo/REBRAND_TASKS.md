# WebSEO Full White-Label Rebrand Task List

Comprehensive checklist to rename all plugin aspects to the **WebSEO** brand while preserving existing functionality.

## Repository and Build System
- Rename repository root plugin directory to `webseo` and ensure path references in deployment scripts, CI configs, and documentation reflect the new folder.
- Rename main plugin file to `webseo.php` and update plugin header fields (Name, Plugin URI, Description, Author, Author URI, Text Domain, Domain Path).
- Update autoload/config files (e.g., `composer.json`, `composer.lock`, `autoload.php`, `seopress-autoload.php`) with the new namespace `WebSEO` and PSR-4 mapping paths.
- Adjust build tooling (npm/yarn scripts, Webpack/Vite/Rollup configs, Babel, ESLint/PHPCS) to use new entry points, output names, and banner/license comments.
- Update package names and CLI commands in package manifests, lockfiles, and scripts to reflect `webseo` identifiers.

## Namespaces, Classes, and Functions
- Replace all PHP namespaces from the previous brand to `WebSEO` (including sub-namespaces) and update use/import statements accordingly.
- Rename classes, traits, interfaces, and abstract classes to use the `WebSEO` prefix while preserving suffix semantics (e.g., `*Service`, `*Controller`).
- Update function names, method names, and static helpers to use `webseo`/`WebSEO` prefixes, ensuring back-compat wrappers only if required.
- Align hooks, filters, and action names to the new prefix (e.g., `webseo_*`) and update all registrations and listeners.

## Identifiers and Constants
- Rename constants, global variables, and options to use `WEBSEO_`/`webseo_` prefixes; migrate option names in activation/upgrade routines.
- Update capability strings, roles, and nonces to new identifiers; ensure migration scripts adjust stored values.
- Change database table names and schema definitions to `webseo_*` and include upgrade routines to rename existing tables or copy data safely.

## Internationalization
- Update text domain to `webseo` across all translation functions (`__`, `_e`, `_x`, `esc_html__`, etc.).
- Rename language files and domain paths, regenerate `.pot`/`.po`/`.mo` files, and update translation loading logic.

## Assets and Branding
- Rename asset folders and files (images, fonts, SVGs, CSS/JS bundles) to the `webseo` naming; update enqueue paths and versioning.
- Replace logos, icons (including SVG and Dashicons), screenshots, and banners with WebSEO-branded assets.
- Update favicon/manifest data for any embedded admin apps.

## Admin UI and Settings
- Update admin menu/page slugs, titles, and capability checks to `webseo` naming.
- Rename settings sections, fields, option keys, and defaults; update help tabs/tooltips to new brand copy.
- Update notices, onboarding wizards, and contextual links to use WebSEO branding and URLs.

## Frontend Integrations
- Rename shortcodes, blocks, and block metadata (`block.json`) to `webseo` identifiers; update registration and usage documentation.
- Update REST API namespaces/routes to `/webseo/v1/...` and adjust controllers, permissions, and consumers accordingly.
- Rename AJAX actions, query vars, and URL parameters; ensure JavaScript fetch calls and nonce handling match new names.
- Update public scripts/styles handles to `webseo-*` and ensure dependency arrays reference renamed handles.

## Data Storage and Migration
- Migrate existing option names, meta keys, and custom database tables from old prefixes to `webseo_` with safe upgrade routines and backfill.
- Update custom post type and taxonomy slugs/labels to WebSEO; include rewrite flush in activation and ensure permalinks remain valid.
- Adjust scheduled events/cron hooks to new identifiers and migrate existing scheduled tasks.

## Licensing and Integrations
- Update licensing/activation endpoints, option keys, and transient names to WebSEO naming; migrate stored license data.
- Rename SDK or vendor namespaces if bundled; verify autoload and API requests use WebSEO identifiers.
- Update external service keys/user agents, webhook identifiers, and partner integration labels to WebSEO branding.

## Documentation and Support Links
- Update readme files, inline docs, and docblocks to reference WebSEO; refresh URLs for support, privacy, and terms pages.
- Ensure onboarding links, admin footer text, and meta links point to WebSEO destinations.

## QA and Regression Checks
- Run automated tests, linters, and build pipelines after renaming to confirm autoloading and assets are correct.
- Manually verify admin pages, settings save/load, REST endpoints, shortcodes/blocks, cron tasks, and licensing flows.
- Validate translations load, assets enqueue correctly, and database migrations complete without data loss.
