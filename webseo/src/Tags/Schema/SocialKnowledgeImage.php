<?php // phpcs:ignore

namespace WebSEO\Tags\Schema;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WebSEO\Models\GetTagValue;

/**
 * Schema Social Knowledge Image
 */
class SocialKnowledgeImage implements GetTagValue {
	const NAME = 'social_knowledge_image';

	/**
	 * Get value
	 *
	 * @param array $args context, tag.
	 * @return string
	 */
	public function getValue( $args = null ) {
		$context = isset( $args[0] ) ? $args[0] : null;

		$value = seopress_get_service( 'SocialOption' )->getSocialKnowledgeImage();

		return apply_filters( 'seopress_get_tag_schema_social_knowledge_image', $value, $context );
	}
}
