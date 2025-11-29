<?php // phpcs:ignore

namespace WebSEO\Core\Hooks;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * DeactivationHook
 */
interface DeactivationHook {
	public function deactivate(); // phpcs:ignore -- TODO: rename method.
}
