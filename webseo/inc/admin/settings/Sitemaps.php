<?php
/**
 * Sitemaps.
 *
 * @package Settings
 */

defined( 'ABSPATH' ) || exit( 'Please don&rsquo;t call the plugin directly. Thanks :)' );

// XML Sitemap SECTION.
add_settings_section(
	'seopress_setting_section_xml_sitemap_general', // ID.
	'',
	// __("General","webseo"), // Title.
	'seopress_print_section_info_xml_sitemap_general', // Callback.
	'seopress-settings-admin-xml-sitemap-general' // Page.
);

add_settings_field(
	'seopress_xml_sitemap_general_enable', // ID.
	__( 'Enable XML Sitemap', 'webseo' ), // Title.
	'seopress_xml_sitemap_general_enable_callback', // Callback.
	'seopress-settings-admin-xml-sitemap-general', // Page.
	'seopress_setting_section_xml_sitemap_general' // Section.
);

add_settings_field(
	'seopress_xml_sitemap_img_enable', // ID.
	__( 'Enable XML Image Sitemap', 'webseo' ), // Title.
	'seopress_xml_sitemap_img_enable_callback', // Callback.
	'seopress-settings-admin-xml-sitemap-general', // Page.
	'seopress_setting_section_xml_sitemap_general' // Section.
);

do_action( 'seopress_settings_sitemaps_image_after' );

add_settings_field(
	'seopress_xml_sitemap_author_enable', // ID.
	__( 'Enable Author Sitemap', 'webseo' ), // Title.
	'seopress_xml_sitemap_author_enable_callback', // Callback.
	'seopress-settings-admin-xml-sitemap-general', // Page.
	'seopress_setting_section_xml_sitemap_general' // Section.
);

add_settings_field(
	'seopress_xml_sitemap_html_enable', // ID.
	__( 'Enable HTML Sitemap', 'webseo' ), // Title.
	'seopress_xml_sitemap_html_enable_callback', // Callback.
	'seopress-settings-admin-xml-sitemap-general', // Page.
	'seopress_setting_section_xml_sitemap_general' // Section.
);

add_settings_section(
	'seopress_setting_section_xml_sitemap_post_types', // ID.
	'',
	// __("Post Types","webseo"), // Title.
	'seopress_print_section_info_xml_sitemap_post_types', // Callback.
	'seopress-settings-admin-xml-sitemap-post-types' // Page.
);

add_settings_field(
	'seopress_xml_sitemap_post_types_list', // ID.
	__( 'Check to INCLUDE Post Types', 'webseo' ), // Title.
	'seopress_xml_sitemap_post_types_list_callback', // Callback.
	'seopress-settings-admin-xml-sitemap-post-types', // Page.
	'seopress_setting_section_xml_sitemap_post_types' // Section.
);

add_settings_section(
	'seopress_setting_section_xml_sitemap_taxonomies', // ID.
	'',
	// __("Taxonomies","webseo"), // Title.
	'seopress_print_section_info_xml_sitemap_taxonomies', // Callback.
	'seopress-settings-admin-xml-sitemap-taxonomies' // Page.
);

add_settings_field(
	'seopress_xml_sitemap_taxonomies_list', // ID.
	__( 'Check to INCLUDE Taxonomies', 'webseo' ), // Title.
	'seopress_xml_sitemap_taxonomies_list_callback', // Callback.
	'seopress-settings-admin-xml-sitemap-taxonomies', // Page.
	'seopress_setting_section_xml_sitemap_taxonomies' // Section.
);

add_settings_section(
	'seopress_setting_section_html_sitemap', // ID.
	'',
	// __("HTML Sitemap","webseo"), // Title.
	'seopress_print_section_info_html_sitemap', // Callback.
	'seopress-settings-admin-html-sitemap' // Page.
);

add_settings_field(
	'seopress_xml_sitemap_html_mapping', // ID.
	__( 'Enter a post, page or custom post type ID(s) to display the sitemap', 'webseo' ), // Title.
	'seopress_xml_sitemap_html_mapping_callback', // Callback.
	'seopress-settings-admin-html-sitemap', // Page.
	'seopress_setting_section_html_sitemap' // Section.
);

add_settings_field(
	'seopress_xml_sitemap_html_exclude', // ID.
	__( 'Exclude some Posts, Pages, Custom Post Types or Terms IDs', 'webseo' ), // Title.
	'seopress_xml_sitemap_html_exclude_callback', // Callback.
	'seopress-settings-admin-html-sitemap', // Page.
	'seopress_setting_section_html_sitemap' // Section.
);

add_settings_field(
	'seopress_xml_sitemap_html_order', // ID.
	__( 'Sort order', 'webseo' ), // Title.
	'seopress_xml_sitemap_html_order_callback', // Callback.
	'seopress-settings-admin-html-sitemap', // Page.
	'seopress_setting_section_html_sitemap' // Section.
);

add_settings_field(
	'seopress_xml_sitemap_html_orderby', // ID.
	__( 'Order posts by', 'webseo' ), // Title.
	'seopress_xml_sitemap_html_orderby_callback', // Callback.
	'seopress-settings-admin-html-sitemap', // Page.
	'seopress_setting_section_html_sitemap' // Section.
);

add_settings_field(
	'seopress_xml_sitemap_html_date', // ID.
	__( 'Disable the display of the publication date', 'webseo' ), // Title.
	'seopress_xml_sitemap_html_date_callback', // Callback.
	'seopress-settings-admin-html-sitemap', // Page.
	'seopress_setting_section_html_sitemap' // Section.
);

add_settings_field(
	'seopress_xml_sitemap_html_no_hierarchy', // ID.
	__( 'Disable hierarchy for posts and products', 'webseo' ), // Title.
	'seopress_xml_sitemap_html_no_hierarchy_callback', // Callback.
	'seopress-settings-admin-html-sitemap', // Page.
	'seopress_setting_section_html_sitemap' // Section.
);

add_settings_field(
	'seopress_xml_sitemap_html_post_type_archive', // ID.
	__( 'Disable post type archive links', 'webseo' ), // Title.
	'seopress_xml_sitemap_html_post_type_archive_callback', // Callback.
	'seopress-settings-admin-html-sitemap', // Page.
	'seopress_setting_section_html_sitemap' // Section.
);
