<?php // phpcs:ignore

namespace WebSEO\Helpers\Metas;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * SocialSettings
 */
abstract class SocialSettings {

	/**
	 * The getMetaKeysFacebook function.
	 *
	 * @return array
	 */
	public static function getMetaKeysFacebook() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		return array(
			array(
				'key'         => '_seopress_social_fb_title',
				'type'        => 'input',
				'placeholder' => __( 'Enter your Facebook title', 'webseo' ),
				'use_default' => '',
				'default'     => '',
				'label'       => __( 'Facebook Title', 'webseo' ),
				'visible'     => true,
			),
			array(
				'key'         => '_seopress_social_fb_desc',
				'type'        => 'textarea',
				'placeholder' => __( 'Enter your Facebook description', 'webseo' ),
				'use_default' => '',
				'default'     => '',
				'label'       => __( 'Facebook description', 'webseo' ),
				'visible'     => true,
			),
			array(
				'key'         => '_seopress_social_fb_img',
				'type'        => 'upload',
				'placeholder' => __( 'Select your default thumbnail', 'webseo' ),
				'use_default' => '',
				'default'     => '',
				'label'       => __( 'Facebook thumbnail', 'webseo' ),
				'visible'     => true,
				'description' => __( 'Minimum size: 200x200px, ideal ratio 1.91:1, 8Mb max. (e.g. 1640x856px or 3280x1712px for retina screens)', 'webseo' ),
			),
			array(
				'key'  => '_seopress_social_fb_img_attachment_id',
				'type' => 'hidden',
			),
			array(
				'key'  => '_seopress_social_fb_img_width',
				'type' => 'hidden',
			),
			array(
				'key'  => '_seopress_social_fb_img_height',
				'type' => 'hidden',
			),
		);
	}

	/**
	 * The getMetaKeysTwitter function.
	 *
	 * @return array
	 */
	public static function getMetaKeysTwitter() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		return array(
			array(
				'key'         => '_seopress_social_twitter_title',
				'type'        => 'input',
				'placeholder' => __( 'Enter your X title', 'webseo' ),
				'use_default' => '',
				'default'     => '',
				'label'       => __( 'X Title', 'webseo' ),
				'visible'     => true,
			),
			array(
				'key'         => '_seopress_social_twitter_desc',
				'type'        => 'textarea',
				'placeholder' => __( 'Enter your X description', 'webseo' ),
				'use_default' => '',
				'default'     => '',
				'label'       => __( 'X Description', 'webseo' ),
				'visible'     => true,
			),
			array(
				'key'         => '_seopress_social_twitter_img',
				'type'        => 'upload',
				'placeholder' => __( 'Select your default thumbnail', 'webseo' ),
				'use_default' => '',
				'default'     => '',
				'label'       => __( 'X Thumbnail', 'webseo' ),
				'visible'     => true,
				'description' => __( 'Minimum size: 144x144px (300x157px with large card enabled), ideal ratio 1:1 (2:1 with large card), 5Mb max.', 'webseo' ),
			),
			array(
				'key'  => '_seopress_social_twitter_img_attachment_id',
				'type' => 'hidden',
			),
			array(
				'key'  => '_seopress_social_twitter_img_width',
				'type' => 'hidden',
			),
			array(
				'key'  => '_seopress_social_twitter_img_height',
				'type' => 'hidden',
			),
		);
	}


	/**
	 * The getMetaKeys function.
	 *
	 * @since 5.0.0
	 *
	 * @param int|null $id The ID.
	 *
	 * @return array[]
	 *
	 *    key: string post meta
	 *    use_default: default value need to use
	 *    default: default value
	 *    label: string label
	 *    placeholder
	 */
	public static function getMetaKeys( $id = null ) { // phpcs:ignore -- TODO: check if method is outside this class before renaming.

		$facebook = self::getMetaKeysFacebook();
		$twitter  = self::getMetaKeysTwitter();
		$all      = array_merge( $facebook, $twitter );
		return apply_filters( 'seopress_api_meta_social_settings', $all, $id );
	}
}
