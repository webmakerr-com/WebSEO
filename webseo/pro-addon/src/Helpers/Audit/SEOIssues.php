<?php

namespace SEOPressPro\Helpers\Audit;

if ( ! defined('ABSPATH')) {
    exit;
}

abstract class SEOIssues {
    public static function getData() {
        $data = [
            'all_canonical'=> [
                'title'  => __('Canonical URL', 'webseo'),
                'desc'   => null,
            ],
            'json_schemas'=> [
                'title'  => __('Structured data types', 'webseo'),
                'desc'   => null,
            ],
            'old_post'=> [
                'title'  => __('Last modified date', 'webseo'),
                'desc'   => __('Search engines love fresh content. Update regularly your articles without entirely rewriting your content and give them a boost in search rankings.', 'webseo'),
            ],
            'permalink'=> [
                'title'  => __('Keywords in permalink', 'webseo'),
                'desc'   => null,
            ],
            'headings'=> [
                'title'  => __('Headings', 'webseo'),
                'desc'   => null,
            ],
            'title'=> [
                'title'  => __('Meta title', 'webseo'),
                'desc'   => null,
            ],
            'description'=> [
                'title'  => __('Meta description', 'webseo'),
                'desc'   => null,
            ],
            'social'=> [
                'title'  => __('Social meta tags', 'webseo'),
                'desc'   => null,
            ],
            'robots'=> [
                'title'  => __('Meta robots', 'webseo'),
                'desc'   => null,
            ],
            'img_alt'=> [
                'title'  => __('Alternative texts of images', 'webseo'),
                'desc'   => __('No alternative text found for these images. Alt tags are important for both SEO and accessibility. Edit your images using the media library or your favorite page builder and fill in alternative text fields.', 'webseo'),
            ],
            'nofollow_links'=> [
                'title'  => __('NoFollow Links', 'webseo'),
                'desc'   => null,
            ],
            'outbound_links'=> [
                'title'  => __('Outbound Links', 'webseo'),
                'desc'   => null,
            ],
            'internal_links'=> [
                'title'  => __('Internal Links', 'webseo'),
                'desc'   => null,
            ],
        ];

        return $data;
    }
}
