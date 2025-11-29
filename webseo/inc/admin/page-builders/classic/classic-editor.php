<?php
/**
 * Classic editor
 *
 * @package PageBuilders
 */

defined( 'ABSPATH' ) || exit( 'Please don&rsquo;t call the plugin directly. Thanks :)' );

/**
 * Classic editor related functions
 */

add_action( 'wp_enqueue_editor', 'seopress_wp_tiny_mce' );
/**
 * Load extension for wpLink
 *
 * @param  string $hook  Page hook name.
 */
function seopress_wp_tiny_mce( $hook ) {
	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
        wp_enqueue_style( 'webseo-classic', WEBSEO_ASSETS_DIR . '/css/webseo-classic-editor' . $suffix . '.css', array(), WEBSEO_VERSION );
        wp_enqueue_script( 'webseo-classic', WEBSEO_ASSETS_DIR . '/js/webseo-classic-editor' . $suffix . '.js', array( 'wplink' ), WEBSEO_VERSION, true );
        wp_localize_script(
                'webseo-classic',
                'seopressI18n',
                array(
                        'sponsored' => __( 'Add <code>rel="sponsored"</code> attribute', 'wp-seopress' ),
			'nofollow'  => __( 'Add <code>rel="nofollow"</code> attribute', 'wp-seopress' ),
			'ugc'       => __( 'Add <code>rel="UGC"</code> attribute', 'wp-seopress' ),
		)
	);
}
