<?php // phpcs:ignore

namespace WebSEO\Services\Metas\SocialFacebook\Specifications\Image;

use WebSEO\Helpers\Metas\SocialSettings;
use WebSEO\Services\Metas\SocialFacebook\Specifications\Image\AbstractImageSpecification;

/**
 * SingularSpecification
 */
class SingularSpecification extends AbstractImageSpecification {

	const NAME_SERVICE = 'SingularImageSocialFacebookSpecification';

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

		$post            = $params['post'];
		$GLOBALS['post'] = $post; // phpcs:ignore

		$value = seopress_get_service( 'SocialOption' )->getFacebookImagePostOption( $post->ID );

		return $this->applyFilter(
			array(
				'url' => seopress_get_service( 'TagsToString' )->replace( $value, $context ),
			),
			$params
		);
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

			if ( ! empty( seopress_get_service( 'SocialOption' )->getFacebookImagePostOption( $post->ID ) ) ) {
				return true;
			}
		}

		return false;
	}
}
