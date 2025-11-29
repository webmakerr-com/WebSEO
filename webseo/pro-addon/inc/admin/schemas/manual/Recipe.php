<?php

defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');

function seopress_get_schema_metaboxe_recipe($seopress_pro_rich_snippets_data, $key_schema = 0) {
	$seopress_pro_rich_snippets_recipes_name = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_name']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_name'] : '';
	$seopress_pro_rich_snippets_recipes_desc = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_desc']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_desc'] : '';
	$seopress_pro_rich_snippets_recipes_cat = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_cat']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_cat'] : '';
	$seopress_pro_rich_snippets_recipes_img = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_img']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_img'] : '';
	$seopress_pro_rich_snippets_recipes_video = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_video']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_video'] : '';
	$seopress_pro_rich_snippets_recipes_prep_time = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_prep_time']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_prep_time'] : '';
	$seopress_pro_rich_snippets_recipes_cook_time = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_cook_time']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_cook_time'] : '';
	$seopress_pro_rich_snippets_recipes_calories = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_calories']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_calories'] : '';
	$seopress_pro_rich_snippets_recipes_yield = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_yield']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_yield'] : '';
	$seopress_pro_rich_snippets_recipes_keywords = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_keywords']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_keywords'] : '';
	$seopress_pro_rich_snippets_recipes_cuisine = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_cuisine']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_cuisine'] : '';
	$seopress_pro_rich_snippets_recipes_ingredient = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_ingredient']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_ingredient'] : '';
	$seopress_pro_rich_snippets_recipes_instructions = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_instructions']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_recipes_instructions'] : ''; ?>
