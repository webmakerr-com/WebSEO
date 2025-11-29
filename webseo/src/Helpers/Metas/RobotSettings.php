<?php // phpcs:ignore

namespace WebSEO\Helpers\Metas;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * RobotSettings
 */
abstract class RobotSettings {
	/**
	 * The getRobotPrimaryCats function.
	 *
	 * @param int|null $id The ID.
	 * @param string   $post_type The post type.
	 *
	 * @return array
	 */
	protected static function getRobotPrimaryCats( $id, $post_type ) { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		$cats = get_categories();

		if ( 'product' === $post_type ) {
			$cats = get_the_terms( $id, 'product_cat' );
		}

		$cats = apply_filters( 'seopress_primary_category_list', $cats );

		$default = array(
			'term_id' => 'none',
			'name'    => __( 'None (will disable this feature)', 'webseo' ),
		);

		if ( ! is_array( $cats ) ) {
			$cats = array();
		}

		array_unshift( $cats, $default );

		return $cats;
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
		$title_option_service = seopress_get_service( 'TitleOption' );

		$post_type = get_post_type( $id );

		$data = apply_filters(
			'seopress_api_meta_robot_settings',
			array(
				array(
					'key'         => '_seopress_robots_index',
					'type'        => 'checkbox',
					'use_default' => $title_option_service->getSingleCptNoIndex( $id ) || $title_option_service->getTitleNoIndex() || true === post_password_required( $id ),
					'default'     => 'yes',
					'label'       => __( 'Do not display this page in search engine results / XML - HTML sitemaps (noindex)', 'webseo' ),
					'visible'     => true,
				),
				array(
					'key'         => '_seopress_robots_follow',
					'type'        => 'checkbox',
					'use_default' => $title_option_service->getSingleCptNoFollow( $id ) || $title_option_service->getTitleNoFollow(),
					'default'     => 'yes',
					'label'       => __( 'Do not follow links for this page (nofollow)', 'webseo' ),
					'visible'     => true,
				),
				array(
					'key'         => '_seopress_robots_snippet',
					'type'        => 'checkbox',
					'use_default' => $title_option_service->getTitleNoSnippet(),
					'default'     => 'yes',
					'label'       => __( 'Do not display a description in search results for this page (nosnippet)', 'webseo' ),
					'visible'     => true,
				),
				array(
					'key'         => '_seopress_robots_imageindex',
					'type'        => 'checkbox',
					'use_default' => $title_option_service->getTitleNoImageIndex(),
					'default'     => 'yes',
					'label'       => __( 'Do not index images for this page (noimageindex)', 'webseo' ),
					'visible'     => true,
				),
				array(
					'key'         => '_seopress_robots_canonical',
					'type'        => 'input',
					'use_default' => '',
					'placeholder' => sprintf( '%s %s', __( 'Default value: ', 'webseo' ), urldecode( get_permalink( $id ) ) ),
					'default'     => '',
					'label'       => __( 'Canonical URL', 'webseo' ),
					'visible'     => true,
				),
				array(
					'key'         => '_seopress_robots_primary_cat',
					'type'        => 'select',
					'use_default' => '',
					'placeholder' => '',
					'default'     => '',
					'label'       => __( 'Select a primary category', 'webseo' ),
					'description' => /* translators: category permalink structure */ wp_kses_post( sprintf( __( 'Set thee category that gets used in the %s permalink and in our breadcrumbs if you have multiple categories.', 'webseo' ), '<code>%category%</code>' ) ),
					'options'     => self::getRobotPrimaryCats( $id, $post_type ),
					'visible'     => ( 'post' === $post_type || 'product' === $post_type ),
				),
			),
			$id
		);

		return $data;
	}
}
