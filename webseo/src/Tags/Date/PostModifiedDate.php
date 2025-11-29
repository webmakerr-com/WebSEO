<?php // phpcs:ignore

namespace WebSEO\Tags\Date;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WebSEO\Models\GetTagValue;

/**
 * Post Modified Date
 */
class PostModifiedDate implements GetTagValue {
	const NAME = 'post_modified_date';

	/**
	 * Get description
	 *
	 * @return string
	 */
	public static function getDescription() {
		return __( 'Post Modified Date', 'webseo' );
	}

	/**
	 * Get value
	 *
	 * @param array $args context, tag.
	 * @return string
	 */
	public function getValue( $args = null ) {
		$context = isset( $args[0] ) ? $args[0] : null;
		$value   = '';

		if ( isset( $context['post'] ) ) {
			$value = get_the_modified_date( get_option( 'date_format' ), $context['post']->ID );
		}

		return apply_filters( 'seopress_get_tag_post_modified_date_value', $value, $context );
	}
}
