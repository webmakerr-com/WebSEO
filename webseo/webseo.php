<?php
/**
 * Plugin Name: WebSEO
 * Plugin URI: https://www.webseo.com/
 * Description: All-in-one SEO plugin for WordPress.
 * Author: WebSEO Team
 * Version: 9.3.0.3
 * Author URI: https://www.webseo.com/
 * License: GPLv3 or later
 * Text Domain: webseo
 * Domain Path: /languages
 * Requires PHP: 7.4
 * Requires at least: 5.0
 *
 * @package WEBSEO
 */

/*
        Copyright 2016 - 2025 - Benjamin Denis  (email : contact@webseo.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 3, as
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

defined( 'ABSPATH' ) || exit( 'Please don’t call the plugin directly. Thanks :)' );

/**
 * Define constants
 */
define( 'WEBSEO_VERSION', '9.3.0.3' );
define( 'WEBSEO_AUTHOR', 'Benjamin Denis' );
define( 'WEBSEO_PLUGIN_FILE', __FILE__ );
define( 'WEBSEO_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );
define( 'WEBSEO_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );
define( 'WEBSEO_ASSETS_DIR', WEBSEO_PLUGIN_DIR_URL . 'assets' );
define( 'WEBSEO_TEMPLATE_DIR', WEBSEO_PLUGIN_DIR_PATH . 'templates' );
define( 'WEBSEO_TEMPLATE_SITEMAP_DIR', WEBSEO_TEMPLATE_DIR . '/sitemap' );
define( 'WEBSEO_TEMPLATE_JSON_SCHEMAS', WEBSEO_TEMPLATE_DIR . '/json-schemas' );
define( 'WEBSEO_TEMPLATE_STOP_WORDS', WEBSEO_TEMPLATE_DIR . '/stop-words' );
define( 'WEBSEO_PATH_PUBLIC', WEBSEO_PLUGIN_DIR_PATH . 'public' );
define( 'WEBSEO_URL_PUBLIC', WEBSEO_PLUGIN_DIR_URL . 'public' );
define( 'WEBSEO_URL_ASSETS', WEBSEO_PLUGIN_DIR_URL . 'assets' );
define( 'WEBSEO_REST_NAMESPACE', 'webseo/v1' );
define( 'SEOPRESS_REST_NAMESPACE', 'seopress/v1' );

// Pro assets shipped within the main plugin.
define( 'WEBSEO_PRO_PLUGIN_DIR_PATH', WEBSEO_PLUGIN_DIR_PATH . 'pro-addon/' );
define( 'WEBSEO_PRO_PLUGIN_DIR_URL', WEBSEO_PLUGIN_DIR_URL . 'pro-addon/' );
define( 'WEBSEO_LEGACY_PRO_TEMPLATE_DIR', WEBSEO_PRO_PLUGIN_DIR_PATH . 'templates' );
define( 'WEBSEO_LEGACY_PRO_TEMPLATE_JSON_SCHEMAS', WEBSEO_LEGACY_PRO_TEMPLATE_DIR . '/json-schemas' );
define( 'WEBSEO_LEGACY_PRO_TEMPLATE_STOP_WORDS', WEBSEO_LEGACY_PRO_TEMPLATE_DIR . '/stop-words' );

$legacy_source_constants = array(
        'WEBSEO_WL_ADMIN_HEADER' => 'SEOPRESS_WL_ADMIN_HEADER',
);

foreach ( $legacy_source_constants as $new_constant => $legacy_constant ) {
        if ( defined( $legacy_constant ) && ! defined( $new_constant ) ) {
                define( $new_constant, constant( $legacy_constant ) );
        }
}

$legacy_constants = array(
        'SEOPRESS_VERSION'               => 'WEBSEO_VERSION',
        'SEOPRESS_AUTHOR'                => 'WEBSEO_AUTHOR',
        'SEOPRESS_PLUGIN_FILE'           => 'WEBSEO_PLUGIN_FILE',
        'SEOPRESS_PLUGIN_DIR_PATH'       => 'WEBSEO_PLUGIN_DIR_PATH',
        'SEOPRESS_PLUGIN_DIR_URL'        => 'WEBSEO_PLUGIN_DIR_URL',
        'SEOPRESS_ASSETS_DIR'            => 'WEBSEO_ASSETS_DIR',
        'SEOPRESS_TEMPLATE_DIR'          => 'WEBSEO_TEMPLATE_DIR',
        'SEOPRESS_TEMPLATE_SITEMAP_DIR'  => 'WEBSEO_TEMPLATE_SITEMAP_DIR',
        'SEOPRESS_TEMPLATE_JSON_SCHEMAS' => 'WEBSEO_TEMPLATE_JSON_SCHEMAS',
        'SEOPRESS_TEMPLATE_STOP_WORDS'   => 'WEBSEO_TEMPLATE_STOP_WORDS',
        'SEOPRESS_PATH_PUBLIC'           => 'WEBSEO_PATH_PUBLIC',
        'SEOPRESS_URL_PUBLIC'            => 'WEBSEO_URL_PUBLIC',
        'SEOPRESS_URL_ASSETS'            => 'WEBSEO_URL_ASSETS',
        'SEOPRESS_PRO_PLUGIN_DIR_PATH'   => 'WEBSEO_PRO_PLUGIN_DIR_PATH',
        'SEOPRESS_PRO_PLUGIN_DIR_URL'    => 'WEBSEO_PRO_PLUGIN_DIR_URL',
        'SEOPRESS_PRO_TEMPLATE_DIR'      => 'WEBSEO_TEMPLATE_DIR',
        'SEOPRESS_PRO_TEMPLATE_JSON_SCHEMAS' => 'WEBSEO_TEMPLATE_JSON_SCHEMAS',
        'SEOPRESS_PRO_TEMPLATE_STOP_WORDS' => 'WEBSEO_TEMPLATE_STOP_WORDS',
);

foreach ( $legacy_constants as $legacy_constant => $new_constant ) {
        if ( ! defined( $legacy_constant ) ) {
                define( $legacy_constant, constant( $new_constant ) );
        }
}

/**
 * Kernel
 */
use WebSEO\Core\Kernel;
use WebSEO\Helpers\PagesAdmin;
require_once WEBSEO_PLUGIN_DIR_PATH . 'seopress-autoload.php';

if ( file_exists( WEBSEO_PLUGIN_DIR_PATH . 'vendor/autoload.php' ) ) {
	require_once WEBSEO_PLUGIN_DIR_PATH . 'seopress-functions.php';
}

// Initialize the kernel if the vendor autoload exists.
if ( file_exists( WEBSEO_PLUGIN_DIR_PATH . 'vendor/autoload.php' ) ) {
        Kernel::execute(
                array(
                        'file'      => __FILE__,
                        'slug'      => 'webseo',
                        'main_file' => 'webseo',
                        'root'      => __DIR__,
                )
        );
}

// Bootstrap bundled Pro features.
if ( file_exists( WEBSEO_PRO_PLUGIN_DIR_PATH . 'seopress-pro.php' ) ) {
        require_once WEBSEO_PRO_PLUGIN_DIR_PATH . 'seopress-pro.php';
}

/**
 * Apply a filter with a new namespace while keeping the legacy hook available.
 *
 * @param string $new_hook New hook name.
 * @param string $legacy_hook Deprecated legacy hook name.
 * @param mixed  $value Value to filter.
 * @param mixed  ...$args Additional arguments to pass to the filters.
 * @return mixed
 */
function webseo_apply_filters_compat( $new_hook, $legacy_hook, $value, ...$args ) {
        $filtered = apply_filters( $new_hook, $value, ...$args );

        if ( has_filter( $legacy_hook ) ) {
                $filtered = apply_filters_deprecated( $legacy_hook, array_merge( array( $filtered ), $args ), WEBSEO_VERSION, $new_hook );
        }

        return $filtered;
}

/**
 * Trigger an action with a new namespace while keeping the legacy hook available.
 *
 * @param string $new_hook New hook name.
 * @param string $legacy_hook Deprecated legacy hook name.
 * @param mixed  ...$args Arguments to pass to the actions.
 * @return void
 */
function webseo_do_action_compat( $new_hook, $legacy_hook, ...$args ) {
        do_action( $new_hook, ...$args );
        do_action_deprecated( $legacy_hook, $args, WEBSEO_VERSION, $new_hook );
}

/**
 * Register an action for both the new and legacy hook names.
 *
 * @param string   $new_hook    New hook name.
 * @param string   $legacy_hook Deprecated legacy hook name.
 * @param callable $callback    Callback to execute.
 * @param int      $priority    Hook priority.
 * @param int      $accepted_args Number of accepted arguments.
 * @return void
 */
function webseo_add_action_compat( $new_hook, $legacy_hook, $callback, $priority = 10, $accepted_args = 1 ) {
        add_action( $new_hook, $callback, $priority, $accepted_args );

        if ( $legacy_hook !== $new_hook ) {
                add_action( $legacy_hook, $callback, $priority, $accepted_args );
        }
}

/**
 * Register a REST route for both the WebSEO and legacy SEOPress namespaces.
 *
 * @param string $route     Route path.
 * @param array  $args      Route arguments.
 * @param bool   $override  Whether to override an existing route.
 * @return void
 */
function webseo_register_rest_route( $route, $args = array(), $override = false ) {
        register_rest_route( WEBSEO_REST_NAMESPACE, $route, $args, $override );
        register_rest_route( SEOPRESS_REST_NAMESPACE, $route, $args, $override );
}

/**
 * Retrieve cron event mappings from legacy to new hook names.
 *
 * @return array<string, string>
 */
function webseo_get_cron_event_mappings() {
        return array(
                'seopress_xml_sitemaps_ping_cron' => 'webseo_xml_sitemaps_ping_cron',
                'seopress_404_cron_cleaning'      => 'webseo_404_cron_cleaning',
                'seopress_google_analytics_cron'  => 'webseo_google_analytics_cron',
                'seopress_page_speed_insights_cron' => 'webseo_page_speed_insights_cron',
                'seopress_404_email_alerts_cron'  => 'webseo_404_email_alerts_cron',
                'seopress_insights_gsc_cron'      => 'webseo_insights_gsc_cron',
                'seopress_matomo_analytics_cron'  => 'webseo_matomo_analytics_cron',
                'seopress_alerts_cron'            => 'webseo_alerts_cron',
                'seopress_site_audit_run_task_cron' => 'webseo_site_audit_run_task_cron',
        );
}

/**
 * Migrate scheduled events to the new WebSEO-prefixed hook names.
 *
 * @param array $completed_migrations Completed migrations array (passed by reference).
 * @return void
 */
function webseo_migrate_cron_events( &$completed_migrations ) {
        if ( ! empty( $completed_migrations['webseo_cron_rename'] ) ) {
                return;
        }

        foreach ( webseo_get_cron_event_mappings() as $legacy_hook => $new_hook ) {
                $next_event = wp_next_scheduled( $legacy_hook );

                if ( $next_event && ! wp_next_scheduled( $new_hook ) ) {
                        $schedule = wp_get_schedule( $legacy_hook );

                        if ( $schedule ) {
                                wp_schedule_event( $next_event, $schedule, $new_hook );
                        }
                }

                while ( $next_event ) {
                        wp_unschedule_event( $next_event, $legacy_hook );
                        $next_event = wp_next_scheduled( $legacy_hook );
                }
        }

        $completed_migrations['webseo_cron_rename'] = true;
}

/**
 * Migrate custom tables from the legacy SEOPress prefix to the WebSEO prefix.
 *
 * @param array $completed_migrations Completed migrations array (passed by reference).
 * @return void
 */
function webseo_migrate_custom_tables( &$completed_migrations ) {
        global $wpdb;

        if ( ! empty( $completed_migrations['webseo_table_rename'] ) ) {
                return;
        }

        $table_pairs = array(
                'seopress_significant_keywords' => 'webseo_significant_keywords',
                'seopress_seo_issues'           => 'webseo_seo_issues',
                'seopress_content_analysis'     => 'webseo_content_analysis',
        );

foreach ( $table_pairs as $legacy_table => $new_table ) {
$legacy_table_name = $wpdb->prefix . $legacy_table;
$new_table_name    = $wpdb->prefix . $new_table;

if ( $wpdb->get_var( $wpdb->prepare( 'SHOW TABLES LIKE %s', $new_table_name ) ) === $new_table_name ) {
continue;
}

if ( $wpdb->get_var( $wpdb->prepare( 'SHOW TABLES LIKE %s', $legacy_table_name ) ) === $legacy_table_name ) {
$renamed = $wpdb->query( "RENAME TABLE `{$legacy_table_name}` TO `{$new_table_name}`" );

if ( false === $renamed ) {
// Fallback copy to avoid data loss when rename fails.
$wpdb->query( "CREATE TABLE `{$new_table_name}` LIKE `{$legacy_table_name}`" );
$wpdb->query( "INSERT INTO `{$new_table_name}` SELECT * FROM `{$legacy_table_name}`" );
$wpdb->query( "DROP TABLE `{$legacy_table_name}`" );
}
}
}

$completed_migrations['webseo_table_rename'] = true;
}

/**
 * Migrate stored capabilities from legacy prefixes to the WebSEO prefix.
 *
 * @param array $completed_migrations Completed migrations array (passed by reference).
 * @return void
 */
function webseo_migrate_capabilities( &$completed_migrations ) {
if ( ! empty( $completed_migrations['webseo_capability_rename'] ) ) {
return;
}

$roles = wp_roles();

if ( ! $roles ) {
return;
}

$pages = PagesAdmin::getPages();

foreach ( $roles->role_objects as $role ) {
foreach ( $pages as $capability ) {
$new_capability    = PagesAdmin::getCustomCapability( $capability );
$legacy_capability = PagesAdmin::getLegacyCapability( $capability );

if ( isset( $role->capabilities[ $legacy_capability ] ) ) {
$role->add_cap( $new_capability, true );
$role->remove_cap( $legacy_capability );
}
}
}

$completed_migrations['webseo_capability_rename'] = true;
}

/**
 * Remove cached values that use legacy prefixes so rebuilt caches use the new identifiers.
 *
 * @param array $completed_migrations Completed migrations array (passed by reference).
 * @return void
 */
function webseo_migrate_caches( &$completed_migrations ) {
if ( ! empty( $completed_migrations['webseo_cache_reset'] ) ) {
return;
}

global $wpdb;

$legacy_transients = array(
'_seopress_sitemap_ids_video',
'seopress_results_page_speed',
'seopress_results_page_speed_desktop',
'seopress_results_google_analytics',
'seopress_results_matomo',
'seopress_prevent_title_redirection_already_exist',
);

foreach ( $legacy_transients as $legacy_transient ) {
delete_transient( $legacy_transient );
}

$patterned_transients = array(
'_transient_seopress_content_analysis_count_target_keywords_use_%',
'_transient_timeout_seopress_content_analysis_count_target_keywords_use_%',
);

foreach ( $patterned_transients as $pattern ) {
//phpcs:ignore WordPress.DB.DirectDatabaseQuery.DirectQuery,WordPress.DB.DirectDatabaseQuery.NoCaching
$options = $wpdb->get_col( $wpdb->prepare( "SELECT option_name FROM {$wpdb->options} WHERE option_name LIKE %s", $pattern ) );

foreach ( $options as $option_name ) {
delete_option( $option_name );
}
}

$completed_migrations['webseo_cache_reset'] = true;
}

/**
 * Copy an option value from an old key to a new key and remove the legacy entry when successful.
 *
 * @param string $old_key Legacy option key.
 * @param string $new_key New option key.
 * @return bool True when the migration for this key is completed.
 */
function webseo_migrate_option_key( $old_key, $new_key ) {
        $old_value = get_option( $old_key, null );
        $new_value = get_option( $new_key, null );

        if ( null !== $new_value ) {
                if ( null !== $old_value ) {
                        delete_option( $old_key );
                }

                return true;
        }

        if ( null === $old_value ) {
                return true;
        }

        $updated = update_option( $new_key, $old_value, false );

        if ( $updated ) {
                delete_option( $old_key );
        }

        return (bool) $updated;
}

/**
 * Run migrations for renamed options and transients.
 *
 * @return void
 */
function webseo_run_option_migrations() {
        $completed_migrations = get_option( 'webseo_completed_migrations', array() );

if ( empty( $completed_migrations['webseo_option_rename'] ) ) {
$migrations_success = webseo_migrate_option_key( 'seopress_activated', 'webseo_activated' );
$migrations_success = webseo_migrate_option_key( 'seopress_notices', 'webseo_notices' ) && $migrations_success;

                if ( $migrations_success ) {
                        $completed_migrations['webseo_option_rename'] = true;
}
}

webseo_migrate_custom_tables( $completed_migrations );
webseo_migrate_cron_events( $completed_migrations );
webseo_migrate_capabilities( $completed_migrations );
webseo_migrate_caches( $completed_migrations );

update_option( 'webseo_completed_migrations', $completed_migrations, false );
}
add_action( 'plugins_loaded', 'webseo_run_option_migrations', 5 );

/**
 * Activation hook
 *
 * @return void
 */
function webseo_activation() {
        add_option( 'webseo_activated', 'yes' );
        flush_rewrite_rules( false );

        webseo_do_action_compat( 'webseo_activation', 'seopress_activation' );
}
register_activation_hook( __FILE__, 'webseo_activation' );

/**
 * Backward compatibility wrapper for legacy activation hook consumers.
 *
 * @return void
 */
function seopress_activation() {
        webseo_activation();
}

/**
 * Deactivation hook
 *
 * @return void
 */
function webseo_deactivation() {
        delete_option( 'webseo_activated' );
        delete_option( 'seopress_activated' );
        flush_rewrite_rules( false );
        webseo_do_action_compat( 'webseo_deactivation', 'seopress_deactivation' );
}
register_deactivation_hook( __FILE__, 'webseo_deactivation' );

/**
 * Backward compatibility wrapper for legacy deactivation hook consumers.
 *
 * @return void
 */
function seopress_deactivation() {
        webseo_deactivation();
}

/**
 * Redirect User After Plugin Activation
 *
 * @return void
 */
function seopress_redirect_after_activation() {
        // Do not redirect if WP is doing AJAX requests OR multisite page OR incorrect user permissions.
        if ( wp_doing_ajax() || is_network_admin() || ! current_user_can( 'manage_options' ) ) {
                return;
        }

        // Check if the plugin was activated.
        $webseo_activation_flag = get_option( 'webseo_activated', null );

        if ( null === $webseo_activation_flag ) {
                $webseo_activation_flag = get_option( 'seopress_activated', null );
        }

        if ( 'yes' === $webseo_activation_flag ) {

                // Delete the activation flag.
                delete_option( 'webseo_activated' );
                delete_option( 'seopress_activated' );

                // If the wizard has already been completed, do not redirect the user.
                $seopress_notices = get_option( 'webseo_notices', array() );

                if ( empty( $seopress_notices ) ) {
                        $seopress_notices = get_option( 'seopress_notices', array() );
                }

                if ( empty( $seopress_notices ) || ! isset( $seopress_notices['notice-wizard'] ) ) {
                        wp_safe_redirect( esc_url_raw( admin_url( 'admin.php?page=webseo-setup&step=welcome&parent=welcome' ) ) );
                        exit();
                }
        }
}
add_action( 'admin_init', 'seopress_redirect_after_activation' );

/**
 * Loads the SEOPress admin + core + API
 *
 * @param string $hook Hook.
 * @return void
 */
function seopress_plugins_loaded( $hook ) {
	global $pagenow, $typenow, $wp_version;

	$plugin_dir = plugin_dir_path( __FILE__ );

	// Load Docs.
	require_once $plugin_dir . 'inc/admin/docs/DocsLinks.php';

	if ( is_admin() || is_network_admin() ) {
		require_once $plugin_dir . 'inc/admin/admin.php';

		// Load metaboxes only when editing posts or terms.
		if ( in_array( $pagenow, array( 'post-new.php', 'post.php' ), true ) && 'seopress_schemas' !== $typenow ) {
			require_once $plugin_dir . 'inc/admin/metaboxes/admin-metaboxes.php';
		} elseif ( in_array( $pagenow, array( 'term.php', 'edit-tags.php' ), true ) ) {
			require_once $plugin_dir . 'inc/admin/metaboxes/admin-term-metaboxes.php';
		}

		// Load admin header unless explicitly disabled.
		if ( ! defined( 'WEBSEO_WL_ADMIN_HEADER' ) || WEBSEO_WL_ADMIN_HEADER !== false ) {
			require_once $plugin_dir . 'inc/admin/admin-bar/admin-header.php';
		}
	}

	// Load options and admin bar.
	require_once $plugin_dir . 'inc/functions/options.php';
	require_once $plugin_dir . 'inc/admin/admin-bar/admin-bar.php';

	// Load integrations conditionally.
        if ( did_action( 'elementor/loaded' ) && webseo_apply_filters_compat( 'webseo_elementor_integration_enabled', 'seopress_elementor_integration_enabled', true ) ) {
                include_once $plugin_dir . 'inc/admin/page-builders/elementor/elementor-addon.php';
        }

	if ( version_compare( $wp_version, '5.0', '>=' ) ) {
		include_once $plugin_dir . 'inc/admin/page-builders/gutenberg/blocks.php';
	}

	if ( is_admin() ) {
		include_once $plugin_dir . 'inc/admin/page-builders/classic/classic-editor.php';
	}
}
add_action( 'plugins_loaded', 'seopress_plugins_loaded', 999 );

/**
 * Loads the SEOPress i18n + dynamic variables
 *
 * @return void
 */
function seopress_init() {
// i18n.
load_plugin_textdomain( 'webseo', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

	// Preload dynamic variables file.
	include_once plugin_dir_path( __FILE__ ) . 'inc/functions/variables/dynamic-variables.php';
}
add_action( 'init', 'seopress_init' );

/**
 * Render dynamic variables
 *
 * @param array   $variables Dynamic variables.
 * @param object  $post Post object.
 * @param boolean $is_oembed Is oembed.
 * @return array $variables
 */
function seopress_dyn_variables_init( $variables, $post = '', $is_oembed = false ) {
	if ( wp_doing_ajax() ) {
		return;
	}

	// Use memoized function for dynamic variable retrieval.
        return WebSEO\Helpers\CachedMemoizeFunctions::memoize( 'seopress_get_dynamic_variables' )( $variables, $post, $is_oembed );
}
add_filter( 'webseo_dyn_variables_fn', 'seopress_dyn_variables_init', 10, 3 );

/**
 * Loads the JS/CSS in admin
 *
 * @param string $hook Hook.
 * @return void
 */
function seopress_add_admin_options_scripts( $hook ) {
	$prefix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	// Register stylesheets.
    wp_register_style( 'webseo-admin', plugins_url( 'assets/css/webseo' . $prefix . '.css', __FILE__ ), array(), WEBSEO_VERSION );
    wp_enqueue_style( 'webseo-admin' );

	// Early return if no page query var.
	if ( ! isset( $_GET['page'] ) ) {
		return;
	}

        // Preload scripts that are required for specific pages.
        $page    = sanitize_text_field( wp_unslash( $_GET['page'] ) );
        $scripts = array();

        $page_aliases = array(
                'webseo-option'           => 'seopress-option',
                'webseo-network-option'   => 'seopress-network-option',
                'webseo-titles'           => 'seopress-titles',
                'webseo-xml-sitemap'      => 'seopress-xml-sitemap',
                'webseo-social'           => 'seopress-social',
                'webseo-google-analytics' => 'seopress-google-analytics',
                'webseo-instant-indexing' => 'seopress-instant-indexing',
                'webseo-advanced'         => 'seopress-advanced',
                'webseo-import-export'    => 'seopress-import-export',
                'webseo-bot-batch'        => 'seopress-bot-batch',
                'webseo-license'          => 'seopress-license',
                'webseo-pro-page'         => 'seopress-pro-page',
                'webseo-setup'            => 'seopress-setup',
        );

        if ( ! isset( $page_aliases[ $page ] ) ) {
                $reverse_alias = array_search( $page, $page_aliases, true );
                if ( false !== $reverse_alias ) {
                        $page = $reverse_alias;
                }
        }

	// Network options page.
    if ( in_array( $page, array( 'webseo-network-option', 'seopress-network-option' ), true ) ) {
            $scripts[] = 'webseo-network-tabs';
    }

	// Pages needing Toggle / Notices JS.
        $pages_with_toggle_js = array(
                'webseo-setup',
                'seopress-setup',
                'webseo-option',
                'seopress-option',
                'webseo-network-option',
                'seopress-network-option',
                'webseo-titles',
                'seopress-titles',
                'webseo-xml-sitemap',
                'seopress-xml-sitemap',
                'webseo-social',
                'seopress-social',
                'webseo-google-analytics',
                'seopress-google-analytics',
                'webseo-pro-page',
                'seopress-pro-page',
                'webseo-instant-indexing',
                'seopress-instant-indexing',
                'webseo-advanced',
                'seopress-advanced',
                'webseo-import-export',
                'seopress-import-export',
                'webseo-bot-batch',
                'seopress-bot-batch',
                'webseo-license',
                'seopress-license',
        );

        if ( in_array( $page, $pages_with_toggle_js, true ) ) {
                $scripts[] = 'webseo-dashboard';
        }

        // Setup Wizard page.
        if ( in_array( $page, array( 'webseo-setup', 'seopress-setup' ), true ) ) {
                wp_enqueue_style( 'webseo-setup', plugins_url( 'assets/css/webseo-setup' . $prefix . '.css', __FILE__ ), array(), WEBSEO_VERSION );
                wp_enqueue_script( 'webseo-migrate', plugins_url( 'assets/js/webseo-migrate' . $prefix . '.js', __FILE__ ), array( 'jquery' ), WEBSEO_VERSION, true );
                wp_enqueue_media();
                wp_enqueue_script( 'webseo-media-uploader', plugins_url( 'assets/js/webseo-media-uploader' . $prefix . '.js', __FILE__ ), array( 'jquery' ), WEBSEO_VERSION, true );
        }

	// Dashboard page styles.
        if ( in_array( $page, array( 'webseo-option', 'seopress-option' ), true ) ) {
                wp_register_style( 'webseo-admin-dashboard', plugins_url( 'assets/css/webseo-admin-dashboard' . $prefix . '.css', __FILE__ ), array(), WEBSEO_VERSION );
                wp_enqueue_style( 'webseo-admin-dashboard' );
        }

	// Load common migration scripts for multiple pages.
        if ( in_array( $page, array( 'webseo-option', 'seopress-option', 'webseo-import-export', 'seopress-import-export' ), true ) ) {
                $scripts[] = 'webseo-migrate';
        }

	// Tabs script.
        $pages_with_tabs = array(
                'webseo-titles',
                'seopress-titles',
                'webseo-xml-sitemap',
                'seopress-xml-sitemap',
                'webseo-social',
                'seopress-social',
                'webseo-google-analytics',
                'seopress-google-analytics',
                'webseo-advanced',
                'seopress-advanced',
                'webseo-import-export',
                'seopress-import-export',
                'webseo-instant-indexing',
                'seopress-instant-indexing',
        );

	if ( in_array( $page, $pages_with_tabs, true ) ) {
                $scripts[] = 'webseo-tabs';
        }

	// Load scripts conditionally.
	foreach ( $scripts as $script ) {
                wp_enqueue_script( $script, plugins_url( 'assets/js/' . $script . $prefix . '.js', __FILE__ ), array( 'jquery' ), WEBSEO_VERSION, true );
        }

	if ( in_array( $page, $pages_with_toggle_js, true ) ) {
		// Features.
		$seopress_toggle_features = array(
			'seopress_nonce'           => wp_create_nonce( 'seopress_toggle_features_nonce' ),
			'seopress_toggle_features' => admin_url( 'admin-ajax.php' ),
			'i18n'                     => __( 'has been successfully updated!', 'webseo' ),
		);
                wp_localize_script( 'webseo-dashboard', 'seopressAjaxToggleFeatures', $seopress_toggle_features );

		// Notices.
		$seopress_hide_notices = array(
			'seopress_nonce'        => wp_create_nonce( 'seopress_hide_notices_nonce' ),
			'seopress_hide_notices' => admin_url( 'admin-ajax.php' ),
		);
                wp_localize_script( 'webseo-dashboard', 'seopressAjaxHideNotices', $seopress_hide_notices );

		if ( 'seopress-option' === $page ) {
			// Simple View.
			$seopress_switch_view = array(
				'seopress_nonce'       => wp_create_nonce( 'seopress_switch_view_nonce' ),
				'seopress_switch_view' => admin_url( 'admin-ajax.php' ),
			);
                        wp_localize_script( 'webseo-dashboard', 'seopressAjaxSwitchView', $seopress_switch_view );

			// News panel.
			$seopress_news = array(
				'seopress_nonce' => wp_create_nonce( 'seopress_news_nonce' ),
				'seopress_news'  => admin_url( 'admin-ajax.php' ),
			);
                        wp_localize_script( 'webseo-dashboard', 'seopressAjaxNews', $seopress_news );

			// Display panel.
			$seopress_display = array(
				'seopress_nonce'   => wp_create_nonce( 'seopress_display_nonce' ),
				'seopress_display' => admin_url( 'admin-ajax.php' ),
			);
                        wp_localize_script( 'webseo-dashboard', 'seopressAjaxDisplay', $seopress_display );
		}
	}

	// Google Analytics color picker.
        if ( in_array( $page, array( 'webseo-google-analytics', 'seopress-google-analytics' ), true ) ) {
                wp_enqueue_style( 'wp-color-picker' );
                wp_enqueue_script( 'wp-color-picker-alpha', plugins_url( 'assets/js/wp-color-picker-alpha' . $prefix . '.js', __FILE__ ), array( 'wp-color-picker' ), WEBSEO_VERSION, true );
                wp_localize_script(
			'wp-color-picker-alpha',
			'wpColorPickerL10n',
			array(
				'clear'            => __( 'Clear', 'webseo' ),
				'clearAriaLabel'   => __( 'Clear color', 'webseo' ),
				'defaultString'    => __( 'Default', 'webseo' ),
				'defaultAriaLabel' => __( 'Select default color', 'webseo' ),
				'pick'             => __( 'Select Color', 'webseo' ),
				'defaultLabel'     => __( 'Color value', 'webseo' ),
			),
		);

		$settings = wp_enqueue_code_editor( array( 'type' => 'text/html' ) );
		wp_add_inline_script(
			'code-editor',
			sprintf(
				'jQuery(function($) { 
            function initializeEditor(elementId, settings) {
                var $textarea = $("#" + elementId);
                if (!$textarea.data("codeMirrorInitialized")) {
                    wp.codeEditor.initialize(elementId, settings);
                    $textarea.data("codeMirrorInitialized", true);
                }
            }
            function initializeEditors() {
                initializeEditor("seopress_google_analytics_other_tracking", %s);
                initializeEditor("seopress_google_analytics_other_tracking_body", %s);
                initializeEditor("seopress_google_analytics_other_tracking_footer", %s);
            }
            $(document).ready(function() {
                initializeEditors();
                setTimeout(initializeEditors, 100);
            });
        });',
				wp_json_encode( $settings ),
				wp_json_encode( $settings ),
				wp_json_encode( $settings )
			)
		);
	}

	// Localize migration data once for all migration pages.
        if ( in_array( $page, array( 'webseo-option', 'seopress-option', 'webseo-import-export', 'seopress-import-export', 'webseo-setup', 'seopress-setup' ), true ) ) {
                $seopress_migrate = array(
                        'seopress_aio_migrate'              => array(
				'seopress_nonce'         => wp_create_nonce( 'seopress_aio_migrate_nonce' ),
				'seopress_aio_migration' => admin_url( 'admin-ajax.php' ),
			),
			'seopress_yoast_migrate'            => array(
				'seopress_nonce'           => wp_create_nonce( 'seopress_yoast_migrate_nonce' ),
				'seopress_yoast_migration' => admin_url( 'admin-ajax.php' ),
			),
			'seopress_seo_framework_migrate'    => array(
				'seopress_nonce'                   => wp_create_nonce( 'seopress_seo_framework_migrate_nonce' ),
				'seopress_seo_framework_migration' => admin_url( 'admin-ajax.php' ),
			),
			'seopress_rk_migrate'               => array(
				'seopress_nonce'        => wp_create_nonce( 'seopress_rk_migrate_nonce' ),
				'seopress_rk_migration' => admin_url( 'admin-ajax.php' ),
			),
			'seopress_squirrly_migrate'         => array(
				'seopress_nonce'              => wp_create_nonce( 'seopress_squirrly_migrate_nonce' ),
				'seopress_squirrly_migration' => admin_url( 'admin-ajax.php' ),
			),
			'seopress_seo_ultimate_migrate'     => array(
				'seopress_nonce'                  => wp_create_nonce( 'seopress_seo_ultimate_migrate_nonce' ),
				'seopress_seo_ultimate_migration' => admin_url( 'admin-ajax.php' ),
			),
			'seopress_wp_meta_seo_migrate'      => array(
				'seopress_nonce'                 => wp_create_nonce( 'seopress_meta_seo_migrate_nonce' ),
				'seopress_wp_meta_seo_migration' => admin_url( 'admin-ajax.php' ),
			),
			'seopress_premium_seo_pack_migrate' => array(
				'seopress_nonce'                      => wp_create_nonce( 'seopress_premium_seo_pack_migrate_nonce' ),
				'seopress_premium_seo_pack_migration' => admin_url( 'admin-ajax.php' ),
			),
			'seopress_wpseo_migrate'            => array(
				'seopress_nonce'           => wp_create_nonce( 'seopress_wpseo_migrate_nonce' ),
				'seopress_wpseo_migration' => admin_url( 'admin-ajax.php' ),
			),
			'seopress_smart_crawl_migrate'      => array(
				'seopress_nonce'                 => wp_create_nonce( 'seopress_smart_crawl_migrate_nonce' ),
				'seopress_smart_crawl_migration' => admin_url( 'admin-ajax.php' ),
			),
			'seopress_slim_seo_migrate'         => array(
				'seopress_nonce'              => wp_create_nonce( 'seopress_slim_seo_migrate_nonce' ),
				'seopress_slim_seo_migration' => admin_url( 'admin-ajax.php' ),
			),
			'seopress_siteseo_migrate'          => array(
				'seopress_nonce'             => wp_create_nonce( 'seopress_siteseo_migrate_nonce' ),
				'seopress_siteseo_migration' => admin_url( 'admin-ajax.php' ),
			),
			'seopress_metadata_csv'             => array(
				'seopress_nonce'           => wp_create_nonce( 'seopress_export_csv_metadata_nonce' ),
				'seopress_metadata_export' => admin_url( 'admin-ajax.php' ),
			),
			'i18n'                              => array(
				'migration' => __( 'Migration completed!', 'webseo' ),
				'export'    => __( 'Export completed!', 'webseo' ),
			),
                );
                wp_localize_script( 'webseo-migrate', 'seopressAjaxMigrate', $seopress_migrate );
        }

	// Media uploader for social page.
	if ( 'seopress-social' === $page ) {
            wp_enqueue_script( 'webseo-media-uploader', plugins_url( 'assets/js/webseo-media-uploader' . $prefix . '.js', __FILE__ ), array( 'jquery' ), WEBSEO_VERSION, false );
		wp_enqueue_media();
	}

	// Instant Indexing page.
	if ( 'seopress-instant-indexing' === $page ) {
		$seopress_instant_indexing_post = array(
			'seopress_nonce'                 => wp_create_nonce( 'seopress_instant_indexing_post_nonce' ),
			'seopress_instant_indexing_post' => admin_url( 'admin-ajax.php' ),
		);
            wp_localize_script( 'webseo-dashboard', 'seopressAjaxInstantIndexingPost', $seopress_instant_indexing_post );

		$seopress_instant_indexing_generate_api_key = array(
			'seopress_nonce'                             => wp_create_nonce( 'seopress_instant_indexing_generate_api_key_nonce' ),
			'seopress_instant_indexing_generate_api_key' => admin_url( 'admin-ajax.php' ),
		);
                wp_localize_script( 'webseo-dashboard', 'seopressAjaxInstantIndexingApiKey', $seopress_instant_indexing_generate_api_key );

		$settings = wp_enqueue_code_editor( array( 'type' => 'application/json' ) );

		wp_add_inline_script(
			'code-editor',
			sprintf(
				'jQuery(function($) {
			function initializeEditor(elementId, settings) {
				var $textarea = $("#" + elementId);
				if (!$textarea.data("codeMirrorInitialized")) {
					wp.codeEditor.initialize(elementId, settings);
					$textarea.data("codeMirrorInitialized", true);
				}
			}
			function initializeEditors() {
				initializeEditor("seopress_instant_indexing_google_api_key", %s);
			}
			$(document).ready(function() {
				initializeEditors();
				setTimeout(initializeEditors, 100);
			});
		});',
				wp_json_encode( $settings )
			)
		);
	}

	// CSV Importer.
	if ( 'seopress_csv_importer' === $_GET['page'] ) {
        wp_enqueue_style( 'webseo-setup', plugins_url( 'assets/css/webseo-setup' . $prefix . '.css', __FILE__ ), array( 'dashicons' ), WEBSEO_VERSION );
	}
}
add_action( 'admin_enqueue_scripts', 'seopress_add_admin_options_scripts', 10, 1 );

