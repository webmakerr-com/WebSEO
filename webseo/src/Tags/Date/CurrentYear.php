<?php // phpcs:ignore

namespace WebSEO\Tags\Date;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WebSEO\Models\GetTagValue;

/**
 * Current Year
 */
class CurrentYear implements GetTagValue {
	const NAME = 'currentyear';

	/**
	 * Get description
	 *
	 * @return string
	 */
	public static function getDescription() {
		return __( 'Current Year', 'webseo' );
	}

	/**
	 * Get value
	 *
	 * @param array $args context, tag.
	 * @return string
	 */
	public function getValue( $args = null ) {
		return gmdate( 'Y' );
	}
}
