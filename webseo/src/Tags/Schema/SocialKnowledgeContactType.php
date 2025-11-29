<?php // phpcs:ignore

namespace WebSEO\Tags\Schema;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WebSEO\Models\GetTagValue;

/**
 * Schema Social Knowledge Contact Type
 */
class SocialKnowledgeContactType implements GetTagValue {

	const NAME = 'social_knowledge_contact_type';

	/**
	 * Get description
	 *
	 * @param array $args context, tag.
	 * @return string
	 */
	public function getValue( $args = null ) {
		$context = isset( $args[0] ) ? $args[0] : null;

		$value = seopress_get_service( 'SocialOption' )->getSocialKnowledgeContactType();

		return apply_filters( 'seopress_get_tag_schema_social_knowledge_contact_type', $value, $context );
	}
}
