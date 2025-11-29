<?php

namespace SEOPressPro\Services\Forms\Schemas;

defined('ABSPATH') || exit;

use SEOPressPro\Core\FormApi;

class FormSchemaReview extends FormApi {
    protected function getTypeByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_review_item_type':
                return 'select';
            case '_seopress_pro_rich_snippets_review_img':
                return 'upload';
            case '_seopress_pro_rich_snippets_review_rating':
            case '_seopress_pro_rich_snippets_review_max_rating':
                return 'number';
            case '_seopress_pro_rich_snippets_review_body':
                return 'textarea';
            case '_seopress_pro_rich_snippets_review_item':
                return 'input';

        }
    }

    protected function getLabelByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_review_item':
                return __('Review item name', 'webseo');
            case '_seopress_pro_rich_snippets_review_item_type':
                return __('Review item type', 'webseo');
            case '_seopress_pro_rich_snippets_review_img':
                return __('Review item image', 'webseo');
            case '_seopress_pro_rich_snippets_review_rating':
                return __('Your rating', 'webseo');
            case '_seopress_pro_rich_snippets_review_max_rating':
                return __('Max best rating', 'webseo');
            case '_seopress_pro_rich_snippets_review_body':
                return __('Review body', 'webseo');
        }
    }

    protected function getPlaceholderByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_review_item':
                return __('The item name reviewed', 'webseo');
            case '_seopress_pro_rich_snippets_review_img':
                return __('Select your image', 'webseo');
            case '_seopress_pro_rich_snippets_review_rating':
                return __('The item rating', 'webseo');
            case '_seopress_pro_rich_snippets_review_max_rating':
                return __('Max best rating', 'webseo');
            case '_seopress_pro_rich_snippets_review_body':
                return __('Enter your review body', 'webseo');
        }
    }

    protected function getDescriptionByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_review_rating':
                return __('Your rating: scale from 1 to 5.', 'webseo');
            case '_seopress_pro_rich_snippets_review_max_rating':
                return __('Only required if your scale is different from 1 to 5.', 'webseo');
        }
    }

    protected function getOptions($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_review_item_type':
                return [
                    ['value' => 'CreativeWorkSeason', 'label' => __('CreativeWorkSeason', 'webseo')],
                    ['value' => 'CreativeWorkSeries', 'label' => __('CreativeWorkSeries', 'webseo')],
                    ['value' => 'Episode', 'label' => __('Episode', 'webseo')],
                    ['value' => 'Game', 'label' => __('Game', 'webseo')],
                    ['value' => 'MediaObject', 'label' => __('MediaObject', 'webseo')],
                    ['value' => 'MusicPlaylist', 'label' => __('MusicPlaylist', 'webseo')],
                    ['value' => 'MusicRecording', 'label' => __('MusicRecording', 'webseo')],
                    ['value' => 'Organization', 'label' => __('Organization', 'webseo')],
                ];
        }
    }

    protected function getDetails($postId = null) {
        return [
            [
                'key' => '_seopress_pro_rich_snippets_review_item',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_review_item_type',
                'value' => 'CreativeWorkSeason'
            ],
            [
                'key' => '_seopress_pro_rich_snippets_review_img',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_review_rating',
                'min' => 1,
            ],
            [
                'key' => '_seopress_pro_rich_snippets_review_max_rating',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_review_body',
                'class' => 'seopress-textarea-high-size'
            ],
        ];
    }
}
