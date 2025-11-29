<?php // phpcs:ignore

namespace WebSEO\Tags\Date;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WebSEO\Models\GetTagValue;

/**
 * Current Day
 */
class CurrentDay implements GetTagValue {
	const NAME = 'currentday';

	/**
	 * Get description
	 *
	 * @return string
	 */
	public static function getDescription() {
		return __( 'Current Day', 'webseo' );
	}

	/**
	 * Get value
	 *
	 * @param array $args context, tag.
	 * @return string
	 */
	public function getValue( $args = null ) {
		return date_i18n( 'j' );
	}
}
