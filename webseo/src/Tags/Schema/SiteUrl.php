<?php // phpcs:ignore

namespace WebSEO\Tags\Schema;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WebSEO\Models\GetTagValue;

/**
 * Schema Site URL
 */
class SiteUrl implements GetTagValue {
	const NAME = 'siteurl';

	/**
	 * Get description
	 *
	 * @return string
	 */
	public static function getDescription() {
		return __( 'Site URL', 'wp-seopress' );
	}

	/**
	 * Get value
	 *
	 * @param array $args context, tag.
	 * @return string
	 */
	public function getValue( $args = null ) {
		$value = site_url();

		return apply_filters( 'seopress_get_tag_site_url_value', $value );
	}
}
