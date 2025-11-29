<?php

defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');

function seopress_get_schema_metaboxe_service($seopress_pro_rich_snippets_data, $key_schema = 0) {
    $seopress_pro_rich_snippets_service_name                        = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_name']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_name'] : '';
    $seopress_pro_rich_snippets_service_type                        = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_type']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_type'] : '';
    $seopress_pro_rich_snippets_service_description                 = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_description']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_description'] : '';
    $seopress_pro_rich_snippets_service_img                         = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_img']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_img'] : '';
    $seopress_pro_rich_snippets_service_area                        = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_area']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_area'] : '';
    $seopress_pro_rich_snippets_service_provider_name               = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_provider_name']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_provider_name'] : '';
    $seopress_pro_rich_snippets_service_lb_img                      = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_lb_img']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_lb_img'] : '';
    $seopress_pro_rich_snippets_service_provider_mobility           = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_provider_mobility']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_provider_mobility'] : '';
    $seopress_pro_rich_snippets_service_slogan                      = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_slogan']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_slogan'] : '';
    $seopress_pro_rich_snippets_service_street_addr                 = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_street_addr']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_street_addr'] : '';
    $seopress_pro_rich_snippets_service_city                        = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_city']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_city'] : '';
    $seopress_pro_rich_snippets_service_state                       = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_state']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_state'] : '';
    $seopress_pro_rich_snippets_service_pc                          = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_pc']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_pc'] : '';
    $seopress_pro_rich_snippets_service_country                     = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_country']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_country'] : '';
    $seopress_pro_rich_snippets_service_lat                         = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_lat']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_lat'] : '';
    $seopress_pro_rich_snippets_service_lon                         = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_lon']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_lon'] : '';
    $seopress_pro_rich_snippets_service_tel                         = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_tel']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_tel'] : '';
    $seopress_pro_rich_snippets_service_price                       = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_price']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_service_price'] : ''; ?>