/**
 * Admin bar CSS.
 *
 * @return void
 */
function seopress_admin_bar_css() {
	// Only run when the admin bar is showing and the user is logged in.
	if ( is_user_logged_in() && is_admin_bar_showing() ) {
		// Get the appearance setting only once.
		$appearance_option = seopress_get_service( 'AdvancedOption' )->getAppearanceAdminBar();

		// Enqueue the style only if the appearance option is not '1'.
		if ( '1' !== $appearance_option ) {
			$prefix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
                        wp_enqueue_style( 'webseo-admin-bar', plugins_url( 'assets/css/webseo-admin-bar' . $prefix . '.css', __FILE__ ), array(), WEBSEO_VERSION );
		}
	}
}
add_action( 'init', 'seopress_admin_bar_css', 12 );

/**
 * Quick Edit - Enqueue Scripts for All Post Types.
 *
 * @return void
 */
function seopress_add_admin_options_scripts_quick_edit() {
	$screen = get_current_screen();
	if ( 'edit' !== $screen->base ) {
		return;
	}

	if ( is_plugin_active( 'admin-columns-pro/admin-columns-pro.php' ) ) {
		return;
	}

	$prefix     = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
    $script_url = plugins_url( 'assets/js/webseo-quick-edit' . $prefix . '.js', __FILE__ );

    wp_enqueue_script( 'webseo-quick-edit', $script_url, array( 'jquery', 'inline-edit-post' ), WEBSEO_VERSION, true );
}
add_action( 'admin_print_scripts-edit.php', 'seopress_add_admin_options_scripts_quick_edit' );

