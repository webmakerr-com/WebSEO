<?php // phpcs:ignore

namespace WebSEO\Core\Hooks;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * ExecuteHooks
 */
interface ExecuteHooks {
	/**
	 * The hooks function.
	 *
	 * @return void
	 */
	public function hooks();
}
