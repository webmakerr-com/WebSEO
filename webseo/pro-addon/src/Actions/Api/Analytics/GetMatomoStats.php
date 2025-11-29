<?php

namespace SEOPressPro\Actions\Api\Analytics;

if ( ! defined('ABSPATH')) {
    exit;
}

use WebSEO\Core\Hooks\ExecuteHooks;

class GetMatomoStats implements ExecuteHooks {
    public function hooks() {
        add_action('rest_api_init', [$this, 'register']);
    }

    public function register() {
        webseo_register_rest_route( '/matomo', [
            'methods' => 'GET',
            'callback' => [$this, 'processGet'],
            'permission_callback' => function ($request) {
                if ( true === seopress_advanced_security_matomo_widget_check()) {
                    return true;
                }

                return false;
            },
        ]);
    }

    public function processGet(\WP_REST_Request $request) {
        $data = get_transient('seopress_results_matomo');

        if (empty($data)) {
            return new \WP_REST_Response('No data found');
        }

        return new \WP_REST_Response($data);
    }
}
