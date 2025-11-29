<?php

namespace SEOPressPro\Helpers\Schemas;

defined('ABSPATH') or exit('Cheatin&#8217; uh?');

abstract class Currencies {
    public static function getOptions() {
        return apply_filters('seopress_get_options_schema_currencies', [
            ['value' => 'none', 'label' => __('Select a Currency', 'webseo')],
            ['value' => 'USD', 'label' => __('U.S. Dollar', 'webseo')],
            ['value' => 'GBP', 'label' => __('Pound Sterling', 'webseo')],
            ['value' => 'EUR', 'label' => __('Euro', 'webseo')],
            ['value' => 'ARS', 'label' => __('Argentina Peso', 'webseo')],
            ['value' => 'AUD', 'label' => __('Australian Dollar', 'webseo')],
            ['value' => 'BRL', 'label' => __('Brazilian Real', 'webseo')],
            ['value' => 'BGN', 'label' => __('Bulgarian lev', 'webseo')],
            ['value' => 'CAD', 'label' => __('Canadian Dollar', 'webseo')],
            ['value' => 'CLP', 'label' => __('Chilean Peso', 'webseo')],
            ['value' => 'CZK', 'label' => __('Czech Koruna', 'webseo')],
            ['value' => 'DKK', 'label' => __('Danish Krone', 'webseo')],
            ['value' => 'HKD', 'label' => __('Hong Kong Dollar', 'webseo')],
            ['value' => 'HUF', 'label' => __('Hungarian Forint', 'webseo')],
            ['value' => 'INR', 'label' => __('Indian rupee', 'webseo')],
            ['value' => 'ILS', 'label' => __('Israeli New Sheqel', 'webseo')],
            ['value' => 'JPY', 'label' => __('Japanese Yen', 'webseo')],
            ['value' => 'MYR', 'label' => __('Malaysian Ringgit', 'webseo')],
            ['value' => 'MXN', 'label' => __('Mexican Peso', 'webseo')],
            ['value' => 'NOK', 'label' => __('Norwegian Krone', 'webseo')],
            ['value' => 'NZD', 'label' => __('New Zealand Dollar', 'webseo')],
            ['value' => 'PHP', 'label' => __('Philippine Peso', 'webseo')],
            ['value' => 'PLN', 'label' => __('Polish Zloty', 'webseo')],
            ['value' => 'IDR', 'label' => __('Indonesian rupiah', 'webseo')],
            ['value' => 'RUB', 'label' => __('Russian Ruble', 'webseo')],
            ['value' => 'SGD', 'label' => __('Singapore Dollar', 'webseo')],
            ['value' => 'PEN', 'label' => __('Sol', 'webseo')],
            ['value' => 'ZAR', 'label' => __('South African Rand', 'webseo')],
            ['value' => 'SEK', 'label' => __('Swedish Krona', 'webseo')],
            ['value' => 'CHF', 'label' => __('Swiss Franc', 'webseo')],
            ['value' => 'TWD', 'label' => __('Taiwan New Dollar', 'webseo')],
            ['value' => 'THB', 'label' => __('Thai Baht', 'webseo')],
            ['value' => 'UAH', 'label' => __('Ukrainian hryvnia', 'webseo')],
            ['value' => 'VND', 'label' => __('Vietnamese đồng', 'webseo')],
        ]);
    }
}
