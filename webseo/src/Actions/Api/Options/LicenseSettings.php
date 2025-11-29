<?php // phpcs:ignore

namespace WebSEO\Actions\Api\Options;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WebSEO\Core\Hooks\ExecuteHooks;

/**
 * License Settings
 */
class LicenseSettings implements ExecuteHooks {
	/**
	 * Current user ID
	 *
	 * @var int
	 */
	private $current_user = '';

	/**
	 * The License Settings hooks.
	 *
	 * @since 5.0.0
	 */
	public function hooks() {
		$this->current_user = wp_get_current_user()->ID;
		add_action( 'rest_api_init', array( $this, 'register' ) );
	}

	/**
	 * The License Settings permission check.
	 *
	 * @param \WP_REST_Request $request The request.
	 *
	 * @since 5.5
	 *
	 * @return boolean
	 */
	public function permissionCheck( \WP_REST_Request $request ) {
		$nonce = $request->get_header( 'x-wp-nonce' );
		if ( $nonce && ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
			return false;
		}

		$current_user = $this->current_user ? $this->current_user : wp_get_current_user()->ID;
		if ( ! user_can( $current_user, 'manage_options' ) ) {
			return false;
		}

		return true;
	}

	/**
	 * The License Settings register.
	 *
	 * @since 5.5
	 *
	 * @return void
	 */
	public function register() {
		webseo_register_rest_route(
			'/options/license-settings',
			array(
				'methods'             => 'GET',
				'callback'            => array( $this, 'processGet' ),
				'permission_callback' => array( $this, 'permissionCheck' ),
			)
		);
	}

	/**
	 * The License Settings process get.
	 *
	 * @param \WP_REST_Request $request The request.
	 *
	 * @since 5.5
	 */
	public function processGet( \WP_REST_Request $request ) {
		$options = get_option( 'seopress_pro_license_key' );

		if ( empty( $options ) ) {
			return;
		}

		$data = array( 'license_key' => $options );

		return new \WP_REST_Response( $data );
	}
}
