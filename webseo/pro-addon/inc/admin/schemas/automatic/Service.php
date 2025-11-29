<?php
defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');
?>

<div class="wrap-rich-snippets-services">
	<div class="seopress-notice is-warning">
		<p>
			<?php
				/* translators: %s: link documentation */
				echo wp_kses_post(__('We invite webmasters to stop using the <strong>Service schema</strong> as it is deprecated. Please use the <strong>LocalBusiness schema</strong> instead.', 'webseo'));
			?>
			<span class="dashicons dashicons-external"></span>
		</p>
	</div>

	<p>
		<label for="seopress_pro_rich_snippets_service_name_meta">
			<?php esc_html_e('Service name', 'webseo'); ?>
			<code>name</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_service_name', 'default'); ?>
		<span
			class="description"><?php esc_html_e('The name of your service', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_service_type_meta">
			<?php esc_html_e('Service type', 'webseo'); ?>
			<code>serviceType</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_service_type', 'default'); ?>
		<span
			class="description"><?php esc_html_e('The type of service', 'webseo'); ?></span>
	</p>
	<p>
		<label
			for="seopress_pro_rich_snippets_service_description_meta"><?php esc_html_e('Service description', 'webseo'); ?>
			<code>description</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_service_description', 'default'); ?>
		<span
			class="description"><?php esc_html_e('The description of your service', 'webseo'); ?></span>
	</p>
	<p>
		<label
			for="seopress_pro_rich_snippets_service_img_meta"><?php esc_html_e('Image', 'webseo'); ?>
			<code>image</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_service_img', 'image'); ?>
	</p>
	<p>
		<label
			for="seopress_pro_rich_snippets_service_area_meta"><?php esc_html_e('Area served', 'webseo'); ?>
			<code>areaServed</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_service_area', 'default'); ?>
		<span
			class="description"><?php esc_html_e('The area served by your service', 'webseo'); ?></span>
	</p>
	<p>
		<label
			for="seopress_pro_rich_snippets_service_provider_name_meta"><?php esc_html_e('Provider name', 'webseo'); ?>
			<code>providerName</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_service_provider_name', 'default'); ?>
		<span
			class="description"><?php esc_html_e('The provider name of your service', 'webseo'); ?></span>
	</p>
	<p>
		<label
			for="seopress_pro_rich_snippets_service_lb_img_meta"><?php esc_html_e('Location image', 'webseo'); ?>
			<code>localBusinessImage</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_service_lb_img', 'image'); ?>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_service_provider_mobility_meta">
			<?php esc_html_e('Provider mobility (static or dynamic)', 'webseo'); ?>
			<code>providerMobility</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_service_provider_mobility', 'default'); ?>
		<span
			class="description"><?php esc_html_e('The provider mobility of your service', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_service_slogan_meta">
			<?php esc_html_e('Slogan', 'webseo'); ?>
			<code>slogan</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_service_slogan', 'default'); ?>
		<span
			class="description"><?php esc_html_e('The slogan of your service', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_service_street_addr_meta">
			<?php esc_html_e('Street Address', 'webseo'); ?>
			<code>streetAddress</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_service_street_addr', 'default'); ?>
		<span
			class="description"><?php esc_html_e('The street address of your service', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_service_city_meta">
			<?php esc_html_e('City', 'webseo'); ?>
			<code>addressLocality</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_service_city', 'default'); ?>
		<span
			class="description"><?php esc_html_e('The city of your service', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_service_state_meta">
			<?php esc_html_e('State', 'webseo'); ?>
			<code>addressRegion</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_service_state', 'default'); ?>
		<span
			class="description"><?php esc_html_e('The state of your service', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_service_pc_meta">
			<?php esc_html_e('Postal code', 'webseo'); ?>
			<code>postalCode</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_service_pc', 'default'); ?>
		<span
			class="description"><?php esc_html_e('The postal code of your service', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_service_country_meta">
			<?php esc_html_e('Country', 'webseo'); ?>
			<code>addressCountry</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_service_country', 'default'); ?>
		<span
			class="description"><?php esc_html_e('The country of your service (ISO format)', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_service_lat_meta">
			<?php esc_html_e('Latitude', 'webseo'); ?>
			<code>latitude</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_service_lat', 'default'); ?>
		<span
			class="description"><?php esc_html_e('The latitude of your service', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_service_lon_meta">
			<?php esc_html_e('Longitude', 'webseo'); ?>
			<code>longitude</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_service_lon', 'default'); ?>
		<span
			class="description"><?php esc_html_e('The longitude of your service', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_service_tel_meta">
			<?php esc_html_e('Telephone', 'webseo'); ?>
			<code>telephone</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_service_tel', 'default'); ?>
		<span
			class="description"><?php esc_html_e('The telephone of your service (international format)', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_service_price_meta">
			<?php esc_html_e('Price range', 'webseo'); ?>
			<code>priceRange</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_service_price', 'default'); ?>
		<span
			class="description"><?php esc_html_e('The price range of your service', 'webseo'); ?></span>
	</p>
</div>
