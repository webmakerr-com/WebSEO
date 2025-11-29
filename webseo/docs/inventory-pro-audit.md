# Inventory Pro audit

This repository currently has no Inventory Pro–specific settings pages, option keys, or meta-box definitions under `inc/admin/settings`, `inc/admin/metaboxes`, or related admin directories. Existing settings modules cover SEO features such as Advanced, Analytics, Social, Sitemaps, Titles, and other components, but none reference Inventory Pro keys or sections.

A full text search across the codebase found only WooCommerce inventory action hooks inside `pro-addon/inc/functions/options-woocommerce-admin.php`, which relate to barcode fields and not an Inventory Pro settings system.

Because there are no Inventory Pro options or meta registrations to centralize, implementing a new handler would require defining option/meta schemas, admin pages, and migration paths that are not currently present. Before adding such infrastructure, clarify desired Inventory Pro data structures (option names, defaults, meta keys) and UI entry points so the handler can be designed to load/save those values consistently.
