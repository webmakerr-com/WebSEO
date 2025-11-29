<?php // phpcs:ignore

namespace WebSEO\Tags\Date;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WebSEO\Models\GetTagValue;

/**
 * Current Month Number
 */
class CurrentMonthNum implements GetTagValue {
	const NAME = 'currentmonth_num';

	/**
	 * Get description
	 *
	 * @return string
	 */
	public static function getDescription() {
		return __( 'Current Month Number', 'webseo' );
	}

	/**
	 * Get value
	 *
	 * @param array $args context, tag.
	 * @return string
	 */
	public function getValue( $args = null ) {
		return date_i18n( 'n' );
	}
}
