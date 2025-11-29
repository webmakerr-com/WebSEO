<?php // phpcs:ignore

namespace WebSEO\Tags\Date;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WebSEO\Models\GetTagValue;

/**
 * Current Month
 */
class CurrentMonth implements GetTagValue {
	const NAME = 'currentmonth';

	/**
	 * Get description
	 *
	 * @return string
	 */
	public static function getDescription() {
		return __( 'Current Month', 'webseo' );
	}

	/**
	 * Get value
	 *
	 * @param array $args context, tag.
	 * @return string
	 */
	public function getValue( $args = null ) {
		return date_i18n( 'F' );
	}
}
