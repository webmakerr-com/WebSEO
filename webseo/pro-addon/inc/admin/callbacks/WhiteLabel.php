<?php

defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');

function seopress_white_label_admin_header_callback() {
    if (is_network_admin() && is_multisite()) {
        $options = get_option('seopress_pro_mu_option_name');

        $check = isset($options['seopress_mu_white_label_admin_header']); ?>

<label for="seopress_mu_white_label_admin_header">
    <input id="seopress_mu_white_label_admin_header"
        name="seopress_pro_mu_option_name[seopress_mu_white_label_admin_header]" type="checkbox" <?php if (true === $check) { ?>
    checked="yes"
    <?php } ?>
    value="1"/>
    <?php esc_html_e('Remove all blocks except SEO management from the SEO dashboard', 'webseo'); ?>
</label>

<?php if (isset($options['seopress_mu_white_label_admin_header'])) {
            esc_attr($options['seopress_mu_white_label_admin_header']);
        }
    } else {
        $options = get_option('seopress_pro_option_name');

        $check = isset($options['seopress_white_label_admin_header']); ?>

<label for="seopress_white_label_admin_header">
    <input id="seopress_white_label_admin_header" name="seopress_pro_option_name[seopress_white_label_admin_header]"
        type="checkbox" <?php if (true === $check) { ?>
    checked="yes"
    <?php } ?>
    value="1"/>
    <?php esc_html_e('Remove all blocks except SEO management from the SEO dashboard', 'webseo'); ?>
</label>

<?php if (isset($options['seopress_white_label_admin_header'])) {
            esc_attr($options['seopress_white_label_admin_header']);
        }
    }
}

function seopress_white_label_admin_menu_callback() {
    if (is_network_admin() && is_multisite()) {
        $options = get_option('seopress_pro_mu_option_name');
        $check = isset($options['seopress_mu_white_label_admin_menu']) ? $options['seopress_mu_white_label_admin_menu'] : null; ?>

<input type="text" name="seopress_pro_mu_option_name[seopress_mu_white_label_admin_menu]"
    placeholder="<?php esc_html_e('Enter your dashicons CSS class name', 'webseo'); ?>"
    aria-label="<?php esc_html_e('CSS Dashicons class name without quotes', 'webseo'); ?>"
    value="<?php echo esc_attr($check); ?>" />
<?php
    } else {
        $options = get_option('seopress_pro_option_name');
        $check = isset($options['seopress_white_label_admin_menu']) ? $options['seopress_white_label_admin_menu'] : null; ?>
<input type="text" name="seopress_pro_option_name[seopress_white_label_admin_menu]"
    placeholder="<?php esc_html_e('Enter your dashicons CSS class name', 'webseo'); ?>"
    aria-label="<?php esc_html_e('CSS Dashicons class name without quotes', 'webseo'); ?>"
    value="<?php echo esc_attr($check); ?>" />
<?php
    } ?>

<p class="description">
    <a class="seopress-help" href="https://developer.wordpress.org/resource/dashicons/" target="_blank">
        <?php esc_html_e('Find your Dashicons CSS class name on the official website', 'webseo'); ?>
    </a>
    <span class="seopress-help dashicons dashicons-external"></span>
</p>

<?php
}

