<?php

defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');

function seopress_get_schema_metaboxe_product($seopress_pro_rich_snippets_data, $key_schema = 0) {
	$options_currencies = seopress_get_options_schema_currencies();

	$seopress_pro_rich_snippets_product_name = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_name']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_name'] : '';
	$seopress_pro_rich_snippets_product_description = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_description']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_description'] : '';
	$seopress_pro_rich_snippets_product_img = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_img']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_img'] : '';
	$seopress_pro_rich_snippets_product_price = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_price']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_price'] : '';
	$seopress_pro_rich_snippets_product_price_valid_date = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_price_valid_date']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_price_valid_date'] : '';
	$seopress_pro_rich_snippets_product_sku = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_sku']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_sku'] : '';
	$seopress_pro_rich_snippets_product_brand = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_brand']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_brand'] : '';
	$seopress_pro_rich_snippets_product_global_ids = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_global_ids']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_global_ids'] : '';
	$seopress_pro_rich_snippets_product_global_ids_value = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_global_ids_value']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_global_ids_value'] : '';
	$seopress_pro_rich_snippets_product_price_currency = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_price_currency']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_price_currency'] : '';
	$seopress_pro_rich_snippets_product_condition = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_condition']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_condition'] : '';
	$seopress_pro_rich_snippets_product_availability = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_availability']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_availability'] : '';
	$seopress_pro_rich_snippets_product_positive_notes = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_positive_notes']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_positive_notes'] : [];
	$seopress_pro_rich_snippets_product_negative_notes = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_negative_notes']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_negative_notes'] : [];
	$seopress_pro_rich_snippets_product_energy_consumption = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_energy_consumption']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_product_energy_consumption'] : 'none';


	?>
