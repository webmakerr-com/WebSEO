<?php

namespace SEOPressPro\Services\Admin\Settings\LocalBusiness\Fields;

defined('ABSPATH') or exit('Cheatin&#8217; uh?');

trait FieldCuisine
{
    /**
     * @since 4.5.0
     *
     * @return void
     */
    public function renderFieldCuisine()
    {
        $value = seopress_pro_get_service('OptionPro')->getLocalBusinessCuisine(); ?>
<input type="text" name="seopress_pro_option_name[seopress_local_business_cuisine]"
    placeholder="<?php esc_html_e('e.g. French, Italian, Indian, American', 'webseo'); ?>"
    aria-label="<?php esc_attr_e('Cuisine served', 'webseo'); ?>"
    value="<?php echo esc_attr($value); ?>" />
<p class="description">
    <?php esc_html_e('Only to be filled if the business type is: "FoodEstablishment", "Bakery", "BarOrPub", "Brewery", "CafeOrCoffeeShop", "FastFoodRestaurant", "IceCreamShop", "Restaurant" or "Winery".', 'webseo'); ?>
</p>

<p class="description"><?php echo wp_kses_post(__('<span class="field-recommended">Recommended</span> property by Google.', 'webseo')); ?>
</p>

<?php
    }
}
