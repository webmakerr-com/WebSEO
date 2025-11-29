<?php // phpcs:ignore

namespace WebSEO\Services\Metas\SocialFacebook\Specifications\Description;

use WebSEO\Helpers\Metas\SocialSettings;
use WebSEO\Services\Metas\SocialFacebook\Specifications\Description\AbstractDescriptionSpecification;

/**
 * DefaultSocialFacebookSpecification
 */
class DefaultSocialFacebookSpecification extends AbstractDescriptionSpecification {

	const NAME_SERVICE = 'DefaultDescriptionSocialFacebookSpecification';

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
		$post    = $params['post'];

		$value = seopress_get_service( 'DescriptionMeta' )->getValue( $params['context'] );

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
	public function isSatisfyBy( $params ) { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		return true;
	}
}
