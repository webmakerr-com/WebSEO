<?php // phpcs:ignore

namespace WebSEO\Core\Container;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * ManageContainer
 */
interface ManageContainer {
	public function getActions(); // phpcs:ignore -- TODO: rename method.

	public function getServices(); // phpcs:ignore -- TODO: rename method.

	public function getServiceByName( $name ); // phpcs:ignore -- TODO: rename method.
}
