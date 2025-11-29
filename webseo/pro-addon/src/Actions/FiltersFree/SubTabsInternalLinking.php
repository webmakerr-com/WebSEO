<?php

namespace SEOPressPro\Actions\FiltersFree;

if ( ! defined('ABSPATH')) {
    exit;
}

use WebSEO\Core\Hooks\ExecuteHooks;

class SubTabsInternalLinking implements ExecuteHooks {
    public function hooks() {
        add_filter('seopress_active_internal_linking', '__return_true');
    }
}
