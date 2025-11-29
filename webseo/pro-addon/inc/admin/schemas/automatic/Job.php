<?php

defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');

?>

<div class="wrap-rich-snippets-jobs">
	<div class="seopress-notice">
		<p>
			<?php
				/* translators: %s: link documentation */
				echo wp_kses_post(sprintf(__('Learn more about the <strong>Job Posting schema</strong> from the <a href="%s" target="_blank">Google official documentation website</a>', 'webseo'), 'https://developers.google.com/search/docs/data-types/job-posting'));
			?>
            <span class="dashicons dashicons-external"></span>
		</p>
	</div>
	<p>
		<label for="seopress_pro_rich_snippets_jobs_name_meta">
			<?php esc_html_e('Job title', 'webseo'); ?>
			<code>title</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_name', 'default'); ?>
		<span class="description"><?php esc_html_e('Job title', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_jobs_desc_meta">
			<?php esc_html_e('Job description', 'webseo'); ?>
			<code>description</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_desc', 'default'); ?>
		<span class="description"><?php esc_html_e('Job description', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_jobs_date_posted_meta">
			<?php esc_html_e('Published date', 'webseo'); ?>
			<code>datePosted</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_date_posted', 'date'); ?>
		<span class="description"><?php esc_html_e('The original date that employer posted the job in ISO 8601 format. For example, "2017-01-24" or "2017-01-24T19:33:17+00:00".', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_jobs_valid_through_meta">
			<?php esc_html_e('Expiration date', 'webseo'); ?>
			<code>validThrough</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_valid_through', 'date'); ?>
		<span class="description"><?php esc_html_e('The date when the job posting will expire in ISO 8601 format. For example, "2017-02-24" or "2017-02-24T19:33:17+00:00".', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_jobs_employment_type_meta">
			<?php esc_html_e('Type of employment', 'webseo'); ?>
			<code>employmentType</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_employment_type', 'default'); ?>
		<span class="description">
			<?php
				/* translators: do not translate authorized values, e.g. FULL_TIME  */
				esc_html_e('Type of employment, You can include more than one employmentType property. Authorized values: "FULL_TIME", "PART_TIME", "CONTRACTOR", "TEMPORARY", "INTERN", "VOLUNTEER", "PER_DIEM", "OTHER"', 'webseo');
			?>
		</span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_jobs_identifier_name_meta"><?php esc_html_e('Identifier name', 'webseo'); ?>
			<code>identifierName</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_identifier_name', 'default'); ?>
		<span class="description"><?php esc_html_e('The hiring organization\'s unique identifier name for the job', 'webseo'); ?></span>
	</p>

	<p>
		<label for="seopress_pro_rich_snippets_jobs_identifier_value_meta"><?php esc_html_e('Identifier value', 'webseo'); ?>
			<code>identifierValue</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_identifier_value', 'default'); ?>
		<span class="description"><?php esc_html_e('The hiring organization\'s value identifier value for the job', 'webseo'); ?></span>
	</p>
	
	<hr>
	
	<h3><?php esc_html_e('Hiring Organization', 'webseo'); ?></h3>

	<p>
		<label for="seopress_pro_rich_snippets_jobs_hiring_organization_meta"><?php esc_html_e('Organization that hires', 'webseo'); ?>
			<code>hiringOrganization</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_hiring_organization', 'default'); ?>
		<span class="description"><?php esc_html_e('The organization offering the job position. This should be the name of the company.', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_jobs_hiring_same_as_meta"><?php esc_html_e('Organization website', 'webseo'); ?>
			<code>hiringSameAs</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_hiring_same_as', 'default'); ?>
		<span class="description"><?php esc_html_e('Enter the URL like https://example.com/', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_jobs_hiring_logo_meta"><?php esc_html_e('Image', 'webseo'); ?>
			<code>hiringLogo</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_hiring_logo', 'image'); ?>
		<span class="description"><?php esc_html_e('Default: Logo from your Knowledge Graph (SEO > Social Networks > Knowledge Graph)', 'webseo'); ?></span>
	</p>
	
	<hr>

	<p>
		<label for="seopress_pro_rich_snippets_jobs_address_street_meta"><?php esc_html_e('Street address', 'webseo'); ?>
			<code>addressStreet</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_address_street', 'default'); ?>
		<span class="description"><?php esc_html_e('Street address', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_jobs_address_locality_meta"><?php esc_html_e('Locality address', 'webseo'); ?>
			<code>addressLocality</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_address_locality', 'default'); ?>
		<span class="description"><?php esc_html_e('Locality address', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_jobs_address_region_meta"><?php esc_html_e('Region', 'webseo'); ?>
			<code>addressRegion</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_address_region', 'default'); ?>
		<span class="description"><?php esc_html_e('Region', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_jobs_postal_code_meta"><?php esc_html_e('Postal code', 'webseo'); ?>
			<code>postalCode</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_postal_code', 'default'); ?>
		<span class="description"><?php esc_html_e('Postal code', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_jobs_country_meta"><?php esc_html_e('Country', 'webseo'); ?>
			<code>addressCountry</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_country', 'default'); ?>
		<span class="description"><?php esc_html_e('Country', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_jobs_remote_meta"><?php esc_html_e('Remote job?', 'webseo'); ?>
			<code>remote</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_remote', 'default'); ?>
		<span class="description">
			<?php esc_html_e('If a value exists (e.g. "yes"), the job offer will be marked as fully remote. Don\'t mark up jobs that allow occasional work-from-home, jobs for which remote work is a negotiable benefit, or have other arrangements that are not 100% remote. The "gig economy" nature of a job doesn\'t imply that it is or is not remote.', 'webseo'); ?>
		</span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_jobs_location_requirement_meta"><?php esc_html_e('Location requirement for remote job', 'webseo'); ?>
			<code>applicantLocationRequirements</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_location_requirement', 'default'); ?>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_jobs_direct_apply_meta"><?php esc_html_e('Direct apply?', 'webseo'); ?>
			<code>direct_apply</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_direct_apply', 'default'); ?>
		<span class="description">
			<?php
			/* translators: do not translate expected values, true / false  */
			esc_html_e('Indicates whether the URL that\'s associated with this job posting enables direct application for the job. Expected value: "true" or "false".', 'webseo'); ?>
		</span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_jobs_salary_meta"><?php esc_html_e('Salary', 'webseo'); ?>
			<code>salary</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_salary', 'default'); ?>
		<span class="description"><?php esc_html_e('e.g. 50.00', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_jobs_salary_currency_meta"><?php esc_html_e('Currency', 'webseo'); ?>
			<code>salaryCurrency</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_salary_currency', 'default'); ?>
		<span class="description"><?php esc_html_e('e.g. USD', 'webseo'); ?></span>
	</p>
	<p>
		<label for="seopress_pro_rich_snippets_jobs_salary_unit_meta"><?php esc_html_e('Select your unit text', 'webseo'); ?>
			<code>salaryUnit</code>
		</label>
		<?php echo seopress_schemas_mapping_array('seopress_pro_rich_snippets_jobs_salary_unit', 'default'); ?>
		<span class="description"><?php esc_html_e('Authorized values: "HOUR", "DAY", "WEEK", "MONTH", "YEAR"', 'webseo'); ?></span>
	</p>
</div>
