<?php
defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');

/* Add PRO features to SEO dashboard */
add_filter('seopress_features_list_before_tools', 'seopress_pro_features_list_before_tools');
function seopress_pro_features_list_before_tools($features)
{
    $docs = seopress_get_docs_links();
    $url = wp_parse_url(home_url());
    $host = isset($url['host']) ? $url['host'] : '';
    $port = isset($url['port']) ? ':' . $url['port'] : '';
    $current_site = $host . $port;

    $features['404'] = [
        'svg' => SEOPRESS_PRO_ASSETS_DIR . '/img/ico-redirections.svg',
        'title' => __('Redirections', 'webseo'),
        'desc' => __('Monitor 404, create 301, 302 and 307 redirections.', 'webseo'),
        'btn_primary' => admin_url('admin.php?page=seopress-pro-page#tab=tab_seopress_404'),
        'filter' => 'seopress_remove_feature_redirects',
    ];
    $features['rich-snippets'] = [
        'svg' => SEOPRESS_PRO_ASSETS_DIR . '/img/ico-schemas.svg',
        'title' => __('Structured Data Types', 'webseo'),
        'desc' => __('Add data types to your content: articles, courses, recipes, videos, events, products and more.', 'webseo'),
        'btn_primary' => admin_url('admin.php?page=seopress-pro-page#tab=tab_seopress_404'),
        'filter' => 'seopress_remove_feature_schemas',
    ];
    if ( ! is_multisite() || (is_multisite() && defined('SUBDOMAIN_INSTALL') && true === constant('SUBDOMAIN_INSTALL'))//subdomains or single site
	|| (is_multisite() && defined('SUBDOMAIN_INSTALL') && false === constant('SUBDOMAIN_INSTALL') && defined('DOMAIN_CURRENT_SITE') && $current_site !== constant('DOMAIN_CURRENT_SITE')) //subdirectories with custom domains
	) {
        $features['robots'] = [
            'svg' => SEOPRESS_PRO_ASSETS_DIR . '/img/ico-robots-txt.svg',
            'title' => __('robots.txt', 'webseo'),
            'desc' => __('Edit your robots.txt file.', 'webseo'),
            'btn_primary' => admin_url('admin.php?page=seopress-pro-page#tab=tab_seopress_robots'),
            'filter' => 'seopress_remove_feature_robots',
        ];
    }
    if ( ! is_multisite()) {
        $features['htaccess'] = [
            'svg' => SEOPRESS_PRO_ASSETS_DIR . '/img/ico-htaccess.svg',
            'title' => __('.htaccess', 'webseo'),
            'desc' => __('Edit your htaccess file.', 'webseo'),
            'btn_primary' => admin_url('admin.php?page=seopress-pro-page#tab=tab_seopress_htaccess'),
            'filter' => 'seopress_remove_feature_htaccess',
            'toggle' => false,
        ];
    }
    $features['local-business'] = [
        'svg' => SEOPRESS_PRO_ASSETS_DIR . '/img/ico-local-business.svg',
        'title' => __('Local Business', 'webseo'),
        'desc' => __('Add Google Local Business data type.', 'webseo'),
        'btn_primary' => admin_url('admin.php?page=seopress-pro-page#tab=tab_seopress_local_business'),
        'filter' => 'seopress_remove_feature_local_business',
    ];
    $features['ai'] = [
        'svg' => SEOPRESS_PRO_ASSETS_DIR . '/img/ico-ai.svg',
        'title' => __('AI', 'webseo'),
        'desc' => __('Use the power of artificial intelligence to increase your productivity.', 'webseo'),
        'btn_primary' => admin_url('admin.php?page=seopress-pro-page#tab=tab_seopress_ai'),
        'filter' => 'seopress_remove_feature_ai',
    ];
    $features['breadcrumbs'] = [
        'svg' => SEOPRESS_PRO_ASSETS_DIR . '/img/ico-breadcrumbs.svg',
        'title' => __('Breadcrumbs', 'webseo'),
        'desc' => __('Enable Breadcrumbs for your theme and improve your SEO in SERPs.', 'webseo'),
        'btn_primary' => admin_url('admin.php?page=seopress-pro-page#tab=tab_seopress_breadcrumbs'),
        'filter' => 'seopress_remove_feature_breadcrumbs',
    ];
    $features['woocommerce'] = [
        'svg' => SEOPRESS_PRO_ASSETS_DIR . '/img/ico-woocommerce.svg',
        'title' => __('WooCommerce', 'webseo'),
        'desc' => __('Improve WooCommerce SEO.', 'webseo'),
        'btn_primary' => admin_url('admin.php?page=seopress-pro-page#tab=tab_seopress_woocommerce'),
        'filter' => 'seopress_remove_feature_woocommerce',
    ];
    $features['edd'] = [
        'svg' => SEOPRESS_PRO_ASSETS_DIR . '/img/ico-edd.svg',
        'title' => __('Easy Digital Downloads', 'webseo'),
        'desc' => __('Improve Easy Digital Downloads SEO.', 'webseo'),
        'btn_primary' => admin_url('admin.php?page=seopress-pro-page#tab=tab_seopress_edd'),
        'filter' => 'seopress_remove_feature_edd',
    ];
    $features['page-speed'] = [
        'svg' => SEOPRESS_PRO_ASSETS_DIR . '/img/ico-google-page-speed.svg',
        'title' => __('Google Page Speed', 'webseo'),
        'desc' => __('Track your website performance to improve SEO with Google Page Speed.', 'webseo'),
        'btn_primary' => admin_url('admin.php?page=seopress-pro-page#tab=tab_seopress_page_speed'),
        'filter' => 'seopress_remove_feature_page_speed',
        'toggle' => false,
    ];
    $features['inspect-url'] = [
        'svg' => SEOPRESS_PRO_ASSETS_DIR . '/img/ico-google-search-console.svg',
        'title' => __('Google Search Console', 'webseo'),
        'desc' => __('Get clicks, positions, CTR and impressions. Inspect your URL for details about crawling, indexing, mobile compatibility, schemas and more.', 'webseo'),
        'btn_primary' => admin_url('admin.php?page=seopress-pro-page#tab=tab_seopress_inspect_url'),
        'filter' => 'seopress_remove_feature_inspect_url',
        'toggle' => true,
    ];
    $features['news'] = [
        'svg' => SEOPRESS_PRO_ASSETS_DIR . '/img/ico-google-news-sitemap.svg',
        'title' => __('Google News Sitemap', 'webseo'),
        'desc' => __('Optimize your site for Google News.', 'webseo'),
        'btn_primary' => admin_url('admin.php?page=seopress-pro-page#tab=tab_seopress_news'),
        'filter' => 'seopress_remove_feature_news',
    ];
    $features['bot'] = [
        'svg' => SEOPRESS_PRO_ASSETS_DIR . '/img/ico-broken-links.svg',
        'title' => __('Audit', 'webseo'),
        'desc' => __('Scan your site to find SEO problems and broken links.', 'webseo'),
        'btn_primary' => admin_url('admin.php?page=seopress-bot-batch'),
        'filter' => 'seopress_remove_feature_bot',
    ];
    $features['alerts'] = [
        'svg' => SEOPRESS_PRO_ASSETS_DIR . '/img/ico-alert.svg',
        'title' => __('SEO Alerts', 'webseo'),
        'desc' => __('Receive alerts by email/Slack about your SEO before it‘s too late.', 'webseo'),
        'btn_primary' => admin_url('admin.php?page=seopress-pro-page#tab=tab_seopress_alerts'),
        'filter' => 'seopress_remove_feature_alerts',
    ];
    $features['dublin-core'] = [
        'svg' => SEOPRESS_PRO_ASSETS_DIR . '/img/ico-dublin-core.svg',
        'title' => __('Dublin Core', 'webseo'),
        'desc' => __('Add Dublin Core meta tags.', 'webseo'),
        'btn_primary' => admin_url('admin.php?page=seopress-pro-page#tab=tab_seopress_dublin_core'),
        'filter' => 'seopress_remove_feature_dublin_core',
    ];
    $features['rss'] = [
        'svg' => SEOPRESS_PRO_ASSETS_DIR . '/img/ico-rss.svg',
        'title' => __('RSS', 'webseo'),
        'desc' => __('Configure default WordPress RSS.', 'webseo'),
        'btn_primary' => admin_url('admin.php?page=seopress-pro-page#tab=tab_seopress_rss'),
        'filter' => 'seopress_remove_feature_rss',
        'toggle' => false,
    ];

    return $features;
}

/* Add PRO features to SEO dashboard (after Tools) */
add_filter('seopress_features_list_after_tools', 'seopress_pro_features_list_after_tools');
function seopress_pro_features_list_after_tools($features)
{
    $docs = seopress_get_docs_links();

    $features['license'] = [
        'svg' => SEOPRESS_PRO_ASSETS_DIR . '/img/ico-license.svg',
        'title' => __('License', 'webseo'),
        'desc' => __('Edit your license key.', 'webseo'),
        'btn_primary' => admin_url('admin.php?page=seopress-license'),
        'filter' => 'seopress_remove_feature_license',
        'toggle' => false,
    ];

    return $features;
}
