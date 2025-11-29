<?php

defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');

//WooCommerce SECTION======================================================================
add_settings_section(
    'seopress_setting_section_woocommerce', // ID
    '',
    //__("WooCommerce","wp-seopress-pro"), // Title
    'seopress_print_section_info_woocommerce', // Callback
    'seopress-settings-admin-woocommerce' // Page
);

add_settings_field(
    'seopress_woocommerce_cart_page_no_index', // ID
    __('Cart page', 'webseo'), // Title
    'seopress_woocommerce_cart_page_no_index_callback', // Callback
    'seopress-settings-admin-woocommerce', // Page
    'seopress_setting_section_woocommerce' // Section
);

add_settings_field(
    'seopress_woocommerce_checkout_page_no_index', // ID
    __('Checkout page', 'webseo'), // Title
    'seopress_woocommerce_checkout_page_no_index_callback', // Callback
    'seopress-settings-admin-woocommerce', // Page
    'seopress_setting_section_woocommerce' // Section
);

add_settings_field(
    'seopress_woocommerce_customer_account_page_no_index', // ID
    __('Customer account pages', 'webseo'), // Title
    'seopress_woocommerce_customer_account_page_no_index_callback', // Callback
    'seopress-settings-admin-woocommerce', // Page
    'seopress_setting_section_woocommerce' // Section
);

add_settings_field(
    'seopress_woocommerce_product_og_price', // ID
    __('OG Price', 'webseo'), // Title
    'seopress_woocommerce_product_og_price_callback', // Callback
    'seopress-settings-admin-woocommerce', // Page
    'seopress_setting_section_woocommerce' // Section
);

add_settings_field(
    'seopress_woocommerce_product_og_currency', // ID
    __('OG Currency', 'webseo'), // Title
    'seopress_woocommerce_product_og_currency_callback', // Callback
    'seopress-settings-admin-woocommerce', // Page
    'seopress_setting_section_woocommerce' // Section
);

add_settings_field(
    'seopress_woocommerce_meta_generator', // ID
    __('Remove WooCommerce generator tag in your head', 'webseo'), // Title
    'seopress_woocommerce_meta_generator_callback', // Callback
    'seopress-settings-admin-woocommerce', // Page
    'seopress_setting_section_woocommerce' // Section
);

add_settings_field(
    'seopress_woocommerce_schema_output', // ID
    __('Remove WooCommerce Schemas', 'webseo'), // Title
    'seopress_woocommerce_schema_output_callback', // Callback
    'seopress-settings-admin-woocommerce', // Page
    'seopress_setting_section_woocommerce' // Section
);

add_settings_field(
    'seopress_woocommerce_schema_breadcrumbs_output', // ID
    __('Remove WooCommerce breadcrumbs schemas only', 'webseo'), // Title
    'seopress_woocommerce_schema_breadcrumbs_output_callback', // Callback
    'seopress-settings-admin-woocommerce', // Page
    'seopress_setting_section_woocommerce' // Section
);
