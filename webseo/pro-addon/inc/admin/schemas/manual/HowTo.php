<?php

defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');

function seopress_get_schema_metaboxe_how_to($seopress_pro_rich_snippets_data, $key_schema = 0) {
	$seopress_pro_rich_snippets_how_to_name = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_how_to_name']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_how_to_name'] : '';
	$seopress_pro_rich_snippets_how_to_desc = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_how_to_desc']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_how_to_desc'] : '';

	$seopress_pro_rich_snippets_how_to_img = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_how_to_img']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_how_to_img'] : '';
	$seopress_pro_rich_snippets_how_to_img_width = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_how_to_img_width']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_how_to_img_width'] : '';
	$seopress_pro_rich_snippets_how_to_img_height = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_how_to_img_height']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_how_to_img_height'] : '';

	$seopress_pro_rich_snippets_how_to_currency = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_how_to_currency']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_how_to_currency'] : '';
	$seopress_pro_rich_snippets_how_to_cost = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_how_to_cost']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_how_to_cost'] : '';
	$seopress_pro_rich_snippets_how_to_total_time = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_how_to_total_time']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_how_to_total_time'] : '';
	$seopress_pro_rich_snippets_how_to = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_how_to']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_how_to'] : [];

	// SEOPress < 3.9
	// Double dimension required as a result of migration 3.9
	$seopress_pro_rich_snippets_how_to = ['0' => $seopress_pro_rich_snippets_how_to];
	?>

