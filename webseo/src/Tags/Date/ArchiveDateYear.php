<?php // phpcs:ignore

namespace WebSEO\Tags\Date;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WebSEO\Models\GetTagValue;

/**
 * Archive Date Year
 */
class ArchiveDateYear implements GetTagValue {
	const NAME = 'archive_date_year';

	/**
	 * Get description
	 *
	 * @return string
	 */
	public static function getDescription() {
		return __( 'Year Archive Date', 'wp-seopress' );
	}

	/**
	 * Get value
	 *
	 * @param array $args context, tag.
	 * @return string
	 */
	public function getValue( $args = null ) {
		$context = isset( $args[0] ) ? $args[0] : null;
		$value   = get_query_var( 'year' );

		return apply_filters( 'seopress_get_tag_archive_date_year_value', $value, $context );
	}
}
