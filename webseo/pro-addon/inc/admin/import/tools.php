<?php
/**
 * Import / export CSV tool
 */

defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)'); ?>

<div class="postbox section-tool">
    <div class="sp-section-header">
        <h2>
            <?php esc_html_e('Data', 'webseo'); ?>
        </h2>
    </div>
    <div class="inside">
        <h3>
            <?php esc_html_e('Import data from a CSV', 'webseo'); ?>
        </h3>
        <p>
            <?php esc_html_e('Upload a CSV file to quickly import post (post, page, single post type) and term metadata.', 'webseo'); ?>
            <?php echo seopress_tooltip_link(esc_url($docs['tools']['csv_import']), esc_html__('Learn how to import SEO metadata from a CSV file', 'webseo')); ?>
        </p>
        <ul>
            <li>
                <?php esc_html_e('Slug', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Post title / term title', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Meta title', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Meta description', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Meta robots (noindex, nofollow...)', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Facebook Open Graph tags (title, description, image)', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('X Cards tags (title, description, image)', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Redirection (enable, login status, type, URL)', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Primary category', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Canonical URL', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Target keywords', 'webseo'); ?>
            </li>
        </ul>
        <p>
            <a class="btn btnTertiary"
                href="<?php echo esc_url(admin_url('admin.php?page=seopress_csv_importer')); ?>">
                <?php esc_html_e('Run the importer', 'webseo'); ?>
            </a>
        </p>
    </div><!-- .inside -->
</div><!-- .postbox -->
<div id="metadata-migration-tool" class="postbox section-tool">
    <div class="inside">
        <h3>
            <?php esc_html_e('Export metadata to a CSV', 'webseo'); ?>
        </h3>
        <p>
            <?php esc_html_e('Export your post (post, page, single post type) and term metadata for this site as a .csv file.', 'webseo'); ?>
            <?php echo seopress_tooltip_link(esc_url($docs['tools']['csv_export']), esc_html__('Learn how to export SEO metadata to a CSV file', 'webseo')); ?>
        </p>
        <ul>
            <li>
                <?php esc_html_e('ID', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Post title / term title', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Permalink', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Slug', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Taxonomy', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Post Type', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Meta title', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Meta description', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Meta robots (noindex, nofollow...)', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Facebook Open Graph tags (title, description, image)', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('X Cards tags (title, description, image)', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Redirection (enable, login status, type, URL)', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Primary category', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Canonical URL', 'webseo'); ?>
            </li>
            <li>
                <?php esc_html_e('Target keywords', 'webseo'); ?>
            </li>
        </ul>
        <form id="seopress-export-csv-form" method="post" enctype="multipart/form-data">
            <p>
                <strong><?php esc_html_e('Select post types to export:', 'webseo'); ?></strong>
            </p>
            <?php
           // Get post types
           $postTypes = seopress_get_service('WordPressData')->getPostTypes();
foreach ($postTypes as $postType) {
    ?>
            <p>
                <label>
                    <input class="post-type-checkbox" name="post_types[]" type="checkbox"
                        value="<?php echo esc_attr($postType->name); ?>" />
                    <?php echo esc_html($postType->label) . ' <code>[' . esc_html($postType->name) . ']</code>'; ?>
                </label>
            </p>
            <?php
}
?>
            <p>
                <strong><?php esc_html_e('Select taxonomies to export:', 'webseo'); ?></strong>
            </p>
            <?php
// Get taxonomies
$taxonomies = seopress_get_service('WordPressData')->getTaxonomies();
foreach ($taxonomies as $taxonomy) {
    ?>
            <p>
                <label>
                    <input class="taxonomy-checkbox" name="taxonomies[]" type="checkbox"
                        value="<?php echo esc_attr($taxonomy->name); ?>" />
                    <?php echo esc_html($taxonomy->label) . ' <code>[' . esc_html($taxonomy->name) . ']</code>'; ?>
                </label>
            </p>
            <?php
}
?>
            <input type="hidden" name="seopress_action" value="export_csv_metadata" />
            <?php wp_nonce_field('seopress_export_csv_metadata_nonce', 'seopress_export_csv_metadata_nonce'); ?>
            <button id="seopress-metadata-migrate" type="button" class="btn btnTertiary">
                <?php esc_html_e('Export', 'webseo'); ?>
            </button>
            <span class="spinner"></span>
            <div class="log"></div>
        </form>
    </div><!-- .inside -->
</div><!-- .postbox -->
