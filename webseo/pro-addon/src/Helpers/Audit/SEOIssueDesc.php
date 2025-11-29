<?php

namespace SEOPressPro\Helpers\Audit;

if ( ! defined('ABSPATH')) {
    exit;
}

abstract class SEOIssueDesc {
    public static function getIssueDescI18n($issueName, $issueDesc) {
        $html = '';

        switch ($issueName) {
            case 'json_schemas_duplicated':
                $issueDesc = maybe_unserialize($issueDesc);
                if (is_array($issueDesc) && !empty($issueDesc)) {
                    $html .= '<ul>';
                    foreach($issueDesc as $schema) {
                        $schema_name = $schema[0] ? $schema[0] : '';
                        $schema_count = $schema[1] ? $schema[1] : '';
                        $html .= '<li>';
                        $html .= sprintf(
                            /* translators: %1$s: schema name %2$d: schema count */
                            wp_kses_post(__('<strong>%1$s</strong> is duplicated <strong>%2$d</strong> times', 'webseo')),
                            esc_html($schema_name),
                            absint($schema_count)
                        );
                        $html .= '</li>';
                    }
                    $html .= '</ul>';
                }
                break;
            case 'json_schemas_not_found':
                $html = esc_html__('No schemas found in the source code of this page. Get rich snippets in Google Search results and improve your visibility by adding structured data types (schemas) to your page.', 'webseo');
                break;
            case 'old_post':
                $issueDesc = $issueDesc ? wp_date( get_option( 'date_format' ), $issueDesc ) : '';
                $html = sprintf(
                    /* translators: %s: post last update */
                    wp_kses_post(__('Last update: <strong>%s</strong>.', 'webseo')),
                    esc_html($issueDesc)
                );
                break;
            case 'keywords_permalink':
                $html = esc_html__('You should add one of your target keyword in your permalink.', 'webseo');
                break;
            case 'headings_not_found':
                $html = esc_html__('Headings are great way to structure your content to make it easily understandable for both humans and crawlers.', 'webseo');
                break;
            case 'headings_h1_duplicated':
                $issueDesc = maybe_unserialize($issueDesc);
                if (is_array($issueDesc) && !empty($issueDesc)) {
                    $html .= '<ul>';
                    foreach($issueDesc as $h1) {
                        $h1_value = $h1 ? $h1 : '';
                        $html .= '<li>';
                        $html .= esc_html($h1_value);
                        $html .= '</li>';
                    }
                    $html .= '</ul>';
                }
                break;
            case 'headings_h1_not_found':
                $html = esc_html__('No Heading 1 (H1) found in your content. This is required for both SEO and Accessibility!', 'webseo');
                break;
            case 'headings_h1_without_target_kw':
                $html = esc_html__('None of your target keywords were found in Heading 1 (H1).', 'webseo');
                break;
            case 'headings_h2_without_target_kw':
                $html = esc_html__('None of your target keywords were found in Heading 2 (H2).', 'webseo');
                break;
            case 'headings_h3_without_target_kw':
                $html = esc_html__('None of your target keywords were found in Heading 3 (H3).', 'webseo');
                break;
            case 'title_without_target_kw':
                $html = esc_html__('None of your target keywords were found in the Meta Title.', 'webseo');
                break;
            case 'title_too_long':
                $issueDesc = $issueDesc ? $issueDesc - 60 : '';
                $html = sprintf(
                    /* translators: %d: title length */
                    wp_kses_post(__('Your title tag is <strong>%d</strong> characters too long.', 'webseo')),
                    absint($issueDesc)
                );
                break;
            case 'title_not_custom':
                $html = esc_html__('No custom title is set for this post. If the global meta title suits you, you can ignore this recommendation.', 'webseo');
                break;
            case 'description_without_target_kw':
                $html = esc_html__('None of your target keywords were found in the Meta description.', 'webseo');
                break;
            case 'description_too_long':
                $issueDesc = $issueDesc ? $issueDesc - 160 : '';
                $html = sprintf(
                    /* translators: %d: description length */
                    wp_kses_post(__('Your meta description is <strong>%d</strong> characters too long.', 'webseo')),
                    absint($issueDesc)
                );
                break;
            case 'description_not_custom':
                $html = esc_html__('No custom meta description is set for this post. If the global meta description suits you, you can ignore this recommendation.', 'webseo');
                break;
            case 'og_title_duplicated':
                $issueDesc = maybe_unserialize($issueDesc);
                if (is_array($issueDesc) && !empty($issueDesc)) {
                    $html .= '<ul>';
                    foreach($issueDesc as $og_title) {
                        $og_title_value = $og_title ? $og_title : '';
                        $html .= '<li>';
                        $html .= esc_html($og_title_value);
                        $html .= '</li>';
                    }
                    $html .= '</ul>';
                }
                break;
            case 'og_title_empty':
                $html = esc_html__('Your Open Graph Title tag is empty!', 'webseo');
                break;
            case 'og_title_missing':
                $html = esc_html__('Your Open Graph Title is missing!', 'webseo');
                break;
            case 'og_desc_duplicated':
                $issueDesc = maybe_unserialize($issueDesc);
                if (is_array($issueDesc) && !empty($issueDesc)) {
                    $html .= '<ul>';
                    foreach($issueDesc as $og_desc) {
                        $og_desc_value = $og_desc ? $og_desc : '';
                        $html .= '<li>';
                        $html .= esc_html($og_desc_value);
                        $html .= '</li>';
                    }
                    $html .= '</ul>';
                }
                break;
            case 'og_desc_empty':
                $html = esc_html__('Your Open Graph Description tag is empty!', 'webseo');
                break;
            case 'og_desc_missing':
                $html = esc_html__('Your Open Graph Description is missing!', 'webseo');
                break;
            case 'og_img_empty':
                $html = esc_html__('Your Open Graph Image tag is empty!', 'webseo');
                break;
            case 'og_img_missing':
                $html = esc_html__('Your Open Graph Image is missing!', 'webseo');
                break;
            case 'og_url_duplicated':
                $issueDesc = maybe_unserialize($issueDesc);
                if (is_array($issueDesc) && !empty($issueDesc)) {
                    $html .= '<ul>';
                    foreach($issueDesc as $og_url) {
                        $og_url_value = $og_url ? $og_url : '';
                        $html .= '<li>';
                        $html .= esc_url($og_url_value);
                        $html .= '</li>';
                    }
                    $html .= '</ul>';
                }
                break;
            case 'og_url_empty':
                $html = esc_html__('Your Open Graph URL tag is empty!', 'webseo');
                break;
            case 'og_url_missing':
                $html = esc_html__('Your Open Graph URL is missing!', 'webseo');
                break;
            case 'og_sitename_duplicated':
                $issueDesc = maybe_unserialize($issueDesc);
                if (is_array($issueDesc) && !empty($issueDesc)) {
                    $html .= '<ul>';
                    foreach($issueDesc as $og_sitename) {
                        $og_sitename_value = $og_sitename ? $og_sitename : '';
                        $html .= '<li>';
                        $html .= esc_html($og_sitename_value);
                        $html .= '</li>';
                    }
                    $html .= '</ul>';
                }
                break;
            case 'og_sitename_empty':
                $html = esc_html__('Your Open Graph Site Name tag is empty!', 'webseo');
                break;
            case 'og_sitename_missing':
                $html = esc_html__('Your Open Graph Site Name is missing!', 'webseo');
                break;
            case 'x_title_duplicated':
                $issueDesc = maybe_unserialize($issueDesc);
                if (is_array($issueDesc) && !empty($issueDesc)) {
                    $html .= '<ul>';
                    foreach($issueDesc as $x_title) {
                        $x_title_value = $x_title ? $x_title : '';
                        $html .= '<li>';
                        $html .= esc_html($x_title_value);
                        $html .= '</li>';
                    }
                    $html .= '</ul>';
                }
                break;
            case 'x_title_empty':
                $html = esc_html__('Your X Title tag is empty!', 'webseo');
                break;
            case 'x_title_missing':
                $html = esc_html__('Your X Title is missing!', 'webseo');
                break;
            case 'x_desc_duplicated':
                $issueDesc = maybe_unserialize($issueDesc);
                if (is_array($issueDesc) && !empty($issueDesc)) {
                    $html .= '<ul>';
                    foreach($issueDesc as $x_desc) {
                        $x_desc_value = $x_desc ? $x_desc : '';
                        $html .= '<li>';
                        $html .= esc_html($x_desc_value);
                        $html .= '</li>';
                    }
                    $html .= '</ul>';
                }
                break;
            case 'x_desc_empty':
                $html = esc_html__('Your X Description tag is empty!', 'webseo');
                break;
            case 'x_desc_missing':
                $html = esc_html__('Your X Description is missing!', 'webseo');
                break;
            case 'x_img_empty':
                $html = esc_html__('Your X Image tag is empty!', 'webseo');
                break;
            case 'x_img_missing':
                $html = esc_html__('Your X Image is missing!', 'webseo');
                break;
            case 'meta_robots_duplicated':
                $html = sprintf(
                    /* translators: %d: meta robots count */
                    wp_kses_post(__('We found <strong>%d</strong> meta robots in your page. There is probably something wrong with your theme!', 'webseo')),
                    absint($issueDesc)
                );
                break;
            case 'meta_robots_noindex':
                $html = wp_kses_post(__('<strong>noindex</strong> is on! Search engines can\'t index this page.', 'webseo'));
                break;
            case 'meta_robots_nofollow':
                $html = wp_kses_post(__('<strong>nofollow</strong> is on! Search engines can\'t follow your links on this page.', 'webseo'));
                break;
            case 'meta_robots_noimageindex':
                $html = wp_kses_post(__('<strong>noimageindex</strong> is on! Google will not index your images on this page (but if someone makes a direct link to one of your image in this page, it will be indexed).', 'webseo'));
                break;
            case 'meta_robots_nosnippet':
                $html = wp_kses_post(__('<strong>nosnippet</strong> is on! Search engines will not display a snippet of this page in search results.', 'webseo'));
                break;
            case 'img_alt_missing':
                $issueDesc = maybe_unserialize($issueDesc);
                if (is_array($issueDesc) && !empty($issueDesc)) {
                    $html .= '<ul>';
                    foreach($issueDesc as $img) {
                        $img_value = $img ? $img : '';
                        $html .= '<li>';
                        $html .= esc_url($img_value);
                        $html .= '</li>';
                    }
                    $html .= '</ul>';
                }
                break;
            case 'img_alt_no_media':
                $html = esc_html__('We could not find any image in your content. Content with media is a plus for your SEO.', 'webseo');
                break;
            case 'nofollow_links_too_many':
                $issueDesc = maybe_unserialize($issueDesc);
                if (is_array($issueDesc) && !empty($issueDesc)) {
                    $html .= '<ul>';
                    foreach($issueDesc as $links) {
                        $links_value = $links ? $links : '';
                        $html .= '<li>';
                        $html .= esc_url($links_value);
                        $html .= '</li>';
                    }
                    $html .= '</ul>';
                }
                break;
            case 'outbound_links_missing':
                $html = esc_html__('This page doesn\'t have any outbound links.', 'webseo');
                break;
            case 'internal_links_missing':
                $html = esc_html__('This page doesn\'t have any internal links from other content. Links from archive pages are not considered internal links due to lack of context.', 'webseo');
                break;
            case 'canonical_duplicated':
                $html = esc_html__('You must fix this. Canonical URL duplication is bad for SEO.', 'webseo');
                break;
            case 'canonical_missing':
                $html = esc_html__('This page doesn\'t have any canonical URL.', 'webseo');
                break;
        }

        $data = [
            'json_schemas_duplicated'=> __('Duplicated JSON schemas', 'webseo'),
            'json_schemas_not_found'=> __('No JSON schemas found', 'webseo'),
            'old_post'=> __('Post too old', 'webseo'),
            'keywords_permalink'=> __('Target keyword not found in permalink', 'webseo'),
            'headings_not_found'=> __('No headings found', 'webseo'),
            'headings_h1_duplicated'=> __('Duplicated H1', 'webseo'),
            'headings_h1_not_found'=> __('H1 not found', 'webseo'),
            'headings_h1_without_target_kw'=> __('H1 without target keyword', 'webseo'),
            'headings_h2_without_target_kw'=> __('H2 without target keyword', 'webseo'),
            'headings_h3_without_target_kw'=> __('H3 without target keyword', 'webseo'),
            'title_without_target_kw'=> __('Meta title without target keyword', 'webseo'),
            'title_too_long'=> __('Meta title too long', 'webseo'),
            'title_not_custom'=> __('Meta title not customized', 'webseo'),
            'description_without_target_kw'=> __('Meta desc without target keyword', 'webseo'),
            'description_too_long'=> __('Meta desc too long', 'webseo'),
            'description_not_custom'=> __('Meta desc not customized', 'webseo'),
            'og_title_duplicated'=> __('OG title duplicated', 'webseo'),
            'og_title_empty'=> __('OG title empty', 'webseo'),
            'og_title_missing'=> __('OG title missing', 'webseo'),
            'og_desc_duplicated'=> __('OG description duplicated', 'webseo'),
            'og_desc_empty'=> __('OG description empty', 'webseo'),
            'og_desc_missing'=> __('OG description missing', 'webseo'),
            'og_img_empty'=> __('OG image empty', 'webseo'),
            'og_img_missing'=> __('OG image missing', 'webseo'),
            'og_url_duplicated'=> __('OG URL duplicated', 'webseo'),
            'og_url_empty'=> __('OG URL empty', 'webseo'),
            'og_url_missing'=> __('OG URL missing', 'webseo'),
            'og_sitename_duplicated'=> __('OG sitename duplicated', 'webseo'),
            'og_sitename_empty'=> __('OG sitename empty', 'webseo'),
            'og_sitename_missing'=> __('OG sitename missing', 'webseo'),
            'x_title_duplicated'=> __('X title duplicated', 'webseo'),
            'x_title_empty'=> __('X title empty', 'webseo'),
            'x_title_missing'=> __('X title missing', 'webseo'),
            'x_desc_duplicated'=> __('X description duplicated', 'webseo'),
            'x_desc_empty'=> __('X description empty', 'webseo'),
            'x_desc_missing'=> __('X description missing', 'webseo'),
            'x_img_empty'=> __('X image empty', 'webseo'),
            'x_img_missing'=> __('X image missing', 'webseo'),
            'meta_robots_duplicated'=> __('Meta robots duplicated', 'webseo'),
            'meta_robots_noindex'=> __('noindex is ON', 'webseo'),
            'meta_robots_nofollow'=> __('nofollow is ON', 'webseo'),
            'meta_robots_noimageindex'=> __('noimageindex is ON', 'webseo'),
            'meta_robots_nosnippet'=> __('nosnippet is ON', 'webseo'),
            'img_alt_missing'=> __('Alt text missing', 'webseo'),
            'img_alt_no_media'=> __('No media found', 'webseo'),
            'nofollow_links_too_many'=> __('Too many nofollow links', 'webseo'),
            'outbound_links_missing'=> __('Outbound links missing', 'webseo'),
            'internal_links_missing'=> __('Internal links missing', 'webseo'),
            'canonical_duplicated'=> __('Duplicated canonical tag', 'webseo'),
            'canonical_missing'=> __('Canonical tag missing', 'webseo'),
        ];

        return $html;
    }
}
