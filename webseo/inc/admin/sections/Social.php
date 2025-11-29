<?php

/**
 * Social
 *
 * @package Sections
 */

defined( 'ABSPATH' ) || exit( 'Please don&rsquo;t call the plugin directly. Thanks :)' );

/**
 * Print section info social knowledge
 */
function seopress_print_section_info_social_knowledge() {
	?>
	<div class="sp-section-header">
		<h2>
			<?php esc_attr_e( 'Knowledge Graph', 'webseo' ); ?>
		</h2>
	</div>

	<p>
		<?php esc_attr_e( 'Configure Google Knowledge Graph. This will print a schema for search engines on your homepage.', 'webseo' ); ?>
	</p>

	<p class="seopress-help">
		<a href="https://developers.google.com/search/docs/guides/enhance-site" target="_blank">
			<?php esc_attr_e( 'Learn more on Google official website.', 'webseo' ); ?>
		</a>
		<span class="dashicons dashicons-external"></span>
	</p>

	<?php
}

/**
 * Print section info social accounts
 */
function seopress_print_section_info_social_accounts() {
	?>

	<div class="sp-section-header">
		<h2>
			<?php esc_attr_e( 'Your social accounts', 'webseo' ); ?>
		</h2>
	</div>

	<div class="seopress-notice">
		<p>
			<?php esc_attr_e( 'Link your site with your social accounts.', 'webseo' ); ?>
		<p>
			<?php esc_attr_e( 'Use markup on your website to add your social profile information to a Google Knowledge panel.', 'webseo' ); ?>
		</p>
		<p>
			<?php esc_attr_e( 'Knowledge panels prominently display your social profile information in some Google Search results.', 'webseo' ); ?>
		</p>
		<p>
			<?php esc_attr_e( 'Filling in these fields does not guarantee the display of this data in search results.', 'webseo' ); ?>
		</p>
	</div>

	<?php
}

/**
 * Print section info social facebook
 */
function seopress_print_section_info_social_facebook() {
	$docs = seopress_get_docs_links();
	?>
	<div class="sp-section-header">
		<h2>
			<?php esc_attr_e( 'Facebook (Open Graph)', 'webseo' ); ?>
		</h2>
	</div>

	<p>
		<?php esc_attr_e( 'Manage Open Graph data. These metatags will be used by Facebook, Pinterest, LinkedIn, WhatsApp... when a user shares a link on its own social network. Increase your click-through rate by providing relevant information such as an attractive image.', 'webseo' ); ?>
		<?php echo wp_kses_post( seopress_tooltip_link( esc_url( $docs['social']['og'] ), esc_attr__( 'Manage Facebook Open Graph and X Cards metas - new window', 'webseo' ) ) ); ?>
	</p>

	<div class="seopress-notice">
		<p>
			<?php echo wp_kses_post( __( 'We generate the <strong>og:image</strong> meta in this order:', 'webseo' ) ); ?>
		</p>

		<ol>
			<li>
				<?php esc_attr_e( 'Custom OG Image from SEO metabox', 'webseo' ); ?>
			</li>
			<li>
				<?php esc_attr_e( 'Post thumbnail / Product thumbnail (Featured image)', 'webseo' ); ?>
			</li>
			<li>
				<?php esc_attr_e( 'Global OG Image set in SEO > Social > Open Graph', 'webseo' ); ?>
			</li>
			<li>
				<?php esc_attr_e( 'Site icon from the Customizer', 'webseo' ); ?>
			</li>
		</ol>
	</div>

	<?php
}

/**
 * Print section info social twitter
 */
function seopress_print_section_info_social_twitter() {
	$docs = seopress_get_docs_links();
	?>
	<div class="sp-section-header">
		<h2>
			<?php esc_attr_e( 'X', 'webseo' ); ?>
		</h2>
	</div>
	<p>
		<?php esc_attr_e( 'Manage your X Cards.', 'webseo' ); ?>
		<?php echo wp_kses_post( seopress_tooltip_link( esc_url( $docs['social']['og'] ), esc_attr__( 'Manage Facebook Open Graph and X Cards metas - new window', 'webseo' ) ) ); ?>
	</p>

	<div class="seopress-notice">
		<p>
			<?php echo wp_kses_post( __( 'We generate the <strong>twitter:image</strong> meta in this order:', 'webseo' ) ); ?>
		</p>

		<ol>
			<li>
				<?php esc_attr_e( 'Custom X image from SEO metabox', 'webseo' ); ?>
			</li>
			<li>
				<?php esc_attr_e( 'Post thumbnail / Product thumbnail (Featured image)', 'webseo' ); ?>
			</li>
			<li>
				<?php esc_attr_e( 'Global twitter:image set in SEO > Social > X Cards', 'webseo' ); ?>
			</li>
		</ol>
	</div>

	<?php
}

/**
 * Print section info social linkedin
 */
function seopress_print_section_info_social_linkedin() {
	?>
	<div class="sp-section-header">
		<h2>
			<?php esc_attr_e( 'LinkedIn', 'webseo' ); ?>
		</h2>
	</div>
	<p>
		<?php esc_attr_e( 'LinkedIn uses the oEmbed JSON link to generate the share of your post, by retrieving the post title, its content and its featured image.', 'webseo' ); ?>
	</p>

	<div class="seopress-notice">
		<p>
			<?php echo wp_kses_post( __( 'We generate the <strong>thumbnail URL</strong> of the oEmbed JSON feed in this order:', 'webseo' ) ); ?>
		</p>

		<ol>
			<li>
				<?php esc_attr_e( 'Custom OG Image from SEO metabox', 'webseo' ); ?>
			</li>
			<li>
				<?php esc_attr_e( 'Post thumbnail / Product category thumbnail (Featured image)', 'webseo' ); ?>
			</li>
		</ol>
	</div>

	<?php
}

/**
 * Print section info social fediverse
 */
function seopress_print_section_info_social_fediverse() {
	?>
	<div class="sp-section-header">
		<h2>
			<?php esc_attr_e( 'Mastodon', 'webseo' ); ?>
		</h2>
	</div>
	<?php
}
