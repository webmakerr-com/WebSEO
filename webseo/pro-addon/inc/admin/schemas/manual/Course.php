<?php

defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');

function seopress_get_schema_metaboxe_course($seopress_pro_rich_snippets_data, $key_schema = 0) {
	$seopress_pro_rich_snippets_courses_title      = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_courses_title']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_courses_title'] : '';
	$seopress_pro_rich_snippets_courses_desc       = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_courses_desc']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_courses_desc'] : '';
	$seopress_pro_rich_snippets_courses_school     = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_courses_school']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_courses_school'] : '';
	$seopress_pro_rich_snippets_courses_website    = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_courses_website']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_courses_website'] : '';
	$seopress_pro_rich_snippets_courses_offers     = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_courses_offers']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_courses_offers'] : '';
	$seopress_pro_rich_snippets_courses_instances  = isset($seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_courses_instances']) ? $seopress_pro_rich_snippets_data['_seopress_pro_rich_snippets_courses_instances'] : '';
?>
<div class="wrap-rich-snippets-item wrap-rich-snippets-courses">
	<div class="seopress-notice">
		<p>
			<?php esc_html_e('Mark up your course lists with structured data so prospective students find you through Google Search.', 'webseo'); ?>
		</p>
	</div>
	<div class="seopress-notice is-warning">
		<ul class="seopress-list advice">
			<li><?php esc_html_e('Only use course markup for educational content that fits the following definition of a course: A series or unit of curriculum that contains lectures, lessons, or modules in a particular subject and/or topic.', 'webseo'); ?>
			</li>
			<li><?php esc_html_e('A course must have an explicit educational outcome of knowledge and/or skill in a particular subject and/or topic, and be led by one or more instructors with a roster of students.', 'webseo'); ?>
			</li>
			<li><?php esc_html_e('A general public event such as "Astronomy Day" is not a course, and a single 2-minute "How to make a Sandwich Video" is not a course.', 'webseo'); ?>
			</li>
		</ul>
	</div>
	<p>
		<label for="seopress_pro_rich_snippets_courses_title_meta">
			<?php esc_html_e('Title', 'webseo'); ?>
		</label>
		<input type="text" id="seopress_pro_rich_snippets_courses_title_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_title]"
			placeholder="<?php esc_html_e('The title of your lesson, course...', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Title', 'webseo'); ?>"
			value="<?php echo esc_html($seopress_pro_rich_snippets_courses_title); ?>" />
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_courses_desc">
			<?php esc_html_e('Course description', 'webseo'); ?>
		</label>
		<textarea id="seopress_pro_rich_snippets_courses_desc" class="seopress_pro_rich_snippets_courses_desc"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_desc]"
			placeholder="<?php esc_html_e('Enter your course/lesson description', 'webseo'); ?>"
			aria-label="<?php esc_html_e('Course description', 'webseo'); ?>"><?php echo esc_html($seopress_pro_rich_snippets_courses_desc); ?></textarea>
		<div class="wrap-seopress-counters">
			<div class="seopress_rich_snippets_courses_counters"></div>
			<?php esc_html_e('(maximum limit)', 'webseo'); ?>
		</div>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_courses_school_meta">
			<?php esc_html_e('School/Organization', 'webseo'); ?>
		</label>
		<input type="text" id="seopress_pro_rich_snippets_courses_school_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_school]"
			placeholder="<?php esc_html_e('Name of university, organization...', 'webseo'); ?>"
			aria-label="<?php esc_html_e('School/Organization', 'webseo'); ?>"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_courses_school); ?>" />
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_courses_website_meta">
			<?php esc_html_e('School/Organization Website', 'webseo'); ?>
		</label>
		<input type="text" id="seopress_pro_rich_snippets_courses_website_meta"
			name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_website]"
			placeholder="<?php esc_html_e('Enter the URL like https://example.com/', 'webseo'); ?>"
			aria-label="<?php esc_html_e('School/Organization Website', 'webseo'); ?>"
			value="<?php echo esc_attr($seopress_pro_rich_snippets_courses_website); ?>" />
	</p>
	<?php
		if( empty( $seopress_pro_rich_snippets_courses_offers ) ){
			$seopress_pro_rich_snippets_courses_offers = [
				[
					'category' => '',
					'currency' => '',
					'price' => '',
				],
			];
		}
	?>
	<div id="wrap-offers" data-count="<?php echo count($seopress_pro_rich_snippets_courses_offers);?>">
		<p><strong><?php esc_html_e( 'List of offers', 'webseo' ); ?></strong></p>
		<?php
			$categories = [
				'Free'         => __('Free', 'webseo'),
				'Partially Free' => __('Partially free', 'webseo'),
				'Subscription' => __('Subscription', 'webseo'),
				'Paid'         => __('Paid', 'webseo'),
			];
			foreach ( $seopress_pro_rich_snippets_courses_offers as $index => $offer ) :
				$category = isset($offer['category']) && array_key_exists($offer['category'], $categories) ? sanitize_text_field( $offer['category']) : null;
				$currency = isset($offer['priceCurrency']) ? sanitize_text_field($offer['priceCurrency']) : null;
				$price    = isset($offer['price']) ? sanitize_text_field($offer['price']) : null;
			?>
				<div class="offer">
					<h3 class="accordion-section-title" tabindex="0">
						<?php printf(/* translators: %d offer number */ esc_html__( 'Offer %d', 'webseo' ), (int) $index +1 ); ?>
					</h3>
					<div class="accordion-section-content">
						<div class="inside">
							<p>
								<label for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_offers][<?php echo esc_attr($index); ?>][category]">
									<?php esc_html_e('Category (required)', 'webseo'); ?>
								</label>
								<select
									id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_offers][<?php echo esc_attr($index); ?>][category]"
									name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_offers][<?php echo esc_attr($index); ?>][category]"
								>
									<?php foreach ($categories as $value => $label) : $selected = selected( $category, $value, false ) ?>
										<option value="<?php echo esc_attr($value);?>" <?php echo esc_attr($selected); ?>><?php echo esc_html($label); ?></option>
									<?php endforeach; ?>
								</select>
							</p>
							<p>
								<label for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_offers][<?php echo esc_attr($index); ?>][priceCurrency]">
									<?php esc_html_e('Price currency', 'webseo'); ?>
								</label>
								<input
									id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_offers][<?php echo esc_attr($index); ?>][priceCurrency]"
									type="text"
									name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_offers][<?php echo esc_attr($index); ?>][priceCurrency]"
									placeholder="<?php esc_html_e('EUR', 'webseo'); ?>"
									aria-label="<?php esc_html_e('Currency', 'webseo'); ?>"
									value="<?php echo esc_attr($currency); ?>" />
							</p>
							<p>
								<label for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_offers][<?php echo esc_attr($index); ?>][price]">
									<?php esc_html_e('Price', 'webseo'); ?>
								</label>
								<input
									id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_offers][<?php echo esc_attr($index); ?>][price]"
									type="text"
									name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_offers][<?php echo esc_attr($index); ?>][price]"
									placeholder="<?php esc_html_e('Enter your price', 'webseo'); ?>"
									aria-label="<?php esc_html_e('Price', 'webseo'); ?>"
									value="<?php echo esc_attr($price); ?>" />
							</p>

							<p>
								<a href="#" class="remove-offer button">
									<?php esc_html_e('Remove offer', 'webseo'); ?>
								</a>
							</p>
						</div>
					</div>
				</div>
			<?php endforeach;
		?>
	</div>

	<p>
		<a href="#" id="add-offer" class="add-offer <?php echo esc_attr(seopress_btn_secondary_classes()); ?>">
			<?php esc_html_e('Add offer', 'webseo'); ?>
		</a>
	</p>

	<?php
		if( empty( $seopress_pro_rich_snippets_courses_instances ) ){
			$seopress_pro_rich_snippets_courses_instances = [
				[
					'courseMode' => '',
					'location' => '',
					'courseSchedule' => [],
					'instructor' => [],
				],
			];
		}
	?>
	<div id="wrap-instances" data-count="<?php echo count($seopress_pro_rich_snippets_courses_instances);?>">
		<p><strong><?php esc_html_e( 'List of course instances', 'webseo' ); ?></strong></p>
		<?php
			$courseModes = [
				'Onsite' => __('Onsite', 'webseo'),
				'Online' => __('Online', 'webseo'),
			];
			$repeatFrequencies = [
				'Daily' => __('Daily', 'webseo'),
				'Weekly' => __('Weekly', 'webseo'),
				'Monthly' => __('Monthly', 'webseo'),
				'Yearly' => __('Yearly', 'webseo'),
			];
			foreach ( $seopress_pro_rich_snippets_courses_instances as $index => $instance ) :
				$courseMode  = isset($instance['courseMode']) && array_key_exists($instance['courseMode'], $courseModes) ? $instance['courseMode'] : null;
				$location    = isset($instance['location']) ? sanitize_text_field($instance['location']) : null;
				$duration    = isset($instance['duration']) ? sanitize_text_field($instance['duration']) : null;
				$repeatCount     = isset($instance['repeatCount']) ? (int) $instance['repeatCount'] : null;
				$repeatFrequency = isset( $instance['repeatFrequency'] ) && array_key_exists($instance['repeatFrequency'], $repeatFrequencies) ? $instance['repeatFrequency'] : null;
				$startDate   = isset($instance['startDate']) ? sanitize_text_field($instance['startDate']) : null;
				$endDate     = isset($instance['endDate']) ? sanitize_text_field($instance['endDate']) : null;
			?>
				<div class="instance">
					<h3 class="accordion-section-title" tabindex="0">
						<?php printf(/* translators: %d course instance number */ esc_html__( 'Course Instance %d', 'webseo' ), (int) $index +1); ?>
					</h3>
					<div class="accordion-section-content">
						<div class="inside">
							<p>
								<label for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][courseMode]">
									<?php esc_html_e('Course Mode', 'webseo'); ?>
								</label>
								<select
									id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][courseMode]"
									name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][courseMode]"
								>
									<?php foreach ($courseModes as $value => $label) : $selected = selected( $courseMode, $value, false ) ?>
										<option value="<?php echo esc_attr($value);?>" <?php echo esc_attr($selected); ?>><?php echo esc_html($label); ?></option>
									<?php endforeach; ?>
								</select>
							</p>
							<p>
								<label for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][location]">
									<?php esc_html_e('Location', 'webseo'); ?>
								</label>
								<input
									id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][location]"
									type="text"
									name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][location]"
									placeholder="<?php esc_html_e('123 Fake street, Fakecity', 'webseo'); ?>"
									value="<?php echo esc_attr($location); ?>" />
							</p>
							<p>
								<label for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][duration]">
									<?php esc_html_e('Duration (hours)', 'webseo'); ?>
								</label>
								<input
									id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][duration]"
									type="number"
									name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][duration]"
									placeholder="3"
									value="<?php echo esc_attr($duration); ?>" />
							</p>
							<p>
								<label for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][repeatCount]">
									<?php esc_html_e('Repeat count', 'webseo'); ?>
								</label>
								<input
									id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][repeatCount]"
									type="number"
									name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][repeatCount]"
									placeholder="3"
									value="<?php echo esc_attr($repeatCount); ?>" />
							</p>
							<p>
								<label for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][repeatFrequency]">
									<?php esc_html_e('Repeat frequency', 'webseo'); ?>
								</label>
								<select
									id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][repeatFrequency]"
									name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][repeatFrequency]"
								>
									<?php foreach ($repeatFrequencies as $value => $label) : $selected = selected( $repeatFrequency, $value, false ) ?>
										<option value="<?php echo esc_attr($value);?>" <?php echo esc_attr($selected); ?>><?php echo esc_html($label); ?></option>
									<?php endforeach; ?>
								</select>
							</p>
							<p>
								<label for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][startDate]">
									<?php esc_html_e('Start date', 'webseo'); ?>
								</label>
								<input
									id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][startDate]"
									type="date"
									name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][startDate]"
									value="<?php echo esc_attr($startDate); ?>" />
							</p>
							<p>
								<label for="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][endDate]">
									<?php esc_html_e('End date', 'webseo'); ?>
								</label>
								<input
									id="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][endDate]"
									type="date"
									name="seopress_pro_rich_snippets_data[<?php echo esc_attr($key_schema); ?>][seopress_pro_rich_snippets_courses_instances][<?php echo esc_attr($index); ?>][endDate]"
									placeholder="3"
									value="<?php echo esc_attr($endDate); ?>" />
							</p>

							<p>
								<a href="#" class="remove-instance button">
									<?php esc_html_e('Remove instance', 'webseo'); ?>
								</a>
							</p>
						</div>
					</div>
				</div>
			<?php endforeach;
		?>
	</div>
	<p>
		<a href="#" id="add-instance" class="add-instance <?php echo esc_attr(seopress_btn_secondary_classes()); ?>">
			<?php esc_html_e('Add course instance', 'webseo'); ?>
		</a>
	</p>
</div>
<?php
}
