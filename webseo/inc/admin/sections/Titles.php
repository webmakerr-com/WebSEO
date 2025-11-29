<?php

/**
 * Titles
 *
 * @package Sections
 */

defined( 'ABSPATH' ) || exit( 'Please don&rsquo;t call the plugin directly. Thanks :)' );

/**
 * Print section info titles
 */
function seopress_print_section_info_titles() {
	$docs = seopress_get_docs_links(); ?>
	<div class="sp-section-header">
		<h2>
			<?php esc_attr_e( 'Home', 'webseo' ); ?>
		</h2>
	</div>

	<div class="seopress-notice">
		<p>
			<?php esc_attr_e( 'Title and meta description are used by search engines to generate the snippet of your site in search results page.', 'webseo' ); ?>
		</p>
	</div>

	<p>
		<?php esc_attr_e( 'Customize your title & meta description for homepage.', 'webseo' ); ?>
	</p>

	<a class="seopress-help" href="<?php echo esc_url( $docs['titles']['wrong_meta'] ); ?>" target="_blank">
		<?php esc_attr_e( 'Wrong meta title / description in SERP?', 'webseo' ); ?>
	</a>
	<span class="dashicons dashicons-external seopress-help"></span>

	<script>
		function sp_get_field_length(e) {
			if (e.val().length > 0) {
				meta = e.val() + ' ';
			} else {
				meta = e.val();
			}
			return meta;
		}
	</script>

	<?php
}

/**
 * Print section info titles single
 */
function seopress_print_section_info_single() {
	?>
	<div class="sp-section-header">
		<h2>
			<?php esc_attr_e( 'Post Types', 'webseo' ); ?>
		</h2>
	</div>
	<p>
		<?php esc_attr_e( 'Customize your titles & metas for Single Custom Post Types.', 'webseo' ); ?>
	</p>

	<div class="seopress-notice">
		<p>
			<?php
			/* translators: %1$s: <code>public => true</code>, %2$s: <code>show_ui => true</code>*/
			printf( esc_attr__( 'Only post types registered with the %1$s and %2$s arguments will be listed here.', 'webseo' ), '<code>public => true</code>', '<code>show_ui => true</code>' );
			?>
		</p>
	</div>

	<?php
}

/**
 * Print section info titles advanced
 */
function seopress_print_section_info_advanced() {
	?>
	<div class="sp-section-header">
		<h2>
			<?php esc_attr_e( 'Advanced', 'webseo' ); ?>
		</h2>
	</div>
	<p>
		<?php esc_attr_e( 'Customize your metas for all pages.', 'webseo' ); ?>
	</p>

	<?php
}

/**
 * Print section info titles tax
 */
function seopress_print_section_info_tax() {
	?>
	<div class="sp-section-header">
		<h2>
			<?php esc_attr_e( 'Taxonomies', 'webseo' ); ?>
		</h2>
	</div>
	<p>
		<?php esc_attr_e( 'Customize your metas for all taxonomies archives.', 'webseo' ); ?>
	</p>

	<div class="seopress-notice">
		<p>
			<?php
			/* translators: %1$s: <code>public => true</code>, %2$s: <code>show_ui => true</code>*/
			printf( esc_attr__( 'Only taxonomies registered with the %1$s and %2$s arguments will be listed here.', 'webseo' ), '<code>public => true</code>', '<code>show_ui => true</code>' );
			?>
		</p>
	</div>

	<?php
}

/**
 * Print section info titles archives
 */
function seopress_print_section_info_archives() {
	?>
	<div class="sp-section-header">
		<h2>
			<?php esc_attr_e( 'Archives', 'webseo' ); ?>
		</h2>
	</div>
	<p>
		<?php esc_attr_e( 'Customize your metas for all archives.', 'webseo' ); ?>
	</p>

	<?php
}
