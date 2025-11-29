<?php

defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');

function seopress_404_enable_callback() {
	$options = get_option('seopress_pro_option_name');

	$check = isset($options['seopress_404_enable']); ?>

<label for="seopress_404_enable">
	<input id="seopress_404_enable" name="seopress_pro_option_name[seopress_404_enable]" type="checkbox" <?php checked($check, '1'); ?>
	value="1"/>

	<?php esc_html_e('Enable 404 monitoring', 'webseo'); ?>
</label>

<?php if (isset($options['seopress_404_enable'])) {
		esc_attr($options['seopress_404_enable']);
	}
}

function seopress_404_cleaning_callback() {
	$options = get_option('seopress_pro_option_name');

	$check = isset($options['seopress_404_cleaning']); ?>

<label for="seopress_404_cleaning">
	<input id="seopress_404_cleaning" name="seopress_pro_option_name[seopress_404_cleaning]" type="checkbox" <?php checked($check, '1'); ?>
	value="1"/>
	<?php
		$args = [];
		$args = apply_filters( 'seopress_404_cleaning_query', $args );
		$days = !empty($args['date_query'][0]['before']) ? strtotime($args['date_query'][0]['before']) : '30 days';

		if (is_int($days)) {
			$days = human_time_diff( $days, current_time('timestamp') );
		}
		/* translators: %s: human readable date, e.g. 1 day or 2 months */
		printf(esc_html__('Automatically delete 404 after %s (useful if you have a lot of 404)', 'webseo'), esc_html($days));
	?>
</label>
<br>
<br>
<p>
	<a href="<?php echo esc_url(admin_url('admin.php?page=seopress-import-export#tab=tab_seopress_tool_redirects')); ?>"
		id="seopress-clean-404" class="btn btnTertiary">
		<?php esc_html_e('Clean manually your 404', 'webseo'); ?>
	</a>
</p>

<?php if (isset($options['seopress_404_cleaning'])) {
		esc_attr($options['seopress_404_cleaning']);
	}
}

function seopress_404_redirect_home_callback() {
	$options = get_option('seopress_pro_option_name');

	$selected = isset($options['seopress_404_redirect_home']) ? $options['seopress_404_redirect_home'] : null; ?>

<select id="seopress_404_redirect_home" name="seopress_pro_option_name[seopress_404_redirect_home]">
	<option <?php if ('none' == $selected) { ?>
		selected="selected"
		<?php } ?>
		value="none"><?php esc_html_e('None', 'webseo'); ?>
	</option>
	<option <?php if ('home' == $selected) { ?>
		selected="selected"
		<?php } ?>
		value="home"><?php esc_html_e('Homepage', 'webseo'); ?>
	</option>
	<option <?php if ('custom' == $selected) { ?>
		selected="selected"
		<?php } ?>
		value="custom"><?php esc_html_e('Custom URL', 'webseo'); ?>
	</option>
</select>

<?php if (isset($options['seopress_404_redirect_home'])) {
		esc_attr($options['seopress_404_redirect_home']);
	}
}

function seopress_404_redirect_custom_url_callback() {
	$options = get_option('seopress_pro_option_name');
	$check = isset($options['seopress_404_redirect_custom_url']) ? $options['seopress_404_redirect_custom_url'] : null;

	printf(
		'<input type="text" name="seopress_pro_option_name[seopress_404_redirect_custom_url]" placeholder="' . esc_html__('Enter your custom url', 'webseo') . '" aria-label="' . esc_html__('Redirect to specific URL', 'webseo') . '" value="%s"></textarea>',
		esc_html($check)
	);
}

function seopress_404_redirect_status_code_callback() {
	$options = get_option('seopress_pro_option_name');

	$selected = isset($options['seopress_404_redirect_status_code']) ? $options['seopress_404_redirect_status_code'] : null; ?>

<select id="seopress_404_redirect_status_code" name="seopress_pro_option_name[seopress_404_redirect_status_code]">
	<option <?php if ('301' == $selected) { ?>
		selected="selected"
		<?php } ?>
		value="301"><?php esc_html_e('301 redirect', 'webseo'); ?>
	</option>
	<option <?php if ('302' == $selected) { ?>
		selected="selected"
		<?php } ?>
		value="302"><?php esc_html_e('302 redirect', 'webseo'); ?>
	</option>
	<option <?php if ('307' == $selected) { ?>
		selected="selected"
		<?php } ?>
		value="307"><?php esc_html_e('307 redirect', 'webseo'); ?>
	</option>
</select>

<?php if (isset($options['seopress_404_redirect_status_code'])) {
		esc_attr($options['seopress_404_redirect_status_code']);
	}
}

