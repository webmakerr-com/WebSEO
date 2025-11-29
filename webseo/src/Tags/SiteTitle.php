<?php // phpcs:ignore

namespace WebSEO\Tags;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WebSEO\Models\GetTagValue;

/**
 * Site Title
 */
class SiteTitle implements GetTagValue {
	const NAME = 'sitetitle';

	const ALIAS = array( 'sitename' );

	/**
	 * Get description
	 *
	 * @return string
	 */
	public static function getDescription() {
		return __( 'Site Title', 'webseo' );
	}

	/**
	 * Get value
	 *
	 * @param array $args context, tag.
	 * @return string
	 */
	public function getValue( $args = null ) {
		return get_bloginfo( 'name' );
	}
}
