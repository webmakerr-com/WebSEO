<?php // phpcs:ignore

namespace WebSEO\Services\Metas\SocialTwitter\Specifications\Description;

use WebSEO\Helpers\Metas\SocialSettings;
use WebSEO\Services\Metas\SocialTwitter\Specifications\Description\AbstractDescriptionSpecification;
use WebSEO\Services\Metas\Description\DescriptionMeta;

/**
 * TaxonomySpecification
 */
class TaxonomySpecification extends AbstractDescriptionSpecification {


	const NAME_SERVICE = 'TaxonomyDescriptionSocialTwitterSpecification';

	/**
	 * The getValue function.
	 *
	 * @param array $params The params.
	 *
	 * @example [
	 *     'context' => array
	 *
	 * ]
	 * @return string
	 */
	public function getValue( $params ) {

		$context = $params['context'];

		$post = $params['post'];

		$term = isset( $context['term'] ) ? $context['term'] : null;
		if ( ! $term ) {
			return '';
		}

		$description_meta = new DescriptionMeta();

		$value = seopress_get_service( 'SocialMeta' )->getFacebookTaxonomyDescription( $term->term_id );

		if ( empty( $value ) && ! empty( $description_meta->getValue( $params ) ) ) {
			$value = $description_meta->getValue( $params );
		} elseif ( ! empty( term_description( $term->term_id ) ) ) {
			$value = term_description( $term->term_id );
		}

		return $this->applyFilter( seopress_get_service( 'TagsToString' )->replace( $value, $context ) );
	}


	/**
	 * The isSatisfyBy function.
	 *
	 * @param array $params The params.
	 *
	 * @example [
	 *     'post' => \WP_Post
	 *     'title' => string
	 *     'context' => array
	 *
	 * ]
	 * @return boolean
	 */
	public function isSatisfyBy( $params ) {
		$context = $params['context'];

		if ( ( $context['is_tax'] || $context['is_category'] || $context['is_tag'] ) && ! $context['is_search'] ) {
			return true;
		}

		return false;
	}
}
