<?php

namespace SEOPressPro\Services\Forms\Schemas;

defined('ABSPATH') || exit;

use SEOPressPro\Core\FormApi;

class FormSchemaSotfware extends FormApi {
    protected function getTypeByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_softwareapp_cat':
                return 'select';
            case '_seopress_pro_rich_snippets_softwareapp_max_rating':
            case '_seopress_pro_rich_snippets_softwareapp_rating':
                return 'number';
            case '_seopress_pro_rich_snippets_softwareapp_name':
            case '_seopress_pro_rich_snippets_softwareapp_os':
            case '_seopress_pro_rich_snippets_softwareapp_price':
            case '_seopress_pro_rich_snippets_softwareapp_currency':
                return 'input';
        }
    }

    protected function getLabelByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_softwareapp_name':
                return __('Software name', 'webseo');
            case '_seopress_pro_rich_snippets_softwareapp_os':
                return __('Operating system', 'webseo');
            case '_seopress_pro_rich_snippets_softwareapp_cat':
                return __('Application category', 'webseo');
            case '_seopress_pro_rich_snippets_softwareapp_price':
                return __('Price of your app', 'webseo');
            case '_seopress_pro_rich_snippets_softwareapp_currency':
                return __('Currency', 'webseo');
            case '_seopress_pro_rich_snippets_softwareapp_rating':
                return __('Your rating', 'webseo');
            case '_seopress_pro_rich_snippets_softwareapp_max_rating':
                return __('Max best rating', 'webseo');
        }
    }

    protected function getPlaceholderByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_softwareapp_name':
                return __('The name of your app', 'webseo');
            case '_seopress_pro_rich_snippets_softwareapp_os':
                return __('The operating system(s) required to use the app', 'webseo');
            case '_seopress_pro_rich_snippets_softwareapp_price':
                return __('The price of your app (set "0" if the app is free of charge)', 'webseo');
            case '_seopress_pro_rich_snippets_softwareapp_currency':
                return __('Currency: USD, EUR...', 'webseo');
            case '_seopress_pro_rich_snippets_softwareapp_rating':
                return __('The item rating', 'webseo');
            case '_seopress_pro_rich_snippets_softwareapp_max_rating':
                return __('Max best rating', 'webseo');
        }
    }

    protected function getOptions($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_softwareapp_cat':
                return [
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
        }
    }

    protected function getDetails($postId = null) {
        return [
            [
                'key' => '_seopress_pro_rich_snippets_softwareapp_name',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_softwareapp_os',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_softwareapp_cat',
                'value' => 'GameApplication'
            ],
            [
                'key' => '_seopress_pro_rich_snippets_softwareapp_price',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_softwareapp_currency',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_softwareapp_rating',
                'min' => 1,
            ],
            [
                'key' => '_seopress_pro_rich_snippets_softwareapp_max_rating',
            ],
        ];
    }
}