<div class="wrap-rich-snippets-item wrap-rich-snippets-recipes">
	<div class="seopress-notice">
		<p>
			<?php esc_html_e('Mark up your recipe content with structured data to provide rich cards and host-specific lists for your recipes, such as cooking and preparation times, nutrition information...', 'webseo'); ?>
		</p>
	</div>
	<div class="seopress-notice is-warning">
		<ul class="advice seopress-list">
			<li><?php esc_html_e('Use recipe markup for content about preparing a particular dish. For example, "facial scrub" or "party ideas" are not valid names for a dish.', 'webseo'); ?>
			</li>
		</ul>
	</div>
	<p>
		<label for="seopress_pro_rich_snippets_recipes_name_meta">
			<?php esc_html_e('Recipe name', 'webseo'); ?>
		</label>
		<input type="text" id="seopress_pro_rich_snippets_recipes_name_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_recipes_name]"
			placeholder="<?php esc_html_e('The name of your dish', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Recipe name', 'webseo'); ?>"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_recipes_name); ?>" />
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_recipes_desc_meta">
			<?php esc_html_e('Short recipe description', 'webseo'); ?>
		</label>
		<textarea id="seopress_pro_rich_snippets_recipes_desc_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_recipes_desc]"
			placeholder="<?php esc_html_e('A short summary describing the dish.', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Short recipe description', 'webseo'); ?>"><?php echo esc_html($seopress_pro_rich_snippets_recipes_desc); ?></textarea>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_recipes_cat_meta">
			<?php esc_html_e('Recipe category', 'webseo'); ?>
		</label>
		<input type="text" id="seopress_pro_rich_snippets_recipes_cat_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_recipes_cat]"
			placeholder="<?php esc_html_e('e.g. appetizer, entree, or dessert', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Recipe category', 'webseo'); ?>"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_recipes_cat); ?>" />
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_recipes_img_meta">
			<?php esc_html_e('Image', 'webseo'); ?>
		</label>
		<span class="description"><?php esc_html_e('Minimum size: 185px by 185px, aspect ratio 1:1', 'webseo'); ?></span>
		<input id="seopress_pro_rich_snippets_recipes_img_meta" type="text"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_recipes_img]"
			placeholder="<?php esc_html_e('Select your image', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Image', 'webseo'); ?>"
			value="<?php echo esc_url($seopress_pro_rich_snippets_recipes_img); ?>" />
		<input id="seopress_pro_rich_snippets_recipes_img"
			class="<?php echo esc_attr(seopress_btn_secondary_classes()); ?> seopress_media_upload"
			type="button"
			value="<?php esc_html_e('Upload an Image', 'webseo'); ?>" />
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_recipes_video_meta">
			<?php esc_html_e('Video URL of the recipe', 'webseo'); ?>
		</label>
		<input type="text" id="seopress_pro_rich_snippets_recipes_video_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_recipes_video]"
			placeholder="<?php esc_html_e('e.g. https://www.youtube.com/watch?v=p6v9Jd5lRIU', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Video URL of the recipe', 'webseo'); ?>"
			value="<?php echo esc_url($seopress_pro_rich_snippets_recipes_video); ?>" />
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_recipes_prep_time_meta">
			<?php esc_html_e('Preparation time (in minutes)', 'webseo'); ?>
		</label>
		<input type="number" id="seopress_pro_rich_snippets_recipes_prep_time_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_recipes_prep_time]"
			placeholder="<?php esc_html_e('e.g. 30 min', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Preparation time (in minutes)', 'webseo'); ?>"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_recipes_prep_time); ?>" />
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_recipes_cook_time_meta">
			<?php esc_html_e('Cooking time (in minutes)', 'webseo'); ?>
		</label>
		<input type="number" id="seopress_pro_rich_snippets_recipes_cook_time_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_recipes_cook_time]"
			placeholder="<?php esc_html_e('e.g. 45 min', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Cooking time (in minutes)', 'webseo'); ?>"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_recipes_cook_time); ?>" />
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_recipes_calories_meta">
			<?php esc_html_e('Calories', 'webseo'); ?>
		</label>
		<input type="number" id="seopress_pro_rich_snippets_recipes_calories_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_recipes_calories]"
			placeholder="<?php esc_html_e('Number of calories', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Calories', 'webseo'); ?>"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_recipes_calories); ?>" />
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_recipes_yield_meta">
			<?php esc_html_e('Recipe yield', 'webseo'); ?>
		</label>
		<input type="text" id="seopress_pro_rich_snippets_recipes_yield_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_recipes_yield]"
			placeholder="<?php esc_html_e('e.g. number of people served, or number of servings', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Recipe yield', 'webseo'); ?>"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_recipes_yield); ?>" />
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_recipes_keywords_meta">
			<?php esc_html_e('Keywords', 'webseo'); ?>
		</label>
		<input type="text" id="seopress_pro_rich_snippets_recipes_keywords_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_recipes_keywords]"
			placeholder="<?php esc_html_e('e.g. winter apple pie, nutmeg crust (NOT recommended: dessert, American)', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Keywords', 'webseo'); ?>"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_recipes_keywords); ?>" />
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_recipes_cuisine_meta">
			<?php esc_html_e('Recipe cuisine', 'webseo'); ?>
		</label>
		<input type="text" id="seopress_pro_rich_snippets_recipes_cuisine_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_recipes_cuisine]"
			placeholder="<?php esc_html_e('The region associated with your recipe. For example, "French", Mediterranean", or "American"', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Recipe cuisine', 'webseo'); ?>"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_recipes_cuisine); ?>" />
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_recipes_ingredient_meta">
			<?php esc_html_e('Recipe ingredients', 'webseo'); ?>
		</label>
		<textarea rows="12" id="seopress_pro_rich_snippets_recipes_ingredient_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_recipes_ingredient]"
			placeholder="<?php esc_html_e('Ingredients used in the recipe. One ingredient per line. Include only the ingredient text that is necessary for making the recipe. Don\'t include unnecessary information, such as a definition of the ingredient.', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Recipe ingredients', 'webseo'); ?>"><?php echo wp_kses_post($seopress_pro_rich_snippets_recipes_ingredient); ?></textarea>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_recipes_instructions_meta">
			<?php esc_html_e('Recipe instructions', 'webseo'); ?>
		</label>
		<textarea rows="12" id="seopress_pro_rich_snippets_recipes_instructions_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_recipes_instructions]"
			placeholder="<?php esc_html_e('e.g. Heat oven to 425°F. Include only text on how to make the recipe and don\'t include other text such as "Directions", "Watch the video", "Step 1".', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Recipe instructions', 'webseo'); ?>"><?php echo wp_kses_post($seopress_pro_rich_snippets_recipes_instructions); ?></textarea>
	</p>
</div>
<?php
}
