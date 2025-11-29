<?php

defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');

function seopress_get_schema_metaboxe_software($seopress_pro_rich_snippets_data, $key_schema = 0)
{
    $options_software = [
        ['value' => 'GameApplication', 'label' => __('GameApplication', 'webseo')],
        ['value' => 'SocialNetworkingApplication', 'label' => __('SocialNetworkingApplication', 'webseo')],
        ['value' => 'TravelApplication', 'label' => __('TravelApplication', 'webseo')],
        ['value' => 'ShoppingApplication', 'label' => __('ShoppingApplication', 'webseo')],
        ['value' => 'SportsApplication', 'label' => __('SportsApplication', 'webseo')],
        ['value' => 'LifestyleApplication', 'label' => __('LifestyleApplication', 'webseo')],
        ['value' => 'BusinessApplication', 'label' => __('BusinessApplication', 'webseo')],
        ['value' => 'DesignApplication', 'label' => __('DesignApplication', 'webseo')],
        ['value' => 'DeveloperApplication', 'label' => __('DeveloperApplication', 'webseo')],
        ['value' => 'DriverApplication', 'label' => __('DriverApplication', 'webseo')],
        ['value' => 'EducationalApplication', 'label' => __('EducationalApplication', 'webseo')],
        ['value' => 'HealthApplication', 'label' => __('HealthApplication', 'webseo')],
        ['value' => 'FinanceApplication', 'label' => __('FinanceApplication', 'webseo')],
        ['value' => 'SecurityApplication', 'label' => __('SecurityApplication', 'webseo')],
        ['value' => 'BrowserApplication', 'label' => __('BrowserApplication', 'webseo')],
        ['value' => 'CommunicationApplication', 'label' => __('CommunicationApplication', 'webseo')],
        ['value' => 'DesktopEnhancementApplication', 'label' => __('DesktopEnhancementApplication', 'webseo')],
        ['value' => 'EntertainmentApplication', 'label' => __('EntertainmentApplication', 'webseo')],
        ['value' => 'MultimediaApplication', 'label' => __('MultimediaApplication', 'webseo')],
        ['value' => 'HomeApplication', 'label' => __('HomeApplication', 'webseo')],
        ['value' => 'UtilitiesApplication', 'label' => __('UtilitiesApplication', 'webseo')],
        ['value' => 'ReferenceApplication', 'label' => __('ReferenceApplication', 'webseo')],
    ];

    $seopress_pro_rich_snippets_softwareapp_name                    = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_softwareapp_name']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_softwareapp_name'] : '';
    $seopress_pro_rich_snippets_softwareapp_os                      = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_softwareapp_os']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_softwareapp_os'] : '';
    $seopress_pro_rich_snippets_softwareapp_cat                     = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_softwareapp_cat']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_softwareapp_cat'] : '';
    $seopress_pro_rich_snippets_softwareapp_price                   = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_softwareapp_price']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_softwareapp_price'] : '';
    $seopress_pro_rich_snippets_softwareapp_currency                = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_softwareapp_currency']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_softwareapp_currency'] : '';
    $seopress_pro_rich_snippets_softwareapp_rating                  = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_softwareapp_rating']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_softwareapp_rating'] : '';
    $seopress_pro_rich_snippets_softwareapp_max_rating              = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_softwareapp_max_rating']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_softwareapp_max_rating'] : ''; ?>
<div class="wrap-rich-snippets-item wrap-rich-snippets-software-app">
    <div class="seopress-notice">
        <p>
            <?php esc_html_e('Mark up software application information so that Google can provide detailed service information in rich Search results.', 'webseo'); ?>
        </p>
    </div>
    <p>
        <label for="seopress_pro_rich_snippets_softwareapp_name_meta">
            <?php esc_html_e('Software name', 'webseo'); ?>
        </label>
        <input type="text" id="seopress_pro_rich_snippets_softwareapp_name_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_softwareapp_name]"
            placeholder="<?php esc_html_e('The name of your app', 'webseo'); ?>"
            aria-label="<?php esc_html_e('App name', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_softwareapp_name); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_softwareapp_os_meta">
            <?php esc_html_e('Operating system', 'webseo'); ?>'</label>
        <input type="text" id="seopress_pro_rich_snippets_softwareapp_os_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_softwareapp_os]"
            placeholder="<?php esc_html_e('The operating system(s) required to use the app', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Operating system', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_softwareapp_os); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_softwareapp_cat_meta">
            <?php esc_html_e('Application category', 'webseo'); ?>
        </label>
        <select id="seopress_pro_rich_snippets_softwareapp_cat_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_softwareapp_cat]">
            <?php foreach ($options_software as $item) { ?>
            <option <?php selected($item['value'], $seopress_pro_rich_snippets_softwareapp_cat); ?>value="<?php echo esc_attr($item['value']); ?>">
                <?php echo esc_attr($item['label']); ?>
            </option>
            <?php } ?>

        </select>
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_softwareapp_price_meta">
            <?php esc_html_e('Price of your app', 'webseo'); ?>
        </label>
        <input type="text" id="seopress_pro_rich_snippets_softwareapp_price_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_softwareapp_price]"
            placeholder="<?php esc_html_e('The price of your app (set "0" if the app is free of charge)', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Price', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_softwareapp_price); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_softwareapp_currency_meta">
            <?php esc_html_e('Currency', 'webseo'); ?>
        </label>
        <input type="text" id="seopress_pro_rich_snippets_softwareapp_currency_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_softwareapp_currency]"
            placeholder="<?php esc_html_e('Currency: USD, EUR...', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Currency', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_softwareapp_currency); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_softwareapp_rating_meta">
            <?php esc_html_e('Your rating', 'webseo'); ?>
        </label>
        <input type="number" id="seopress_pro_rich_snippets_softwareapp_rating_meta" min="1" step="0.1"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_softwareapp_rating]"
            placeholder="<?php esc_html_e('The item rating', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Your rating', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_softwareapp_rating); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_softwareapp_max_rating_meta">
            <?php esc_html_e('Max best rating', 'webseo'); ?>
        </label>
        <input type="number" id="seopress_pro_rich_snippets_softwareapp_max_rating_meta" min="1" step="0.1"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_softwareapp_max_rating]"
            placeholder="<?php esc_html_e('Max best rating', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Max best rating', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_softwareapp_max_rating); ?>" />
    </p>
</div>
<?php
}