function seopress_404_enable_mails_callback() {
	$options = get_option('seopress_pro_option_name');

	$check = isset($options['seopress_404_enable_mails']); ?>

<label for="seopress_404_enable_mails">
	<input id="seopress_404_enable_mails" name="seopress_pro_option_name[seopress_404_enable_mails]" type="checkbox"
		<?php checked($check, '1'); ?>
	value="1"/>

	<?php esc_html_e('1 email per week with the top 404 errors, and the latest logged (within a limit of 10).', 'webseo'); ?>
</label>

<?php if (isset($options['seopress_404_enable_mails'])) {
		esc_attr($options['seopress_404_enable_mails']);
	}
}

function seopress_404_enable_mails_from_callback() {
	$options = get_option('seopress_pro_option_name');
	$check = isset($options['seopress_404_enable_mails_from']) ? $options['seopress_404_enable_mails_from'] : null;

	printf(
		'<input type="text" name="seopress_pro_option_name[seopress_404_enable_mails_from]" placeholder="' . esc_html__('Enter your email', 'webseo') . '" aria-label="' . esc_html__('Send emails to', 'webseo') . '" value="%s" />',
		esc_html($check)
	);

	?>
		<p class="description">
			<?php esc_html_e('Separate emails by comma','webseo'); ?>
		</p>
	<?php
}

function seopress_404_disable_automatic_redirects_callback() {
	$options = get_option('seopress_pro_option_name');

	$check = isset($options['seopress_404_disable_automatic_redirects']); ?>

<label for="seopress_404_disable_automatic_redirects">
	<input id="seopress_404_disable_automatic_redirects"
		name="seopress_pro_option_name[seopress_404_disable_automatic_redirects]" type="checkbox" <?php checked($check, '1'); ?>
	value="1"/>

	<?php esc_html_e('Disable notifications on slug changes or post / term deletions', 'webseo'); ?>
</label>

<?php if (isset($options['seopress_404_disable_automatic_redirects'])) {
		esc_attr($options['seopress_404_disable_automatic_redirects']);
	}
}

function seopress_404_disable_guess_automatic_redirects_404_callback() {
	$options = get_option('seopress_pro_option_name');

	$check = isset($options['seopress_404_disable_guess_automatic_redirects_404']); ?>

<label for="seopress_404_disable_guess_automatic_redirects_404">
	<input id="seopress_404_disable_guess_automatic_redirects_404"
		name="seopress_pro_option_name[seopress_404_disable_guess_automatic_redirects_404]" type="checkbox" <?php checked($check, '1'); ?>
	value="1"/>

	<?php esc_html_e('Stop WordPress to attempt to guess a redirect URL for a 404 request', 'webseo'); ?>
</label>

<?php if (isset($options['seopress_404_disable_guess_automatic_redirects_404'])) {
		esc_attr($options['seopress_404_disable_guess_automatic_redirects_404']);
	}
}

