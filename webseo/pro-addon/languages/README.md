# Pro add-on translations

This directory no longer ships compiled translations for the add-on.

- `.pot` sources: `wp-seopress-pro.pot` and `wp-seopress-pro-js.pot` (merged into the main `languages/webseo.pot`).
- `.po` / `.mo` / `.json`: none in this folder.

All translation strings (core and PRO) now share the `webseo` text domain and are consolidated in `languages/webseo.pot`. Generate locale files from that POT and place the resulting `.mo`/`.json` files in the main plugin `languages/` directory so they load for both plugins.