<div class="wrap-rich-snippets-item wrap-rich-snippets-products">
	<div class="seopress-notice">
		<p>
			<?php esc_html_e('Add markup to your product pages so Google can provide detailed product information in rich Search results - including Image Search. Users can see price, availability... right on Search results.', 'webseo'); ?>
		</p>
	</div>
	<div class="seopress-notice is-warning">
		<ul class="advice seopress-list">
			<li><?php esc_html_e('Use markup for a specific product, not a category or list of products. For example, "shoes in our shop" is not a specific product.', 'webseo'); ?>
			</li>
			<li><?php esc_html_e('Adult-related products are not supported.', 'webseo'); ?>
			</li>
			<li><?php esc_html_e('Works best with WooCommerce: we automatically add aggregateRating properties from user reviews (you have to enable this option from WooCommerce settings).', 'webseo'); ?>
			</li>
		</ul>
	</div>
	<p>
		<label for="seopress_pro_rich_snippets_product_name_meta">
			<?php esc_html_e('Product name', 'webseo'); ?>
		</label>
		<input type="text" id="seopress_pro_rich_snippets_product_name_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_name]"
			placeholder="<?php esc_html_e('The name of your product', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Product name', 'webseo'); ?>"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_product_name); ?>" />
		<span class="description"><?php esc_html_e('Default: product title', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_product_description_meta">
			<?php esc_html_e('Product description', 'webseo'); ?>
		</label>
		<textarea id="seopress_pro_rich_snippets_product_description_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_description]"
			placeholder="<?php esc_html_e('The description of the product', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Product description', 'webseo'); ?>"><?php echo wp_kses_post($seopress_pro_rich_snippets_product_description); ?></textarea>
		<span class="description"><?php esc_html_e('Default: product excerpt', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_product_img_meta">
			<?php esc_html_e('Thumbnail', 'webseo'); ?>
		</label>
		<span class="description"><?php esc_html_e('Pictures clearly showing the product, e.g. against a white background, are preferred', 'webseo'); ?></span>
		<input id="seopress_pro_rich_snippets_product_img_meta" type="text"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_img]"
			placeholder="<?php esc_html_e('Select your image', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Thumbnail', 'webseo'); ?>"
			value="<?php echo esc_url($seopress_pro_rich_snippets_product_img); ?>" />
		<input id="seopress_pro_rich_snippets_product_img"
			class="<?php echo esc_attr(seopress_btn_secondary_classes()); ?> seopress_media_upload"
			type="button"
			value="<?php esc_html_e('Upload an Image', 'webseo'); ?>" />
		<span class="description"><?php esc_html_e('Default: product image', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_product_price_meta">
			<?php esc_html_e('Product price', 'webseo'); ?>
		</label>
		<input type="text" id="seopress_pro_rich_snippets_product_price_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_price]"
			placeholder="<?php esc_html_e('e.g. 30', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Product price', 'webseo'); ?>"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_product_price); ?>" />
		<span class="description"><?php esc_html_e('Default: active product price', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress-date-picker6">
			<?php esc_html_e('Product price valid until', 'webseo'); ?>
		</label>
		<input id="seopress-date-picker6" type="text"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_price_valid_date]"
			class="seopress-date-picker"
			placeholder="<?php esc_html_e('e.g. YYYY-MM-DD', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Product price valid until', 'webseo'); ?>"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_product_price_valid_date); ?>" />
		<span class="description"><?php esc_html_e('Default: sale price dates To field', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_product_sku_meta">
			<?php esc_html_e('Product SKU', 'webseo'); ?>
		</label>
		<input type="text" id="seopress_pro_rich_snippets_product_sku_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_sku]"
			placeholder="<?php esc_html_e('e.g. 0446310786', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Product SKU', 'webseo'); ?>"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_product_sku); ?>" />
		<span class="description"><?php esc_html_e('Default: product SKU', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_product_global_ids_meta">
			<?php esc_html_e('Product Global Identifiers type', 'webseo'); ?>
		</label>
		<select id="seopress_pro_rich_snippets_product_global_ids_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_global_ids]">
			<option <?php selected('none', $seopress_pro_rich_snippets_product_global_ids); ?>
				value="none"><?php esc_html_e('Select a global identifier', 'webseo'); ?>
			</option>
			<option <?php selected('gtin8', $seopress_pro_rich_snippets_product_global_ids); ?>
				value="gtin8"><?php esc_html_e('gtin8 (ean8)', 'webseo'); ?>
			</option>
			<option <?php selected('gtin12', $seopress_pro_rich_snippets_product_global_ids); ?>
				value="gtin12"><?php esc_html_e('gtin12 (ean12)', 'webseo'); ?>
			</option>
			<option <?php selected('gtin13', $seopress_pro_rich_snippets_product_global_ids); ?>
				value="gtin13"><?php esc_html_e('gtin13 (ean13)', 'webseo'); ?>
			</option>
			<option <?php selected('gtin14', $seopress_pro_rich_snippets_product_global_ids); ?>
				value="gtin14"><?php esc_html_e('gtin14 (ean14)', 'webseo'); ?>
			</option>
			<option <?php selected('mpn', $seopress_pro_rich_snippets_product_global_ids); ?>
				value="mpn"><?php esc_html_e('mpn', 'webseo'); ?>
			</option>
			<option <?php selected('isbn', $seopress_pro_rich_snippets_product_global_ids); ?>
				value="isbn"><?php esc_html_e('isbn', 'webseo'); ?>
			</option>
		</select>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_product_global_ids_value_meta">
			<?php esc_html_e('Product Global Identifier value', 'webseo'); ?>
		</label>
		<input type="text" id="seopress_pro_rich_snippets_product_global_ids_value_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_global_ids_value]"
			placeholder="<?php esc_html_e('e.g. 925872', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Product Global Identifiers', 'webseo'); ?>"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_product_global_ids_value); ?>" />
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_product_brand_meta">
			<?php esc_html_e('Product Brand', 'webseo'); ?>
		</label>
		<?php
				$serviceWpData = seopress_get_service('WordPressData');
	$seopress_get_taxonomies = [];
	if ($serviceWpData && method_exists($serviceWpData, 'getTaxonomies')) {
		$seopress_get_taxonomies = $serviceWpData->getTaxonomies();
	}
	if ( ! empty($seopress_get_taxonomies)) {
		?>
		<select id="seopress_pro_rich_snippets_product_brand_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_brand]">
			<option <?php selected('none', $seopress_pro_rich_snippets_product_brand); ?>
				value="none">
				<?php esc_html_e('Select a taxonomy', 'webseo'); ?>
			</option>

			<?php foreach ($seopress_get_taxonomies as $key => $value) { ?>
			<option <?php selected($key, $seopress_pro_rich_snippets_product_brand); ?>
				value="<?php echo esc_attr($key); ?>"><?php echo esc_attr($key); ?>
			</option>
			<?php } ?>
		</select>
		<?php
	} ?>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_product_price_currency_meta">
			<?php esc_html_e('Product currency', 'webseo'); ?>
		</label>
		<select id="seopress_pro_rich_snippets_product_price_currency_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_price_currency]">
			<?php foreach ($options_currencies as $item) { ?>
			<option <?php selected($item['value'], $seopress_pro_rich_snippets_product_price_currency); ?>
				value="<?php echo esc_attr($item['value']); ?>">
				<?php echo esc_attr($item['label']); ?>
			</option>
			<?php } ?>
		</select>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_product_condition_meta"><?php esc_html_e('Product Condition', 'webseo'); ?>
		</label>
		<select id="seopress_pro_rich_snippets_product_condition_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_condition]">
			<option <?php selected('NewCondition', $seopress_pro_rich_snippets_product_condition); ?>
				value="NewCondition"><?php esc_html_e('New', 'webseo'); ?>
			</option>
			<option <?php selected('UsedCondition', $seopress_pro_rich_snippets_product_condition); ?>
				value="UsedCondition"><?php esc_html_e('Used', 'webseo'); ?>
			</option>
			<option <?php selected('DamagedCondition', $seopress_pro_rich_snippets_product_condition); ?>
				value="DamagedCondition"><?php esc_html_e('Damaged', 'webseo'); ?>
			</option>
			<option <?php selected('RefurbishedCondition', $seopress_pro_rich_snippets_product_condition); ?>
				value="RefurbishedCondition"><?php esc_html_e('Refurbished', 'webseo'); ?>
			</option>
		</select>
		<span class="description"><?php esc_html_e('Default: new', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_product_availability_meta"><?php esc_html_e('Product Availability', 'webseo'); ?>
		</label>
		<select id="seopress_pro_rich_snippets_product_availability_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_availability]">
			<option <?php selected('InStock', $seopress_pro_rich_snippets_product_availability); ?>
				value="InStock"><?php esc_html_e('In Stock', 'webseo'); ?>
			</option>
			<option <?php selected('InStoreOnly', $seopress_pro_rich_snippets_product_availability); ?>
				value="InStoreOnly"><?php esc_html_e('In Store Only', 'webseo'); ?>
			</option>
			<option <?php selected('OnlineOnly', $seopress_pro_rich_snippets_product_availability); ?>
				value="OnlineOnly"><?php esc_html_e('Online Only', 'webseo'); ?>
			</option>
			<option <?php selected('LimitedAvailability', $seopress_pro_rich_snippets_product_availability); ?>
				value="LimitedAvailability"><?php esc_html_e('Limited Availability', 'webseo'); ?>
			</option>
			<option <?php selected('SoldOut', $seopress_pro_rich_snippets_product_availability); ?>
				value="SoldOut"><?php esc_html_e('Sold Out', 'webseo'); ?>
			</option>
			<option <?php selected('OutOfStock', $seopress_pro_rich_snippets_product_availability); ?>
				value="OutOfStock"><?php esc_html_e('Out Of Stock', 'webseo'); ?>
			</option>
			<option <?php selected('Discontinued', $seopress_pro_rich_snippets_product_availability); ?>
				value="Discontinued"><?php esc_html_e('Discontinued', 'webseo'); ?>
			</option>
			<option <?php selected('PreOrder', $seopress_pro_rich_snippets_product_availability); ?>
				value="PreOrder"><?php esc_html_e('Pre Order', 'webseo'); ?>
			</option>
			<option <?php selected('PreSale', $seopress_pro_rich_snippets_product_availability); ?>
				value="PreSale"><?php esc_html_e('Pre Sale', 'webseo'); ?>
			</option>
		</select>
	</p>

	<p>
		<label for="_seopress_pro_rich_snippets_product_energy_consumption"><?php esc_html_e('Energy Consumption', 'webseo'); ?>
		</label>
		<select id="_seopress_pro_rich_snippets_product_energy_consumption"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_energy_consumption]">
			<option <?php selected('none', $seopress_pro_rich_snippets_product_energy_consumption); ?>
				value="none"><?php esc_html_e('Select an Energy Consumption', 'webseo'); ?>
			</option>
			<option <?php selected('https://schema.org/EUEnergyEfficiencyCategoryA3Plus', $seopress_pro_rich_snippets_product_energy_consumption); ?>
				value="https://schema.org/EUEnergyEfficiencyCategoryA3Plus"><?php esc_html_e('A+++', 'webseo'); ?>
			</option>
			<option <?php selected('https://schema.org/EUEnergyEfficiencyCategoryA2Plus', $seopress_pro_rich_snippets_product_energy_consumption); ?>
				value="https://schema.org/EUEnergyEfficiencyCategoryA2Plus"><?php esc_html_e('A++', 'webseo'); ?>
			</option>
			<option <?php selected('https://schema.org/EUEnergyEfficiencyCategoryA1Plus', $seopress_pro_rich_snippets_product_energy_consumption); ?>
				value="https://schema.org/EUEnergyEfficiencyCategoryA1Plus"><?php esc_html_e('A+', 'webseo'); ?>
			</option>
			<option <?php selected('https://schema.org/EUEnergyEfficiencyCategoryA', $seopress_pro_rich_snippets_product_energy_consumption); ?>
				value="https://schema.org/EUEnergyEfficiencyCategoryA"><?php esc_html_e('A', 'webseo'); ?>
			</option>
			<option <?php selected('https://schema.org/EUEnergyEfficiencyCategoryB', $seopress_pro_rich_snippets_product_energy_consumption); ?>
				value="https://schema.org/EUEnergyEfficiencyCategoryB"><?php esc_html_e('B', 'webseo'); ?>
			</option>
			<option <?php selected('https://schema.org/EUEnergyEfficiencyCategoryC', $seopress_pro_rich_snippets_product_energy_consumption); ?>
				value="https://schema.org/EUEnergyEfficiencyCategoryC"><?php esc_html_e('C', 'webseo'); ?>
			</option>
			<option <?php selected('https://schema.org/EUEnergyEfficiencyCategoryD', $seopress_pro_rich_snippets_product_energy_consumption); ?>
				value="https://schema.org/EUEnergyEfficiencyCategoryD"><?php esc_html_e('D', 'webseo'); ?>
			</option>
			<option <?php selected('https://schema.org/EUEnergyEfficiencyCategoryE', $seopress_pro_rich_snippets_product_energy_consumption); ?>
				value="https://schema.org/EUEnergyEfficiencyCategoryE"><?php esc_html_e('E', 'webseo'); ?>
			</option>
			<option <?php selected('https://schema.org/EUEnergyEfficiencyCategoryF', $seopress_pro_rich_snippets_product_energy_consumption); ?>
				value="https://schema.org/EUEnergyEfficiencyCategoryF"><?php esc_html_e('F', 'webseo'); ?>
			</option>
			<option <?php selected('https://schema.org/EUEnergyEfficiencyCategoryG', $seopress_pro_rich_snippets_product_energy_consumption); ?>
				value="https://schema.org/EUEnergyEfficiencyCategoryG"><?php esc_html_e('G', 'webseo'); ?>
			</option>
		</select>
	</p>

	<p>
		<label for="seopress_pro_rich_snippets_product_positive_notes">
			<?php esc_html_e('Positive notes', 'webseo'); ?>
		</label>
	</p>
	<div id="wrap-positive-notes" data-count="<?php echo count($seopress_pro_rich_snippets_product_positive_notes); ?>">


		<?php foreach ($seopress_pro_rich_snippets_product_positive_notes as $key => $value) {
				$name = isset($value['name']) ? $value['name'] : null;
				?>
			<div class="positive_notes">
				<h3 class="accordion-section-title" tabindex="0">
					<?php if (empty($name)) { ?>
						<span style="color:red">
						<?php esc_html_e('Empty Statement', 'webseo'); ?>
						</span>
					<?php } else {
						echo esc_attr($name);
					}
					?>
				</h3>
				<div class="accordion-section-content">
					<div class="inside">
						<p>
							<label
								for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_positive_notes][<?php echo esc_attr($key); ?>][name]">
								<?php esc_html_e('Name (required)', 'webseo'); ?>
							</label>
							<input
								id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_positive_notes][<?php echo esc_attr($key); ?>][name]"
								type="text"
								name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_positive_notes][<?php echo esc_attr($key); ?>][name]"
								placeholder="<?php esc_html_e('Enter your name', 'webseo'); ?>"
								aria-label="<?php esc_html_e('Name', 'webseo'); ?>"
								value="<?php echo esc_attr($name); ?>" />
						</p>
						<p>
							<a href="#" class="remove-positive-note button">
								<?php esc_html_e('Remove statement', 'webseo'); ?>
							</a>
						</p>
					</div>
				</div>
			</div>
			<?php
		} ?>
	</div>
	<p>
		<a href="#" id="add-positive-note" class="add-positive-note <?php echo esc_attr(seopress_btn_secondary_classes()); ?>">
			<?php esc_html_e('Add statement', 'webseo'); ?>
		</a>
	</p>

	<template
		id="schema-template-positive-note">
		<div class="positive_notes">
			<h3 class="accordion-section-title" tabindex="0">
				<span style="color:red">
					<?php esc_html_e('Empty Statement', 'webseo'); ?>
				</span>
			</h3>
			<div class="accordion-section-content">
				<div class="inside">
					<p>
						<label
							for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_positive_notes][X][name]">
							<?php esc_html_e('Name (required)', 'webseo'); ?>
						</label>
						<input
							id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_positive_notes][X][name]"
							type="text"
							name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_positive_notes][X][name]"
							placeholder="<?php esc_html_e('Enter your name', 'webseo'); ?>"
							aria-label="<?php esc_html_e('Name', 'webseo'); ?>"
							value="" />
					</p>
					<p>
						<a href="#" class="remove-positive-note button">
							<?php esc_html_e('Remove statement', 'webseo'); ?>
						</a>
					</p>
				</div>
			</div>
		</div>
	</template>

	<p>
		<label for="seopress_pro_rich_snippets_product_negative_notes">
			<?php esc_html_e('Negative notes', 'webseo'); ?>
		</label>
	</p>
	<div id="wrap-negative-notes" data-count="<?php echo count($seopress_pro_rich_snippets_product_negative_notes); ?>">


		<?php foreach ($seopress_pro_rich_snippets_product_negative_notes as $key => $value) {
				$name = isset($value['name']) ? $value['name'] : null;
				?>
			<div class="negative_notes">
				<h3 class="accordion-section-title" tabindex="0">
					<?php if (empty($name)) { ?>
						<span style="color:red">
						<?php esc_html_e('Empty Statement', 'webseo'); ?>
						</span>
					<?php } else {
						echo esc_attr($name);
					}
					?>
				</h3>
				<div class="accordion-section-content">
					<div class="inside">
						<p>
							<label
								for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_negative_notes][<?php echo esc_attr($key); ?>][name]">
								<?php esc_html_e('Name (required)', 'webseo'); ?>
							</label>
							<input
								id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_negative_notes][<?php echo esc_attr($key); ?>][name]"
								type="text"
								name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_negative_notes][<?php echo esc_attr($key); ?>][name]"
								placeholder="<?php esc_html_e('Enter your name', 'webseo'); ?>"
								aria-label="<?php esc_html_e('Name', 'webseo'); ?>"
								value="<?php echo esc_attr($name); ?>" />
						</p>
						<p>
							<a href="#" class="remove-negative-note button">
								<?php esc_html_e('Remove statement', 'webseo'); ?>
							</a>
						</p>
					</div>
				</div>
			</div>
			<?php
		}

		?>
	</div>
	<p>
		<a href="#" id="add-negative-note" class="add-negative-note <?php echo esc_attr(seopress_btn_secondary_classes()); ?>">
			<?php esc_html_e('Add statement', 'webseo'); ?>
		</a>
	</p>

	<template
		id="schema-template-negative-note">
		<div class="negative_notes">
			<h3 class="accordion-section-title" tabindex="0">
				<span style="color:red">
					<?php esc_html_e('Empty Statement', 'webseo'); ?>
				</span>
			</h3>
			<div class="accordion-section-content">
				<div class="inside">
					<p>
						<label
							for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_negative_notes][X][name]">
							<?php esc_html_e('Name (required)', 'webseo'); ?>
						</label>
						<input
							id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_negative_notes][X][name]"
							type="text"
							name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_product_negative_notes][X][name]"
							placeholder="<?php esc_html_e('Enter your name', 'webseo'); ?>"
							aria-label="<?php esc_html_e('Name', 'webseo'); ?>"
							value="" />
					</p>
					<p>
						<a href="#" class="remove-negative-note button">
							<?php esc_html_e('Remove statement', 'webseo'); ?>
						</a>
					</p>
				</div>
			</div>
		</div>
	</template>
</div>
<?php
}
