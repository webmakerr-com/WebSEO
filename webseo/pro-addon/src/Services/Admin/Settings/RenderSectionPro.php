<?php

namespace SEOPressPro\Services\Admin\Settings;

defined('ABSPATH') or exit('Cheatin&#8217; uh?');

class RenderSectionPro
{
	/**
	 * @since 4.5.0
	 *
	 * @param string $key
	 */
	public function render($key)
	{
		$docs     = function_exists('seopress_get_docs_links') ? seopress_get_docs_links() : '';

		$breadcrumbs_desc = __('Configure your breadcrumbs, using schema.org markup, allowing it to appear in Google\'s search results.', 'webseo') . ' <a class="seopress-help" href="https://developers.google.com/search/docs/data-types/breadcrumb" target="_blank" title="' . __('Google developers website (new window)', 'webseo') . '">' . __('Lean more on Google developers website', 'webseo') . '</a><span class="seopress-help dashicons dashicons-external"></span>';

		$sections = [
			'local-business'=> [
				'toggle' => 1,
				'title'  => __('Local Business', 'webseo'),
				'desc'   => sprintf(
					/* translators: 1: Local Business widget URL, 2: Google EAT URL */
					__('Local Business data type for Google. This schema will be displayed on the homepage. <br>You can also display these informations using our <a href="%1$s">Local Business widget</a> or Local Business block to optimize your site for <a class="seopress-help" href="%2$s" target="_blank" title="Optimizing WordPress sites for Google EAT (new window)">Google EAT</a><span class="seopress-help dashicons dashicons-external"></span>.', 'webseo'),
					admin_url('widgets.php'),
					$docs['lb']['eat']
				),
			],
			'edd'=> [
				'toggle' => 1,
				'title'  => __('Easy Digital Downloads', 'webseo'),
				'desc'   => __('Improve Easy Digital Downloads SEO.', 'webseo'),
			],
			'woocommerce'=> [
				'toggle' => 1,
				'title'  => __('WooCommerce', 'webseo'),
				'desc'   => __('Improve WooCommerce SEO. By enabling this feature, we‘ll automatically add <strong>product identifiers type</strong> and <strong>product identifiers value</strong> fields to the WooCommerce product metabox (barcode) for the Product schema.', 'webseo'),
				'alert'  => sprintf(
					/* translators: 1: robots.txt URL */
					__('We also recommend <a class="nav-tab" %s>adding WooCommerce directives to your robots.txt</a> file to reduce your crawl budget.','webseo'), 'id="tab_seopress_robots-tab" href="?page=seopress-pro-page#tab=tab_seopress_robots" style="
				display: inline;
				margin: inherit;
				padding: inherit;
				color: var(--primaryColor);
				opacity: inherit;
				font-size: inherit;
				text-decoration: underline;
				font-weight: bold;
				line-height: inherit;
			"'),
			],
			'alerts'=> [
				'toggle' => 1,
				'title'  => __('SEO Alerts', 'webseo'),
				'desc'   => __('Receive alerts by email/Slack about your SEO before it‘s too late.', 'webseo'),
			],
			'dublin-core'=> [
				'toggle' => 1,
				'title'  => __('Dublin Core', 'webseo'),
				'desc'   => __('Dublin Core is a set of meta tags to describe your content.<br> These tags are automatically generated. Recognized by states / governements, they are used by directories, Bing, Baidu and Yandex.', 'webseo'),
			],
			'rich-snippets'=> [
				'toggle' => 1,
				'title'  => __('Structured Data Types (schema.org)', 'webseo'),
				'desc'   => __('Add Structured Data Types support, mark your content, and get better Google Search Results.', 'webseo'),
			],
			'page-speed'=> [
				'title' => __('PageSpeed Insights', 'webseo'),
				'desc'  => __('Check your site performance with Google PageSpeed Insights.', 'webseo'),
			],
			'inspect-url'=> [
				'toggle' => 1,
				'title' => __('Google Search Console', 'webseo'),
				'desc'  => __('Get insights from your post / page / post type list with <strong>clicks, positions, CTR and impressions</strong>. <br>Inspect your URL for details about crawling, indexing, mobile compatibility, schemas and more from the <strong>Content Analysis</strong> metabox / tab. <br>Display the Search Console widget from the SEO dashboard with useful insights.', 'webseo'),
			],
			'robots'=> [
				'toggle' => 1,
				'title'  => __('robots.txt', 'webseo'),
				'desc'   => __('Configure your virtual robots.txt file.', 'webseo'),
			],
			'news'=> [
				'toggle' => 1,
				'title'  => __('Google News', 'webseo'),
				'desc'   => __('Enable your Google News Sitemap.', 'webseo'),
			],
			'404'=> [
				'toggle' => 1,
				'title'  => __('404 monitoring / Redirections', 'webseo'),
				'desc'   => __('Monitor 404 urls in your Dashboard. Crawlers (robots/spiders) will be automatically exclude (e.g. Google Bot, Yahoo, Bing...).', 'webseo'),
			],
			'htaccess'=> [
				'title' => __('.htaccess', 'webseo'),
				'desc'  => __('Edit your htaccess file.', 'webseo'),
			],
			'rss'=> [
				'title' => __('RSS feeds', 'webseo'),
				'desc'  => sprintf(
					/* translators: 1: RSS feed URL */
					__('Configure WordPress default feeds. <br><br><a href="%1$s" class="btn btnSecondary" target="_blank">View my RSS feed</a>', 'webseo'),
					get_home_url() . '/feed'
				),
			],
			'white-label'=> [
				'toggle' => 1,
				'title'  => __('White Label', 'webseo'),
				'desc'   => __('Enable White Label.', 'webseo'),
			],
			'breadcrumbs'=> [
				'toggle' => 1,
				'title'  => __('Breadcrumbs', 'webseo'),
				'desc'   => $breadcrumbs_desc,
			],
			'ai'=> [
				'toggle' => 1,
				'title'  => __('AI', 'webseo'),
				'desc'   => __('Use the power of AI to improve your productivity.', 'webseo'),
			],
		];

		if (! empty($sections)) {
			if ('1' == seopress_get_toggle_option($key)) {
				$seopress_get_toggle_option = '1';
			} else {
				$seopress_get_toggle_option = '0';
			} ?>
<div class="sp-section-header">
	<h2>
		<?php echo esc_html($sections[$key]['title']); ?>
	</h2>

	<?php if (! empty($sections[$key]['toggle']) && 1 == $sections[$key]['toggle']) { ?>
	<div class="wrap-toggle-checkboxes">
		<input type="checkbox" name="toggle-<?php echo esc_attr($key); ?>"
			id="toggle-<?php echo esc_attr($key); ?>" class="toggle"
			data-toggle="<?php echo esc_attr($seopress_get_toggle_option); ?>">
		<label for="toggle-<?php echo esc_attr($key); ?>"></label>

		<?php
				if ('1' == $seopress_get_toggle_option) { ?>
		<span id="<?php echo esc_attr($key); ?>-state-default"
			class="feature-state">
			<span class="dashicons dashicons-arrow-left-alt"></span>
			<?php esc_html_e('Click to disable this feature', 'webseo'); ?>
		</span>
		<span id="<?php echo esc_attr($key); ?>-state"
			class="feature-state feature-state-off">
			<span class="dashicons dashicons-arrow-left-alt"></span>
			<?php esc_html_e('Click to enable this feature', 'webseo'); ?>
		</span>
		<?php } else { ?>
		<span id="<?php echo esc_attr($key); ?>-state-default"
			class="feature-state">
			<span class="dashicons dashicons-arrow-left-alt"></span>
			<?php esc_html_e('Click to enable this feature', 'webseo'); ?>
		</span>
		<span id="<?php echo esc_attr($key); ?>-state"
			class="feature-state feature-state-off">
			<span class="dashicons dashicons-arrow-left-alt"></span>
			<?php esc_html_e('Click to disable this feature', 'webseo'); ?>
		</span>
		<?php } ?>
	</div>
	<?php } ?>
</div>
<p>
	<?php echo wp_kses_post($sections[$key]['desc']); ?>
</p>
<p><?php if (isset($sections[$key]['alert'])) {
	echo '<div class="seopress-notice"><p>' . wp_kses_post($sections[$key]['alert']) . '</p></div>';
	} ?>
</p>
<?php
		}
	}
}
