<?php // phpcs:ignore

namespace WebSEO\Services\Metas\SocialTwitter\Specifications\Title;

use WebSEO\Helpers\Metas\SocialSettings;
use WebSEO\Services\Metas\SocialTwitter\Specifications\Title\AbstractTitleSpecification;

/**
 * DefaultSocialTwitterSpecification
 */
class DefaultSocialTwitterSpecification extends AbstractTitleSpecification {


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

		$value = get_the_title( $post->ID );
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
		$post = $params['post'];

		return ! empty( get_the_title( $post->ID ) );
	}
}
