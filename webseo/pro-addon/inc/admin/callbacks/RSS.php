<?php

defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');

function seopress_rss_before_html_callback() {
    $options = get_option('seopress_pro_option_name');
    $check   = isset($options['seopress_rss_before_html']) ? $options['seopress_rss_before_html'] : null;

    printf(
    '<textarea id="seopress_rss_before_html" name="seopress_pro_option_name[seopress_rss_before_html]" rows="4" placeholder="' . esc_html__('Enter your HTML content', 'webseo') . '" aria-label="' . esc_html__('Display content before each post', 'webseo') . '">%s</textarea>',
    esc_html($check)); ?>

<p class="description">
    <?php esc_html_e('HTML tags allowed: strong, em, br, a href', 'webseo'); ?>
</p>

<p class="description">
    <?php esc_html_e('Dynamic variables: %%sitetitle%%, %%tagline%%, %%post_author%%, %%post_permalink%%, %%post_title%%', 'webseo'); ?>
</p>

<?php
}

function seopress_rss_after_html_callback() {
    $options = get_option('seopress_pro_option_name');
    $check   = isset($options['seopress_rss_after_html']) ? $options['seopress_rss_after_html'] : null;

    printf(
    '<textarea id="seopress_rss_after_html" name="seopress_pro_option_name[seopress_rss_after_html]" rows="4" aria-label="' . esc_html__('Display content after each post', 'webseo') . '" placeholder="' . esc_html__('Enter your HTML content', 'webseo') . '">%s</textarea>',
    esc_html($check)); ?>

<p class="description">
    <?php esc_html_e('HTML tags allowed: strong, em, br, a href', 'webseo'); ?>
</p>

<p class="description">
    <?php esc_html_e('Dynamic variables: %%sitetitle%%, %%tagline%%, %%post_author%%, %%post_permalink%%, %%post_title%%', 'webseo'); ?>
</p>

<?php
}

function seopress_rss_post_thumbnail_callback() {
    $options = get_option('seopress_pro_option_name');

    $check = isset($options['seopress_rss_post_thumbnail']); ?>

<label for="seopress_rss_post_thumbnail">
    <input id="seopress_rss_post_thumbnail" name="seopress_pro_option_name[seopress_rss_post_thumbnail]"
        type="checkbox" <?php if ('1' == $check) { ?>
    checked="yes"
    <?php } ?>
    value="1"/>
    <?php esc_html_e('Display post thumbnail for each post if available', 'webseo'); ?>
</label>

<pre><?php echo esc_html('<media:content medium="image" url="https://example.com/my-post-thumbnail.jpg" width="300" height="300" />'); ?></pre>

<?php if (isset($options['seopress_rss_post_thumbnail'])) {
        esc_attr($options['seopress_rss_post_thumbnail']);
    }
}

function seopress_rss_disable_comments_feed_callback() {
    $options = get_option('seopress_pro_option_name');

    $check = isset($options['seopress_rss_disable_comments_feed']); ?>

<label for="seopress_rss_disable_comments_feed">
    <input id="seopress_rss_disable_comments_feed" name="seopress_pro_option_name[seopress_rss_disable_comments_feed]"
        type="checkbox" <?php if ('1' == $check) { ?>
    checked="yes"
    <?php } ?>
    value="1"/>
    <?php esc_html_e('Remove feed link in source code', 'webseo'); ?>
</label>

<pre><?php echo esc_html('<link rel="alternate" type="application/rss+xml" title="Site title Comments Feed" href="https://example.com/comments/feed/" />'); ?></pre>

<?php if (isset($options['seopress_rss_disable_comments_feed'])) {
        esc_attr($options['seopress_rss_disable_comments_feed']);
    }
}

function seopress_rss_disable_posts_feed_callback() {
    $options = get_option('seopress_pro_option_name');

    $check = isset($options['seopress_rss_disable_posts_feed']); ?>

<label for="seopress_rss_disable_posts_feed">
    <input id="seopress_rss_disable_posts_feed" name="seopress_pro_option_name[seopress_rss_disable_posts_feed]"
        type="checkbox" <?php if ('1' == $check) { ?>
    checked="yes"
    <?php } ?>
    value="1"/>
    <?php esc_html_e('Remove feed link in source code (default WordPress RSS feed)', 'webseo'); ?>
</label>

<pre><?php echo esc_html('<link rel="alternate" type="application/rss+xml" title="Site title Feed" href="https://example.com/feed/" />'); ?></pre>

<?php if (isset($options['seopress_rss_disable_posts_feed'])) {
        esc_attr($options['seopress_rss_disable_posts_feed']);
    }
}

function seopress_rss_disable_extra_feed_callback() {
    $options = get_option('seopress_pro_option_name');

    $check = isset($options['seopress_rss_disable_extra_feed']); ?>

<label for="seopress_rss_disable_extra_feed">
    <input id="seopress_rss_disable_extra_feed" name="seopress_pro_option_name[seopress_rss_disable_extra_feed]"
        type="checkbox" <?php if ('1' == $check) { ?>
    checked="yes"
    <?php } ?>
    value="1"/>

    <?php esc_html_e('Remove feed link in source code (author, categories, custom taxonomies, custom post type, comments feed for a single post...)', 'webseo'); ?>
</label>

<pre><?php echo esc_html('<link rel="alternate" type="application/rss+xml" title="Site title - My post title - Comments Feed" href="https://example.com/my-post-slug/feed/" />'); ?></pre>

<?php if (isset($options['seopress_rss_disable_extra_feed'])) {
        esc_attr($options['seopress_rss_disable_extra_feed']);
    }
}

function seopress_rss_disable_all_feeds_callback() {
    $options = get_option('seopress_pro_option_name');

    $check = isset($options['seopress_rss_disable_all_feeds']); ?>

<label for="seopress_rss_disable_all_feeds">
    <input id="seopress_rss_disable_all_feeds" name="seopress_pro_option_name[seopress_rss_disable_all_feeds]"
        type="checkbox" <?php if ('1' == $check) { ?>
    checked="yes"
    <?php } ?>
    value="1"/>
    <?php esc_html_e('Disable all WordPress RSS feeds (all feeds will no longer be accessible and will be redirected to the homepage)', 'webseo'); ?>
</label>

<?php if (isset($options['seopress_rss_disable_all_feeds'])) {
        esc_attr($options['seopress_rss_disable_all_feeds']);
    }
}
