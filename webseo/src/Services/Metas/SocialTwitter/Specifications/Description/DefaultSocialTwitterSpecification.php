<?php // phpcs:ignore

namespace WebSEO\Services\Metas\SocialTwitter\Specifications\Description;

use WebSEO\Helpers\Metas\SocialSettings;
use WebSEO\Services\Metas\SocialTwitter\Specifications\Description\AbstractDescriptionSpecification;

/**
 * DefaultSocialTwitterSpecification
 */
class DefaultSocialTwitterSpecification extends AbstractDescriptionSpecification {

	const NAME_SERVICE = 'DefaultDescriptionSocialTwitterSpecification';

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
	public function isSatisfyBy( $params ) {
		return true;
	}
}
