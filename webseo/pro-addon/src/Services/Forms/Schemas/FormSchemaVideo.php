<?php

namespace SEOPressPro\Services\Forms\Schemas;

defined('ABSPATH') || exit;

use SEOPressPro\Core\FormApi;

class FormSchemaVideo extends FormApi {
    protected function getTypeByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_videos_img':
                return 'upload';
            case '_seopress_pro_rich_snippets_videos_description':
                return 'textarea';
            case '_seopress_pro_rich_snippets_videos_name':
            case '_seopress_pro_rich_snippets_videos_duration':
            case '_seopress_pro_rich_snippets_videos_url':
                return 'input';
            case '_seopress_pro_rich_snippets_videos_date_posted':
                return 'date';
        }
    }

    protected function getLabelByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_videos_name':
                return __('Video name', 'webseo');
            case '_seopress_pro_rich_snippets_videos_description':
                return __('Video description', 'webseo');
            case '_seopress_pro_rich_snippets_videos_date_posted':
                return __('Uploaded date', 'webseo');
            case '_seopress_pro_rich_snippets_videos_img':
                return __('Video thumbnail', 'webseo');
            case '_seopress_pro_rich_snippets_videos_duration':
                return __('Duration of your video (format: hh:mm:ss)', 'webseo');
            case '_seopress_pro_rich_snippets_videos_url':
                return __('Video URL', 'webseo');
        }
    }

    protected function getPlaceholderByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_videos_name':
                return __('The title of your video', 'webseo');
            case '_seopress_pro_rich_snippets_videos_description':
                return __('The description of the video', 'webseo');
            case '_seopress_pro_rich_snippets_videos_duration':
                return __('e.g. 00:04:30 for 4 minutes and 30 seconds', 'webseo');
            case '_seopress_pro_rich_snippets_videos_url':
                return __('e.g. https://example.com/video.mp4', 'webseo');

        }
    }

    protected function getDescriptionByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_videos_img':
                return __('Minimum size: 160px by 90px - Max size: 1920x1080px - crawlable and indexable', 'webseo');
            case '_seopress_pro_rich_snippets_videos_date_posted':
                return __('The uploaded date of your video in ISO 8601 format. For example, "2017-01-24" or "2017-01-24T19:33:17+00:00".', 'webseo');
        }
    }

    protected function getDetails($postId = null) {
        return [
            [
                'key' => '_seopress_pro_rich_snippets_videos_name',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_videos_description',
                'class' => 'seopress-textarea-high-size'
            ],
            [
                'key' => '_seopress_pro_rich_snippets_videos_date_posted',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_videos_img',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_videos_duration',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_videos_url',
            ],
        ];
    }
}
