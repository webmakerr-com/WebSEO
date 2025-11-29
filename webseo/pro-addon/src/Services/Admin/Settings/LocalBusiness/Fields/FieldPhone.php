<?php

namespace SEOPressPro\Services\Admin\Settings\LocalBusiness\Fields;

defined('ABSPATH') or exit('Cheatin&#8217; uh?');

trait FieldPhone {
    /**
     * @since 4.5.0
     *
     * @return void
     */
    public function renderFieldPhone() {
        $value = seopress_pro_get_service('OptionPro')->getLocalBusinessPhone(); ?>
        <input
            type="text"
            name="seopress_pro_option_name[seopress_local_business_phone]"
            placeholder="<?php esc_attr_e('e.g. +33501020304', 'webseo'); ?>"
            aria-label="<?php esc_attr_e('Telephone', 'webseo'); ?>"
            value="<?php echo esc_attr($value); ?>"
        />

        <p class="description"><?php echo wp_kses_post(__('<span class="field-recommended">Recommended</span> property by Google.', 'webseo')); ?></p>

        <?php
    }
}
