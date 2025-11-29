<?php // phpcs:ignore

namespace WebSEO\Tags;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WebSEO\Models\GetTagValue;

/**
 * Target Keyword
 */
class TargetKeyword implements GetTagValue {
	const NAME = 'target_keyword';

	/**
	 * Get description
	 *
	 * @return string
	 */
	public static function getDescription() {
		return __( 'Target Keywords', 'webseo' );
	}

	/**
	 * Get value
	 *
	 * @param array $args context, tag.
	 * @return string
	 */
	public function getValue( $args = null ) {
		$context = isset( $args[0] ) ? $args[0] : null;

		$value = '';
		if ( isset( $context['post']->ID ) ) {
			$value = get_post_meta( $context['post']->ID, '_seopress_analysis_target_kw', true );
		}

		return apply_filters( 'seopress_get_tag_target_keyword_value', $value, $context );
	}
}
