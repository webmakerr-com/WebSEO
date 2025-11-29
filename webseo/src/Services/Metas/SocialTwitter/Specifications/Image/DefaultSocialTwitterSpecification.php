<?php // phpcs:ignore

namespace WebSEO\Services\Metas\SocialTwitter\Specifications\Image;

use WebSEO\Helpers\Metas\SocialSettings;
use WebSEO\Services\Metas\SocialTwitter\Specifications\Image\AbstractImageSpecification;

/**
 * DefaultSocialTwitterSpecification
 */
class DefaultSocialTwitterSpecification extends AbstractImageSpecification {

	const NAME_SERVICE = 'DefaultImageSocialTwitterSpecification';

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

		if ( '1' === seopress_get_service( 'SocialOption' )->getSocialTwitterCardOg() ) {
			return $this->applyFilter(
				array(
					'url' => seopress_get_service( 'FacebookImageOptionMeta' )->getOnlyImageUrlFromGlobals(),
				),
				$params
			);
		}

		$site_icon = wp_get_attachment_url( get_option( 'site_icon' ) );

		return $this->applyFilter(
			array(
				'url' => $site_icon,
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

		return ! empty( get_option( 'site_icon' ) );
	}
}
