<?php // phpcs:ignore

namespace WebSEO\Tags\Schema\SocialAccount;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WebSEO\Models\GetTagValue;

/**
 * Schema LinkedIn URL
 */
class Linkedin implements GetTagValue {
	const NAME = 'social_account_linkedin';

	/**
	 * Get description
	 *
	 * @return string
	 */
	public static function getDescription() {
		return __( 'LinkedIn URL', 'webseo' );
	}

	/**
	 * Get value
	 *
	 * @since 4.5.0
	 * @param array $args context, tag.
	 * @return string
	 */
	public function getValue( $args = null ) {
		$context = isset( $args[0] ) ? $args[0] : null;

		$value = seopress_get_service( 'SocialOption' )->getSocialAccountsLinkedin();

		return apply_filters( 'seopress_get_tag_schema_social_account_linkedin', $value, $context );
	}
}