function seopress_get_redirection_pro_html() {
	$docs = function_exists('seopress_get_docs_links') ? seopress_get_docs_links() : ''; ?>

<div class="postbox section-tool">
	<div class="sp-section-header">
		<h2>
			<?php esc_html_e('Redirections', 'webseo'); ?>
		</h2>
	</div>
	<h3>
		<?php esc_html_e('Import your redirections', 'webseo'); ?>
	</h3>
	<select id="select-wizard-redirects" name="select-wizard-redirects">
		<option value="none"><?php esc_html_e('Select an option', 'webseo'); ?>
		</option>
		<option value="section-import-redirects"><?php esc_html_e('CSV file (must match the template)', 'webseo'); ?>
		</option>
		<option value="section-import-redirects-plugin"><?php esc_html_e('Redirections plugin (JSON - WordPress Redirects)', 'webseo'); ?>
		</option>
		<option value="section-import-yoast-redirects"><?php esc_html_e('Yoast Premium plugin (CSV)', 'webseo'); ?>
		</option>
		<option value="section-import-rk-redirects"><?php esc_html_e('Rank Math plugin (JSON)', 'webseo'); ?>
		</option>
		<option value="section-import-aioseo-redirects"><?php esc_html_e('AIOSEO plugin (JSON)', 'webseo'); ?>
		</option>
		<option value="section-import-smartcrawl-redirects"><?php esc_html_e('SmartCrawl plugin (JSON)', 'webseo'); ?>
		</option>
	</select>

	<br>
	<br>
	<br>
</div>

<div id="section-import-redirects" class="postbox section-tool">
	<div class="inside">
		<h3>
			<?php esc_html_e('Import Redirections', 'webseo'); ?>
		</h3>

		<div class="seopress-notice">
			<p>
				<?php
					/* translators: %1$s: CSV separator, comma or semi colon */
					echo wp_kses_post(sprintf(__('Import your own redirections from a .csv file (separator %1$s or %2$s). <br>You must have these columns in this order:', 'webseo'), '<code>,</code>', '<code>;</code>'));
				?>
			</p>

			<ul>
				<li>
					<?php
						/* translators: %s: <code>category/my-blog-post-slug</code> */
						printf(esc_html__('URL to match (without your domain name): %s', 'webseo'), '<code>category/my-blog-post-slug</code>');
					?>
				</li>
				<li>
					<?php
						/* translators: %s: <code>https://www.example.org/my-super-article</code> */
						printf(esc_html__('URL to redirect in absolute: %s', 'webseo'), '<code>https://www.example.com/my-super-article</code>');
					?>
				</li>
				<li>
					<?php
						/* translators: %1$s: type of redirection, eg: 301 and so on */
						printf(esc_html__('type of redirection: %1$s, %2$s, %3$s, %4$s or %5$s,', 'webseo'),  '<code>301</code>', '<code>302</code>', '<code>307</code>', '<code>410</code>', '<code>451</code>');
					?>
				</li>
				<li>
					<?php
						/* translators: %s equals to "yes" */
						printf(esc_html__('%s to enable the redirect (leave it empty to disable the redirect)', 'webseo'), '<code>yes</code>');
					?>
				</li>
				<li>
					<?php
						/* translators: %1$s equals to the query parameter, eg: <br><code>exact_match</code> */
						printf(esc_html__('the query parameter: %1$s = Exact match with all parameters, %2$s = Exclude all parameters, %3$s = Exclude all parameters and pass them to the redirection,', 'webseo'), '<br><code>exact_match</code>', '<br><code>without_param</code>', '<br><code>with_ignored_param</code>');
					?>
				</li>
				<li>
					<?php esc_html_e('the counter (optional),', 'webseo'); ?>
				</li>
				<li>
					<?php
						/* translators: %s cat IDs, eg: <code>738,108,134</code> */
						printf(esc_html__('category redirect IDs separated by commas (optional): %s', 'webseo'), '<code>738,108,134</code>');
					?>
				</li>
				<li>
					<?php
						/* translators: %s equals to "yes" */
						printf(esc_html__('%s to enable regular expressions (leave it empty to disable this),', 'webseo'), '<code>yes</code>');
					?>
				</li>
				<li>
					<?php
						/* translators: %1$s equals is the connection status, eg: <code>only_logged_in</code> */
						printf(esc_html__('and the last parameter, the connection status without the quotes: %1$s, %2$s or %3$s.', 'webseo'), '<br><code>both</code>', '<br><code>only_logged_in</code>', '<br><code>only_not_logged_in</code>');
					?>
				</li>
			</ul>

			<p>
				<a href="https://www.webseo.com/wp-content/uploads/csv/seopress-redirections-example.csv"
					target="_blank">
					<?php esc_html_e('Download a CSV example', 'webseo'); ?>
				</a>
			</p>
			<p>
				<?php esc_html_e('Duplicate entries will be automatically removed during import.', 'webseo'); ?>
			</p>
		</div>

		<p>
			<strong>
				<?php esc_html_e('Select your separator:', 'webseo'); ?>
			</strong>
		</p>

		<form method="post" enctype="multipart/form-data">
			<p>
				<input id="import_sep_comma" name="import_sep" type="radio" value="comma" />
				<label for="import_sep_comma"><?php echo wp_kses_post(__('Comma separator: <code>,</code>', 'webseo')); ?></label>
			</p>
			<p>
				<input id="import_sep_semicolon" name="import_sep" type="radio" value="semicolon" />
				<label for="import_sep_semicolon"><?php echo wp_kses_post(__('Semicolon separator: <code>;</code>', 'webseo')); ?></label>
			</p>

			<input type="file" name="import_file" />

			<input type="hidden" name="seopress_action" value="import_redirections_settings" />
			<?php wp_nonce_field('seopress_import_redirections_nonce', 'seopress_import_redirections_nonce'); ?>
			<?php sp_submit_button(esc_html__('Import', 'webseo'), 'btn btnTertiary'); ?>
		</form>
	</div><!-- .inside -->
</div><!-- .postbox -->
<div id="section-import-redirects-plugin" class="postbox section-tool">
	<div class="inside">
		<h3>
			<?php esc_html_e('Import Redirections from the Redirections plugin', 'webseo'); ?>
		</h3>

		<div class="seopress-notice">
			<p>
				<?php echo wp_kses_post(__('Import your own redirections from a .json file generated by the Redirections plugin (make sure to select <strong>"WordPress redirects"</strong> when you export your file).', 'webseo')); ?>
			</p>
			<p>
				<?php esc_html_e('To avoid conflicts, make sure there are no duplicates between your file and existing redirects.', 'webseo'); ?>
			</p>
		</div>

		<form method="post" enctype="multipart/form-data">
			<input type="file" name="import_file" />
			<input type="hidden" name="seopress_action" value="import_redirections_plugin_settings" />
			<?php wp_nonce_field('seopress_import_redirections_plugin_nonce', 'seopress_import_redirections_plugin_nonce'); ?>
			<?php sp_submit_button(esc_html__('Import', 'webseo'), 'btn btnTertiary'); ?>
		</form>
	</div><!-- .inside -->
</div><!-- .postbox -->

<div id="section-import-yoast-redirects" class="postbox section-tool">
	<div class="inside">
		<h3>
			<?php esc_html_e('Import Redirections from Yoast Premium', 'webseo'); ?>
		</h3>

		<div class="seopress-notice">
			<p>
				<?php esc_html_e('Import your own redirections from a .csv file generated by Yoast Premium.', 'webseo'); ?>
			</p>
			<p>
				<?php esc_html_e('To avoid conflicts, make sure there are no duplicates between your file and existing redirects.', 'webseo'); ?>
			</p>
		</div>

		<form method="post" enctype="multipart/form-data">
			<input type="file" name="import_file" />
			<input type="hidden" name="seopress_action" value="import_yoast_redirections" />
			<?php wp_nonce_field('seopress_import_yoast_redirections_nonce', 'seopress_import_yoast_redirections_nonce'); ?>
			<?php sp_submit_button(esc_html__('Import', 'webseo'), 'btn btnTertiary'); ?>
		</form>
	</div><!-- .inside -->
</div><!-- .postbox -->

<div id="section-import-rk-redirects" class="postbox section-tool">
	<div class="inside">
		<h3>
			<?php esc_html_e('Import Redirections from Rank Math', 'webseo'); ?>
		</h3>

		<div class="seopress-notice">
			<p>
				<?php esc_html_e('Import your own redirections from a .json file generated by Rank Math.', 'webseo'); ?>
			</p>
			<p>
				<?php esc_html_e('To avoid conflicts, make sure there are no duplicates between your file and existing redirects.', 'webseo'); ?>
			</p>
		</div>

		<form method="post" enctype="multipart/form-data">
			<input type="file" name="import_file" />
			<input type="hidden" name="seopress_action" value="import_rk_redirections" />
			<?php wp_nonce_field('seopress_import_rk_redirections_nonce', 'seopress_import_rk_redirections_nonce'); ?>
			<?php sp_submit_button(esc_html__('Import', 'webseo'), 'btn btnTertiary'); ?>
		</form>
	</div><!-- .inside -->
</div><!-- .postbox -->

<div id="section-import-aioseo-redirects" class="postbox section-tool">
	<div class="inside">
		<h3>
			<?php esc_html_e('Import Redirections from AIOSEO', 'webseo'); ?>
		</h3>

		<div class="seopress-notice">
			<p>
				<?php esc_html_e('Import your own redirections from a .json file generated by AIOSEO.', 'webseo'); ?>
			</p>
			<p>
				<?php esc_html_e('To avoid conflicts, make sure there are no duplicates between your file and existing redirects.', 'webseo'); ?>
			</p>
		</div>

		<form method="post" enctype="multipart/form-data">
			<input type="file" name="import_file" />
			<input type="hidden" name="seopress_action" value="import_aioseo_redirections" />
			<?php wp_nonce_field('seopress_import_aioseo_redirections_nonce', 'seopress_import_aioseo_redirections_nonce'); ?>
			<?php sp_submit_button(esc_html__('Import', 'webseo'), 'btn btnTertiary'); ?>
		</form>
	</div><!-- .inside -->
</div><!-- .postbox -->

<div id="section-import-smartcrawl-redirects" class="postbox section-tool">
	<div class="inside">
		<h3>
			<?php esc_html_e('Import Redirections from SmartCrawl', 'webseo'); ?>
		</h3>

		<div class="seopress-notice">
			<p>
				<?php esc_html_e('Import your own redirections from a .json file generated by SmartCrawl.', 'webseo'); ?>
			</p>
			<p>
				<?php esc_html_e('To avoid conflicts, make sure there are no duplicates between your file and existing redirects.', 'webseo'); ?>
			</p>
		</div>

		<form method="post" enctype="multipart/form-data">
			<input type="file" name="import_file" />
			<input type="hidden" name="seopress_action" value="import_smartcrawl_redirections" />
			<?php wp_nonce_field('seopress_import_smartcrawl_redirections_nonce', 'seopress_import_smartcrawl_redirections_nonce'); ?>
			<?php sp_submit_button(__('Import', 'webseo'), 'btn btnTertiary'); ?>
		</form>
	</div><!-- .inside -->
</div><!-- .postbox -->

<div id="section-export-redirects" class="postbox section-tool">
	<div class="inside">
		<h3>
			<?php esc_html_e('Export Redirections', 'webseo'); ?>
		</h3>

		<p>
			<?php esc_html_e('Export all redirections for this site as a .csv file. This allows you to easily import the redirections into another site, to Excel / Google Sheets...', 'webseo'); ?>
		</p>
		<p>
			<strong><?php esc_html_e('Separator: ', 'webseo'); ?></strong><code>;</code>
		</p>

		<form method="post">
			<input type="hidden" name="seopress_action" value="export_redirections" />
			<?php wp_nonce_field('seopress_export_redirections_nonce', 'seopress_export_redirections_nonce'); ?>
			<?php sp_submit_button(esc_html__('Export', 'webseo'), 'btn btnTertiary'); ?>
		</form>
	</div><!-- .inside -->
</div><!-- .postbox -->

<div id="section-export-redirects-htaccess" class="postbox section-tool">
	<div class="inside">
		<h3>
			<?php esc_html_e('Export Redirections for an .htaccess file', 'webseo'); ?>
		</h3>

		<p>
			<?php esc_html_e('Export all redirects from this site to a txt file. Then copy and paste the formatted URLs into your .htaccess file.', 'webseo'); ?>
		</p>

		<p>
			<?php esc_html_e('Only active redirections will be exported.', 'webseo'); ?>
		</p>

		<div class="seopress-notice is-warning">
			<p>
				<?php echo wp_kses_post(__('Save your .htaccess file before editing it. <strong>Safety first!</strong>', 'webseo')); ?>
			</p>
		</div>

		<p>
			<?php esc_html_e('Do not forget to test every redirects!', 'webseo'); ?>
		</p>

		<form method="post">
			<input type="hidden" name="seopress_action" value="export_redirections_htaccess" />
			<?php wp_nonce_field('seopress_export_redirections_htaccess_nonce', 'seopress_export_redirections_htaccess_nonce'); ?>
			<?php sp_submit_button(esc_html__('Export', 'webseo'), 'btn btnTertiary'); ?>
		</form>
	</div><!-- .inside -->
</div><!-- .postbox -->

<div id="section-export-old-redirects" class="postbox section-tool">
	<div class="inside">
		<h3>
			<?php esc_html_e('Export slug changes', 'webseo'); ?>
		</h3>

		<p>
			<?php esc_html_e('Export all slug changes for this site as a .csv file.', 'webseo'); ?>
		</p>
		<p>
			<strong><?php esc_html_e('Separator: ', 'webseo'); ?></strong><code>;</code>
		</p>

		<form method="post">
			<input type="hidden" name="seopress_action" value="export_slug_changes" />
			<?php wp_nonce_field('seopress_export_slug_changes_nonce', 'seopress_export_slug_changes_nonce'); ?>
			<?php sp_submit_button(esc_html__('Export', 'webseo'), 'btn btnTertiary'); ?>
		</form>
	</div><!-- .inside -->
</div><!-- .postbox -->

<div id="section-export-404" class="postbox section-tool">
	<div class="inside">
		<h3>
			<?php esc_html_e('Export 404 errors', 'webseo'); ?>
		</h3>

		<p>
			<?php esc_html_e('Export all 404 errors for this site as a .csv file.', 'webseo'); ?>
		</p>
		<p>
			<strong><?php esc_html_e('Separator: ', 'webseo'); ?></strong><code>;</code>
		</p>

		<form method="post">
			<input type="hidden" name="seopress_action" value="export_404" />
			<?php wp_nonce_field('seopress_export_404_nonce', 'seopress_export_404_nonce'); ?>
			<?php sp_submit_button(esc_html__('Export', 'webseo'), 'btn btnTertiary'); ?>
		</form>
	</div><!-- .inside -->
</div><!-- .postbox -->

<div id="section-clean-404" class="postbox section-tool">
	<div class="inside">
		<h3>
			<?php esc_html_e('Clean your 404', 'webseo'); ?>
		</h3>

		<p>
			<?php esc_html_e('Delete all your 404 errors. We don‘t delete any redirects.', 'webseo'); ?>
		</p>

		<p class="seopress-help">
			<?php
				/* translators: %s: documentation URL */
				echo wp_kses_post(sprintf(__('You can also use <a href="%s" target="_blank">this MySQL query</a><span class="dashicons dashicons-external"></span> if necessary.', 'webseo'), esc_url($docs['redirects']['query'])));
			?>
		</p>

		<form method="post">
			<input type="hidden" name="seopress_action" value="clean_404" />
			<?php wp_nonce_field('seopress_clean_404_nonce', 'seopress_clean_404_nonce'); ?>
			<?php sp_submit_button(esc_html__('Delete all 404', 'webseo'), 'btn btnTertiary is-deletable'); ?>
		</form>
	</div><!-- .inside -->
</div><!-- .postbox -->

<div id="section-clean-counters" class="postbox section-tool">
	<div class="inside">
		<h3>
			<?php esc_html_e('Reset the Counters column', 'webseo'); ?>
		</h3>

		<p>
			<?php esc_html_e('Reset counters for the number of times a redirect has been loaded.', 'webseo'); ?>
		</p>

		<form method="post">
			<input type="hidden" name="seopress_action" value="clean_counters" />
			<?php wp_nonce_field('seopress_clean_counters_nonce', 'seopress_clean_counters_nonce'); ?>
			<?php sp_submit_button(esc_html__('Reset Count column', 'webseo'), 'btn btnTertiary'); ?>
		</form>
	</div><!-- .inside -->
</div><!-- .postbox -->

<div id="section-clean-redirects" class="postbox section-tool">
	<div class="inside">
		<h3>
			<?php esc_html_e('Clean all your redirects and 404 errors', 'webseo'); ?>
		</h3>

		<p>
			<?php esc_html_e('Delete all your 301, 302, 307, 404, 410 and 451 entries.', 'webseo'); ?>
		</p>

		<div class="seopress-notice is-warning">
			<p>
				<?php echo wp_kses_post(__('<strong>WARNING:</strong> Backup your database before deletion. Safety FIRST!', 'webseo')); ?>
			</p>
		</div>

		<form method="post">
			<input type="hidden" name="seopress_action" value="clean_all" />
			<?php wp_nonce_field('seopress_clean_all_nonce', 'seopress_clean_all_nonce'); ?>
			<?php sp_submit_button(esc_html__('Delete', 'webseo'), 'btn btnTertiary is-deletable'); ?>
		</form>
	</div><!-- .inside -->
</div><!-- .postbox -->
<?php
}
