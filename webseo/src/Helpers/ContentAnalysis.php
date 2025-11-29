<?php // phpcs:ignore

namespace WebSEO\Helpers;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * ContentAnalysis
 */
abstract class ContentAnalysis {
	/**
	 * The getData function.
	 *
	 * @return array
	 */
	public static function getData() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		$data = array(
			'all_canonical'      => array(
				'title'  => __( 'Canonical URL', 'webseo' ),
				'impact' => 'good',
				'desc'   => null,
			),
			'schemas'            => array(
				'title'  => __( 'Structured data types', 'webseo' ),
				'impact' => 'good',
				'desc'   => null,
			),
			'old_post'           => array(
				'title'  => __( 'Last modified date', 'webseo' ),
				'impact' => 'good',
				'desc'   => null,
			),
			'keywords_permalink' => array(
				'title'  => __( 'Keywords in permalink', 'webseo' ),
				'impact' => null,
				'desc'   => null,
			),
			'headings'           => array(
				'title'  => __( 'Headings', 'webseo' ),
				'impact' => 'good',
				'desc'   => null,
			),
			'meta_title'         => array(
				'title'  => __( 'Meta title', 'webseo' ),
				'impact' => null,
				'desc'   => null,
			),
			'meta_desc'          => array(
				'title'  => __( 'Meta description', 'webseo' ),
				'impact' => null,
				'desc'   => null,
			),
			'social'             => array(
				'title'  => __( 'Social meta tags', 'webseo' ),
				'impact' => 'good',
				'desc'   => null,
			),
			'robots'             => array(
				'title'  => __( 'Meta robots', 'webseo' ),
				'impact' => 'good',
				'desc'   => null,
			),
			'img_alt'            => array(
				'title'  => __( 'Alternative texts of images', 'webseo' ),
				'impact' => 'good',
				'desc'   => null,
			),
			'nofollow_links'     => array(
				'title'  => __( 'NoFollow Links', 'webseo' ),
				'impact' => 'good',
				'desc'   => null,
			),
			'outbound_links'     => array(
				'title'  => __( 'Outbound Links', 'webseo' ),
				'impact' => 'good',
				'desc'   => null,
			),
			'internal_links'     => array(
				'title'  => __( 'Internal Links', 'webseo' ),
				'impact' => 'good',
				'desc'   => null,
			),
		);

		return apply_filters( 'seopress_get_content_analysis_data', $data );
	}
}
