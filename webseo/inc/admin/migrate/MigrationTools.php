<?php
/**
 * Migration Tools
 *
 * @package Migrate
 */

defined( 'ABSPATH' ) || exit( 'Please don&rsquo;t call the plugin directly. Thanks :)' );

/**
 * Migration tool
 *
 * @param string $plugin Plugin name.
 * @param array $details Plugin details.
 * @param bool $checked Checked.
 */
function seopress_migration_tool( $plugin, $details, $checked ) {
	$seo_title = 'SEOPress';
	if ( method_exists( seopress_get_service( 'ToggleOption' ), 'getToggleWhiteLabel' ) && '1' === seopress_get_service( 'ToggleOption' )->getToggleWhiteLabel() ) {
		$seo_title = function_exists( 'seopress_pro_get_service' ) && method_exists( seopress_pro_get_service( 'OptionPro' ), 'getWhiteLabelListTitle' ) && seopress_pro_get_service( 'OptionPro' )->getWhiteLabelListTitle() ? seopress_pro_get_service( 'OptionPro' )->getWhiteLabelListTitle() : 'SEOPress';
	}

	$html = '<div id="' . $plugin . '-migration-tool" class="postbox section-tool ' . ( $checked ? 'active' : '' ) . '" tabindex="-1">
        <div class="inside">
                <h3>' . /* translators: %s SEO plugin name */ sprintf( __( 'Import posts and terms (if available) metadata from %s', 'webseo' ), $details['name'] ) . '</h3>

                <p>' . esc_html__( 'By clicking Migrate, we\'ll import:', 'webseo' ) . '</p>

                <ul>';
	if ( 'yoast' === $plugin || 'rk' === $plugin || 'aio' === $plugin ) {
		$html .= '<li>' . esc_html__( 'Global settings', 'webseo' ) . '</li>';
	}
				$html .= '<li>' . esc_html__( 'Title tags', 'webseo' ) . '</li>
                <li>' . esc_html__( 'Meta description', 'webseo' ) . '</li>
                <li>' . esc_html__( 'Facebook Open Graph tags (title, description and image thumbnail)', 'webseo' ) . '</li>';
	if ( 'premium-seo-pack' !== $plugin ) {
		$html .= '<li>' . esc_html__( 'X tags (title, description and image thumbnail)', 'webseo' ) . '</li>';
	}
	if ( 'wp-meta-seo' !== $plugin && 'seo-ultimate' !== $plugin ) {
		$html .= '<li>' . esc_html__( 'Meta Robots (noindex, nofollow...)', 'webseo' ) . '</li>';
	}
	if ( 'wp-meta-seo' !== $plugin && 'seo-ultimate' !== $plugin && 'slim-seo' !== $plugin ) {
		$html .= '<li>' . esc_html__( 'Canonical URL', 'webseo' ) . '</li>';
	}
	if ( 'wp-meta-seo' !== $plugin && 'seo-ultimate' !== $plugin && 'squirrly' !== $plugin && 'slim-seo' !== $plugin ) {
		$html .= '<li>' . esc_html__( 'Focus / target keywords', 'webseo' ) . '</li>';
	}
	if ( 'wp-meta-seo' !== $plugin && 'premium-seo-pack' !== $plugin && 'seo-ultimate' !== $plugin && 'squirrly' !== $plugin && 'aio' !== $plugin && 'slim-seo' !== $plugin ) {
		$html .= '<li>' . esc_html__( 'Primary category', 'webseo' ) . '</li>';
	}
	if ( 'smart-crawl' === $plugin || 'rk' === $plugin || 'seo-framework' === $plugin || 'aio' === $plugin ) {
		$html .= '<li>' . esc_html__( 'Redirect URL', 'webseo' ) . '</li>';
	}
	if ( 'yoast' === $plugin ) {
		$html .= '<li>' . esc_html__( 'Breadcrumb Title', 'webseo' ) . '</li>';
	}
				$html .= '</ul>

                <div class="seopress-notice is-warning">
                    <p>
                        ' . /* translators: %1$s defaut: SEOPress, %2$s competitor SEO plugin name */ sprintf( wp_kses_post( __( '<strong>WARNING:</strong> Migration will delete / update all <strong>%1$s posts and terms metadata</strong>, plus <strong>global settings</strong> (if applicable). Some dynamic variables will not be interpreted. We do <strong>NOT delete any %2$s data</strong>.', 'webseo' ) ), $seo_title, $details['name'] ) . '
                    </p>
                </div>

                <button id="seopress-' . $plugin . '-migrate" type="button" class="btn btnSecondary">
                    ' . esc_html__( 'Migrate now', 'webseo' ) . '
                </button>

                <span class="spinner" aria-hidden="true"></span>

                <div class="log" aria-live="polite"></div>
            </div>
        </div>';

	return $html;
}
