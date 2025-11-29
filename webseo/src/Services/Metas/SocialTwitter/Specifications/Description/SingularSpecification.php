<?php // phpcs:ignore

namespace WebSEO\Services\Metas\SocialTwitter\Specifications\Description;

use WebSEO\Helpers\Metas\SocialSettings;
use WebSEO\Services\Metas\SocialTwitter\Specifications\Description\AbstractDescriptionSpecification;

/**
 * SingularSpecification
 */
class SingularSpecification extends AbstractDescriptionSpecification {

	const NAME_SERVICE = 'SingularDescriptionSocialTwitterSpecification';

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

		$value = seopress_get_service( 'SocialOption' )->getTwitterDescriptionPostOption( $post->ID );

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

		if ( $context['is_singular'] ) {
			$post = $params['post'];
			if ( ! empty( seopress_get_service( 'SocialOption' )->getTwitterDescriptionPostOption( $post->ID ) ) ) {
				return true;
			}
		}

		return false;
	}
}
