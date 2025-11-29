<?php

namespace SEOPressPro\Services\GoogleSearchConsole;

defined('ABSPATH') || exit;

class GoogleClient {
    protected $client = null;

    private function requireAutoload() {
        $autoload_paths = [
            WEBSEO_PRO_PLUGIN_DIR_PATH . 'vendor/autoload.php',
        ];

        if (defined('WP_PLUGIN_DIR')) {
            $autoload_paths[] = rtrim(WP_PLUGIN_DIR, '/\\') . '/wp-seopress-pro/vendor/autoload.php';
        }

        foreach ($autoload_paths as $autoload_path) {
            if (is_readable($autoload_path)) {
                require_once $autoload_path;
                return true;
            }
        }

        return false;
    }

    public function getClient() {
        if($this->client === null){
            $this->setup();
        }

        return $this->client;
    }

    public function setup() {
        if ( ! $this->requireAutoload()) {
            return false;
        }

        $client = new \Google_Client();

        //Get Google API Key
        $options = get_option('seopress_instant_indexing_option_name');
        $google_api_key = isset($options['seopress_instant_indexing_google_api_key']) ? $options['seopress_instant_indexing_google_api_key'] : '';

        //Check we have setup at least one API key
        if (empty($google_api_key)) {
            $data['inspect_url']['status'] = __('No API key defined from the settings tab', 'webseo');
            update_post_meta($postId, '_seopress_gsc_inspect_url_data', $data);
            return false;
        }

        $client->setAuthConfig(json_decode($google_api_key, true));
        $client->setScopes('https://www.googleapis.com/auth/webmasters.readonly');

        $this->client = new \Google_Service_SearchConsole($client);

        return true;
    }
}
