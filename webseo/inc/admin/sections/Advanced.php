<?php
/**
 * Advanced
 *
 * @package Sections
 */

defined( 'ABSPATH' ) || exit( 'Please don&rsquo;t call the plugin directly. Thanks :)' );

/**
 * Print section info advanced advanced
 */
function seopress_print_section_info_advanced_advanced() {
	?>
	<div class="sp-section-header">
		<h2>
			<?php esc_attr_e( 'Advanced', 'webseo' ); ?>
		</h2>
	</div>

	<div class="seopress-sub-tabs">
		<a href="#seopress-advanced-crawling"><?php esc_attr_e( 'Crawling Optimization', 'webseo' ); ?></a> |
		<a href="#seopress-advanced-search-engines"><?php esc_attr_e( 'Search engines validation', 'webseo' ); ?></a>
	</div>

	<p>
		<?php esc_attr_e( 'Advanced SEO options for advanced users.', 'webseo' ); ?>
	</p>

	<?php
}

/**
 * Print section info advanced advanced crawling
 */
function seopress_print_section_info_advanced_advanced_crawling() {

	?>
	<hr>

	<h3 id="seopress-advanced-crawling">
		<?php esc_attr_e( 'Crawling Optimization', 'webseo' ); ?>
	</h3>

	<p><?php esc_attr_e( 'Clean your source code to improve performance and your crawl budget.', 'webseo' ); ?></p>

	<?php
}

/**
 * Print section info advanced advanced search engines
 */
function seopress_print_section_info_advanced_advanced_search_engines() {

	?>
	<hr>

	<h3 id="seopress-advanced-search-engines">
		<?php esc_attr_e( 'Search engines validation', 'webseo' ); ?>
	</h3>

	<p><?php esc_attr_e( 'Easily validate your site with search engines webmaster tools.', 'webseo' ); ?></p>

	<?php
}

/**
 * Print section info advanced appearance
 */
function seopress_print_section_info_advanced_appearance() {
	?>
	<div class="sp-section-header">
		<h2>
			<?php esc_attr_e( 'Appearance', 'webseo' ); ?>
		</h2>
	</div>

	<div class="seopress-sub-tabs">
		<a href="#seopress-advanced-metaboxes"><?php esc_attr_e( 'Metaboxes', 'webseo' ); ?></a> |
		<a href="#seopress-advanced-adminbar"><?php esc_attr_e( 'Admin bar', 'webseo' ); ?></a> |
		<a href="#seopress-advanced-seo-dashboard"><?php esc_attr_e( 'SEO Dashboard', 'webseo' ); ?></a> |
		<a href="#seopress-advanced-columns"><?php esc_attr_e( 'Columns', 'webseo' ); ?></a>
	</div>

	<p>
		<?php esc_attr_e( 'Customize the plugin to fit your needs.', 'webseo' ); ?>
	</p>

	<?php
}

/**
 * Print section info advanced security
 */
function seopress_print_section_info_advanced_security() {
	?>
	<div class="sp-section-header">
		<h2>
			<?php esc_attr_e( 'Security', 'webseo' ); ?>
		</h2>
	</div>

	<div class="seopress-sub-tabs">
		<a href="#seopress-security-metaboxes"><?php esc_attr_e( 'SEO metaboxes', 'webseo' ); ?></a> |
		<a href="#seopress-security-settings"><?php esc_attr_e( 'SEO settings pages', 'webseo' ); ?></a>
	</div>

	<p>
		<?php esc_attr_e( 'Control access to SEO settings and metaboxes by user roles.', 'webseo' ); ?>
	</p>

	<hr>

	<h3 id="seopress-security-metaboxes">
		<?php esc_attr_e( 'SEO metaboxes', 'webseo' ); ?>
	</h3>

	<div class="seopress-notice">
		<p>
			<?php echo wp_kses_post( __( 'Check a user role to <strong>PREVENT</strong> it to edit a specific metabox.', 'webseo' ) ); ?>
		</p>
	</div>

	<?php
}

/**
 * Print section info advanced security roles
 */
function seopress_print_section_info_advanced_security_roles() {
	?>

	<hr>

	<h3 id="seopress-security-settings">
		<?php esc_attr_e( 'SEO settings pages', 'webseo' ); ?>
	</h3>

	<div class="seopress-notice">
		<p>
			<?php echo wp_kses_post( __( 'Check a user role to <strong>ALLOW</strong> it to edit a specific settings page.', 'webseo' ) ); ?>
		</p>
	</div>

	<?php
}

/**
 * Print section info advanced appearance columns
 */
function seopress_print_section_info_advanced_appearance_col() {

	?>
	<hr>

	<h3 id="seopress-advanced-columns">
		<?php esc_attr_e( 'Columns', 'webseo' ); ?>
	</h3>

	<p><?php esc_attr_e( 'Customize the SEO columns.', 'webseo' ); ?></p>

	<?php
}

/**
 * Print section info advanced appearance metabox
 */
function seopress_print_section_info_advanced_appearance_metabox() {

	?>
	<hr>

	<h3 id="seopress-advanced-metaboxes">
		<?php esc_attr_e( 'Metaboxes', 'webseo' ); ?>
	</h3>

	<p><?php esc_attr_e( 'Edit your SEO metadata directly from your favorite page builder.', 'webseo' ); ?></p>

	<?php if ( method_exists( seopress_get_service( 'ToggleOption' ), 'getToggleWhiteLabel' ) && '1' !== seopress_get_service( 'ToggleOption' )->getToggleWhiteLabel() ) { ?>
		<a class="wrap-yt-embed" href="https://www.youtube.com/watch?v=sf0ocG7vQMM" target="_blank" title="<?php esc_attr_e( 'Watch the universal SEO metabox overview video - Open in a new window', 'webseo' ); ?>">
			<img src="<?php echo esc_url( WEBSEO_ASSETS_DIR . '/img/yt-universal-metabox.webp' ); ?>" alt="<?php esc_attr_e( 'Universal SEO metabox video thumbnail', 'webseo' ); ?>" width="500" />
		</a>
		<?php
	}
}

/**
 * Print section info advanced appearance dashboard
 */
function seopress_print_section_info_advanced_appearance_dashboard() {

	?>
	<hr>

	<h3 id="seopress-advanced-seo-dashboard">
		<?php esc_attr_e( 'SEO Dashboard', 'webseo' ); ?>
	</h3>

	<p><?php esc_attr_e( 'Click the dedicated icon from the toolbar to customize the SEO dashboard.', 'webseo' ); ?></p>

	<?php
}

/**
 * Print section info advanced appearance admin bar
 */
function seopress_print_section_info_advanced_appearance_admin_bar() {

	?>
	<hr>

	<h3 id="seopress-advanced-adminbar">
		<?php esc_attr_e( 'Admin bar', 'webseo' ); ?>
	</h3>

	<p><?php esc_attr_e( 'The admin bar appears on the top of your pages when logged in to your WP admin.', 'webseo' ); ?></p>

	<?php
}
