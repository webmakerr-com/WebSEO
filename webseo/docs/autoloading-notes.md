# Autoloading updates

## Context

The core plugin now includes WebSEO-namespaced classes that live under both `src/` and the bundled `pro-addon/src/` directory (for example, `WebSEO\Services\Email\EmailService`). The custom autoloader and Composer-generated PSR-4 map were limited to `src/`, which prevented those moved classes from being resolved automatically. As the add-on code is merged into the core plugin, these references should pivot toward the unified `src/` tree so the `pro-addon` path can be retired entirely.

## Changes made

- Extended the custom `seopress-autoload.php` to scan both `src/` and `pro-addon/src/` for the `WebSEO\\` namespace so manually required files are no longer needed when pro assets use the shared namespace.
- Updated the Composer-generated PSR-4 mappings to include `pro-addon/src/` for `WebSEO\\`, keeping the path order (`src/` first) to preserve existing class resolution expectations.
- Removed the implicit reliance on Pro-only autoload entries by consolidating `WebSEO` loading through the shared mapping.

## Follow-up steps

- When Composer metadata is restored or adjusted, re-run `composer dump-autoload -o` from the plugin root so the generated files in `vendor/composer/` reflect the two-base-directory PSR-4 map.
- Verify deployment builds include the refreshed `vendor/` directory (or rebuilt autoload artifacts) so installations receive the updated namespace resolution without requiring runtime `require` patches.
- If additional `WebSEO\\` classes remain under `pro-addon/` after future migrations, confirm they match the `pro-addon/src/` tree or add targeted paths before regenerating autoload files.
- Once those classes are relocated, update both the custom autoloader and the Composer-generated maps to drop `pro-addon/src` and rely on the main plugin path only.
