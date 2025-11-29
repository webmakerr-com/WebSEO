<?php

namespace SEOPressPro\Services\Admin\Settings\LocalBusiness\Fields;

defined('ABSPATH') or exit('Cheatin&#8217; uh?');

trait FieldAcceptsReservations {
    /**
     *
     * @return void
     */
    public function renderFieldAcceptsReservations() {
        $value = seopress_pro_get_service('OptionPro')->getLocalBusinessAcceptsReservations(); ?>
<input type="text" name="seopress_pro_option_name[seopress_local_business_accepts_reservations]"
    placeholder="<?php esc_attr_e('e.g. True', 'webseo'); ?>"
    aria-label="<?php esc_attr_e('Accepts reservations ', 'webseo'); ?>"
    value="<?php echo esc_attr($value); ?>" />
<p class="description">
    <?php esc_html_e('Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean (True or False), an URL at which reservations can be made or (for backwards compatibility) the strings Yes or No.', 'webseo'); ?>
</p>


<p class="description"><?php echo wp_kses_post(__('<span class="field-recommended">Recommended</span> property by Google.', 'webseo')); ?>
</p>

<?php
    }
}
