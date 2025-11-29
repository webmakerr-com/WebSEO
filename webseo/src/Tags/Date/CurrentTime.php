<?php // phpcs:ignore

namespace WebSEO\Tags\Date;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WebSEO\Models\GetTagValue;

/**
 * Current Time
 */
class CurrentTime implements GetTagValue {
	const NAME = 'currenttime';

	/**
	 * Get description
	 *
	 * @return string
	 */
	public static function getDescription() {
		return __( 'Current Time', 'webseo' );
	}

	/**
	 * Get value
	 *
	 * @param array $args context, tag.
	 * @return string
	 */
	public function getValue( $args = null ) {
		return current_time( get_option( 'time_format' ) );
	}
}