/**
 * Add custom body classes for specific SEOPress admin pages.
 *
 * @param string $classes Existing body classes.
 * @return string Updated body classes.
 */
function seopress_admin_body_class( $classes ) {
	if ( empty( $_GET['page'] ) ) {
		return $classes;
	}

	// List of pages to apply classes.
        $seopress_pages = array(
                'seopress_csv_importer',
                'seopress-setup',
                'webseo-setup',
                'seopress-option',
                'webseo-option',
                'seopress-network-option',
                'webseo-network-option',
                'seopress-titles',
                'webseo-titles',
                'seopress-xml-sitemap',
                'webseo-xml-sitemap',
                'seopress-social',
                'webseo-social',
                'seopress-google-analytics',
                'webseo-google-analytics',
                'seopress-advanced',
                'webseo-advanced',
                'seopress-import-export',
                'webseo-import-export',
                'seopress-pro-page',
                'webseo-pro-page',
                'seopress-instant-indexing',
                'webseo-instant-indexing',
                'seopress-bot-batch',
                'webseo-bot-batch',
                'seopress-license',
                'webseo-license',
        );

	$current_page = sanitize_text_field( wp_unslash( $_GET['page'] ) );

	// Check if current page is in the defined pages.
	if ( in_array( $current_page, $seopress_pages, true ) ) {
		$classes .= ' seopress-styles';

		// Additional class for specific pages.
                if ( in_array( $current_page, array( 'seopress-option', 'webseo-option' ), true ) ) {
                        $classes .= ' seopress-dashboard';
                } elseif ( in_array( $current_page, array( 'seopress_csv_importer', 'seopress-setup', 'webseo-setup' ), true ) ) {
                        $classes .= ' seopress-setup';
                }
	}

	// Add white-label class if applicable.
	if ( defined( 'WEBSEO_WL_ADMIN_HEADER' ) && WEBSEO_WL_ADMIN_HEADER === false ) {
		$classes .= ' seopress-white-label';
	}

	// Add simple view class if applicable.
	if ( ! empty( get_option( 'seopress_dashboard' ) ) ) {
		if ( 'simple' === get_option( 'seopress_dashboard' )['view'] ) {
			$classes .= ' seopress-simple-view';
		}
	}

	return $classes;
}
add_filter( 'admin_body_class', 'seopress_admin_body_class', 100 );

