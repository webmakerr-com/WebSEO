<?php

defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');

function seopress_get_schema_metaboxe_faq($seopress_pro_rich_snippets_data, $key_schema = 0) {
	$seopress_pro_rich_snippets_faq  = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_faq']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_faq'] : [];

	// SEOPress < 3.9
	// Double dimension required as a result of migration 3.9
	$seopress_pro_rich_snippets_faq = ['0' => $seopress_pro_rich_snippets_faq];
	?>
<div class="wrap-rich-snippets-item wrap-rich-snippets-faq">
	<div class="seopress-notice">
		<p>
			<?php esc_html_e('Mark up your Frequently Asked Questions page with JSON-LD to try to get the position 0 in search results. ', 'webseo'); ?>
		</p>
	</div>
	<?php //Init $seopress_faq array if empty
		if (empty($seopress_pro_rich_snippets_faq)) {
			$seopress_pro_rich_snippets_faq = ['0' => ['']];
		}
	$total = count($seopress_pro_rich_snippets_faq[0]);

	if ($total > 0) {
		?>
	<div id="wrap-faq" data-count="<?php echo absint($total); ?>">
		<?php foreach ($seopress_pro_rich_snippets_faq[0] as $key => $value) {
			$num            = $key + 1;
			$check_question = isset($seopress_pro_rich_snippets_faq[0][$key]['question']) ? $seopress_pro_rich_snippets_faq[0][$key]['question'] : null;
			$check_answer   = isset($seopress_pro_rich_snippets_faq[0][$key]['answer']) ? $seopress_pro_rich_snippets_faq[0][$key]['answer'] : null; ?>
		<div class="faq">
			<h3 class="accordion-section-title" tabindex="0">
				<?php if (empty($check_question)) { ?>
					<span style="color:red">
					<?php esc_html_e('Empty Question', 'webseo'); ?>
					</span>
				<?php } else {
					echo esc_attr($check_question);
				}

				if (empty($check_answer)) {
					echo ' - '; ?>
					<span style="color:red">
						<?php esc_html_e('Empty Answer', 'webseo'); ?>
					</span>
					<?php
				} ?>
			</h3>
			<div class="accordion-section-content">
				<div class="inside">
					<p>
						<label
							for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_faq][<?php echo esc_attr($key); ?>][question]">
							<?php esc_html_e('Question (required)', 'webseo'); ?>
						</label>
						<input
							id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_faq][<?php echo esc_attr($key); ?>][question]"
							type="text"
							name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_faq][<?php echo esc_attr($key); ?>][question]"
							placeholder="<?php esc_html_e('Enter your question', 'webseo'); ?>"
							aria-label="<?php esc_html_e('Question', 'webseo'); ?>"
							value="<?php echo esc_attr($check_question); ?>" />
					</p>
					<p>
						<label
							for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_faq][<?php echo esc_attr($key); ?>][answer]">
							<?php esc_html_e('Answer (required)', 'webseo'); ?>
						</label>
						<textarea
							id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_faq][<?php echo esc_attr($key); ?>][answer]"
							name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_faq][<?php echo esc_attr($key); ?>][answer]"
							placeholder="<?php esc_html_e('Enter your answer', 'webseo'); ?>"
							aria-label="<?php esc_html_e('Answer', 'webseo'); ?>"
							rows="8"><?php echo esc_textarea($check_answer); ?></textarea>
					</p>

					<p>
						<a href="#" class="remove-faq button">
							<?php esc_html_e('Remove question', 'webseo'); ?>
						</a>
					</p>
				</div>
			</div>
		</div>
		<?php
		} ?>
	</div>
	<?php
	} else { ?>
	<div id="wrap-faq" data-count="1">
		<div class="faq">
			<h3 class="accordion-section-title" tabindex="0">
				<?php esc_html_e('Question', 'webseo'); ?>
			</h3>
			<div class="accordion-section-content">
				<div class="inside">
					<p>
						<label
							for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_faq][0][question]">
							<?php esc_html_e('Question (required)', 'webseo'); ?>
						</label>
						<input
							id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_faq][0][question]"
							type="text"
							name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_faq][0][question]"
							placeholder="<?php esc_html_e('Enter your question', 'webseo'); ?>"
							aria-label="<?php esc_html_e('Question', 'webseo'); ?>"
							value="" />
					</p>
					<p>
						<label
							for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_faq][0][answer]">
							<?php esc_html_e('Answer (required)', 'webseo'); ?>
						</label>
						<textarea
							id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_faq][0][answer]"
							name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_faq][0][answer]"
							placeholder="<?php esc_html_e('Enter your answer', 'webseo'); ?>"
							aria-label="<?php esc_html_e('Answer', 'webseo'); ?>"
							rows="8"></textarea>
					</p>

					<p>
						<a href="#" class="remove-faq button">
							<?php esc_html_e('Remove question', 'webseo'); ?>
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<p>
		<a href="#" id="add-faq" class="add-faq <?php echo esc_attr(seopress_btn_secondary_classes()); ?>">
			<?php esc_html_e('Add question', 'webseo'); ?>
		</a>
	</p>
</div>
<?php
}
