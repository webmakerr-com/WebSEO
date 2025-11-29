<?php
/**
 * Dynamic variables helper
 *
 * @package SEOPress
 */

defined( 'ABSPATH' ) || exit( 'Please don&rsquo;t call the plugin directly. Thanks :)' );

/**
 * Get dynamic variables
 *
 * @return array Dynamic variables
 */
function seopress_get_dyn_variables() {
	return apply_filters(
		'seopress_get_dynamic_variables',
		array(
			'%%sep%%'                           => esc_html__( 'Separator', 'webseo' ),
			'%%sitetitle%%'                     => esc_html__( 'Site Title', 'webseo' ),
			'%%tagline%%'                       => esc_html__( 'Tagline', 'webseo' ),
			'%%post_title%%'                    => esc_html__( 'Post Title', 'webseo' ),
			'%%post_excerpt%%'                  => esc_html__( 'Post excerpt', 'webseo' ),
			'%%post_content%%'                  => esc_html__( 'Post content / product description', 'webseo' ),
			'%%post_thumbnail_url%%'            => esc_html__( 'Post thumbnail URL', 'webseo' ),
			'%%post_url%%'                      => esc_html__( 'Post URL', 'webseo' ),
			'%%post_date%%'                     => esc_html__( 'Post date', 'webseo' ),
			'%%post_modified_date%%'            => esc_html__( 'Post modified date', 'webseo' ),
			'%%post_author%%'                   => esc_html__( 'Post author', 'webseo' ),
			'%%post_category%%'                 => esc_html__( 'Post category', 'webseo' ),
			'%%post_tag%%'                      => esc_html__( 'Post tag', 'webseo' ),
			'%%_category_title%%'               => esc_html__( 'Category title', 'webseo' ),
			'%%_category_description%%'         => esc_html__( 'Category description', 'webseo' ),
			'%%tag_title%%'                     => esc_html__( 'Tag title', 'webseo' ),
			'%%tag_description%%'               => esc_html__( 'Tag description', 'webseo' ),
			'%%term_title%%'                    => esc_html__( 'Term title', 'webseo' ),
			'%%term_description%%'              => esc_html__( 'Term description', 'webseo' ),
			'%%search_keywords%%'               => esc_html__( 'Search keywords', 'webseo' ),
			'%%current_pagination%%'            => esc_html__( 'Current number page', 'webseo' ),
			'%%page%%'                          => esc_html__( 'Page number with context', 'webseo' ),
			'%%cpt_plural%%'                    => esc_html__( 'Plural Post Type Archive name', 'webseo' ),
			'%%archive_title%%'                 => esc_html__( 'Archive title', 'webseo' ),
			'%%archive_date%%'                  => esc_html__( 'Archive date', 'webseo' ),
			'%%archive_date_day%%'              => esc_html__( 'Day Archive date', 'webseo' ),
			'%%archive_date_month%%'            => esc_html__( 'Month Archive title', 'webseo' ),
			'%%archive_date_month_name%%'       => esc_html__( 'Month name Archive title', 'webseo' ),
			'%%archive_date_year%%'             => esc_html__( 'Year Archive title', 'webseo' ),
			'%%_cf_your_custom_field_name%%'    => esc_html__( 'Custom fields from post, page, post type and term taxonomy', 'webseo' ),
			'%%_ct_your_custom_taxonomy_slug%%' => esc_html__( 'Custom term taxonomy from post, page or post type', 'webseo' ),
			'%%wc_single_cat%%'                 => esc_html__( 'Single product category', 'webseo' ),
			'%%wc_single_tag%%'                 => esc_html__( 'Single product tag', 'webseo' ),
			'%%wc_single_short_desc%%'          => esc_html__( 'Single product short description', 'webseo' ),
			'%%wc_single_price%%'               => esc_html__( 'Single product price', 'webseo' ),
			'%%wc_single_price_exc_tax%%'       => esc_html__( 'Single product price taxes excluded', 'webseo' ),
			'%%wc_sku%%'                        => esc_html__( 'Single SKU product', 'webseo' ),
			'%%currentday%%'                    => esc_html__( 'Current day', 'webseo' ),
			'%%currentmonth%%'                  => esc_html__( 'Current month', 'webseo' ),
			'%%currentmonth_short%%'            => esc_html__( 'Current month in 3 letters', 'webseo' ),
			'%%currentyear%%'                   => esc_html__( 'Current year', 'webseo' ),
			'%%currentdate%%'                   => esc_html__( 'Current date', 'webseo' ),
			'%%currenttime%%'                   => esc_html__( 'Current time', 'webseo' ),
			'%%author_first_name%%'             => esc_html__( 'Author first name', 'webseo' ),
			'%%author_last_name%%'              => esc_html__( 'Author last name', 'webseo' ),
			'%%author_website%%'                => esc_html__( 'Author website', 'webseo' ),
			'%%author_nickname%%'               => esc_html__( 'Author nickname', 'webseo' ),
			'%%author_bio%%'                    => esc_html__( 'Author biography', 'webseo' ),
			'%%_ucf_your_user_meta%%'           => esc_html__( 'Custom User Meta', 'webseo' ),
			'%%currentmonth_num%%'              => esc_html__( 'Current month in digital format', 'webseo' ),
			'%%target_keyword%%'                => esc_html__( 'Target keyword', 'webseo' ),
		)
	);
}

/**
 * Render dynamic variables
 *
 * @param string $classes Classes.
 *
 * @return string HTML.
 */
function seopress_render_dyn_variables( $classes ) {
	$html = sprintf( '<button type="button" class="' . seopress_btn_secondary_classes() . ' seopress-tag-single-all seopress-tag-dropdown %s"><span class="dashicons dashicons-arrow-down-alt2"></span></button>', $classes );
	if ( ! empty( seopress_get_dyn_variables() ) ) {
		$html .= '<div class="sp-wrap-tag-variables-list">';
		$html .= '<ul class="sp-tag-variables-list">';
		$html .= '<li class="sp-tag-variables-search"><input type="text" class="sp-tag-variables-search-input" placeholder="' . esc_html__( 'Search variables...', 'webseo' ) . '" /></li>';
		foreach ( seopress_get_dyn_variables() as $key => $value ) {
			$html .= '<li data-value=' . $key . ' tabindex="0"><span>' . $value . '</span></li>';
		}
		$html .= '</ul></div>';
	}

	return $html;
}