function seopress_white_label_admin_bar_icon_callback() {
    if (is_network_admin() && is_multisite()) {
        $options = get_option('seopress_pro_mu_option_name');
        $check = isset($options['seopress_mu_white_label_admin_bar_icon']) ? $options['seopress_mu_white_label_admin_bar_icon'] : null; ?>

<input type="text" name="seopress_pro_mu_option_name[seopress_mu_white_label_admin_bar_icon]"
    placeholder="<?php esc_html_e('e.g. <span class="my-custom-icon-class"></span> SEO', 'webseo'); ?>"
    aria-label="<?php esc_html_e('Enter the label of the link for admin bar', 'webseo'); ?>"
    value="<?php echo esc_attr($check); ?>" />
<?php
    } else {
        $options = get_option('seopress_pro_option_name');
        $check = isset($options['seopress_white_label_admin_bar_icon']) ? $options['seopress_white_label_admin_bar_icon'] : null; ?>
<input type="text" name="seopress_pro_option_name[seopress_white_label_admin_bar_icon]"
    placeholder="<?php esc_html_e('e.g. <span class="my-custom-icon-class"></span> SEO', 'webseo'); ?>"
    aria-label="<?php esc_html_e('Enter the label of the link for admin bar', 'webseo'); ?>"
    value="<?php echo esc_attr($check); ?>" />
<?php
    }
}

function seopress_white_label_admin_title_callback() {
    if (is_network_admin() && is_multisite()) {
        $options = get_option('seopress_pro_mu_option_name');
        $check = isset($options['seopress_mu_white_label_admin_title']) ? $options['seopress_mu_white_label_admin_title'] : null; ?>

<input type="text" name="seopress_pro_mu_option_name[seopress_mu_white_label_admin_title]"
    placeholder="<?php esc_html_e('default value: SEO', 'webseo'); ?>"
    aria-label="<?php esc_html_e('Enter the title for the main menu', 'webseo'); ?>"
    value="<?php echo esc_attr($check); ?>" />
<?php
    } else {
        $options = get_option('seopress_pro_option_name');
        $check = isset($options['seopress_white_label_admin_title']) ? $options['seopress_white_label_admin_title'] : null; ?>

<input type="text" name="seopress_pro_option_name[seopress_white_label_admin_title]"
    placeholder="<?php esc_html_e('default value: SEO', 'webseo'); ?>"
    aria-label="<?php esc_html_e('Enter the title for the main menu', 'webseo'); ?>"
    value="<?php echo esc_attr($check); ?>" />
<?php
    }
}

