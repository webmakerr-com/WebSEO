<?php

/**
 * Instant Indexing
 *
 * @package Sections
 */

defined( 'ABSPATH' ) || exit( 'Please don&rsquo;t call the plugin directly. Thanks :)' );

/**
 * Print section info instant indexing general
 */
function seopress_print_section_instant_indexing_general() {
	$docs = function_exists( 'seopress_get_docs_links' ) ? seopress_get_docs_links() : ''; ?>
	<div class="sp-section-header">
		<h2>
			<?php esc_attr_e( 'Instant Indexing', 'webseo' ); ?>
		</h2>
	</div>

	<p><?php esc_attr_e( 'You can use the Indexing API to tell Google & Bing to update or remove pages from the Google / Bing index. The process can takes few minutes. You can submit your URLs in batches of 100 (max 200 request per day for Google).', 'webseo' ); ?></p>

	<p class="seopress-help">
		<a href="<?php echo esc_url( $docs['indexing_api']['google'] ); ?>" target="_blank">
			<?php esc_attr_e( '401 / 403 error?', 'webseo' ); ?>
		</a>
		<span class="dashicons dashicons-external"></span>
	</p>

	<div class="seopress-notice">
		<h3><?php esc_attr_e( 'How does this work?', 'webseo' ); ?></h3>
		<ol>
			<li><?php echo wp_kses_post( __( 'Setup your Google / Bing API keys from the <strong>Settings</strong> tab', 'webseo' ) ); ?></li>
			<li><?php echo wp_kses_post( __( '<strong>Enter your URLs</strong> to index to the field below', 'webseo' ) ); ?></li>
			<li><strong><?php esc_attr_e( 'Save changes', 'webseo' ); ?></strong></li>
			<li><?php echo wp_kses_post( __( 'Click <strong>Submit URLs to Google & Bing</strong>', 'webseo' ) ); ?></li>
		</ol>
	</div>

	<?php

	$indexing_plugins = array(
		'indexnow/indexnow-url-submission.php'         => 'IndexNow',
		'bing-webmaster-tools/bing-url-submission.php' => 'Bing Webmaster Url Submission',
		'fast-indexing-api/instant-indexing.php'       => 'Instant Indexing',
	);

	foreach ( $indexing_plugins as $key => $value ) {
		if ( is_plugin_active( $key ) ) {
			?>
			<div class="seopress-notice is-warning">
				<h3>
					<?php
					/* translators: %s Indexing plugin name */
					printf( esc_attr__( 'We noticed that you use <strong>%s</strong> plugin.', 'webseo' ), esc_html( $value ) );
					?>
				</h3>

				<p><?php printf( esc_attr__( 'To prevent any conflicts with our Indexing feature, please disable it.', 'webseo' ) ); ?></p>

				<a class="btn btnPrimary" href="<?php echo esc_url( admin_url( 'plugins.php' ) ); ?>"><?php esc_attr_e( 'Fix this!', 'webseo' ); ?></a>
			</div>
			<?php
		}
	}
}

/**
 * Print section info instant indexing settings
 */
function seopress_print_section_instant_indexing_settings() {

	?>
	<div class="sp-section-header">
		<h2>
			<?php esc_attr_e( 'Settings', 'webseo' ); ?>
		</h2>
	</div>
	<p>
		<?php esc_attr_e( 'Edit your Instant Indexing settings for Google and Bing.', 'webseo' ); ?>
	</p>

	<?php
}
