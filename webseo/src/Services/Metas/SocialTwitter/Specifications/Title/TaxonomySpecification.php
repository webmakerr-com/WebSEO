<?php // phpcs:ignore

namespace WebSEO\Services\Metas\SocialTwitter\Specifications\Title;

use WebSEO\Helpers\Metas\SocialSettings;
use WebSEO\Services\Metas\Title\TitleMeta;
use WebSEO\Services\Metas\SocialTwitter\Specifications\Title\AbstractTitleSpecification;

/**
 * TaxonomySpecification
 */
class TaxonomySpecification extends AbstractTitleSpecification {


	const NAME_SERVICE = 'TaxonomySocialTwitterSpecification';

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

		$title_meta = new TitleMeta();

		$value = '';
		// Try to get the value from the term meta for twitter.
		if ( $term && ! empty( get_term_meta( $term->term_id, '_seopress_social_twitter_title', true ) ) ) {
			$value = get_term_meta( $term->term_id, '_seopress_social_twitter_title', true );
			// Try to get the value from the term meta for facebook.
		} elseif ( $term && ! empty( get_term_meta( $term->term_id, '_seopress_social_fb_title', true ) ) ) {
			$value = get_term_meta( $term->term_id, '_seopress_social_fb_title', true );
		} elseif ( ! empty( $title_meta->getValue( $params['context'] ) ) ) {
			$value = $title_meta->getValue( $params['context'] );
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
