<?php

defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');

add_action('seopress_admin_bar_items', 'seopress_pro_admin_bar_items', 100);
function seopress_pro_admin_bar_items() {
    global $wp_admin_bar;

    $parent_id = 'seopress';
    $wp_admin_bar->add_menu([
        'parent' => $parent_id,
        'id'     => 'seopress_custom_sub_menu_pro',
        'title'  => __('PRO', 'webseo'),
        'href'   => admin_url('admin.php?page=seopress-pro-page'),
    ]);

    if ('1' == seopress_get_toggle_option('bot')) {
        $wp_admin_bar->add_menu([
            'parent' => $parent_id,
            'id'     => 'seopress_custom_sub_menu_bot',
            'title'  => __('Audit', 'webseo'),
            'href'   => admin_url('admin.php?page=seopress-bot-batch'),
        ]);
        $wp_admin_bar->add_menu([
            'parent' => $parent_id,
            'id'     => 'seopress_custom_sub_menu_broken_links',
            'title'  => __('Broken Links', 'webseo'),
            'href'   => admin_url('edit.php?post_type=seopress_bot'),
        ]);
    }

    if ('1' == seopress_get_toggle_option('rich-snippets')) {
        $wp_admin_bar->add_menu([
            'parent' => $parent_id,
            'id'     => 'seopress_custom_sub_menu_schemas',
            'title'  => __('Schemas', 'webseo'),
            'href'   => admin_url('edit.php?post_type=seopress_schemas'),
        ]);
    }

    if ('1' == seopress_get_toggle_option('404')) {
        $wp_admin_bar->add_menu([
            'parent' => $parent_id,
            'id'     => 'seopress_custom_sub_menu_404',
            'title'  => __('Redirections', 'webseo'),
            'href'   => admin_url('edit.php?post_type=seopress_404'),
        ]);
    }

    $wp_admin_bar->add_menu([
        'parent' => $parent_id,
        'id'     => 'seopress_custom_sub_menu_license',
        'title'  => __('License', 'webseo'),
        'href'   => admin_url('admin.php?page=seopress-license'),
    ]);
}
