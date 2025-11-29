<?php

defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');

function seopress_print_pro_section($key)
{
	$docs = function_exists('seopress_get_docs_links') ? seopress_get_docs_links() : '';

	$breadcrumbs_desc =     '<div class="seopress-sub-tabs"><a href="#seopress-breadcrumbs-enable">' . esc_attr__('Enable', 'webseo'). '</a> | <a href="#seopress-breadcrumbs-customize">' . esc_attr__('Customize', 'webseo'). '</a> | <a href="#seopress-breadcrumbs-translations">' . esc_attr__('Translations', 'webseo') . '</a> | <a href="#seopress-breadcrumbs-misc">' . esc_attr__('Misc', 'webseo') . '</a></div> '. __('Configure your breadcrumbs, using schema.org markup, allowing it to appear in Google\'s search results.', 'webseo') . '
	<a class="seopress-help" href="https://developers.google.com/search/docs/data-types/breadcrumb" target="_blank" title="' . __('Google developers website (new window)', 'webseo') . '">
	' . __('Lean more on Google developers website', 'webseo') . '
	</a>
	<span class="seopress-help dashicons dashicons-external"></span>';

	$ai_desc = __('Use the power of <strong>AI</strong> to improve your productivity.', 'webseo') . '
	<div class="seopress-sub-tabs">
		<a href="#seopress-ai-general">' . esc_attr__('General', 'webseo') . '</a> |
		<a href="#seopress-ai-deepseek">' . esc_attr__('DeepSeek', 'webseo') . '</a> |
		<a href="#seopress-ai-openai">' . esc_attr__('OpenAI', 'webseo') . '</a> |
		<a href="#seopress-ai-logs">' . esc_attr__('Logs', 'webseo') . '</a>
	</div>';

	$sections = [
		'local-business' => [
			'toggle' => 1,
			'title'  => __('Local Business', 'webseo'),
			'desc'   => sprintf(
				/* translators: %1$s widgets admin URL, %2$s documentation URL */
				__('Local Business data type for Google. This schema will be displayed on the homepage. <br>You can also display these informations using our <a href="%1$s">Local Business widget</a> or Local Business block to optimize your site for <a class="seopress-help" href="%2$s" target="_blank" title="Optimizing WordPress sites for Google EAT (new window)">Google EAT</a><span class="seopress-help dashicons dashicons-external"></span>.', 'webseo'), 
				esc_url(admin_url('widgets.php')), 
				esc_url($docs['lb']['eat'])
			),
		],
		'edd' => [
			'toggle' => 1,
			'title'  => __('Easy Digital Downloads', 'webseo'),
			'desc'   => __('Improve Easy Digital Downloads SEO.', 'webseo'),
		],
		'woocommerce' => [
			'toggle' => 1,
			'title'  => __('WooCommerce', 'webseo'),
			'desc'   => __('Improve WooCommerce SEO. By enabling this feature, we‘ll automatically add <strong>product identifiers type</strong> and <strong>product identifiers value</strong> fields to the WooCommerce product metabox (barcode) for the Product schema.', 'webseo'),
			'alert'  => sprintf(
				/* translators: %s href + ID attributes */
				__('We also recommend <a class="nav-tab" %s>adding WooCommerce directives to your robots.txt</a> file to reduce your crawl budget.', 'webseo'), 
				'id="tab_seopress_robots-tab" href="?page=seopress-pro-page#tab=tab_seopress_robots" style="
			margin: inherit;
            display: inline;
			padding: inherit;
			color: var(--primaryColor);
			opacity: inherit;
			font-size: inherit;
			text-decoration: underline;
			font-weight: bold;
			line-height: inherit;
		"'),
		],
		'alerts' => [
			'toggle' => 1,
			'title'  => __('SEO Alerts', 'webseo'),
			'desc'   => __('Receive alerts by email/Slack about important SEO issues before it‘s too late. We check major problem twice a day.', 'webseo'),
		],
		'dublin-core' => [
			'toggle' => 1,
			'title'  => __('Dublin Core', 'webseo'),
			'desc'   => __('Dublin Core is a set of meta tags to describe your content.<br> These tags are automatically generated. Recognized by states / governements, they are used by directories, Bing, Baidu and Yandex.', 'webseo'),
		],
		'rich-snippets' => [
			'toggle' => 1,
			'title'  => __('Structured Data Types (schema.org)', 'webseo'),
			'desc'   => sprintf(
				/* translators: %s documentation URL */
				__('Add Structured Data Types support, mark your content, and get better Google Search Results. <a class="seopress-help" href="%s" target="_blank">Learn More</a><span class="seopress-help dashicons dashicons-external"></span>', 'webseo'), 
				esc_url($docs['schemas']['ebook'])
			),
		],
		'page-speed' => [
			'title' => __('PageSpeed Insights', 'webseo'),
			'desc'  => __('Check your site performance with Google PageSpeed Insights.', 'webseo'),
		],
		'inspect-url' => [
			'toggle' => 1,
			'title' => __('Google Search Console', 'webseo'),
			'desc'  => __('Get insights from your post / page / post type list with <strong>clicks, positions, CTR and impressions</strong>. <br>Inspect your URL for details about crawling, indexing, mobile compatibility, schemas and more from the <strong>Content Analysis</strong> metabox / tab. <br>Display the Search Console widget from the SEO dashboard with useful insights.', 'webseo'),
		],
		'robots' => [
			'toggle' => 1,
			'title'  => __('robots.txt', 'webseo'),
			'desc'   => __('Configure your virtual robots.txt file.', 'webseo'),
		],
		'news' => [
			'toggle' => 1,
			'title'  => __('Google News', 'webseo'),
			'desc'   => __('Enable your Google News Sitemap.', 'webseo'),
		],
		'404' => [
			'toggle' => 1,
			'title'  => __('404 monitoring / Redirections', 'webseo'),
			'desc'   => __('Monitor 404 urls in your Dashboard. Crawlers (robots/spiders) will be automatically exclude (e.g. Google Bot, Yahoo, Bing...).', 'webseo'),
		],
		'htaccess' => [
			'title' => __('.htaccess', 'webseo'),
			'desc'  => __('Edit your htaccess file.', 'webseo'),
		],
		'rss' => [
			'title' => __('RSS feeds', 'webseo'),
			'desc'  => /* translators: %s home URL */ sprintf(__('Configure WordPress default feeds. <br><br><a href="%s" class="btn btnTertiary" target="_blank">View my RSS feed</a>', 'webseo'), esc_url(get_home_url() . '/feed')),
		],
		'white-label' => [
			'toggle' => 1,
			'title'  => __('White Label', 'webseo'),
			'desc'   => __('Enable White Label.', 'webseo'),
		],
		'breadcrumbs' => [
			'toggle' => 1,
			'title'  => __('Breadcrumbs', 'webseo'),
			'desc'   => $breadcrumbs_desc,
		],
		'ai' => [
			'toggle' => 1,
			'title'  => __('AI (beta)', 'webseo'),
			'desc'   => $ai_desc,
		],
	];

	if (!empty($sections)) {
		if ('1' == seopress_get_toggle_option($key)) {
			$seopress_get_toggle_option = '1';
		} else {
			$seopress_get_toggle_option = '0';
		} ?>
		<div class="sp-section-header">
			<h2>
				<?php echo esc_html($sections[$key]['title']); ?>
			</h2>
			<?php if (!empty($sections[$key]['toggle']) && 1 == $sections[$key]['toggle']) { ?>
				<div class="wrap-toggle-checkboxes">
					<input type="checkbox" name="toggle-<?php echo esc_attr($key); ?>" id="toggle-<?php echo esc_attr($key); ?>" class="toggle" data-toggle="<?php echo absint($seopress_get_toggle_option); ?>">
					<label for="toggle-<?php echo esc_attr($key); ?>"></label>

					<?php
					if ('1' == $seopress_get_toggle_option) { ?>
						<span id="<?php echo esc_attr($key); ?>-state-default" class="feature-state">
							<span class="dashicons dashicons-arrow-left-alt"></span>
							<?php esc_html_e('Click to disable this feature', 'webseo'); ?>
						</span>
						<span id="<?php echo esc_attr($key); ?>-state" class="feature-state feature-state-off">
							<span class="dashicons dashicons-arrow-left-alt"></span>
							<?php esc_html_e('Click to enable this feature', 'webseo'); ?>
						</span>
					<?php } else { ?>
						<span id="<?php echo esc_attr($key); ?>-state-default" class="feature-state">
							<span class="dashicons dashicons-arrow-left-alt"></span>
							<?php esc_html_e('Click to enable this feature', 'webseo'); ?>
						</span>
						<span id="<?php echo esc_attr($key); ?>-state" class="feature-state feature-state-off">
							<span class="dashicons dashicons-arrow-left-alt"></span>
							<?php esc_html_e('Click to disable this feature', 'webseo'); ?>
						</span>
					<?php }
					?>
				</div>
			<?php } ?>
		</div>

		<p><?php echo wp_kses_post($sections[$key]['desc']); ?></p>

		<?php if (isset($sections[$key]['alert'])) { ?>
			<div class="seopress-notice">
				<p><?php echo $sections[$key]['alert']; ?></p>
			</div>
		<?php } ?>
<?php
	}
}