<div class="wrap-rich-snippets-item wrap-rich-snippets-services">
    <div class="seopress-notice">
        <p>
            <?php esc_html_e('Add markup to your service pages so that Google can provide detailed service information in rich Search results.', 'webseo'); ?>
        </p>
    </div>
    <p>
        <label for="seopress_pro_rich_snippets_service_name_meta">
            <?php esc_html_e('Service name', 'webseo'); ?>
        </label>
        <input type="text" id="seopress_pro_rich_snippets_service_name_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_service_name]"
            placeholder="<?php esc_html_e('The name of your service', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Service name', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_service_name); ?>" />
        <span class="description"><?php esc_html_e('Default: post title', 'webseo'); ?></span>
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_service_type_meta">
            <?php esc_html_e('Service type', 'webseo'); ?>
        </label>
        <input type="text" id="seopress_pro_rich_snippets_service_type_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_service_type]"
            placeholder="<?php esc_html_e('The type of your service', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Service type', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_service_type); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_service_description_meta">
            <?php esc_html_e('Service description', 'webseo'); ?>
        </label>
        <textarea id="seopress_pro_rich_snippets_service_description_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_service_description]"
            placeholder="<?php esc_html_e('The description of your service', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Service description', 'webseo'); ?>"><?php echo wp_kses_post($seopress_pro_rich_snippets_service_description); ?></textarea>
        <span class="description"><?php esc_html_e('Default: post excerpt', 'webseo'); ?></span>
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_service_img_meta">
            <?php esc_html_e('Thumbnail', 'webseo'); ?>
        </label>
        <input id="seopress_pro_rich_snippets_service_img_meta" type="text"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_service_img]"
            placeholder="<?php esc_html_e('Select your image', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Thumbnail', 'webseo'); ?>"
            value="<?php echo esc_url($seopress_pro_rich_snippets_service_img); ?>" />
        <span class="description"><?php esc_html_e('Default: post thumbnail', 'webseo'); ?></span>
        <input id="seopress_pro_rich_snippets_service_img" class="<?php echo esc_attr(seopress_btn_secondary_classes()); ?> seopress_media_upload"
            type="button"
            value="<?php esc_html_e('Upload an Image', 'webseo'); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_service_area_meta">
            <?php esc_html_e('Area served', 'webseo'); ?>
        </label>
        <input type="text" id="seopress_pro_rich_snippets_service_area_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_service_area]"
            placeholder="<?php esc_html_e('The area served by your service', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Area served', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_service_area); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_service_provider_name_meta">
            <?php esc_html_e('Provider name', 'webseo'); ?>
        </label>
        <input type="text" id="seopress_pro_rich_snippets_service_provider_name_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_service_provider_name]"
            placeholder="<?php esc_html_e('The provider name of your service', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Provider name', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_service_provider_name); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_service_lb_img_meta"><?php esc_html_e('Location image', 'webseo'); ?>
        </label>
        <input id="seopress_pro_rich_snippets_service_lb_img_meta" type="text"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_service_lb_img]"
            placeholder="<?php esc_html_e('Select your location image', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Location image', 'webseo'); ?>"
            value="<?php echo esc_url($seopress_pro_rich_snippets_service_lb_img); ?>" />
        <input id="seopress_pro_rich_snippets_service_lb_img"
            class="<?php echo esc_attr(seopress_btn_secondary_classes()); ?> seopress_media_upload" type="button"
            value="<?php esc_html_e('Upload an Image', 'webseo'); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_service_provider_mobility_meta">
            <?php esc_html_e('Provider mobility (static or dynamic)', 'webseo'); ?>
        </label>
        <input type="text" id="seopress_pro_rich_snippets_service_provider_mobility_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_service_provider_mobility]"
            placeholder="<?php esc_html_e('The provider mobility of your service', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Provider mobility', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_service_provider_mobility); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_service_slogan_meta">
            <?php esc_html_e('Slogan', 'webseo'); ?>
        </label>
        <input type="text" id="seopress_pro_rich_snippets_service_slogan_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_service_slogan]"
            placeholder="<?php esc_html_e('The slogan of your service', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Slogan', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_service_slogan); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_service_street_addr_meta">
            <?php esc_html_e('Street Address', 'webseo'); ?>
        </label>
        <input type="text" id="seopress_pro_rich_snippets_service_street_addr_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_service_street_addr]"
            placeholder="<?php esc_html_e('The street address of your service', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Street Address', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_service_street_addr); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_service_city_meta">
            <?php esc_html_e('City', 'webseo'); ?>
        </label>
        <input type="text" id="seopress_pro_rich_snippets_service_city_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_service_city]"
            placeholder="<?php esc_html_e('The city of your service', 'webseo'); ?>"
            aria-label="<?php esc_html_e('City', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_service_city); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_service_state_meta">
            <?php esc_html_e('State', 'webseo'); ?>
        </label>
        <input type="text" id="seopress_pro_rich_snippets_service_state_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_service_state]"
            placeholder="<?php esc_html_e('The state of your service', 'webseo'); ?>"
            aria-label="<?php esc_html_e('State', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_service_state); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_service_pc_meta">
            <?php esc_html_e('Postal code', 'webseo'); ?>
        </label>
        <input type="text" id="seopress_pro_rich_snippets_service_pc_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_service_pc]"
            placeholder="<?php esc_html_e('The postal code of your service', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Postal code', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_service_pc); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_service_country_meta">
            <?php esc_html_e('Country', 'webseo'); ?>
        </label>
        <input type="text" id="seopress_pro_rich_snippets_service_country_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_service_country]"
            placeholder="<?php esc_html_e('The country of your service (ISO format)', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Country', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_service_country); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_service_lat_meta">
            <?php esc_html_e('Latitude', 'webseo'); ?>
        </label>
        <input type="text" id="seopress_pro_rich_snippets_service_lat_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_service_lat]"
            placeholder="<?php esc_html_e('The latitude of your service', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Latitude', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_service_lat); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_service_lon_meta">
            <?php esc_html_e('Longitude', 'webseo'); ?>
        </label>
        <input type="text" id="seopress_pro_rich_snippets_service_lon_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_service_lon]"
            placeholder="<?php esc_html_e('The longitude of your service', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Longitude', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_service_lon); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_service_tel_meta">
            <?php esc_html_e('Telephone', 'webseo'); ?>
        </label>
        <input type="text" id="seopress_pro_rich_snippets_service_tel_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_service_tel]"
            placeholder="<?php esc_html_e('The telephone of your service', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Telephone', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_service_tel); ?>" />
    </p>
    <p>
        <label for="seopress_pro_rich_snippets_service_price_meta">
            <?php esc_html_e('Price range', 'webseo'); ?>
        </label>
        <input type="text" id="seopress_pro_rich_snippets_service_price_meta"
            name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_service_price]"
            placeholder="<?php esc_html_e('The price range of your service', 'webseo'); ?>"
            aria-label="<?php esc_html_e('Price range', 'webseo'); ?>"
            value="<?php echo esc_attr($seopress_pro_rich_snippets_service_price); ?>" />
    </p>
</div>
<?php
}
