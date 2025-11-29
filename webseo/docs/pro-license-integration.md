# WebSEO PRO License Surface and Integration Plan

## Current PRO License Touchpoints

- **License constants and bootstrap hooks** are defined in `pro-addon/seopress-pro.php`, including the store URL, item identifiers, license page slug, and unconditional option writes that set the PRO license key/status to valid on load.
- **License management UI** lives in `pro-addon/inc/admin/admin-pages/License.php`, exposing the license key field, activation/deactivation buttons, and notices for errors and status changes.
- **License activation/deactivation handlers** are implemented in `pro-addon/inc/admin/callbacks/License.php`, covering automatic activation via the `SEOPRESS_LICENSE_KEY` constant plus manual activate/deactivate flows that call the EDD endpoints.
- **Updater class** for PRO packages is `pro-addon/inc/admin/updater/plugin-updater.php`, providing the EDD-based plugin update checks and changelog display.
- **Surface areas that read license options** include the core tasks block in `inc/admin/blocks/tasks.php` (suite card status) and remote management sync in `src/Thirds/MainWP/MainWPFunctions.php` and `src/Services/Settings/ImportSettings.php`.

## Integration Considerations for Main Plugin

- **Bootstrap alignment**: replace the PRO bootstrap’s direct option writes with hooks in the main plugin loader that register license constants (`STORE_URL_SEOPRESS`, `ITEM_ID_SEOPRESS`, `ITEM_NAME_SEOPRESS`, `SEOPRESS_LICENSE_PAGE`) and enqueue the updater once the base plugin is loaded.
- **Settings parity**: maintain the existing option names (`seopress_pro_license_key`, `seopress_pro_license_status`, `seopress_pro_license_key_error`, `seopress_pro_license_home_url`, `seopress_pro_license_automatic_attempt`) to avoid breaking MainWP/import flows; expose them through the main plugin settings API so the License page can be relocated without breaking storage.
- **API endpoints**: keep using the current store endpoint (`https://www.webseo.com`) and `edd_action` payloads from the callbacks, but route requests through a shared HTTP helper so both free and PRO paths can swap endpoints or headers centrally.
- **UI embedding**: mount the existing license form into the main plugin’s admin menu (`webseo-license`) and ensure tasks block/status chips reference the same activation state once the PRO code is removed.
- **Path replacements**: replace any `pro-addon/inc/admin/...` includes with the unified `inc/admin/...` copies so the UI, callbacks, and updater are loaded from the same directory tree that ships with the main plugin.

## Deprecation Path for PRO-Only License Helpers

- **Constants**: mark `ITEM_ID_SEOPRESS`, `ITEM_NAME_SEOPRESS`, `STORE_URL_SEOPRESS`, and `SEOPRESS_LICENSE_PAGE` as provided by the main plugin; keep compatibility shims in the PRO package that proxy to the main definitions and trigger `_deprecated_file` notices after one minor release.
- **Option helpers**: retain the current option keys but introduce wrapper functions in the main plugin (e.g., `seopress_get_license_key()` and `seopress_get_license_status()`) that the PRO code can call; flag direct option access in PRO as deprecated and remove after migration.
- **Updater instantiation**: instantiate `SEOPRESS_Updater` (or a shared successor) from the main bootstrap with the PRO slug/file path; in PRO, leave a stub that delegates to the main registration and logs a deprecation notice when executed.
- **Automatic activation**: move the automatic activation hook to the main plugin, keep the PRO hook as a no-op shim for one release, and document the new entry point for environment/change detection.
