<?php // phpcs:ignore

namespace WebSEO\Services\Settings\Roles;

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

if ( ! class_exists( SectionPagesWebSEO::class ) ) {
        return;
}

/**
 * Backward-compatible alias for the WebSEO-prefixed section pages renderer.
 */
class SectionPagesSEOPress extends SectionPagesWebSEO {
        const NAME_SERVICE = 'SectionPagesSEOPress';
}
