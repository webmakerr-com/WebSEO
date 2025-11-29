# `pro-addon` reference audit (PHP/JS/CSS/build)

## Findings
- **Autoloading** still scans `pro-addon/src` in both the custom autoloader and Composer-generated PSR-4 maps, keeping the add-on directory as a first-class namespace root. 【F:seopress-autoload.php†L10-L35】【F:vendor/composer/autoload_psr4.php†L5-L10】【F:vendor/composer/autoload_static.php†L60-L66】
- **Schema lookup** previously hardcoded a `pro-addon/templates/json-schemas` fallback; the unified template resolver now relies on the shared directory search to avoid the legacy path. 【F:src/Models/JsonSchemaValue.php†L29-L49】
- **Docs and migration guides** still reference `pro-addon` paths for assets, hooks, and license touchpoints; they now include guidance to replace those paths with consolidated main-plugin locations. 【F:docs/autoloading-notes.md†L3-L21】【F:docs/asset-migration-plan.md†L17-L36】【F:docs/pro-hook-registrations.md†L5-L63】【F:docs/pro-license-integration.md†L5-L18】

## Replacement plan
1. **Autoloaders**: once Pro classes are relocated, update `seopress-autoload.php` and regenerate Composer autoload files to remove the `pro-addon/src` base path so `WebSEO\\` resolves from the main `src/` tree only.
2. **Templates**: rely on `webseo_locate_template_file()` (with `WEBSEO_TEMPLATE_DIR`/`WEBSEO_LEGACY_PRO_TEMPLATE_DIR`) for schema JSON files rather than hardcoded `pro-addon` strings; keep compatibility constants until all assets are moved into `templates/`.
3. **Assets/build outputs**: adjust enqueue paths, build configs, and imports that point to `pro-addon/assets` or `pro-addon/public` to use the new `assets/**/pro/` and `public/editor/pro/` hierarchies, ensuring script/style handles remain stable.
4. **Bootstrap/docs**: continue migrating inline comments and documentation from `pro-addon/inc/...` to the unified `inc/` equivalents so future refactors and QA focus on the main plugin tree instead of the legacy add-on folder.

## Manifest coverage
- The file inventory in `pro-addon-manifest.json` already assigns `keep`, `merge`, or `delete` actions for the pro CSS bundle entries at the top of the list, confirming each asset has an explicit migration disposition. 【F:pro-addon-manifest.json†L1-L36】
- The tail of the manifest continues the explicit actions for duplicate vendor files, marking them for deletion so nothing in `pro-addon/vendor/` remains untracked when the directory is removed. 【F:pro-addon-manifest.json†L13898-L13916】

## Deletion procedure
1. After the mapped moves and merges are complete, remove the `pro-addon/` directory from version control so future builds and releases only ship the consolidated copies. During that removal, keep the manifest as historical proof of where each file went unless release packaging explicitly forbids it.
2. Drop the legacy namespace search path from the custom autoloader and Composer PSR-4 map to prevent class discovery from falling back to the deleted directory. Update `seopress-autoload.php` and regenerate the Composer files so `WebSEO\` resolves solely from `src/`. 【F:seopress-autoload.php†L5-L36】【F:vendor/composer/autoload_psr4.php†L5-L26】
3. Sweep build scripts, enqueue helpers, and documentation for `pro-addon/` path literals—particularly asset and editor bundle references outlined in the migration plan—to ensure bundlers no longer attempt to copy or watch the legacy directory. 【F:docs/asset-migration-plan.md†L4-L23】

## Git cleanup and changelog notes
- Use a dedicated removal commit (e.g., `git rm -r pro-addon`) paired with the autoload map updates so the history shows the final deletion alongside the loader adjustments that make the tree optional.
- Add a changelog entry under the existing `== Changelog ==` section in `readme.txt` noting that Pro assets are now bundled directly in the core plugin and the legacy `pro-addon/` folder has been retired. 【F:readme.txt†L313-L340】