/**
 * Plugin action links.
 *
 * @param string $links Plugin action links.
 * @param string $file Plugin file.
 * @return array $links Plugin action links.
 */
function seopress_plugin_action_links( $links, $file ) {
	static $this_plugin;
	if ( ! $this_plugin ) {
		$this_plugin = plugin_basename( __FILE__ );
	}

	if ( $file === $this_plugin ) {
		// Define action links.
                $settings_link = '<a href="' . admin_url( 'admin.php?page=webseo-option' ) . '">' . __( 'Settings', 'webseo' ) . '</a>';
            $wizard_link   = '<a href="' . admin_url( 'admin.php?page=webseo-setup&step=welcome&parent=welcome' ) . '">' . __( 'Configuration Wizard', 'webseo' ) . '</a>';
		$website_link  = '<a href="https://www.webseo.com/support/" target="_blank">' . __( 'Docs', 'webseo' ) . '</a>';

// Add "GO PRO!" link for non-PRO users.
if ( ! seopress_is_pro_license_active() ) {
$pro_link = '<a href="https://www.webseo.com/seopress-pro/" style="color:red;font-weight:bold" target="_blank">' . __( 'GO PRO!', 'webseo' ) . '</a>';
array_unshift( $links, $pro_link );
}

// Remove "Deactivate" link if PRO plugins are active.
$is_pro_active = seopress_is_pro_license_active();
if ( $is_pro_active && isset( $links['deactivate'] ) ) {
unset( $links['deactivate'] );
}

		// Determine white-label behavior.
		$use_white_label_links = function_exists( 'seopress_pro_get_service' ) &&
			'1' === seopress_get_service( 'ToggleOption' )->getToggleWhiteLabel() &&
			method_exists( seopress_pro_get_service( 'OptionPro' ), 'getWhiteLabelHelpLinks' ) &&
			'1' === seopress_pro_get_service( 'OptionPro' )->getWhiteLabelHelpLinks();

		// Add appropriate links.
		if ( $use_white_label_links ) {
			array_unshift( $links, $settings_link, $wizard_link );
		} else {
			array_unshift( $links, $settings_link, $wizard_link, $website_link );
		}
	}

	return $links;
}
add_filter( 'plugin_action_links', 'seopress_plugin_action_links', 10, 2 );
