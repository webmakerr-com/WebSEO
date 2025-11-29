# Migrated Features Test Plan

This document outlines functional tests to validate the migrated features across settings UI, hooks, REST/AJAX endpoints, templating, and asset delivery. It also captures automated test coverage updates and manual QA steps to execute in staging.

## Functional test coverage

### Settings pages
- Verify each migrated settings screen loads without PHP notices and renders expected sections and form fields.
- Confirm form submissions persist options in the database and reflect immediately on reload.
- Check capability gates (e.g., `manage_options`) block unauthorized users and nonces prevent CSRF.
- Validate contextual help tooltips, inline validation, and error messages render with sanitized output.

### Hooks firing
- Assert action and filter hooks execute with expected priorities and arguments using the documented hook map.
- Confirm legacy hook aliases remain wired to new implementations for backward compatibility.
- Verify hook callbacks do not produce duplicate executions when both free and Pro modules are active.

### REST and AJAX endpoints
- Confirm endpoint registration matches the expected namespaces and authentication requirements.
- Validate request/response schemas, required parameters, pagination, and error handling for REST routes.
- Ensure AJAX endpoints enforce capability checks and nonces; verify JSON responses include correct status codes.
- Exercise cache headers (if any) and confirm rate-limit or throttling behavior stays consistent with legacy behavior.

### Templates rendering
- Render public-facing templates under the default theme and a block theme to ensure compatibility.
- Validate template parts consume migrated settings (titles, meta tags, schema markup) and escape output correctly.
- Confirm shortcodes and blocks render dynamic data without layout regressions.

### Assets loading
- Confirm styles/scripts enqueue on targeted screens only and remain dependency-ordered.
- Validate asset handles, versions, and translations (`wp_set_script_translations`) remain consistent for cache-busting and localization.
- Check critical CSS/JS loading paths (async/defer) mirror legacy performance characteristics.

### License activation and updates
- Validate license key input, activation, deactivation, and renewal flows in the admin UI with success/error states.
- Confirm background license status checks execute on schedule hooks and surface admin notices appropriately.
- Verify update checks respect license entitlements and block downloads when the license is invalid or expired.

### Localization loading
- Confirm `.mo`/`.json` language files load for both free and Pro text domains in admin and frontend contexts.
- Validate dynamic strings (AJAX responses, REST error messages) leverage translation functions.
- Ensure locale switching via `switch_to_locale` keeps migrations compatible with translated settings values.

### Backward compatibility
- Test legacy option names, hook aliases, and shortcode/block attributes to ensure no breaking changes.
- Validate database migrations run idempotently and skip when already applied.
- Confirm Pro add-on integrations detect the new structure without requiring manual reconfiguration.

## Automated test updates
- Add PHPUnit/WordPress unit tests covering migrated option persistence, capability checks, and nonce verification for settings endpoints and AJAX handlers.
- Extend integration tests to exercise REST route registration, response schemas, and side effects on the database or caches.
- Add template rendering assertions (e.g., with `do_blocks`/`do_shortcode`) to validate escaped output and settings-driven markup.
- Introduce license workflow tests that mock remote responses for activation, status polling, and update eligibility gates.
- Include localization tests ensuring translation files load for script handles and server responses under alternate locales.
- Add backward-compatibility guards (legacy hooks/options/shortcodes) to prevent regressions during future refactors.

## Manual QA (staging)
- Smoke test all settings pages across editor roles; capture screenshots of expected sections and notices.
- Run end-to-end flows for license activation/renewal, REST CRUD operations, and AJAX actions from the admin UI.
- Validate localized UI strings and REST/AJAX responses under at least two non-English locales.
- Execute visual checks on public templates (meta tags, schema, breadcrumbs) and ensure assets load without 404s.
- Confirm Pro add-on interop (hooks, assets, license gating) behaves consistently with legacy releases.
- Record test evidence in the staging checklist with URLs, payloads, and timestamps for traceability.
