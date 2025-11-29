<?php

defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');

?>

<div class="wrap-rich-snippets-local-business">
	<div class="seopress-notice">
		<p>
			<?php /* translators: %s: link documentation */
				echo wp_kses_post(sprintf(__('Learn more about the <strong>Local Business schema</strong> from the <a href="%s" target="_blank">Google official documentation website</a>', 'webseo'), 'https://developers.google.com/search/docs/data-types/local-business'));
			?>
			<span class="dashicons dashicons-external"></span>
		</p>
	</div>
	<p>
		<label for="seopress_pro_rich_snippets_lb_name_meta">
			<?php esc_html_e('Name of your business', 'webseo'); ?>
			<code>name</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_lb_name', 'default'); ?>
		<span class="description"><?php esc_html_e('e.g. My Local Business', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_lb_type_meta">
			<?php esc_html_e('Select a business type', 'webseo'); ?>
			<code>type</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_lb_type', 'lb'); ?>
	</p>
	<p class="description">
		<a href="https://schema.org/LocalBusiness" target="_blank"
			title="<?php esc_html_e('All business types (new window)', 'webseo'); ?>">
			<?php esc_html_e('Full list of business types available on schema.org', 'webseo'); ?>
		</a>
		<span class="dashicons dashicons-external"></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_lb_img_meta">
			<?php esc_html_e('Image', 'webseo'); ?>
			<code>image</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_lb_img', 'image'); ?>
		<span class="description"><?php echo wp_kses_post(__('Every page must contain at least one image (whether or not you include markup). Google will pick the best image to display in Search results based on the aspect ratio and resolution.<br>
Image URLs must be crawlable and indexable.<br>
Images must represent the marked up content.<br>
Images must be in .jpg, .png, or. gif format.<br>
For best results, provide multiple high-resolution images (minimum of 50K pixels when multiplying width and height) with the following aspect ratios: 16x9, 4x3, and 1x1.', 'webseo')); ?>
		</span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_lb_street_addr_meta">
			<?php esc_html_e('Street Address', 'webseo'); ?>
			<code>address</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_lb_street_addr', 'default'); ?>
		<span class="description"><?php esc_html_e('e.g. Place Bellevue', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_lb_city_meta">
			<?php esc_html_e('City', 'webseo'); ?>
			<code>city</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_lb_city', 'default'); ?>
		<span class="description"><?php esc_html_e('e.g. Biarritz', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_lb_state_meta">
			<?php esc_html_e('State', 'webseo'); ?>
			<code>state</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_lb_state', 'default'); ?>
		<span class="description"><?php esc_html_e('e.g. Nouvelle Aquitaine', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_lb_pc_meta">
			<?php esc_html_e('Postal code', 'webseo'); ?>
			<code>postalCode</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_lb_pc', 'default'); ?>
		<span class="description"><?php esc_html_e('e.g. 64200', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_lb_country_meta">
			<?php esc_html_e('Country', 'webseo'); ?>
			<code>country</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_lb_country', 'default'); ?>
		<span class="description"><?php esc_html_e('e.g. FR for France', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_lb_lat_meta">
			<?php esc_html_e('Latitude', 'webseo'); ?>
			<code>geo</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_lb_lat', 'default'); ?>
		<span class="description"><?php esc_html_e('e.g. 43.4831389', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_lb_lon_meta">
			<?php esc_html_e('Longitude', 'webseo'); ?>
			<code>geo</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_lb_lon', 'default'); ?>
		<span class="description"><?php esc_html_e('e.g. -1.5630987', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_lb_website_meta">
			<?php esc_html_e('URL', 'webseo'); ?>
			<code>url</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_lb_website', 'default'); ?>
		<span class="description"><?php esc_html_e('e.g. ', 'webseo'); echo esc_url(get_home_url()); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_lb_tel_meta">
			<?php esc_html_e('Telephone', 'webseo'); ?>
			<code>telephone</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_lb_tel', 'default'); ?>
		<span class="description"><?php esc_html_e('e.g. +33501020304', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_lb_price_meta">
			<?php esc_html_e('Price range', 'webseo'); ?>
			<code>priceRange</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_lb_price', 'default'); ?>
		<span class="description"><?php esc_html_e('e.g. $$, €€€, or ££££...', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_lb_serves_cuisine_meta">
			<?php esc_html_e('Cuisine served', 'webseo'); ?>
			<code>servesCuisine</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_lb_serves_cuisine', 'default'); ?>
		<span class="description"><?php esc_html_e('Only to be filled if the business type is: "FoodEstablishment", "Bakery", "BarOrPub", "Brewery", "CafeOrCoffeeShop", "FastFoodRestaurant", "IceCreamShop", "Restaurant" or "Winery".', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_lb_menu_meta">
			<?php esc_html_e('URL of the menu', 'webseo'); ?>
			<code>menu</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_lb_menu', 'default'); ?>
		<span class="description"><?php esc_html_e('Only to be filled if the business type is: "FoodEstablishment", "Bakery", "BarOrPub", "Brewery", "CafeOrCoffeeShop", "FastFoodRestaurant", "IceCreamShop", "Restaurant" or "Winery".', 'webseo'); ?></span>
		<span class="description"><?php esc_html_e('Default value if empty: URL from the Website property', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_lb_accepts_reservations_meta">
			<?php esc_html_e('Accepts reservations', 'webseo'); ?>
			<code>acceptsReservations</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_lb_accepts_reservations', 'default'); ?>
		<span class="description"><?php esc_html_e('Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean (True or False), an URL at which reservations can be made or (for backwards compatibility) the strings Yes or No.', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_lb_opening_hours_meta">
			<?php esc_html_e('Opening hours', 'webseo'); ?>
			<code>openingHours</code>
		</label>
		<span class="description"><?php echo wp_kses_post(__('<strong>Morning and Afternoon are just time slots</strong>. e.g. if you\'re opened from 10:00 AM to 9:00 PM, check Morning and enter 10:00 / 21:00. If you are open non-stop, check Morning and enter 0:00 / 23:59.', 'webseo')); ?></span>
	</p>

	<?php
	$options = $seopress_pro_rich_snippets_lb_opening_hours;

	$days = [
		__('Monday', 'webseo'),
		__('Tuesday', 'webseo'),
		__('Wednesday', 'webseo'),
		__('Thursday', 'webseo'),
		__('Friday', 'webseo'),
		__('Saturday', 'webseo'),
		__('Sunday', 'webseo'),
	];

	$hours = ['00', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23'];

	$mins = ['00', '15', '30', '45', '59']; ?>

	<ul class="wrap-opening-hours">

		<?php
	foreach ($days as $key => $day) {
		$check_day = isset($options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['open']);

		$check_day_am = isset($options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['am']['open']);

		$check_day_pm = isset($options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['open']);

		$selected_start_hours = isset($options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['am']['start']['hours']) ? $options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['am']['start']['hours'] : null;

		$selected_start_mins = isset($options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['am']['start']['mins']) ? $options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['am']['start']['mins'] : null; ?>
		<li>
			<span class="day"><strong><?php echo $day; ?></strong></span>

			<ul>
				<!--Closed?-->
				<li>
					<input
						id="seopress_pro_rich_snippets_lb_opening_hours[<?php echo esc_attr($key); ?>][open]"
						name="seopress_pro_rich_snippets_lb_opening_hours[seopress_pro_rich_snippets_lb_opening_hours][<?php echo esc_attr($key); ?>][open]"
						type="checkbox" <?php if ('1' == $check_day) { ?>
					checked="yes"
					<?php } ?>
					value="1"/>

					<label
						for="seopress_pro_rich_snippets_lb_opening_hours[<?php echo esc_attr($key); ?>][open]">
						<?php esc_html_e('Closed all the day?', 'webseo'); ?>
					</label>

					<?php if (isset($options['seopress_pro_rich_snippets_lb_opening_hours'][$key]['open'])) {
						esc_attr($options['seopress_pro_rich_snippets_lb_opening_hours'][$key]['open']);
					} ?>
				</li>

				<!--AM-->
				<li>
					<input
						id="seopress_pro_rich_snippets_lb_opening_hours[<?php echo esc_attr($key); ?>][am][open]"
						name="seopress_pro_rich_snippets_lb_opening_hours[seopress_pro_rich_snippets_lb_opening_hours][<?php echo esc_attr($key); ?>][am][open]"
						type="checkbox" <?php if ('1' == $check_day_am) { ?>
					checked="yes"
					<?php } ?>
					value="1"/>

					<label
						for="seopress_pro_rich_snippets_lb_opening_hours[<?php echo esc_attr($key); ?>][am][open]"><?php esc_html_e('Open in the morning?', 'webseo'); ?></label>

					<?php if (isset($options['seopress_pro_rich_snippets_lb_opening_hours'][$key]['am']['open'])) {
						esc_attr($options['seopress_pro_rich_snippets_lb_opening_hours'][$key]['am']['open']);
					} ?>

					<select
						id="seopress_pro_rich_snippets_lb_opening_hours[<?php echo esc_attr($key); ?>][am][start][hours]"
						name="seopress_pro_rich_snippets_lb_opening_hours[seopress_pro_rich_snippets_lb_opening_hours][<?php echo esc_attr($key); ?>][am][start][hours]">

						<?php foreach ($hours as $hour) { ?>
						<option <?php if ($hour == $selected_start_hours) { ?>
							selected="selected"
							<?php } ?>
							value="<?php echo esc_attr($hour); ?>"><?php echo esc_attr($hour); ?>
						</option>
						<?php } ?>

					</select>

					<?php esc_html_e(' : ', 'webseo'); ?>

					<select
						id="seopress_pro_rich_snippets_lb_opening_hours[<?php echo esc_attr($key); ?>][am][start][mins]"
						name="seopress_pro_rich_snippets_lb_opening_hours[seopress_pro_rich_snippets_lb_opening_hours][<?php echo esc_attr($key); ?>][am][start][mins]">

						<?php foreach ($mins as $min) { ?>
						<option <?php if ($min == $selected_start_mins) { ?>
							selected="selected"
							<?php } ?>
							value="<?php echo esc_attr($min); ?>"><?php echo esc_attr($min); ?>
						</option>
						<?php } ?>

					</select>

					<?php if (isset($options['seopress_pro_rich_snippets_lb_opening_hours'][$key]['am']['start']['hours'])) {
			esc_attr($options['seopress_pro_rich_snippets_lb_opening_hours'][$key]['am']['start']['hours']);
		}

		if (isset($options['seopress_pro_rich_snippets_lb_opening_hours'][$key]['am']['start']['mins'])) {
			esc_attr($options['seopress_pro_rich_snippets_lb_opening_hours'][$key]['am']['start']['mins']);
		}

		esc_html_e(' - ', 'webseo');

		$selected_end_hours = isset($options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['am']['end']['hours']) ? $options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['am']['end']['hours'] : null;

		$selected_end_mins = isset($options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['am']['end']['mins']) ? $options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['am']['end']['mins'] : null; ?>

					<select
						id="seopress_pro_rich_snippets_lb_opening_hours[<?php echo esc_attr($key); ?>][am][end][hours]"
						name="seopress_pro_rich_snippets_lb_opening_hours[seopress_pro_rich_snippets_lb_opening_hours][<?php echo esc_attr($key); ?>][am][end][hours]">

						<?php foreach ($hours as $hour) { ?>
						<option <?php if ($hour == $selected_end_hours) { ?>
							selected="selected"
							<?php } ?>
							value="<?php echo esc_attr($hour); ?>"><?php echo esc_attr($hour); ?>
						</option>
						<?php } ?>

					</select>

					<?php esc_html_e(' : ', 'webseo'); ?>

					<select
						id="seopress_pro_rich_snippets_lb_opening_hours[<?php echo esc_attr($key); ?>][am][end][mins]"
						name="seopress_pro_rich_snippets_lb_opening_hours[seopress_pro_rich_snippets_lb_opening_hours][<?php echo esc_attr($key); ?>][am][end][mins]">

						<?php foreach ($mins as $min) { ?>
						<option <?php if ($min == $selected_end_mins) { ?>
							selected="selected"
							<?php } ?>
							value="<?php echo esc_attr($min); ?>"><?php echo esc_attr($min); ?>
						</option>
						<?php } ?>

					</select>
				</li>

				<!--PM-->
				<li>
					<?php $selected_start_hours2 = isset($options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['start']['hours']) ? $options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['start']['hours'] : null;

		$selected_start_mins2 = isset($options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['start']['mins']) ? $options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['start']['mins'] : null; ?>

					<input
						id="seopress_pro_rich_snippets_lb_opening_hours[<?php echo esc_attr($key); ?>][pm][open]"
						name="seopress_pro_rich_snippets_lb_opening_hours[seopress_pro_rich_snippets_lb_opening_hours][<?php echo esc_attr($key); ?>][pm][open]"
						type="checkbox" <?php if ('1' == $check_day_pm) { ?>
					checked="yes"
					<?php } ?>
					value="1"/>

					<label
						for="seopress_pro_rich_snippets_lb_opening_hours[<?php echo esc_attr($key); ?>][pm][open]"><?php esc_html_e('Open in the afternoon?', 'webseo'); ?></label>

					<?php if (isset($options['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['open'])) {
						esc_attr($options['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['open']);
					} ?>

					<select
						id="seopress_pro_rich_snippets_lb_opening_hours[<?php echo esc_attr($key); ?>][pm][start][hours]"
						name="seopress_pro_rich_snippets_lb_opening_hours[seopress_pro_rich_snippets_lb_opening_hours][<?php echo esc_attr($key); ?>][pm][start][hours]">
						<?php foreach ($hours as $hour) { ?>
						<option <?php if ($hour == $selected_start_hours2) { ?>
							selected="selected"
							<?php } ?>
							value="<?php echo esc_attr($hour); ?>"><?php echo esc_attr($hour); ?>
						</option>
						<?php } ?>

					</select>

					<?php esc_html_e(' : ', 'webseo'); ?>

					<select
						id="seopress_pro_rich_snippets_lb_opening_hours[<?php echo esc_attr($key); ?>][pm][start][mins]"
						name="seopress_pro_rich_snippets_lb_opening_hours[seopress_pro_rich_snippets_lb_opening_hours][<?php echo esc_attr($key); ?>][pm][start][mins]">

						<?php foreach ($mins as $min) { ?>
						<option <?php if ($min == $selected_start_mins2) { ?>
							selected="selected"
							<?php } ?>
							value="<?php echo esc_attr($min); ?>"><?php echo esc_attr($min); ?>
						</option>
						<?php } ?>

					</select>

					<?php if (isset($options['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['start']['hours'])) {
			esc_attr($options['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['start']['hours']);
		}

		if (isset($options['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['start']['mins'])) {
			esc_attr($options['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['start']['mins']);
		}

		esc_html_e(' - ', 'webseo');

		$selected_end_hours2 = isset($options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['end']['hours']) ? $options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['end']['hours'] : null;

		$selected_end_mins2 = isset($options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['end']['mins']) ? $options[0]['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['end']['mins'] : null; ?>

					<select
						id="seopress_pro_rich_snippets_lb_opening_hours[<?php echo esc_attr($key); ?>][pm][end][hours]"
						name="seopress_pro_rich_snippets_lb_opening_hours[seopress_pro_rich_snippets_lb_opening_hours][<?php echo esc_attr($key); ?>][pm][end][hours]">
						<?php foreach ($hours as $hour) { ?>
						<option <?php if ($hour == $selected_end_hours2) { ?>
							selected="selected"
							<?php } ?>
							value="<?php echo esc_attr($hour); ?>"><?php echo esc_attr($hour); ?>
						</option>
						<?php } ?>
					</select>

					<?php esc_html_e(' : ', 'webseo'); ?>

					<select
						id="seopress_pro_rich_snippets_lb_opening_hours[<?php echo esc_attr($key); ?>][pm][end][mins]"
						name="seopress_pro_rich_snippets_lb_opening_hours[seopress_pro_rich_snippets_lb_opening_hours][<?php echo esc_attr($key); ?>][pm][end][mins]">

						<?php foreach ($mins as $min) { ?>
						<option <?php if ($min == $selected_end_mins2) { ?>
							selected="selected"
							<?php } ?>
							value="<?php echo esc_attr($min); ?>"><?php echo esc_attr($min); ?>
						</option>
						<?php } ?>

					</select>

				</li>
			</ul>

			<?php if (isset($options['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['end']['hours'])) {
			esc_attr($options['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['end']['hours']);
		}

		if (isset($options['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['end']['mins'])) {
			esc_attr($options['seopress_pro_rich_snippets_lb_opening_hours'][$key]['pm']['end']['mins']);
		}

		$seopress_pro_rich_snippets_lb_opening_hours = $options;
	} ?>

	</ul>
</div>
