<?php

namespace SEOPressPro\Services\Forms\Schemas;

defined('ABSPATH') || exit;

use SEOPressPro\Core\FormApi;
use SEOPressPro\Helpers\Settings\LocalBusinessHelper;

class FormSchemaLocalBusiness extends FormApi {
    protected function getTypeByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_lb_name':
            case '_seopress_pro_rich_snippets_lb_street_addr':
            case '_seopress_pro_rich_snippets_lb_city':
            case '_seopress_pro_rich_snippets_lb_state':
            case '_seopress_pro_rich_snippets_lb_pc':
            case '_seopress_pro_rich_snippets_lb_country':
            case '_seopress_pro_rich_snippets_lb_lat':
            case '_seopress_pro_rich_snippets_lb_lon':
            case '_seopress_pro_rich_snippets_lb_website':
            case '_seopress_pro_rich_snippets_lb_tel':
            case '_seopress_pro_rich_snippets_lb_price':
            case '_seopress_pro_rich_snippets_lb_cuisine':
            case '_seopress_pro_rich_snippets_lb_menu':
            case '_seopress_pro_rich_snippets_lb_accepts_reservations':
                return 'input';
            case '_seopress_pro_rich_snippets_lb_type':
                return 'select';
            case '_seopress_pro_rich_snippets_lb_img':
                return 'upload';
            case '_seopress_pro_rich_snippets_lb_opening_hours':
                return 'opening_hours';
        }
    }

    protected function getLabelByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_lb_name':
                return __('Name of your business', 'webseo');
            case '_seopress_pro_rich_snippets_lb_type':
                return __('Select a business type', 'webseo');
            case '_seopress_pro_rich_snippets_lb_img':
                return __('Image', 'webseo');
            case '_seopress_pro_rich_snippets_lb_street_addr':
                return __('Street Address', 'webseo');
            case '_seopress_pro_rich_snippets_lb_city':
                return __('City', 'webseo');
            case '_seopress_pro_rich_snippets_lb_state':
                return __('State', 'webseo');
            case '_seopress_pro_rich_snippets_lb_pc':
                return __('Postal code', 'webseo');
            case '_seopress_pro_rich_snippets_lb_country':
                return __('Country', 'webseo');
            case '_seopress_pro_rich_snippets_lb_lat':
                return __('Latitude', 'webseo');
            case '_seopress_pro_rich_snippets_lb_lon':
                return __('Longitude', 'webseo');
            case '_seopress_pro_rich_snippets_lb_website':
                return __('URL', 'webseo');
            case '_seopress_pro_rich_snippets_lb_tel':
                return __('Telephone', 'webseo');
            case '_seopress_pro_rich_snippets_lb_price':
                return __('Price range', 'webseo');
            case '_seopress_pro_rich_snippets_lb_cuisine':
                return __('Cuisine served', 'webseo');
            case '_seopress_pro_rich_snippets_lb_menu':
                return __('URL of the menu', 'webseo');
            case '_seopress_pro_rich_snippets_lb_accepts_reservations':
                return __('Accepts reservations', 'webseo');
            case '_seopress_pro_rich_snippets_lb_opening_hours':
                return __('Opening hours', 'webseo');
        }
    }

    protected function getPlaceholderByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_lb_name':
                return __('e.g. My Local Business', 'webseo');
            case '_seopress_pro_rich_snippets_lb_type':
                return __('Select a business type', 'webseo');
            case '_seopress_pro_rich_snippets_lb_img':
                return __('Select your image', 'webseo');
            case '_seopress_pro_rich_snippets_lb_street_addr':
                return __('e.g. Place Bellevue', 'webseo');
            case '_seopress_pro_rich_snippets_lb_city':
                return __('e.g. Biarritz', 'webseo');
            case '_seopress_pro_rich_snippets_lb_state':
                return __('e.g. Nouvelle Aquitaine', 'webseo');
            case '_seopress_pro_rich_snippets_lb_pc':
                return __('e.g. 64200', 'webseo');
            case '_seopress_pro_rich_snippets_lb_country':
                return __('e.g. FR for France', 'webseo');
            case '_seopress_pro_rich_snippets_lb_lat':
                return __('e.g. 43.4831389', 'webseo');
            case '_seopress_pro_rich_snippets_lb_lon':
                return __('e.g. -1.5630987', 'webseo');
            case '_seopress_pro_rich_snippets_lb_website':
                return sprintf(esc_html__('e.g. %s', 'webseo'), get_home_url());
            case '_seopress_pro_rich_snippets_lb_tel':
                return __('+33501020304', 'webseo');
            case '_seopress_pro_rich_snippets_lb_price':
                return __('$$, €€€, or ££££...', 'webseo');
            case '_seopress_pro_rich_snippets_lb_cuisine':
                return __('French, Italian, Indian, American', 'webseo');
            case '_seopress_pro_rich_snippets_lb_menu':
                return sprintf(esc_html__('e.g. %s', 'webseo'), get_home_url());
            case '_seopress_pro_rich_snippets_lb_accepts_reservations':
                return __('e.g. True', 'webseo');
            default:
                return '';
        }
    }

    protected function getDescriptionByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_lb_img':
                return __('Every page must contain at least one image (whether or not you include markup). Google will pick the best image to display in Search results based on the aspect ratio and resolution.<br> Image URLs must be crawlable and indexable.<br> Images must represent the marked up content.<br> Images must be in .jpg, .png, or. gif format.<br> For best results, provide multiple high-resolution images (minimum of 50K pixels when multiplying width and height) with the following aspect ratios: 16x9, 4x3, and 1x1.', 'webseo');

            case '_seopress_pro_rich_snippets_lb_accepts_reservations':
                return __('Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean (True or False), an URL at which reservations can be made or (for backwards compatibility) the strings Yes or No.', 'webseo');
            case '_seopress_pro_rich_snippets_lb_opening_hours':
                return __("<strong>Morning and Afternoon are just time slots.</strong> e.g. if you're opened from 10:00 AM to 9:00 PM, check Morning and enter 10:00 / 21:00. If you are open non-stop, check Morning and enter 0:00 / 23:59.", 'webseo');
            default:
                return '';
        }
    }

    protected function getOptions($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_lb_type':
                $types = LocalBusinessHelper::getListTypes();

                return $types;
        }
    }

    protected function getDetails($postId = null) {
        return [
            ['key' => '_seopress_pro_rich_snippets_lb_name'],
            ['key' => '_seopress_pro_rich_snippets_lb_type','value' => 'LocalBusiness'],
            ['key' => '_seopress_pro_rich_snippets_lb_img'],
            ['key' => '_seopress_pro_rich_snippets_lb_street_addr'],
            ['key' => '_seopress_pro_rich_snippets_lb_city'],
            ['key' => '_seopress_pro_rich_snippets_lb_state'],
            ['key' => '_seopress_pro_rich_snippets_lb_pc'],
            ['key' => '_seopress_pro_rich_snippets_lb_country'],
            ['key' => '_seopress_pro_rich_snippets_lb_lat'],
            ['key' => '_seopress_pro_rich_snippets_lb_lon'],
            ['key' => '_seopress_pro_rich_snippets_lb_website'],
            ['key' => '_seopress_pro_rich_snippets_lb_tel'],
            ['key' => '_seopress_pro_rich_snippets_lb_price'],
            ['key' => '_seopress_pro_rich_snippets_lb_cuisine'],
            ['key' => '_seopress_pro_rich_snippets_lb_menu'],
            ['key' => '_seopress_pro_rich_snippets_lb_accepts_reservations'],
            ['key' => '_seopress_pro_rich_snippets_lb_opening_hours'],
        ];
    }
}
