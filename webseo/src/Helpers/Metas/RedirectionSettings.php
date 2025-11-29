<?php // phpcs:ignore

namespace WebSEO\Helpers\Metas;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * RedirectionSettings
 */
abstract class RedirectionSettings {
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
		$default_status = seopress_get_service( 'RedirectionMeta' )->getPostMetaStatus( $id );
		if ( null === $default_status || empty( $default_status ) ) {
			$default_status = 'both';
		}

		$default_type = seopress_get_service( 'RedirectionMeta' )->getPostMetaType( $id );
		if ( null === $default_type || empty( $default_type ) ) {
			$default_type = 301;
		}

		$data = apply_filters(
			'seopress_api_meta_redirection_settings',
			array(
				array(
					'key'         => '_seopress_redirections_enabled',
					'type'        => 'checkbox',
					'placeholder' => '',
					'use_default' => '',
					'default'     => '',
					'label'       => __( 'Enabled redirection?', 'webseo' ),
					'visible'     => true,
				),
				array(
					'key'         => '_seopress_redirections_logged_status',
					'type'        => 'select',
					'placeholder' => '',
					'use_default' => true,
					'default'     => $default_status,
					'label'       => __( 'Select a login status:', 'webseo' ),
					'options'     => array(
						array(
							'value' => 'both',
							'label' => __( 'All', 'webseo' ),
						),
						array(
							'value' => 'only_logged_in',
							'label' => __( 'Only Logged In', 'webseo' ),
						),
						array(
							'value' => 'only_not_logged_in',
							'label' => __( 'Only Not Logged In', 'webseo' ),
						),
					),
					'visible'     => true,
				),
				array(
					'key'         => '_seopress_redirections_type',
					'type'        => 'select',
					'placeholder' => '',
					'use_default' => true,
					'default'     => $default_type,
					'label'       => __( 'Select a redirection type:', 'webseo' ),
					'options'     => array(
						array(
							'value' => 301,
							'label' => __( '301 Moved Permanently', 'webseo' ),
						),
						array(
							'value' => 302,
							'label' => __( '302 Found / Moved Temporarily', 'webseo' ),
						),
						array(
							'value' => 307,
							'label' => __( '307 Moved Temporarily', 'webseo' ),
						),
					),
					'visible'     => true,
				),
				array(
					'key'         => '_seopress_redirections_value',
					'type'        => 'input',
					'placeholder' => __( 'Enter your new URL in absolute (e.g. https://www.example.com/)', 'webseo' ),
					'label'       => __( 'URL redirection', 'webseo' ),
					'description' => __( 'Enter some keywords to auto-complete this field against your content', 'webseo' ),
					'use_default' => '',
					'default'     => '',
					'visible'     => true,
				),
			),
			$id
		);

		return $data;
	}
}
