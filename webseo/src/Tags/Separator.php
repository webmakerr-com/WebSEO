<?php // phpcs:ignore

namespace WebSEO\Tags;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WebSEO\Models\GetTagValue;

/**
 * Separator
 */
class Separator implements GetTagValue {
	const NAME = 'sep';

	const DEFAULT_SEPARATOR = '-';

	/**
	 * Get description
	 *
	 * @return string
	 */
	public static function getDescription() {
		return __( 'Separator', 'webseo' );
	}

	/**
	 * Get value
	 *
	 * @param array $args context, tag.
	 * @return string
	 */
	public function getValue( $args = null ) {
		$context = isset( $args[0] ) ? $args[0] : null;

		$separator = seopress_get_service( 'TitleOption' )->getSeparator();
		if ( empty( $separator ) ) {
			$separator = self::DEFAULT_SEPARATOR;
		}

		return apply_filters( 'seopress_get_tag_separator_value', $separator, $context );
	}
}
