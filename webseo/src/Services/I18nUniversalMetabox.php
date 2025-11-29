<?php // phpcs:ignore

namespace WebSEO\Services;

use WebSEO\Helpers\Currencies;
use WebSEO\Helpers\Schemas\Course;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * I18nUniversalMetabox
 */
class I18nUniversalMetabox {

	/**
	 * The getTranslations function.
	 *
	 * @return array
	 */
	public function getTranslations() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.

		return array(
			'generic'        => array(
				'pixels'                  => __( 'pixels', 'webseo' ),
				'save'                    => __( 'Save', 'webseo' ),
				'save_settings'           => __( 'Your settings have been saved.', 'webseo' ),
				'yes'                     => __( 'Yes', 'webseo' ),
				'good'                    => __( 'Good', 'webseo' ),
				'expand'                  => __( 'Expand', 'webseo' ),
				'close'                   => __( 'Close', 'webseo' ),
				'title'                   => __( 'Title', 'webseo' ),
				'twitter'                 => __( 'X', 'webseo' ),
				'maximum_limit'           => __( 'maximum limit', 'webseo' ),
				'choose_image'            => __( 'Choose an image', 'webseo' ),
				'opening_hours_morning'   => __( 'Open in the morning?', 'webseo' ),
				'opening_hours_afternoon' => __( 'Open in the afternoon?', 'webseo' ),
				'thumbnail'               => __( 'Thumbnail', 'webseo' ),
				'x'                       => __( 'x', 'webseo' ),
				'search_tag'              => __( 'Search a tag', 'webseo' ),
				'loading_data'            => __( 'Loading your data', 'webseo' ),
			),
			'services'       => array(
				'social_meta_tags_title' => __( 'Social meta tags', 'webseo' ),
				'twitter'                => array(
					'title'                    => __( 'X Title', 'webseo' ),
					'description'              => __( 'X Description', 'webseo' ),
					'image'                    => __( 'X Image', 'webseo' ),
					/* translators: %s X tag, eg: twitter:title */
					'missing'                  => __(
						'Your %s is missing!',
						'webseo'
					),
					'we_founded'               => __( 'We found', 'webseo' ),
					'we_founded_2'             => __( 'in your content.', 'webseo' ),
					'help_twitter_title'       => __(
						'You should not use more than one twitter:title in your post content to avoid conflicts when sharing on social networks. X will take the last twitter:title tag from your source code. Below, the list:',
						'webseo'
					),
					'help_twitter_description' => __(
						'You should not use more than one twitter:description in your post content to avoid conflicts when sharing on social networks. X will take the last twitter:description tag from your source code. Below, the list:',
						'webseo'
					),
					'we_founded_tag'           => __( 'We found a', 'webseo' ),
					'we_founded_tag_2'         => __( 'tag in your source code.', 'webseo' ),
					/* translators: %s X tag, eg: twitter:title */
					'tag_empty'                => __(
						'Your %s tag is empty!',
						'webseo'
					),

				),
				'open_graph'             => array(
					'title'               => __( 'Open Graph', 'webseo' ),
					'description'         => __( 'Description', 'webseo' ),
					'image'               => __( 'Image', 'webseo' ),
					'url'                 => __( 'URL', 'webseo' ),
					'site_name'           => __( 'Site Name', 'webseo' ),
					/* translators: %s Facebook tag, eg: og:title */
					'missing'             => __(
						'Your Open Graph %s is missing!',
						'webseo'
					),
					'we_founded'          => __( 'We found', 'webseo' ),
					'we_founded_2'        => __( 'in your content.', 'webseo' ),
					'help_og_title'       => __(
						'You should not use more than one og:title in your post content to avoid conflicts when sharing on social networks. Facebook will take the last og:title tag from your source code. Below, the list:',
						'webseo'
					),
					'help_og_description' => __(
						'You should not use more than one og:description in your post content to avoid conflicts when sharing on social networks. Facebook will take the last og:description tag from your source code. Below, the list:',
						'webseo'
					),
					'help_og_url'         => __(
						'You should not use more than one og:url in your post content to avoid conflicts when sharing on social networks. Facebook will take the last og:url tag from your source code. Below, the list:',
						'webseo'
					),
					'help_og_site_name'   => __(
						'You should not use more than one og:site_name in your post content to avoid conflicts when sharing on social networks. Facebook will take the last og:site_name tag from your source code. Below, the list:',
						'webseo'
					),
					'we_founded_tag'      => __( 'We found an Open Graph', 'webseo' ),
					'we_founded_tag_2'    => __( 'tag in your source code.', 'webseo' ),
					/* translators: %s Facebook tag, eg: og:title */
					'tag_empty'           => __(
						'Your Open Graph %s tag is empty!',
						'webseo'
					),
				),
				'content_analysis'       => array(
					'meta_title'       => array(
						'title'               => __( 'Meta title', 'webseo' ),
						'no_meta_title'       => __(
							'No custom title is set for this post. If the global meta title suits you, you can ignore this recommendation.',
							'webseo'
						),
						'meta_title_found'    => __(
							'Target keywords were found in the Meta Title.',
							'webseo'
						),
						/* translators: %1$s target keyword %2$s number of times */
						'meta_title_found_in' => __(
							'%1$s was found %2$s times.',
							'webseo'
						),
						'empty_matches'       => __(
							'None of your target keywords were found in the Meta Title.',
							'webseo'
						),
						'too_long'            => __( 'Your custom title is too long.', 'webseo' ),
						'length'              => __( 'The length of your title is correct.', 'webseo' ),

					),
					'meta_description' => array(
						'title'                     => __( 'Meta description', 'webseo' ),
						'no_meta_description'       => __(
							'No custom meta description is set for this post. If the global meta description suits you, you can ignore this recommendation.',
							'webseo'
						),
						'meta_description_found'    => __(
							'Target keywords were found in the Meta description.',
							'webseo'
						),
						/* translators: %1$s target keyword %2$s number of times */
						'meta_description_found_in' => __(
							'%1$s was found %2$s times.',
							'webseo'
						),
						'no_meta_description_found' => __(
							'None of your target keywords were found in the Meta description.',
							'webseo'
						),
						'too_long'                  => __(
							'You custom meta description is too long.',
							'webseo'
						),
						'length'                    => __(
							'The length of your meta description is correct',
							'webseo'
						),
					),
					'meta_robots'      => array(
						'title'                  => __( 'Meta robots', 'webseo' ),
						'empty_metas'            => __(
							'We found no meta robots on this page. It means, your page is index,follow. Search engines will index it, and follow links. ',
							'webseo'
						),
						/* translators: %s number of meta robots */
						'founded_multiple_metas' => __(
							'We found %s meta robots in your page. There is probably something wrong with your theme!',
							'webseo'
						),
						'noindex_on'             => __(
							"is on! Search engines can't index this page.",
							'webseo'
						),
						'noindex_off'            => __(
							'is off. Search engines will index this page.',
							'webseo'
						),
						'nofollow_on'            => __(
							"is on! Search engines can't follow your links on this page.",
							'webseo'
						),
						'nofollow_off'           => __(
							'is off. Search engines will follow links on this page.',
							'webseo'
						),
						'noimageindex_on'        => __(
							'is on! Google will not index your images on this page (but if someone makes a direct link to one of your image in this page, it will be indexed).',
							'webseo'
						),
						'noimageindex_off'       => __(
							'is off. Google will index the images on this page.',
							'webseo'
						),
						'nosnippet_on'           => __(
							'is on! Search engines will not display a snippet of this page in search results.',
							'webseo'
						),
						'nosnippet_off'          => __(
							'is off. Search engines will display a snippet of this page in search results.',
							'webseo'
						),
					),
					'outbound_links'   => array(
						'title'                => __( 'Outbound Links', 'webseo' ),
						'description'          => __(
							'Internet is built on the principle of hyperlink. It is therefore perfectly normal to make links between different websites. However, avoid making links to low quality sites, SPAM... If you are not sure about the quality of a site, add the attribute "nofollow" to your link.',
							'webseo'
						),
						'no_outbound_links'    => __(
							"This page doesn't have any outbound links.",
							'webseo'
						),
						/* translators: %s number of outbound links */
						'outbound_links_count' => __(
							'We found %s outbound links in your page. Below, the list:',
							'webseo'
						),
					),
					'old_post'         => array(
						'bad'         => __( 'This post is a little old!', 'webseo' ),
						'good'        => __(
							'The last modified date of this article is less than 1 year. Cool!',
							'webseo'
						),
						'description' => __(
							'Search engines love fresh content. Update regularly your articles without entirely rewriting your content and give them a boost in search rankings. SEOPress takes care of the technical part.',
							'webseo'
						),
						'title'       => __( 'Last modified date', 'webseo' ),
					),
					'headings'         => array(
						/* translators: %1$s heading name, eg: h2, %2$s heading number, eg: 2 */
						'head'                      => __(
							'Target keywords were found in Heading %1$s (H%2$s).',
							'webseo'
						),
						/* translators: %s heading number, eg: 2 */
						'heading_hn'                => __( 'Heading H%s', 'webseo' ),
						'heading'                   => __( 'Heading', 'webseo' ),
						'no_heading'                => __(
							'No custom title is set for this post. If the global meta title suits you, you can ignore this recommendation.',
							'webseo'
						),
						/* translators: %1$s heading name, eg: h2, %2$s heading number, eg: 2 */
						'no_heading_detail'         => __(
							'No Heading %1$s (H%2$s) found in your content. This is required for both SEO and Accessibility!',
							'webseo'
						),
						/* translators: %1$s heading name, eg: h2, %2$s heading number, eg: 2 */
						'no_target_keywords_detail' => __(
							'None of your target keywords were found in Heading %1$s (H%2$s).',
							'webseo'
						),
						/* translators: %1$s heading name found %2$s times, eg: H2 was found 2 times */
						'match'                     => __(
							'%1$s was found %2$s times.',
							'webseo'
						),
						/* translators: %s number of times a heading is found, eg: 1 */
						'count_h1'                  => __(
							'We found %s Heading 1 (H1) in your content.',
							'webseo'
						),
						'count_h1_detail'           => __(
							'You should not use more than one H1 heading in your post content. The rule is simple: only one H1 for each web page. It is better for both SEO and accessibility. Below, the list:',
							'webseo'
						),
						'below_h1'                  => __( 'Below the list:', 'webseo' ),
						'title'                     => __( 'Headings', 'webseo' ),
					),
					'images'           => array(
						'bad'                             => __(
							'We could not find any image in your content. Content with media is a plus for your SEO.',
							'webseo'
						),
						'good'                            => __(
							'All alternative tags are filled in. Good work!',
							'webseo'
						),
						'no_alternative_text'             => __(
							'No alternative text found for these images. Alt tags are important for both SEO and accessibility. Edit your images using the media library or your favorite page builder and fill in alternative text fields.',
							'webseo'
						),
						'description_no_alternative_text' => __(
							'Note that we scan all your source code, it means, some missing alternative texts of images might be located in your header, sidebar or footer.',
							'webseo'
						),
						'title'                           => __( 'Alternative texts of images', 'webseo' ),
					),
					'internal_links'   => array(
						'description'          => __(
							'Internal links are important for SEO and user experience. Always try to link your content together, with quality link anchors.',
							'webseo'
						),
						'no_internal_links'    => __(
							"This page doesn't have any internal links from other content. Links from archive pages are not considered internal links due to lack of context.",
							'webseo'
						),
						/* translators: %s number of internal links */
						'internal_links_count' => __(
							'We found %s internal links in your page. Below, the list:',
							'webseo'
						),
						'title'                => __( 'Internal Links', 'webseo' ),
					),
					'kws_permalink'    => array(
						'no_apply' => __(
							"This is your homepage. This check doesn't apply here because there is no slug.",
							'webseo'
						),
						'bad'      => __(
							'You should add one of your target keyword in your permalink.',
							'webseo'
						),
						'good'     => __(
							'Cool, one of your target keyword is used in your permalink.',
							'webseo'
						),
						'title'    => __( 'Keywords in permalink', 'webseo' ),
					),
					'no_follow_links'  => array(
						/* translators: %s number of times a nofollow link is found, eg: 1 */
						'founded'    => __(
							'We found %s links with nofollow attribute in your page. Do not overuse nofollow attribute in links. Below, the list:',
							'webseo'
						),
						'no_founded' => __(
							"This page doesn't have any nofollow links.",
							'webseo'
						),
						'title'      => __( 'NoFollow Links', 'webseo' ),
					),

				),
				'canonical_url'          => array(
					'title'                   => __( 'Canonical URL', 'webseo' ),
					'head'                    => __(
						'A canonical URL is required by search engines to handle duplicate content.',
						'webseo'
					),
					'no_canonical'            => __(
						"This page doesn't have any canonical URL because your post is set to <strong>noindex</strong>. This is normal.",
						'webseo'
					),
					'no_canonical_no_index'   => __(
						"This page doesn't have any canonical URL.",
						'webseo'
					),
					/* translators: %d number of times a canonical tag is found, singular form only */
					'canonicals_found'        => __( 'We found %d canonical URL in your source code. Below, the list:', 'webseo' ),
					/* translators: %d number of times a canonical tag is found, plural form only */
					'canonicals_found_plural' => __( 'We found %d canonical URLs in your source code. Below, the list:', 'webseo' ),
					'multiple_canonicals'     => __( 'You must fix this. Canonical URL duplication is bad for SEO.', 'webseo' ),
					'duplicated'              => __( 'duplicated schema - x', 'webseo' ),
				),
				'schemas'                => array(
					'title'      => __( 'Structured Data Types (schemas)', 'webseo' ),
					'no_schema'  => __( 'No schemas found in the source code of this page. Get rich snippets in Google Search results and improve your visibility by adding structured data types (schemas) to your page.', 'webseo' ),
					'head'       => __( 'We found these schemas in the source code of this page:', 'webseo' ),
					'duplicated' => __( 'duplicated schema - x', 'webseo' ),

				),
			),
			'constants'      => array(
				'tabs'     => array(
					'title_description_meta' => __( 'Titles & Metas', 'webseo' ),
					'content_analysis'       => __( 'Content Analysis', 'webseo' ),
					'schemas'                => __( 'Schemas', 'webseo' ),
				),
				'sub_tabs' => array(
					'title_settings'   => __( 'Title settings', 'webseo' ),
					'social'           => __( 'Social', 'webseo' ),
					'advanced'         => __( 'Advanced', 'webseo' ),
					'redirection'      => __( 'Redirection', 'webseo' ),
					'google_news'      => __( 'Google News', 'webseo' ),
					'video_sitemap'    => __( 'Video Sitemap', 'webseo' ),
					'overview'         => __( 'Overview', 'webseo' ),
					'inspect_url'      => __( 'Inspect with Google', 'webseo' ),
					'internal_linking' => __( 'Internal Linking', 'webseo' ),
					'schema_manual'    => __( 'Manual', 'webseo' ),
				),
			),
			'seo_bar'        => array(
				'title' => __( 'SEO', 'webseo' ),
			),
			'forms'          => array(
				'maximum_limit'                  => __( 'maximum limit', 'webseo' ),
				'maximum_recommended_limit'      => __( 'maximum recommended limit', 'webseo' ),
				'meta_title_description'         => array(
					'title'                        => __( 'Title', 'webseo' ),
					'tooltip_title'                => __( 'Meta Title', 'webseo' ),
					'tooltip_description'          => __( "Titles are critical to give users a quick insight into the content of a result and why it’s relevant to their query. It's often the primary piece of information used to decide which result to click on, so it's important to use high-quality titles on your web pages.", 'webseo' ),
					'placeholder_title'            => __( 'Enter your title', 'webseo' ),
					'meta_description'             => __( 'Meta description', 'webseo' ),
					'tooltip_description_1'        => __( 'A meta description tag should generally inform and interest users with a short, relevant summary of what a particular page is about.', 'webseo' ),
					'tooltip_description_2'        => __( "They are like a pitch that convince the user that the page is exactly what they're looking for.", 'webseo' ),
					'tooltip_description_3'        => __( "There's no limit on how long a meta description can be, but the search result snippets are truncated as needed, typically to fit the device width.", 'webseo' ),
					'placeholder_description'      => __( 'Enter your description', 'webseo' ),
					'generate_ai'                  => __( 'Generate meta with AI', 'webseo' ),
					'generate_ai_title'            => __( 'Generate meta title with AI', 'webseo' ),
					'generate_ai_description'      => __( 'Generate meta description with AI', 'webseo' ),
					/* translators: %s Products archive meta settings page */
					'woocommerce_shop_page_notice' => __( 'This is your <strong>Shop page</strong>. Go to <a href="%s"><strong>SEO > Titles & Metas > Archives > Products</strong></a> to edit your title and meta description.', 'webseo' ),
				),
				'repeater_how_to'                => array(
					'title_step'       => __(
						'The title of the step (required)',
						'webseo'
					),
					'description_step' => __(
						'The text of your step (required)',
						'webseo'
					),
					'remove_step'      => __( 'Remove step', 'webseo' ),
					'add_step'         => __( 'Add step', 'webseo' ),
				),
				'repeater_negative_notes_review' => array(
					'title'  => __(
						'Your negative statement (required)',
						'webseo'
					),
					'remove' => __( 'Remove note', 'webseo' ),
					'add'    => __( 'Add a statement', 'webseo' ),
				),
				'repeater_positive_notes_review' => array(
					'title'  => __(
						'Your positive statement (required)',
						'webseo'
					),
					'remove' => __( 'Remove note', 'webseo' ),
					'add'    => __( 'Add a statement', 'webseo' ),
				),
				'repeater_course_offers'         => array(
					'title'         => __( 'Offer', 'webseo' ),
					'remove'        => __( 'Remove offer', 'webseo' ),
					'add'           => __( 'Add an offer', 'webseo' ),
					'category'      => __( 'Category', 'webseo' ),
					'priceCurrency' => __( 'Currency', 'webseo' ),
					'price'         => __( 'Price', 'webseo' ),
					'currencies'    => Currencies::getOptions(),
					'categories'    => Course::getCategories(),
				),
				'repeater_course_instances'      => array(
					'title'             => __( 'Instance', 'webseo' ),
					'remove'            => __( 'Remove instance', 'webseo' ),
					'add'               => __( 'Add an instance', 'webseo' ),
					'courseMode'        => __( 'Course Mode', 'webseo' ),
					'location'          => __( 'Location', 'webseo' ),
					'duration'          => __( 'Duration', 'webseo' ),
					'repeatCount'       => __( 'Repeat count', 'webseo' ),
					'repeatFrequency'   => __( 'Repeat frequency', 'webseo' ),
					'startDate'         => __( 'Start Date', 'webseo' ),
					'endDate'           => __( 'End Date', 'webseo' ),
					'courseModes'       => Course::getCourseModes(),
					'repeatFrequencies' => Course::getRepeatFrequencies(),
				),
			),
			'google_preview' => array(
				'title'        => __( 'Google Snippet Preview', 'webseo' ),
				'description'  => __(
					'This is what your page will look like in Google search results. You have to publish your post to get the Google Snippet Preview. Note that Google may optionally display an image of your article.',
					'webseo'
				),
				'mobile_title' => __( 'Mobile Preview', 'webseo' ),
			),
			'components'     => array(
				'repeated_faq' => array(
					'empty_question' => __(
						'Empty Question',
						'webseo'
					),
					'empty_answer'   => __(
						'Empty Answer',
						'webseo'
					),
					'question'       => __(
						'Question (required)',
						'webseo'
					),
					'answer'         => __(
						'Answer (required)',
						'webseo'
					),
					'remove'         => __( 'Remove question', 'webseo' ),
					'add'            => __( 'Add question', 'webseo' ),
				),
			),
			'layouts'        => array(
				'meta_robot'       => array(
					/* translators: %s documentation URL */
					'title'                                => __(
						"You cannot uncheck a parameter? This is normal, and it's most likely defined in the <a href='%s'>global settings of the plugin.</a>",
						'webseo'
					),
					'robots_index_description'             => __(
						'Do not display this page in search engine results / XML - HTML sitemaps',
						'webseo'
					),
					'robots_index_tooltip_title'           => __( '"noindex" robots meta tag', 'webseo' ),
					'robots_index_tooltip_description_1'   => __(
						'By checking this option, you will add a meta robots tag with the value "noindex".',
						'webseo'
					),
					'robots_index_tooltip_description_2'   => __(
						'Search engines will not index this URL in the search results.',
						'webseo'
					),
					'robots_follow_description'            => __( 'Do not follow links for this page', 'webseo' ),
					'robots_follow_tooltip_title'          => __( '"nofollow" robots meta tag', 'webseo' ),
					'robots_follow_tooltip_description_1'  => __(
						'By checking this option, you will add a meta robots tag with the value "nofollow".',
						'webseo'
					),
					'robots_follow_tooltip_description_2'  => __(
						'Search engines will not follow links from this URL.',
						'webseo'
					),
					'robots_snippet_description'           => __(
						'Do not display a description in search results for this page',
						'webseo'
					),
					'robots_snippet_tooltip_title'         => __( '"nosnippet" robots meta tag', 'webseo' ),
					'robots_snippet_tooltip_description_1' => __(
						'By checking this option, you will add a meta robots tag with the value "nosnippet".',
						'webseo'
					),
					'robots_imageindex_description'        => __( 'Do not index images for this page', 'webseo' ),
					'robots_imageindex_tooltip_title'      => __( '"noimageindex" robots meta tag', 'webseo' ),
					'robots_imageindex_tooltip_description_1' => __(
						'By checking this option, you will add a meta robots tag with the value "noimageindex".',
						'webseo'
					),
					'robots_imageindex_tooltip_description_2' => __(
						'Note that your images can always be indexed if they are linked from other pages.',
						'webseo'
					),
				),
				'inspect_url'      => array(
					'description'                       => __(
						'Inspect the current post URL with Google Search Console and get informations about your indexing, crawling, rich snippets and more.',
						'webseo'
					),
					'verdict_unspecified'               => array(
						'title'       => __( 'Unknown verdict', 'webseo' ),
						'description' => __(
							'The URL has been indexed, can appear in Google Search results, and no problems were found with any enhancements found in the page (structured data, linked AMP pages, and so on).',
							'webseo'
						),
					),
					'pass'                              => array(
						'title'       => __( 'URL is on Google', 'webseo' ),
						'description' => __(
							'The URL has been indexed, can appear in Google Search results, and no problems were found with any enhancements found in the page (structured data, linked AMP pages, and so on).',
							'webseo'
						),
					),
					'partial'                           => array(
						'title'       => __( 'URL is on Google, but has issues', 'webseo' ),
						'description' => __(
							'The URL has been indexed and can appear in Google Search results, but there are some problems that might prevent it from appearing with the enhancements that you applied to the page. This might mean a problem with an associated AMP page, or malformed structured data for a rich result (such as a recipe or job posting) on the page.',
							'webseo'
						),
					),
					'fail'                              => array(
						'title'       => __(
							'URL is not on Google: Indexing errors',
							'webseo'
						),
						'description' => __(
							'There was at least one critical error that prevented the URL from being indexed, and it cannot appear in Google Search until those issues are fixed.',
							'webseo'
						),
					),
					'neutral'                           => array(
						'title'       => __( 'URL is not on Google', 'webseo' ),
						'description' => __(
							'This URL won‘t appear in Google Search results, but we think that was your intention. Common reasons include that the page is password-protected or robots.txt protected, or blocked by a noindex directive.',
							'webseo'
						),
					),
					'indexing_state_unspecified'        => __( 'Unknown indexing status.', 'webseo' ),
					'indexing_allowed'                  => __( 'Indexing allowed.', 'webseo' ),
					'blocked_by_meta_tag'               => __(
						"Indexing not allowed, 'noindex' detected in 'robots' meta tag.",
						'webseo'
					),
					'blocked_by_http_header'            => __(
						"Indexing not allowed, 'noindex' detected in 'X-Robots-Tag' http header.",
						'webseo'
					),
					'blocked_by_robots_txt'             => __(
						'Indexing not allowed, blocked to Googlebot with a robots.txt file.',
						'webseo'
					),
					'page_fetch_state_unspecified'      => __( 'Unknown fetch state.', 'webseo' ),
					'successful'                        => __( 'Successful fetch.', 'webseo' ),
					'soft_404'                          => __( 'Soft 404.', 'webseo' ),
					'blocked_robots_txt'                => __( 'Blocked by robots.txt.', 'webseo' ),
					'not_found'                         => __( 'Not found (404).', 'webseo' ),
					'access_denied'                     => __(
						'Blocked due to unauthorized request (401).',
						'webseo'
					),
					'server_error'                      => __( 'Server error (5xx).', 'webseo' ),
					'redirect_error'                    => __( 'Redirection error.', 'webseo' ),
					'access_forbidden'                  => __( 'Blocked due to access forbidden (403).', 'webseo' ),
					'blocked_4xx'                       => __(
						'Blocked due to other 4xx issue (not 403, 404).',
						'webseo'
					),
					'internal_crawl_error'              => __( 'Internal error.', 'webseo' ),
					'invalid_url'                       => __( 'Invalid URL.', 'webseo' ),
					'crawling_user_agent_unspecified'   => __( 'Unknown user agent.', 'webseo' ),
					'desktop'                           => __( 'Googlebot desktop', 'webseo' ),
					'mobile'                            => __( 'Googlebot smartphone', 'webseo' ),
					'robots_txt_state_unspecified'      => __(
						'Unknown robots.txt state, typically because the page wasn‘t fetched or found, or because robots.txt itself couldn‘t be reached.',
						'webseo'
					),
					'disallowed'                        => __( 'Crawl blocked by robots.txt.', 'webseo' ),
					'mobile_verdict_unspecified_title'  => __( 'No data available', 'webseo' ),
					'mobile_verdict_unspecified_description' => __(
						"For some reason we couldn't retrieve the page or test its mobile-friendliness. Please wait a bit and try again.",
						'webseo'
					),
					'mobile_pass_title'                 => __( 'Page is mobile friendly', 'webseo' ),
					'mobile_pass_description'           => __(
						'The page should probably work well on a mobile device.',
						'webseo'
					),
					'mobile_fail_title'                 => __( 'Page is not mobile friendly', 'webseo' ),
					'mobile_fail_description'           => __(
						'The page won‘t work well on a mobile device because of a few issues.',
						'webseo'
					),
					'rich_snippets_verdict_unspecified' => __( 'No data available', 'webseo' ),
					'rich_snippets_pass'                => __( 'Your Rich Snippets are valid', 'webseo' ),
					'rich_snippets_fail'                => __( 'Your Rich Snippets are not valid', 'webseo' ),
					'discovery'                         => __( 'Discovery', 'webseo' ),
					'discovery_sitemap'                 => __( 'Sitemaps', 'webseo' ),
					'discovery_referring_urls'          => __( 'Referring page', 'webseo' ),
					'crawl'                             => __( 'Crawl', 'webseo' ),
					'crawl_last_crawl_time'             => __( 'Last crawl', 'webseo' ),
					'crawl_crawled_as'                  => __( 'Crawled as', 'webseo' ),
					'crawl_allowed'                     => __( 'Crawl allowed?', 'webseo' ),
					'crawl_page_fetch'                  => __( 'Page fetch', 'webseo' ),
					'crawl_indexing'                    => __( 'Indexing allowed?', 'webseo' ),
					'indexing_title'                    => __( 'Indexing', 'webseo' ),
					'indexing_user_canonical'           => __( 'User-declared canonical', 'webseo' ),
					'indexing_google_canonical'         => __( 'Google-selected canonical', 'webseo' ),
					'enhancements_title'                => __( 'Enhancements', 'webseo' ),
					'enhancements_mobile'               => __( 'Mobile Usability', 'webseo' ),
					'enhancements_rich_snippets'        => __( 'Rich Snippets detected', 'webseo' ),
					'btn_inspect_url'                   => __( 'Inspect URL with Google', 'webseo' ),
					'notice_empty_api_key'              => __(
						'No data found, click Inspect URL button above.',
						'webseo'
					),
					'btn_full_report'                   => __( 'View Full Report', 'webseo' ),
				),
				'video_sitemap'    => array(
					'btn_remove_video' => __(
						'Remove video',
						'webseo'
					),
					'btn_add_video'    => __( 'Add video', 'webseo' ),
				),
				'internal_linking' => array(
					'matching'       => __( 'Matching word:', 'webseo' ),
					'description_1'  => __(
						'Internal links are important for SEO and user experience. Always try to link your content together, with quality link anchors.',
						'webseo'
					),
					'description_2'  => __(
						'Here is a list of articles related to your content, sorted by relevance, that you should link to.',
						'webseo'
					),
					'no_suggestions' => __( 'No suggestion of internal links.', 'webseo' ),
					'copied'         => __(
						'Link copied in the clipboard',
						'webseo'
					),
					/* translators: %s post title */
					'copy_link'      => __( 'Copy %s link', 'webseo' ),
					'open_link'      => __(
						'Open this link in a new window',
						'webseo'
					),
					'edit_link'      => __(
						'Edit this link in a new window',
						'webseo'
					),
					/* translators: %s post title */
					'edit_link_aria' => __( 'Edit %s link', 'webseo' ),
				),
				'content_analysis' => array(
					'description'                    => __(
						'Enter a few keywords for analysis to help you write optimized content.',
						'webseo'
					),
					'title_severity'                 => /* translators: %s degree of severity, eg: low */ __( 'Degree of severity: %s', 'webseo' ),
					'target_keywords'                => __( 'Target keywords', 'webseo' ),
					'target_keywords_description'    => __(
						'Separate target keywords by pressing Enter.',
						'webseo'
					),
					'target_keywords_multiple_usage' => __(
						'You should avoid using multiple times the same keyword for different pages. Try to consolidate your content into one single page.',
						'webseo'
					),
					'target_keywords_details'        => __( '(URL using this keyword)', 'webseo' ),
					'target_keywords_placeholder'    => __(
						'Enter your target keywords',
						'webseo'
					),
					'btn_refresh_analysis'           => __( 'Refresh analysis', 'webseo' ),
					'help_target_keywords'           => __(
						'To get the most accurate analysis, save your post first. We analyze all of your source code as a search engine would.',
						'webseo'
					),
					'google_suggestions'             => __( 'Google suggestions', 'webseo' ),
					'google_suggestions_description' => __(
						'Enter a keyword, or a phrase, to find the top 10 Google suggestions instantly. This is useful if you want to work with the long tail technique.',
						'webseo'
					),
					'google_suggestions_placeholder' => __(
						'Get suggestions from Google',
						'webseo'
					),
					'get_suggestions'                => __( 'Get suggestions!', 'webseo' ),
					'should_be_improved'             => __( 'Should be improved', 'webseo' ),
					'keyword_singular'               => __( 'The keyword:', 'webseo' ),
					'keyword_plural'                 => __( 'These keywords:', 'webseo' ),
					'already_used_singular'          => /* translators: %d number of times a target keyword is used, singular form only */ __( 'is already used %d time', 'webseo' ),
					'already_used_plural'            => /* translators: %d number of times a target keyword is used, plural form only */ __( 'is already used %d times', 'webseo' ),
				),
				'schemas_manual'   => array(
					'description' => __( 'It is recommended to enter as many properties as possible to maximize the chances of getting a rich snippet in Google search results.', 'webseo' ),
					'remove'      => __( 'Delete schema', 'webseo' ),
					'add'         => __( 'Add a schema', 'webseo' ),
				),
				'social'           => array(
					'title'          => __(
						'LinkedIn, Instagram, WhatsApp and Pinterest use the same social metadata as Facebook. X does the same if no X Cards tags are defined below.',
						'webseo'
					),
					'facebook_title' => __(
						'Ask Facebook to update its cache',
						'webseo'
					),
					'twitter_title'  => __(
						'Preview your X Cards using the official validator',
						'webseo'
					),
				),
				'social_preview'   => array(
					'facebook' => array(
						'title'                 => __( 'Facebook Preview', 'webseo' ),
						'description'           => __(
							'This is what your post will look like in Facebook. You have to publish your post to get the Facebook Preview.',
							'webseo'
						),
						'ratio'                 => __( 'Your image ratio is:', 'webseo' ),
						'ratio_info'            => __( 'The closer to 1.91 the better.', 'webseo' ),
						'img_filesize'          => __( 'Your filesize is: ', 'webseo' ),
						'filesize_is_too_large' => __( 'This is superior to 300KB. WhatsApp will not use your image.', 'webseo' ),
						'min_size'              => __(
							'Minimun size for Facebook is <strong>200x200px</strong>. Please choose another image.',
							'webseo'
						),
						'file_support'          => __(
							'File type not supported by Facebook. Please choose another image.',
							'webseo'
						),
						'error_image'           => __(
							'File error. Please choose another image.',
							'webseo'
						),
						'choose_image'          => __( 'Please choose an image', 'webseo' ),
					),
					'twitter'  => array(
						'title'        => __( 'X Preview', 'webseo' ),
						'description'  => __(
							'This is what your post will look like in X. You have to publish your post to get the X Preview.',
							'webseo'
						),
						'ratio'        => __( 'Your image ratio is:', 'webseo' ),
						'ratio_info'   => __(
							'The closer to 1 the better (with large card, 2 is better).',
							'webseo'
						),
						'min_size'     => __(
							'Minimun size for X is <strong>144x144px</strong>. Please choose another image.',
							'webseo'
						),
						'file_support' => __(
							'File type not supported by X. Please choose another image.',
							'webseo'
						),
						'error_image'  => __(
							'File error. Please choose another image.',
							'webseo'
						),
						'choose_image' => __( 'Please choose an image', 'webseo' ),

					),
				),
				'advanced'         => array(
					'title'                           => __( 'Meta robots settings', 'webseo' ),
					'tooltip_canonical'               => __(
						'Canonical URL',
						'webseo'
					),
					'tooltip_canonical_description'   => __(
						'A canonical URL is the URL of the page that Google thinks is most representative from a set of duplicate pages on your site.',
						'webseo'
					),
					'tooltip_canonical_description_2' => __(
						'For example, if you have URLs for the same page (for example: example.com?dress=1234 and example.com/dresses/1234), Google chooses one as canonical.',
						'webseo'
					),
					'tooltip_canonical_description_3' => __(
						'Note that the pages do not need to be absolutely identical; minor changes in sorting or filtering of list pages do not make the page unique (for example, sorting by price or filtering by item color). The canonical can be in a different domain than a duplicate.',
						'webseo'
					),
				),
			),
		);
	}
}
