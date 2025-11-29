<?php // phpcs:ignore

namespace WebSEO\Helpers;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Currencies
 */
abstract class Currencies {
	/**
	 * The get_options function.
	 *
	 * @return array
	 */
	public static function getOptions() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		return apply_filters(
			'seopress_get_options_schema_currencies',
			array(
				array(
					'value' => 'none',
					'label' => __( 'Select a Currency', 'webseo' ),
				),
				array(
					'value' => 'USD',
					'label' => __( 'U.S. Dollar', 'webseo' ),
				),
				array(
					'value' => 'GBP',
					'label' => __( 'Pound Sterling', 'webseo' ),
				),
				array(
					'value' => 'EUR',
					'label' => __( 'Euro', 'webseo' ),
				),
				array(
					'value' => 'ARS',
					'label' => __( 'Argentina Peso', 'webseo' ),
				),
				array(
					'value' => 'AUD',
					'label' => __( 'Australian Dollar', 'webseo' ),
				),
				array(
					'value' => 'BRL',
					'label' => __( 'Brazilian Real', 'webseo' ),
				),
				array(
					'value' => 'BGN',
					'label' => __( 'Bulgarian lev', 'webseo' ),
				),
				array(
					'value' => 'CAD',
					'label' => __( 'Canadian Dollar', 'webseo' ),
				),
				array(
					'value' => 'CLP',
					'label' => __( 'Chilean Peso', 'webseo' ),
				),
				array(
					'value' => 'CZK',
					'label' => __( 'Czech Koruna', 'webseo' ),
				),
				array(
					'value' => 'DKK',
					'label' => __( 'Danish Krone', 'webseo' ),
				),
				array(
					'value' => 'HKD',
					'label' => __( 'Hong Kong Dollar', 'webseo' ),
				),
				array(
					'value' => 'HUF',
					'label' => __( 'Hungarian Forint', 'webseo' ),
				),
				array(
					'value' => 'INR',
					'label' => __( 'Indian rupee', 'webseo' ),
				),
				array(
					'value' => 'ILS',
					'label' => __( 'Israeli New Sheqel', 'webseo' ),
				),
				array(
					'value' => 'JPY',
					'label' => __( 'Japanese Yen', 'webseo' ),
				),
				array(
					'value' => 'MYR',
					'label' => __( 'Malaysian Ringgit', 'webseo' ),
				),
				array(
					'value' => 'MXN',
					'label' => __( 'Mexican Peso', 'webseo' ),
				),
				array(
					'value' => 'NOK',
					'label' => __( 'Norwegian Krone', 'webseo' ),
				),
				array(
					'value' => 'NZD',
					'label' => __( 'New Zealand Dollar', 'webseo' ),
				),
				array(
					'value' => 'PHP',
					'label' => __( 'Philippine Peso', 'webseo' ),
				),
				array(
					'value' => 'PLN',
					'label' => __( 'Polish Zloty', 'webseo' ),
				),
				array(
					'value' => 'IDR',
					'label' => __( 'Indonesian rupiah', 'webseo' ),
				),
				array(
					'value' => 'RUB',
					'label' => __( 'Russian Ruble', 'webseo' ),
				),
				array(
					'value' => 'SGD',
					'label' => __( 'Singapore Dollar', 'webseo' ),
				),
				array(
					'value' => 'PEN',
					'label' => __( 'Sol', 'webseo' ),
				),
				array(
					'value' => 'ZAR',
					'label' => __( 'South African Rand', 'webseo' ),
				),
				array(
					'value' => 'SEK',
					'label' => __( 'Swedish Krona', 'webseo' ),
				),
				array(
					'value' => 'CHF',
					'label' => __( 'Swiss Franc', 'webseo' ),
				),
				array(
					'value' => 'TWD',
					'label' => __( 'Taiwan New Dollar', 'webseo' ),
				),
				array(
					'value' => 'THB',
					'label' => __( 'Thai Baht', 'webseo' ),
				),
				array(
					'value' => 'UAH',
					'label' => __( 'Ukrainian hryvnia', 'webseo' ),
				),
				array(
					'value' => 'VND',
					'label' => __( 'Vietnamese đồng', 'webseo' ),
				),
			)
		);
	}
}
