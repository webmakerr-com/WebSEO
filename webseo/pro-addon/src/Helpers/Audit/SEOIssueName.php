<?php

namespace SEOPressPro\Helpers\Audit;

if ( ! defined('ABSPATH')) {
    exit;
}

abstract class SEOIssueName {
    public static function getIssueNameI18n($issueName) {
        if (!$issueName) {
            return;
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

        return $data[$issueName];
    }
}
