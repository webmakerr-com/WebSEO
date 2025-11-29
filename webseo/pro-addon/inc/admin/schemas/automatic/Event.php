<?php

defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');

?>

<div class="wrap-rich-snippets-events">
	<div class="seopress-notice">
		<p>
			<?php
				/* translators: %s: link documentation */
				echo wp_kses_post(sprintf(__('Learn more about the <strong>Events schema</strong> from the <a href="%s" target="_blank">Google official documentation website</a>', 'webseo'), 'https://developers.google.com/search/docs/data-types/event'));
			?>
            <span class="dashicons dashicons-external"></span>
		</p>
	</div>
	<p>
		<label for="seopress_pro_rich_snippets_events_type_meta">
			<?php esc_html_e('Select your event type', 'webseo'); ?>
			<code>eventType</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_type', ['default', 'events']); ?>
		<span class="description"><?php echo wp_kses_post(__('<strong>Authorized values:</strong> "BusinessEvent", "ChildrensEvent", "ComedyEvent", "CourseInstance", "DanceEvent", "DeliveryEvent", "EducationEvent", "ExhibitionEvent", "Festival", "FoodEvent", "LiteraryEvent", "MusicEvent", "PublicationEvent", "SaleEvent", "ScreeningEvent", "SocialEvent", "SportsEvent", "TheaterEvent", "VisualArtsEvent"', 'webseo')); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_name_meta">
			<?php esc_html_e('Event name', 'webseo'); ?>
			<code>name</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_name', ['default', 'events']); ?>
		<span class="description"><?php esc_html_e('The name of your event', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_desc_meta">
			<?php esc_html_e('Event description (default excerpt, or beginning of the content)', 'webseo'); ?>
			<code>description</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_desc', ['default', 'events']); ?>
		<span class="description"><?php esc_html_e('Enter your event description', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_img_meta">
			<?php esc_html_e('Image thumbnail', 'webseo'); ?>
			<code>image</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_img', ['image', 'events']); ?>
		<span class="description"><?php esc_html_e('Minimum width: 720px - Recommended size: 1920px -  .jpg, .png, or. gif format - crawlable and indexable', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_start_date_meta">
			<?php esc_html_e('Start date', 'webseo'); ?>
			<code>startDate</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_start_date', ['date', 'events']); ?>
		<span class="description"><?php esc_html_e('e.g. YYYY-MM-DD', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_start_date_timezone_meta">
			<?php esc_html_e('Timezone start date', 'webseo'); ?>
			<code>startDateTimezone</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_start_date_timezone', ['default', 'events']); ?>
		<span class="description"><?php esc_html_e('e.g. -4:00', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_start_time_meta">
			<?php esc_html_e('Start time', 'webseo'); ?>
			<code>startTime</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_start_time', ['time', 'events']); ?>
		<span class="description"><?php esc_html_e('e.g. HH:MM', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_end_date_meta">
			<?php esc_html_e('End date', 'webseo'); ?>
			<code>endDate</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_end_date', ['date', 'events']); ?>
		<span class="description"><?php esc_html_e('e.g. YYYY-MM-DD', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_end_time_meta">
			<?php esc_html_e('End time', 'webseo'); ?>
			<code>endTime</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_end_time', ['time', 'events']); ?>
		<span class="description"><?php esc_html_e('e.g. HH:MM', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_previous_start_date_meta">
			<?php esc_html_e('Previous Start date', 'webseo'); ?>
			<code>previousStartDate</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_previous_start_date', ['date', 'events']); ?>
		<span class="description"><?php esc_html_e('e.g. YYYY-MM-DD', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_previous_start_time_meta">
			<?php esc_html_e('Previous Start time', 'webseo'); ?>
			<code>previousStartTime</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_previous_start_time', ['time', 'events']); ?>
		<span class="description"><?php esc_html_e('e.g. HH:MM', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_location_name_meta">
			<?php esc_html_e('Location name', 'webseo'); ?>
			<code>locationName</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_location_name', ['default', 'events']); ?>
		<span class="description"><?php esc_html_e('e.g. My Local Business name', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_location_url_meta">
			<?php esc_html_e('Event website', 'webseo'); ?>
			<code>url</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_location_url', ['default', 'events']); ?>
		<span class="description"><?php esc_html_e('e.g. https://www.example.com', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_location_address_meta">
			<?php esc_html_e('Location Address', 'webseo'); ?>
			<code>locationAddress</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_location_address', ['default', 'events']); ?>
		<span class="description"><?php esc_html_e('e.g. 1 Avenue de l\'Imperatrice, 64200 Biarritz', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_offers_name_meta">
			<?php esc_html_e('Offer name', 'webseo'); ?>
			<code>offersName</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_offers_name', ['default', 'events']); ?>
		<span class="description"><?php esc_html_e('e.g. General admission', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_offers_cat_meta">
			<?php esc_html_e('Select your offer category', 'webseo'); ?>
			<code>offersCat</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_offers_cat', ['default', 'events']); ?>
		<span class="description"><?php echo wp_kses_post(__('<strong>Authorized values: </strong>"Primary", "Secondary", "Presale", "Premium"', 'webseo')); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_offers_price_meta">
			<?php esc_html_e('Price', 'webseo'); ?>
			<code>offersPrice</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_offers_price', ['default', 'events']); ?>
		<span class="description"><?php esc_html_e('e.g. 10', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_offers_price_currency_meta">
			<?php esc_html_e('Select your currency', 'webseo'); ?>
			<code>offersPriceCurrency</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_offers_price_currency', ['default', 'events']); ?>
		<span class="description"><?php esc_html_e('e.g. USD, EUR...', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_offers_availability_meta">
			<?php esc_html_e('Availability', 'webseo'); ?>
			<code>offersAvailability</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_offers_availability', ['default', 'events']); ?>
		<span class="description"><?php esc_html_e('e.g. InStock, SoldOut, PreOrder', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_rich_snippets_events_offers_valid_from_meta_date">
			<?php esc_html_e('Valid From', 'webseo'); ?>
			<code>offersValidFromDate</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_offers_valid_from_date', ['date', 'events']); ?>
		<span class="description"><?php esc_html_e('The date when tickets go on sale', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_rich_snippets_events_offers_valid_from_meta_time">
			<?php esc_html_e('Time', 'webseo'); ?>
			<code>offersValidFromTime</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_offers_valid_from_time', ['time', 'events']); ?>
		<span class="description"><?php esc_html_e('The time when tickets go on sale', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_offers_url_meta">
			<?php esc_html_e('Website to buy tickets', 'webseo'); ?>
			<code>offersUrl</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_offers_url', ['default', 'events']); ?>
		<span class="description"><?php esc_html_e('e.g. https://www.example.com', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_performer_meta">
			<?php esc_html_e('Performer name', 'webseo'); ?>
			<code>performer</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_performer', ['default', 'events']); ?>
		<span class="description"><?php esc_html_e('e.g. Lana Del Rey', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_organizer_name_meta">
			<?php esc_html_e('Organizer name', 'webseo'); ?>
			<code>organizerName</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_organizer_name', ['default', 'events']); ?>
		<span class="description"><?php esc_html_e('e.g. Apple', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_organizer_url_meta">
			<?php esc_html_e('Organizer URL', 'webseo'); ?>
			<code>organizerUrl</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_organizer_url', ['default', 'events']); ?>
		<span class="description"><?php esc_html_e('e.g. https://www.example.com', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_status_meta">
			<?php esc_html_e('Event status', 'webseo'); ?>
			<code>status</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_status', ['default', 'events']); ?>
		<span class="description"><?php echo wp_kses_post(__('<strong>Authorized values:</strong> "EventCancelled", "EventMovedOnline", "EventPostponed", "EventRescheduled", "EventScheduled"', 'webseo')); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_events_attendance_mode_meta">
			<?php esc_html_e('Event attendance mode', 'webseo'); ?>
			<code>attendanceMode</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_events_attendance_mode', ['default', 'events']); ?>
		<span class="description"><?php echo wp_kses_post(__('<strong>Authorized values:</strong> "OfflineEventAttendanceMode", "OnlineEventAttendanceMode", "MixedEventAttendanceMode"', 'webseo')); ?></span>
	</p>
</div>
