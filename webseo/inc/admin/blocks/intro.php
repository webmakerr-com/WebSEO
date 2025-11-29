<?php
/**
 * Intro block.
 *
 * @package WebSEO
 * @subpackage Blocks
 */

defined( 'ABSPATH' ) || exit( 'Please don&rsquo;t call the plugin directly. Thanks :)' );

if ( defined( 'SEOPRESS_WL_ADMIN_HEADER' ) && SEOPRESS_WL_ADMIN_HEADER === false ) {
	// Do nothing.
} else {
	?>

<div id="seopress-intro" class="seopress-intro">
	<div>
            <img src="<?php echo esc_url( WEBSEO_ASSETS_DIR . '/img/logo-webseo.svg' ); ?>" width="72" height="72" alt=""/>
	</div>

	<div>
		<h1>
		<?php
$seo_title = 'WebSEO';
if ( seopress_is_pro_license_active() ) {
if ( method_exists( seopress_get_service( 'ToggleOption' ), 'getToggleWhiteLabel' ) && '1' === seopress_get_service( 'ToggleOption' )->getToggleWhiteLabel() ) {
$seo_title = function_exists( 'seopress_pro_get_service' ) && method_exists( seopress_pro_get_service( 'OptionPro' ), 'getWhiteLabelListTitle' ) && seopress_pro_get_service( 'OptionPro' )->getWhiteLabelListTitle() ? seopress_pro_get_service( 'OptionPro' )->getWhiteLabelListTitle() : 'WebSEO';
}
		}

			/* translators: %1$s plugin name, default: WebSEO, %2$s displays the current version number */
			printf( esc_html__( 'Welcome to %1$s %2$s!', 'webseo' ), esc_html( $seo_title ), '9.3.0.3' );
		?>
		</h1>
		<p><?php esc_attr_e( 'Your control center for SEO.', 'webseo' ); ?></p>
	</div>
</div>

	<?php
}