function seopress_white_label_help_links_callback() {
    if (is_network_admin() && is_multisite()) {
        $options = get_option('seopress_pro_mu_option_name');

        $check = isset($options['seopress_mu_white_label_help_links']); ?>

<label for="seopress_mu_white_label_help_links">
    <input id="seopress_mu_white_label_help_links"
        name="seopress_pro_mu_option_name[seopress_mu_white_label_help_links]" type="checkbox" <?php if (true === $check) { ?>
    checked="yes"
    <?php } ?>
    value="1"/>
    <?php esc_html_e('Hide help icons and SEOPress documentation links', 'webseo'); ?>
</label>

<?php if (isset($options['seopress_mu_white_label_help_links'])) {
            esc_attr($options['seopress_mu_white_label_help_links']);
        }
    } else {
        $options = get_option('seopress_pro_option_name');

        $check = isset($options['seopress_white_label_help_links']); ?>

<label for="seopress_white_label_help_links">
    <input id="seopress_white_label_help_links" name="seopress_pro_option_name[seopress_white_label_help_links]"
        type="checkbox" <?php if (true === $check) { ?>
    checked="yes"
    <?php } ?>
    value="1"/>

    <?php esc_html_e('Hide help icons and SEOPress documentation links', 'webseo'); ?>
</label>

<?php if (isset($options['seopress_white_label_help_links'])) {
            esc_attr($options['seopress_white_label_help_links']);
        }
    }
}
function seopress_white_label_plugin_list_title_callback() {
    if (is_network_admin() && is_multisite()) {
        $options = get_option('seopress_pro_mu_option_name');
        $check = isset($options['seopress_mu_white_label_plugin_list_title']) ? $options['seopress_mu_white_label_plugin_list_title'] : null;
    ?>

<input type="text" name="seopress_pro_mu_option_name[seopress_mu_white_label_plugin_list_title]"
    placeholder="<?php esc_html_e('e.g. SEO plugin', 'webseo'); ?>"
    aria-label="<?php esc_html_e(
        'Enter a plugin title',
        'webseo'
    ); ?>" value="<?php echo esc_attr($check); ?>" />

<?php
    } else {
        $options = get_option('seopress_pro_option_name');
        $check = isset($options['seopress_white_label_plugin_list_title']) ? $options['seopress_white_label_plugin_list_title'] : null;
    ?>

<input type="text" name="seopress_pro_option_name[seopress_white_label_plugin_list_title]"
    placeholder="<?php esc_html_e('e.g. SEO plugin', 'webseo'); ?>"
    aria-label="<?php esc_html_e('Enter a plugin title', 'webseo'); ?>"
    value="<?php echo esc_attr($check); ?>" />

<?php
    }
}
function seopress_white_label_plugin_list_title_pro_callback() {
    if (is_network_admin() && is_multisite()) {
        $options = get_option('seopress_pro_mu_option_name');
        $check = isset($options['seopress_mu_white_label_plugin_list_title_pro']) ? $options['seopress_mu_white_label_plugin_list_title_pro'] : null;
    ?>

<input type="text" name="seopress_pro_mu_option_name[seopress_mu_white_label_plugin_list_title_pro]"
    placeholder="<?php esc_html_e('e.g. SEO plugin', 'webseo'); ?>"
    aria-label="<?php esc_html_e('Enter a plugin title', 'webseo'); ?>"
    value="<?php echo esc_attr($check); ?>" />

<?php
    } else {
        $options = get_option('seopress_pro_option_name');
        $check = isset($options['seopress_white_label_plugin_list_title_pro']) ? $options['seopress_white_label_plugin_list_title_pro'] : null; ?>

<input type="text" name="seopress_pro_option_name[seopress_white_label_plugin_list_title_pro]"
    placeholder="<?php esc_html_e('e.g. SEO plugin', 'webseo'); ?>"
    aria-label="<?php esc_html_e('Enter a plugin title', 'webseo'); ?>"
    value="<?php echo esc_attr($check); ?>" />
<?php
    }
}
function seopress_white_label_plugin_list_desc_callback() {
    if (is_network_admin() && is_multisite()) {
        $options = get_option('seopress_pro_mu_option_name');
        $check = isset($options['seopress_mu_white_label_plugin_list_desc']) ? $options['seopress_mu_white_label_plugin_list_desc'] : null;
    ?>

<input type="text" name="seopress_pro_mu_option_name[seopress_mu_white_label_plugin_list_desc]"
    placeholder="<?php esc_html_e('e.g. Best SEO WordPress plugin', 'webseo'); ?>"
    aria-label="<?php esc_html_e('Enter a description', 'webseo'); ?>"
    value="<?php echo esc_attr($check); ?>" />

<?php
    } else {
        $options = get_option('seopress_pro_option_name');
        $check = isset($options['seopress_white_label_plugin_list_desc']) ? $options['seopress_white_label_plugin_list_desc'] : null;
    ?>

<input type="text" name="seopress_pro_option_name[seopress_white_label_plugin_list_desc]"
    placeholder="<?php esc_html_e('e.g. Best SEO WordPress plugin', 'webseo'); ?>"
    aria-label="<?php esc_html_e('Enter a description', 'webseo'); ?>"
    value="<?php echo esc_attr($check); ?>" />

<?php
    }
}
function seopress_white_label_plugin_list_desc_pro_callback() {
    if (is_network_admin() && is_multisite()) {
        $options = get_option('seopress_pro_mu_option_name');
        $check = isset($options['seopress_mu_white_label_plugin_list_desc_pro']) ? $options['seopress_mu_white_label_plugin_list_desc_pro'] : null;
    ?>

<input type="text" name="seopress_pro_mu_option_name[seopress_mu_white_label_plugin_list_desc_pro]"
    placeholder="<?php esc_html_e('e.g. Best SEO WordPress plugin', 'webseo'); ?>"
    aria-label="<?php esc_html_e('Enter a description', 'webseo'); ?>"
    value="<?php echo esc_attr($check); ?>" />

<?php
    } else {
        $options = get_option('seopress_pro_option_name');
        $check = isset($options['seopress_white_label_plugin_list_desc_pro']) ? $options['seopress_white_label_plugin_list_desc_pro'] : null;
    ?>

<input type="text" name="seopress_pro_option_name[seopress_white_label_plugin_list_desc_pro]"
    placeholder="<?php esc_html_e('e.g. Best SEO WordPress plugin', 'webseo'); ?>"
    aria-label="<?php esc_html_e('Enter a description', 'webseo'); ?>"
    value="<?php echo esc_attr($check); ?>" />

<?php
    }
}
function seopress_white_label_plugin_list_author_callback() {
    if (is_network_admin() && is_multisite()) {
        $options = get_option('seopress_pro_mu_option_name');
        $check = isset($options['seopress_mu_white_label_plugin_list_author']) ? $options['seopress_mu_white_label_plugin_list_author'] : null;
    ?>

<input type="text" name="seopress_pro_mu_option_name[seopress_mu_white_label_plugin_list_author]"
    placeholder="<?php esc_html_e('e.g. John Doe', 'webseo'); ?>"
    aria-label="<?php esc_html_e('Enter the author name', 'webseo'); ?>"
    value="<?php echo esc_attr($check); ?>" />

<?php
    } else {
        $options = get_option('seopress_pro_option_name');
        $check = isset($options['seopress_white_label_plugin_list_author']) ? $options['seopress_white_label_plugin_list_author'] : null;
    ?>

<input type="text" name="seopress_pro_option_name[seopress_white_label_plugin_list_author]"
    placeholder="<?php esc_html_e('e.g. John Doe', 'webseo'); ?>"
    aria-label="<?php esc_html_e('Enter the author name', 'webseo'); ?>"
    value="<?php echo esc_attr($check); ?>" />

<?php
    } ?>

<p class="description">
    <?php esc_html_e('This option will apply to both SEOPress and SEOPress PRO.', 'webseo'); ?>
</p>

<?php
}
function seopress_white_label_plugin_list_website_callback() {
    if (is_network_admin() && is_multisite()) {
        $options = get_option('seopress_pro_mu_option_name');
        $check = isset($options['seopress_mu_white_label_plugin_list_website']) ? $options['seopress_mu_white_label_plugin_list_website'] : null;
    ?>

<input type="text" name="seopress_pro_mu_option_name[seopress_mu_white_label_plugin_list_website]"
    placeholder="<?php esc_html_e('e.g. https://www.example.com/', 'webseo'); ?>"
    aria-label="<?php esc_html_e('Enter a website URL', 'webseo'); ?>"
    value="<?php echo esc_attr($check); ?>" />

<?php
    } else {
        $options = get_option('seopress_pro_option_name');
        $check = isset($options['seopress_white_label_plugin_list_website']) ? $options['seopress_white_label_plugin_list_website'] : null;
    ?>

<input type="text" name="seopress_pro_option_name[seopress_white_label_plugin_list_website]"
    placeholder="<?php esc_html_e('e.g. https://www.example.com/', 'webseo'); ?>"
    aria-label="<?php esc_html_e('Enter a website URL', 'webseo'); ?>"
    value="<?php echo esc_attr($check); ?>" />

<?php
    } ?>

<p class="description">
    <?php esc_html_e('This option will apply to both SEOPress and SEOPress PRO.', 'webseo'); ?>
</p>

<?php
}
function seopress_white_label_plugin_list_view_details_callback() {
    if (is_network_admin() && is_multisite()) {
        $options = get_option('seopress_pro_mu_option_name');
        $check = isset($options['seopress_mu_white_label_plugin_list_view_details']); ?>

<label for="seopress_mu_white_label_plugin_list_view_details">
    <input id="seopress_mu_white_label_plugin_list_view_details"
        name="seopress_pro_mu_option_name[seopress_mu_white_label_plugin_list_view_details]" type="checkbox" <?php if (true === $check) { ?>
    checked="yes"
    <?php } ?>
    value="1"/>

    <?php esc_html_e('Remove View details modal & update notification links', 'webseo'); ?>
</label>

<?php if (isset($options['seopress_mu_white_label_plugin_list_view_details'])) {
            esc_attr($options['seopress_mu_white_label_plugin_list_view_details']);
        }
    } else {
        $options = get_option('seopress_pro_option_name');
        $check = isset($options['seopress_white_label_plugin_list_view_details']); ?>

<label for="seopress_white_label_plugin_list_view_details">
    <input id="seopress_white_label_plugin_list_view_details"
        name="seopress_pro_option_name[seopress_white_label_plugin_list_view_details]" type="checkbox" <?php if (true === $check) { ?>
    checked="yes"
    <?php } ?>
    value="1"/>

    <?php esc_html_e('Remove View details modal & update notification links', 'webseo'); ?>
</label>

<?php
        if (isset($options['seopress_white_label_plugin_list_view_details'])) {
            esc_attr($options['seopress_white_label_plugin_list_view_details']);
        }
    } ?>

<p class="description">
    <?php esc_html_e('This option will apply to both SEOPress and SEOPress PRO.', 'webseo'); ?>
</p>
<?php
}
function seopress_white_label_menu_pages_callback() {
    $seopress_menu_pages = [
        'seopress-option' => __('SEO', 'webseo'),
        'seopress-titles' => __('Titles & Metas', 'webseo'),
        'seopress-xml-sitemap' => __('XML / HTML Sitemap', 'webseo'),
        'seopress-social' => __('Social Networks', 'webseo'),
        'seopress-google-analytics' => __('Analytics', 'webseo'),
        'seopress-advanced' => __('Advanced', 'webseo'),
        'seopress-import-export' => __('Tools', 'webseo'),
        'seopress-bot-batch' => __('BOT', 'webseo'),
        'seopress-license' => __('License', 'webseo'),
        'seopress-pro-page' => __('PRO', 'webseo'),
        'edit.php?post_type=seopress_404' => __('Redirections', 'webseo'),
        'edit.php?post_type=seopress_bot' => __('Broken links', 'webseo'),
        'edit.php?post_type=seopress_schemas' => __('Schemas', 'webseo'),
    ];

    if (is_network_admin() && is_multisite()) {
        $options = get_option('seopress_pro_mu_option_name');

        foreach ($seopress_menu_pages as $seopress_menu_pages_key => $seopress_menu_pages_value) { ?>
<div class="seopress_wrap_single_cpt">

    <?php $check = isset($options['seopress_mu_white_label_menu_pages'][$seopress_menu_pages_key]['include']); ?>

    <label
        for="seopress_mu_white_label_menu_pages_list[<?php echo esc_attr($seopress_menu_pages_key); ?>]">

        <input
            id="seopress_mu_white_label_menu_pages_list[<?php echo esc_attr($seopress_menu_pages_key); ?>]"
            name="seopress_pro_mu_option_name[seopress_mu_white_label_menu_pages][<?php echo esc_attr($seopress_menu_pages_key); ?>][include]"
            type="checkbox" <?php if (true === $check) { ?>
        checked="yes"
        <?php } ?>
        value="1"/>

        <?php echo esc_html($seopress_menu_pages_value); ?>
    </label>
    <?php if (isset($options['seopress_mu_white_label_menu_pages'][$seopress_menu_pages_key]['include'])) {
            esc_attr($options['seopress_mu_white_label_menu_pages'][$seopress_menu_pages_key]['include']);
        } ?>
</div>
<?php }
    } ?>

<p class="description">
    <?php esc_html_e('Users with the "manage_options" capability will still see the menus.', 'webseo'); ?>
</p>
<?php
}
