<?php

namespace SEOPressPro\Services\Forms\Schemas;

defined('ABSPATH') || exit;

use SEOPressPro\Core\FormApi;

class FormSchemaCourse extends FormApi {
    protected function getTypeByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_courses_title':
            case '_seopress_pro_rich_snippets_courses_desc':
            case '_seopress_pro_rich_snippets_courses_school':
            case '_seopress_pro_rich_snippets_courses_website':
                return 'input';
            case '_seopress_pro_rich_snippets_courses_offers':
                return 'repeater_course_offers';
            case '_seopress_pro_rich_snippets_courses_instances':
                return 'repeater_course_instances';
        }
    }

    protected function getLabelByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_courses_title':
                return __('Title', 'webseo');
            case '_seopress_pro_rich_snippets_courses_desc':
                return __('Course description', 'webseo');
            case '_seopress_pro_rich_snippets_courses_school':
                return __('School/Organization', 'webseo');
            case '_seopress_pro_rich_snippets_courses_website':
                return __('School/Organization Website', 'webseo');
            case '_seopress_pro_rich_snippets_courses_offers':
                return __('List of Offers', 'webseo');
            case '_seopress_pro_rich_snippets_courses_instances':
                return __('List of CourseInstances', 'webseo');
        }
    }

    protected function getPlaceholderByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_courses_title':
                return __('The title of your lesson, course...', 'webseo');
            case '_seopress_pro_rich_snippets_courses_desc':
                return __('Enter your course/lesson description', 'webseo');
            case '_seopress_pro_rich_snippets_courses_school':
                return __('Name of university, organization...', 'webseo');
            case '_seopress_pro_rich_snippets_courses_website':
                return __('Enter the URL like https://example.com/', 'webseo');
            default:
                return '';
        }
    }

    protected function getDetails($postId = null) {
        return [
            [
                'key' => '_seopress_pro_rich_snippets_courses_title',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_courses_desc',
                'recommended_limit' => 60
            ],
            [
                'key' => '_seopress_pro_rich_snippets_courses_school',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_courses_website',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_courses_offers',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_courses_instances',
            ],
        ];
    }
}
