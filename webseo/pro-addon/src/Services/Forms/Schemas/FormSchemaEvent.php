<?php

namespace SEOPressPro\Services\Forms\Schemas;

defined('ABSPATH') || exit;

use SEOPressPro\Core\FormApi;
use SEOPressPro\Helpers\Schemas\Currencies;

class FormSchemaEvent extends FormApi {
    protected function getTypeByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_events_type':
            case '_seopress_pro_rich_snippets_events_offers_cat':
            case '_seopress_pro_rich_snippets_events_offers_price_currency':
            case '_seopress_pro_rich_snippets_events_offers_availability':
            case '_seopress_pro_rich_snippets_events_status':
            case '_seopress_pro_rich_snippets_events_attendance_mode':
                return 'select';
            case '_seopress_pro_rich_snippets_events_desc':
                return 'textarea';
            case '_seopress_pro_rich_snippets_events_img':
                return 'upload';
            case '_seopress_pro_rich_snippets_events_start_date':
            case '_seopress_pro_rich_snippets_events_end_date':
            case '_seopress_pro_rich_snippets_events_previous_start_date':
            case '_seopress_pro_rich_snippets_events_offers_valid_from_date':
                return 'date';
            case '_seopress_pro_rich_snippets_events_start_time':
            case '_seopress_pro_rich_snippets_events_end_time':
            case '_seopress_pro_rich_snippets_events_offers_valid_from_time':
                return 'time';
            case '_seopress_pro_rich_snippets_events_name':
            case '_seopress_pro_rich_snippets_events_start_date_timezone':
            case '_seopress_pro_rich_snippets_events_previous_start_time':
            case '_seopress_pro_rich_snippets_events_location_name':
            case '_seopress_pro_rich_snippets_events_location_url':
            case '_seopress_pro_rich_snippets_events_location_address':
            case '_seopress_pro_rich_snippets_events_offers_name':
            case '_seopress_pro_rich_snippets_events_offers_price':
            case '_seopress_pro_rich_snippets_events_offers_url':
            case '_seopress_pro_rich_snippets_events_performer':
            case '_seopress_pro_rich_snippets_events_organizer_name':
            case '_seopress_pro_rich_snippets_events_organizer_url':
                return 'input';
        }
    }

    protected function getLabelByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_events_type':
                return __('Select your event type', 'webseo');
            case '_seopress_pro_rich_snippets_events_name':
                return __('Event name', 'webseo');
            case '_seopress_pro_rich_snippets_events_desc':
                return __('Event description (default excerpt, or beginning of the content)', 'webseo');
            case '_seopress_pro_rich_snippets_events_img':
                return __('Image thumbnail', 'webseo');
            case '_seopress_pro_rich_snippets_events_start_date':
                return __('Start date', 'webseo');
            case '_seopress_pro_rich_snippets_events_start_date_timezone':
                return __('Timezone', 'webseo');
            case '_seopress_pro_rich_snippets_events_start_time':
                return __('Start time', 'webseo');
            case '_seopress_pro_rich_snippets_events_end_date':
                return __('End date', 'webseo');
            case '_seopress_pro_rich_snippets_events_end_time':
                return __('End time', 'webseo');
            case '_seopress_pro_rich_snippets_events_previous_start_date':
                return __('Previous start date', 'webseo');
            case '_seopress_pro_rich_snippets_events_previous_start_time':
                return __('Previous start time', 'webseo');
            case '_seopress_pro_rich_snippets_events_location_name':
                return __('Location name', 'webseo');
            case '_seopress_pro_rich_snippets_events_location_url':
                return __('Event website', 'webseo');
            case '_seopress_pro_rich_snippets_events_location_address':
                return __('Location Address', 'webseo');
            case '_seopress_pro_rich_snippets_events_offers_name':
                return __('Offer name', 'webseo');
            case '_seopress_pro_rich_snippets_events_offers_cat':
                return __('Select your offer category', 'webseo');
            case '_seopress_pro_rich_snippets_events_offers_price':
                return __('Price', 'webseo');
            case '_seopress_pro_rich_snippets_events_offers_price_currency':
                return __('Select your currency', 'webseo');
            case '_seopress_pro_rich_snippets_events_offers_availability':
                return __('Availability', 'webseo');
            case '_seopress_pro_rich_snippets_events_offers_valid_from_date':
                return __('Valid From', 'webseo');
            case '_seopress_pro_rich_snippets_events_offers_valid_from_time':
                return __('Time', 'webseo');
            case '_seopress_pro_rich_snippets_events_offers_url':
                return __('Website to buy tickets', 'webseo');
            case '_seopress_pro_rich_snippets_events_performer':
                return __('Performer name', 'webseo');
            case '_seopress_pro_rich_snippets_events_organizer_name':
                return __('Organizer name', 'webseo');
            case '_seopress_pro_rich_snippets_events_organizer_url':
                return __('Organizer URL', 'webseo');
            case '_seopress_pro_rich_snippets_events_status':
                return __('Select your event status', 'webseo');
            case '_seopress_pro_rich_snippets_events_attendance_mode':
                return __('Select your event attendance mode', 'webseo');
        }
    }

    protected function getPlaceholderByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_events_name':
                return __('The name of your event', 'webseo');
            case '_seopress_pro_rich_snippets_events_desc':
                return __('Enter your event description', 'webseo');
            case '_seopress_pro_rich_snippets_events_img':
                return __('Select your image', 'webseo');
            case '_seopress_pro_rich_snippets_events_start_date':
                return __('e.g. YYYY-MM-DD', 'webseo');
            case '_seopress_pro_rich_snippets_events_start_date_timezone':
                return __('e.g. -4:00', 'webseo');
            case '_seopress_pro_rich_snippets_events_start_time':
                return __('e.g. HH:MM', 'webseo');
            case '_seopress_pro_rich_snippets_events_end_date':
                return __('e.g. YYYY-MM-DD', 'webseo');
            case '_seopress_pro_rich_snippets_events_end_time':
                return __('e.g. HH:MM', 'webseo');
            case '_seopress_pro_rich_snippets_events_previous_start_date':
                return __('e.g. YYYY-MM-DD', 'webseo');
            case '_seopress_pro_rich_snippets_events_previous_start_time':
                return __('e.g. HH:MM', 'webseo');
            case '_seopress_pro_rich_snippets_events_location_name':
                return __('e.g. My Local Business name', 'webseo');
            case '_seopress_pro_rich_snippets_events_location_url':
                return __('e.g. https://www.example.com', 'webseo');
            case '_seopress_pro_rich_snippets_events_location_address':
                return __("e.g. 1 Avenue de l'Imperatrice, 64200 Biarritz", 'webseo');
            case '_seopress_pro_rich_snippets_events_offers_name':
                return __('e.g. General admission', 'webseo');
            case '_seopress_pro_rich_snippets_events_offers_price':
                return __('e.g. 10', 'webseo');
            case '_seopress_pro_rich_snippets_events_offers_url':
                return __('e.g. https://www.example.com', 'webseo');
            case '_seopress_pro_rich_snippets_events_performer':
                return __('e.g. Lana Del Rey', 'webseo');
            case '_seopress_pro_rich_snippets_events_organizer_name':
                return __('e.g. Apple', 'webseo');
            case '_seopress_pro_rich_snippets_events_organizer_url':
                return __('e.g. https://www.example.com', 'webseo');
        }
    }

    protected function getDescriptionByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_events_offers_valid_from_date':
                return __('The date when tickets go on sale', 'webseo');
            case '_seopress_pro_rich_snippets_events_offers_valid_from_time':
                return __('The time when tickets go on sale', 'webseo');
            case '_seopress_pro_rich_snippets_events_offers_price':
                return __('The lowest available price, including service charges and fees, of this type of ticket.', 'webseo');
            case '_seopress_pro_rich_snippets_events_img':
                return __('Minimum width: 720px - Recommended size: 1920px - .jpg, .png, or. gif format - crawlable and indexable', 'webseo');
        }
    }

    protected function getOptions($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_events_type':
                return [['value' => 'BusinessEvent', 'label' => __('Business Event', 'webseo')],
                    ['value' => 'ChildrensEvent',  'label' => __('Children\'s Event', 'webseo')],
                    ['value' => 'ComedyEvent',  'label' => __('Comedy Event', 'webseo')],
                    ['value' => 'CourseInstance',  'label' => __('Course Instance', 'webseo')],
                    ['value' => 'DanceEvent',  'label' => __('Dance Event', 'webseo')],
                    ['value' => 'DeliveryEvent',  'label' => __('Delivery Event', 'webseo')],
                    ['value' => 'EducationEvent',  'label' => __('Education Event', 'webseo')],
                    ['value' => 'ExhibitionEvent',  'label' => __('Exhibition Event', 'webseo')],
                    ['value' => 'Festival',  'label' => __('Festival', 'webseo')],
                    ['value' => 'FoodEvent',  'label' => __('Food Event', 'webseo')],
                    ['value' => 'LiteraryEvent',  'label' => __('Literary Event', 'webseo')],
                    ['value' => 'MusicEvent',  'label' => __('Music Event', 'webseo')],
                    ['value' => 'PublicationEvent',  'label' => __('Publication Event', 'webseo')],
                    ['value' => 'SaleEvent',  'label' => __('Sale Event', 'webseo')],
                    ['value' => 'ScreeningEvent',  'label' => __('Screening Event', 'webseo')],
                    ['value' => 'SocialEvent',  'label' => __('Social Event', 'webseo')],
                    ['value' => 'SportsEvent',  'label' => __('Sports Event', 'webseo')],
                    ['value' => 'TheaterEvent',  'label' => __('Theater Event', 'webseo')],
                    ['value' => 'VisualArtsEvent',  'label' => __('Visual Arts Event', 'webseo')],
                ];
            case '_seopress_pro_rich_snippets_events_offers_cat':
                return [
                    ['value' => 'Primary',  'label' => __('Primary', 'webseo')],
                    ['value' => 'Secondary',  'label' => __('Secondary', 'webseo')],
                    ['value' => 'Presale',  'label' => __('Presale', 'webseo')],
                    ['value' => 'Premium',  'label' => __('Premium', 'webseo')],
                ];
            case '_seopress_pro_rich_snippets_events_offers_price_currency':
                return Currencies::getOptions();
            case '_seopress_pro_rich_snippets_events_offers_availability':
                return [
                    ['value' => 'InStock', 'label' => __('In Stock', 'webseo')],
                    ['value' => 'SoldOut', 'label' => __('Sold Out', 'webseo')],
                    ['value' => 'PreOrder', 'label' => __('Pre Order', 'webseo')],
                ];
            case '_seopress_pro_rich_snippets_events_status':
                return [
                    ['value' => 'none', 'label' => __('Select a status event', 'webseo')],
                    ['value' => 'EventCancelled', 'label' => __('Event cancelled', 'webseo')],
                    ['value' => 'EventMovedOnline', 'label' => __('Event moved online', 'webseo')],
                    ['value' => 'EventPostponed', 'label' => __('Event postponed', 'webseo')],
                    ['value' => 'EventRescheduled', 'label' => __('Event rescheduled', 'webseo')],
                    ['value' => 'EventScheduled', 'label' => __('Event scheduled', 'webseo')],
                ];
            case '_seopress_pro_rich_snippets_events_attendance_mode':
                return [
                    ['value' => 'none', 'label' => __('Select your event attendance mode', 'webseo')],
                    ['value' => 'OfflineEventAttendanceMode', 'label' => __('Offline event', 'webseo')],
                    ['value' => 'OnlineEventAttendanceMode', 'label' => __('Online event', 'webseo')],
                    ['value' => 'MixedEventAttendanceMode', 'label' => __('Mixed event', 'webseo')],
                ];
                break;
        }
    }

    protected function getDetails($postId = null) {
        return [
            [
                'key' => '_seopress_pro_rich_snippets_events_type',
                'value' => 'BusinessEvent',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_name',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_desc',
                'class' => 'seopress-textarea-high-size'
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_img',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_start_date',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_start_date_timezone',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_start_time',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_end_date',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_end_time',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_previous_start_date',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_previous_start_time',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_location_name',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_location_url',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_location_address',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_offers_name',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_offers_cat',
                'value' => 'Primary',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_offers_price',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_offers_price_currency',
                'value' => 'none'
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_offers_availability',
                'value' => 'InStock'
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_offers_valid_from_date',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_offers_valid_from_time',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_offers_url',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_performer',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_organizer_name',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_organizer_url',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_status',
                'value' => 'none',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_events_attendance_mode',
                'value' => 'none'
            ],
        ];
    }
}
