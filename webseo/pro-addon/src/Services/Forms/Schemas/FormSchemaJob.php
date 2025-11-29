<?php

namespace SEOPressPro\Services\Forms\Schemas;

defined('ABSPATH') || exit;

use SEOPressPro\Core\FormApi;

class FormSchemaJob extends FormApi {
    protected function getTypeByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_jobs_desc':
                return 'textarea';
            case '_seopress_pro_rich_snippets_jobs_hiring_logo':
                return 'upload';
            case '_seopress_pro_rich_snippets_jobs_remote':
                return 'checkbox';
            case '_seopress_pro_rich_snippets_jobs_direct_apply':
                return 'checkbox';
            case '_seopress_pro_rich_snippets_jobs_salary':
                return 'number';
            case '_seopress_pro_rich_snippets_jobs_date_posted':
            case '_seopress_pro_rich_snippets_jobs_valid_through':
                return 'date';
            case '_seopress_pro_rich_snippets_jobs_name':
            case '_seopress_pro_rich_snippets_jobs_employment_type':
            case '_seopress_pro_rich_snippets_jobs_identifier_name':
            case '_seopress_pro_rich_snippets_jobs_identifier_value':
            case '_seopress_pro_rich_snippets_jobs_hiring_organization':
            case '_seopress_pro_rich_snippets_jobs_hiring_same_as':
            case '_seopress_pro_rich_snippets_jobs_address_street':
            case '_seopress_pro_rich_snippets_jobs_address_locality':
            case '_seopress_pro_rich_snippets_jobs_address_region':
            case '_seopress_pro_rich_snippets_jobs_postal_code':
            case '_seopress_pro_rich_snippets_jobs_country':
            case '_seopress_pro_rich_snippets_jobs_salary_currency':
            case '_seopress_pro_rich_snippets_jobs_location_requirement':
                return 'input';
            case '_seopress_pro_rich_snippets_jobs_salary_unit':
                return 'select';
        }
    }

    protected function getLabelByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_jobs_name':
                return __('Job title', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_desc':
                return __('Job description', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_date_posted':
                return __('Published date', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_valid_through':
                return __('Expiration date', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_employment_type':
                return __('Type of employment', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_identifier_name':
                return __('Identifier name', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_identifier_value':
                return __('Identifier value', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_hiring_organization':
                return __('Organization that hires', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_hiring_same_as':
                return __('Organization website', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_hiring_logo':
                return __('Organization logo', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_address_street':
                return __('Street address', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_address_locality':
                return __('Locality address', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_address_region':
                return __('Region', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_postal_code':
                return __('Postal code', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_country':
                return __('Country', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_remote':
                return __('Remote job', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_direct_apply':
                return __('Direct apply', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_salary':
                return __('Salary', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_salary_currency':
                return __('Currency', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_salary_unit':
                return __('Select your unit text', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_location_requirement':
                return __('Location requirement for remote job', 'webseo');
        }
    }

    protected function getPlaceholderByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_jobs_name':
                return __('The title of the job (not the title of the posting). For example, "Software Engineer" or "Barista".', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_desc':
                return __('The full description of the job in HTML format.', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_date_posted':
            case '_seopress_pro_rich_snippets_jobs_valid_through':
                return __('The original date that employer posted the job in ISO 8601 format. For example, "2017-01-24" or "2017-01-24T19:33:17+00:00".', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_valid_through':
                return __('The date when the job posting will expire in ISO 8601 format. For example, "2017-02-24" or "2017-02-24T19:33:17+00:00".', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_employment_type':
                return __('Type of employment, You can include more than one employmentType property.', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_identifier_name':
                return __("The hiring organization's unique identifier name for the job", 'webseo');
            case '_seopress_pro_rich_snippets_jobs_identifier_value':
                return __("The hiring organization's value identifier value for the job", 'webseo');
            case '_seopress_pro_rich_snippets_jobs_hiring_organization':
                return __('The organization offering the job position. This should be the name of the company.', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_hiring_same_as':
                return __('The organization website URL offering the job position.', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_hiring_logo':
                return __('Select your image', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_address_street':
                return __('Street address', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_address_locality':
                return __('Locality address', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_address_region':
                return __('Region', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_postal_code':
                return __('Postal code', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_country':
                return __('Country', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_direct_apply':
                /* translators: do not translate expected values, true / false  */
                return __('Indicates whether the URL that\'s associated with this job posting enables direct application for the job. Expected value: "true" or "false".', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_salary':
                return __('e.g. 50.00', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_salary_currency':
                return __('e.g. USD', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_location_requirement':
                return __('e.g. FR for France', 'webseo');
        }
    }

    protected function getDescriptionByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_jobs_hiring_organization':
                return __('Default: Organization name from your Knowledge Graph (SEO > Social Networks > Knowledge Graph)', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_hiring_same_as':
                return __('Default: URL of your site', 'webseo');
            case '_seopress_pro_rich_snippets_jobs_hiring_logo':
                return __('Default: Logo from your Knowledge Graph (SEO > Social Networks > Knowledge Graph)', 'webseo');
        }
    }

    protected function getOptions($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_jobs_salary_unit':
                return [
                    ['value' => 'HOUR', 'label' => __('HOUR', 'webseo')],
                    ['value' => 'DAY', 'label' => __('DAY', 'webseo')],
                    ['value' => 'WEEK', 'label' => __('WEEK', 'webseo')],
                    ['value' => 'MONTH', 'label' => __('MONTH', 'webseo')],
                    ['value' => 'YEAR', 'label' => __('YEAR', 'webseo')],
                ];
        }
    }

    protected function getDetails($postId = null) {
        return [
            [
                'key' => '_seopress_pro_rich_snippets_jobs_name',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_desc',
                'class' => 'seopress-textarea-high-size'
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_date_posted',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_valid_through',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_employment_type',
                'options' => [
                    'separator' => ',',
                    'quick_buttons' => [
                        [
                            "value" => "FULL_TIME",
                            "label" => "FULL TIME",
                        ],
                        [
                            "value" => "PART_TIME",
                            "label" => "PART TIME",
                        ],[
                            "value" => "CONTRACTOR",
                            "label" => "CONTRACTOR",
                        ],[
                            "value" => "TEMPORARY",
                            "label" => "TEMPORARY",
                        ],[
                            "value" => "INTERN",
                            "label" => "INTERN",
                        ],[
                            "value" => "VOLUNTEER",
                            "label" => "VOLUNTEER",
                        ],[
                            "value" => "PER_DIEM",
                            "label" => "PER DIEM",
                        ],[
                            "value" => "OTHER",
                            "label" => "OTHER",
                        ]
                    ]
                ]
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_identifier_name',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_identifier_value',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_hiring_organization',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_hiring_same_as',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_hiring_logo',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_hiring_logo_width',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_hiring_logo_height',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_address_street',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_address_locality',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_address_region',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_postal_code',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_country',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_remote',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_location_requirement',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_direct_apply',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_salary',
                'min' => 1,
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_salary_currency',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_jobs_salary_unit',
                'value' => 'HOUR'
            ],

        ];
    }
}