<div class="wrap-rich-snippets-item wrap-rich-snippets-how-to">
	<div class="seopress-notice">
		<p>
			<?php esc_html_e('Mark up your How-to page with JSON-LD to try to get the position 0 in search results. ', 'webseo'); ?>
		</p>
	</div>

	<p>
		<label for="seopress_pro_rich_snippets_how_to_name_meta">
			<?php esc_html_e('Title of the how-to', 'webseo'); ?>
		</label>
		<input type="text" id="seopress_pro_rich_snippets_how_to_name_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to_name]"
			placeholder="<?php esc_html_e('The name of your how-to', 'webseo'); ?>"
			aria-label="<?php esc_html_e('How-to name', 'webseo'); ?>"
			value="<?php echo esc_html($seopress_pro_rich_snippets_how_to_name); ?>" />
	</p>

	<p>
		<label for="seopress_pro_rich_snippets_how_to_desc">
			<?php esc_html_e('How-to description (default excerpt, or beginning of the content)', 'webseo'); ?>
		</label>
		<textarea id="seopress_pro_rich_snippets_how_to_desc"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to_desc]"
			placeholder="<?php esc_html_e('Enter your how-to description', 'webseo'); ?>"
			aria-label="<?php esc_html_e('How-to description', 'webseo'); ?>"><?php echo esc_textarea($seopress_pro_rich_snippets_how_to_desc); ?></textarea>
	</p>

	<p>
		<label for="seopress_pro_rich_snippets_how_to_img_meta">
			<?php esc_html_e('Image thumbnail', 'webseo'); ?>
		</label>
		<span class="description"><?php esc_html_e('Minimum width: 720px - Recommended size: 1920px -  .jpg, .png, or. gif format - crawlable and indexable', 'webseo'); ?></span>

		<!-- URL -->
		<input id="seopress_pro_rich_snippets_how_to_img_meta" type="text"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to_img]"
			placeholder="<?php esc_html_e('Select your image', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Image thumbnail', 'webseo'); ?>"
			value="<?php echo esc_url($seopress_pro_rich_snippets_how_to_img); ?>" />

		<!-- Width -->
		<input id="seopress_pro_rich_snippets_how_to_img_width" type="hidden"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to_img_width]"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_how_to_img_width); ?>" />

		<!-- Height -->
		<input id="seopress_pro_rich_snippets_how_to_img_height" type="hidden"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to_img_height]"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_how_to_img_height); ?>" />

		<!-- Upload -->
		<input id="seopress_pro_rich_snippets_how_to_img"
			class="<?php echo esc_attr(seopress_btn_secondary_classes()); ?> seopress_media_upload"
			type="button"
			value="<?php esc_html_e('Upload an Image', 'webseo'); ?>" />
	</p>

	<p>
		<label for="seopress_pro_rich_snippets_how_to_cost_meta">
			<?php esc_html_e('Estimated cost', 'webseo'); ?>
		</label>
		<input type="text" id="seopress_pro_rich_snippets_how_to_cost_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to_cost]"
			placeholder="<?php esc_html_e('The estimated cost', 'webseo'); ?>"
			aria-label="<?php esc_html_e('How-to estimated cost', 'webseo'); ?>"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_how_to_cost); ?>" />
	</p>

	<p>
		<label for="seopress_pro_rich_snippets_how_to_currency_meta">
			<?php esc_html_e('Currency', 'webseo'); ?>
		</label>
		<input type="text" id="seopress_pro_rich_snippets_how_to_currency_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to_currency]"
			placeholder="<?php esc_html_e('The currency of the estimated cost', 'webseo'); ?>"
			aria-label="<?php esc_html_e('How-to currency', 'webseo'); ?>"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_how_to_currency); ?>" />
	</p>

	<p>
		<label for="seopress_pro_rich_snippets_how_to_total_time_meta">
			<?php esc_html_e('Total time needed', 'webseo'); ?>
		</label>
		<input type="text" id="seopress_pro_rich_snippets_how_to_total_time_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to_total_time]"
			placeholder="<?php esc_html_e('e.g. HH:MM:SS', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Total time needed', 'webseo'); ?>"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_how_to_total_time); ?>" />
	</p>

	<?php //Init $seopress_how_to array if empty
		if (empty($seopress_pro_rich_snippets_how_to)) {
			$seopress_pro_rich_snippets_how_to = ['0' => ['']];
		}

	$total = count($seopress_pro_rich_snippets_how_to[0]);

	if ($total > 0) {
		?>
	<div id="wrap-how-to" data-count="<?php echo absint($total); ?>">
		<?php foreach ($seopress_pro_rich_snippets_how_to[0] as $key => $value) {
			$num = $key + 1;
			$check_name = isset($seopress_pro_rich_snippets_how_to[0][$key]['name']) ? $seopress_pro_rich_snippets_how_to[0][$key]['name'] : null;
			$check_text = isset($seopress_pro_rich_snippets_how_to[0][$key]['text']) ? $seopress_pro_rich_snippets_how_to[0][$key]['text'] : null;
			$check_img = isset($seopress_pro_rich_snippets_how_to[0][$key]['image']) ? $seopress_pro_rich_snippets_how_to[0][$key]['image'] : null;
			$check_img_width = isset($seopress_pro_rich_snippets_how_to[0][$key]['width']) ? $seopress_pro_rich_snippets_how_to[0][$key]['width'] : null;
			$check_img_height = isset($seopress_pro_rich_snippets_how_to[0][$key]['height']) ? $seopress_pro_rich_snippets_how_to[0][$key]['height'] : null; ?>
		<div class="step">
			<h3 class="accordion-section-title" tabindex="0">
				<?php echo esc_attr($check_name); ?>
			</h3>
			<div class="accordion-section-content">
				<div class="inside">
					<p>
						<label
							for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][<?php echo esc_attr($key); ?>][name]">
							<?php esc_html_e('The title of the step (required)', 'webseo'); ?>
						</label>
						<input
							id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][<?php echo esc_attr($key); ?>][name]"
							type="text"
							name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][<?php echo esc_attr($key); ?>][name]"
							placeholder="<?php esc_html_e('Enter a title for this step', 'webseo'); ?>"
							aria-label="<?php esc_html_e('Step name', 'webseo'); ?>"
							value="<?php echo esc_attr($check_name); ?>" />
					</p>

					<p>
						<label
							for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][<?php echo esc_attr($key); ?>][text]">
							<?php esc_html_e('The text of your step (required)', 'webseo'); ?>
						</label>
						<textarea
							id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][<?php echo esc_attr($key); ?>][text]"
							name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][<?php echo esc_attr($key); ?>][text]"
							placeholder="<?php esc_html_e('Enter the text of your step', 'webseo'); ?>"
							aria-label="<?php esc_html_e('Step text', 'webseo'); ?>"
							rows="8"><?php echo esc_textarea($check_text); ?></textarea>
					</p>
					<p class="js-media-upload-how-to-repeater">
						<label
							for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][<?php echo esc_attr($key); ?>][image]">
							<?php esc_html_e('Image thumbnail', 'webseo'); ?>
						</label>
						<input
							id="seopress_pro_rich_snippets_data_<?php echo esc_attr($key_schema); ?>_<?php echo esc_attr($key); ?>_image_meta"
							type="text"
							name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][<?php echo esc_attr($key); ?>][image]"
							placeholder="<?php esc_html_e('Select your image', 'webseo'); ?>"
							aria-label="<?php esc_html_e('Image thumbnail', 'webseo'); ?>"
							class="seopress_pro_rich_snippets_data_image_meta"
							value="<?php echo esc_url($check_img); ?>" />
						<!-- Width -->
						<input
							id="seopress_pro_rich_snippets_data_<?php echo esc_attr($key_schema); ?>_<?php echo esc_attr($key); ?>_image_width"
							type="hidden"
							name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][<?php echo esc_attr($key); ?>][width]"
							class="seopress_pro_rich_snippets_data_image_width"
							value="<?php echo esc_attr($check_img_width); ?>" />

						<!-- Height -->
						<input
							id="seopress_pro_rich_snippets_data_<?php echo esc_attr($key_schema); ?>_<?php echo esc_attr($key); ?>_image_height"
							type="hidden"
							class="seopress_pro_rich_snippets_data_image_height"
							name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][<?php echo esc_attr($key); ?>][height]"
							value="<?php echo esc_attr($check_img_height); ?>" />

						<input
							id="seopress_pro_rich_snippets_data_<?php echo esc_attr($key_schema); ?>_<?php echo esc_attr($key); ?>_image"
							class="<?php echo esc_attr(seopress_btn_secondary_classes()); ?> seopress_media_upload"
							type="button"
							value="<?php esc_html_e('Upload an Image', 'webseo'); ?>"
							style="width:auto;" />
					</p>
					<p>
						<a href="#" class="remove-step button">
							<?php esc_html_e('Remove step', 'webseo'); ?>
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
	<div id="wrap-how-to" data-count="1">
		<div class="step">
			<h3 class="accordion-section-title" tabindex="0">
				<?php esc_html_e('Step', 'webseo'); ?>
			</h3>
			<div class="accordion-section-content">
				<div class="inside">
					<p>
						<label
							for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][0][name]">
							<?php esc_html_e('The title of the step (required)', 'webseo'); ?>
						</label>
						<input
							id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][0][name]"
							type="text"
							name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][0][name]"
							placeholder="<?php esc_html_e('Enter a title for this step', 'webseo'); ?>"
							aria-label="<?php esc_html_e('Step name', 'webseo'); ?>"
							value="" />
					</p>

					<p>
						<label
							for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][0][text]">
							<?php esc_html_e('The text of your step (required)', 'webseo'); ?>
						</label>
						<textarea
							id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][0][text]"
							name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][0][text]"
							placeholder="<?php esc_html_e('Enter the text of your step', 'webseo'); ?>"
							aria-label="<?php esc_html_e('Step text', 'webseo'); ?>"
							rows="8"></textarea>
					</p>
					<p class="js-media-upload-how-to-repeater">
						<label
							for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][0][image]">
							<?php esc_html_e('Image thumbnail', 'webseo'); ?>
						</label>
						<input
							id="seopress_pro_rich_snippets_data_<?php echo esc_attr($key_schema); ?>_0_image_meta"
							type="text"
							name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][0][image]"
							placeholder="<?php esc_html_e('Select your image', 'webseo'); ?>"
							aria-label="<?php esc_html_e('Image thumbnail', 'webseo'); ?>"
							value="" />
						<!-- Width -->
						<input
							id="seopress_pro_rich_snippets_data_<?php echo esc_attr($key_schema); ?>_0_image_width"
							type="hidden"
							name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][0][width]"
							value="" />

						<!-- Height -->
						<input
							id="seopress_pro_rich_snippets_data_<?php echo esc_attr($key_schema); ?>_0_image_height"
							type="hidden"
							name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_how_to][0][height]"
							value="" />

						<input
							id="seopress_pro_rich_snippets_data_<?php echo esc_attr($key_schema); ?>_0_image"
							class="<?php echo esc_attr(seopress_btn_secondary_classes()); ?> seopress_media_upload"
							type="button"
							value="<?php esc_html_e('Upload an Image', 'webseo'); ?>"
							style="width:auto;" />
					</p>

					<p>
						<a href="#" class="remove-step button">
							<?php esc_html_e('Remove step', 'webseo'); ?>
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<p>
		<a href="#" id="add-step" class="add-step components-button <?php echo esc_attr(seopress_btn_secondary_classes()); ?>">
			<?php esc_html_e('Add step', 'webseo'); ?>
		</a>
	</p>
</div>
<?php
}
