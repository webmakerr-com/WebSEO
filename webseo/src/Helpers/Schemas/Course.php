<?php

namespace WebSEO\Helpers\Schemas;

defined( 'ABSPATH' ) or exit( 'Cheatin&#8217; uh?' );

abstract class Course {
	public static function getCategories() {
		return apply_filters(
			'seopress_get_options_schema_course_categories',
			[
				[
					'value' => 'none',
					'label' => __( 'Select a category', 'webseo' ),
				],
				[
					'value' => 'Free',
					'label' => __( 'Free', 'webseo' ),
				],
				[
					'value' => 'Partially Free',
					'label' => __( 'Partially free', 'webseo' ),
				],
				[
					'value' => 'Subscription',
					'label' => __( 'Subscription', 'webseo' ),
				],
				[
					'value' => 'Paid',
					'label' => __( 'Paid', 'webseo' ),
				],
			]
		);
	}

	public static function getCourseModes() {
		return apply_filters(
			'seopress_get_options_schema_course_course_modes',
			[
				[
					'value' => 'none',
					'label' => __( 'Select a category', 'webseo' ),
				],
				[
					'value' => 'Onsite',
					'label' => __( 'Onsite', 'webseo' ),
				],
				[
					'value' => 'Online',
					'label' => __( 'Online', 'webseo' ),
				],
			]
		);
	}

	public static function getRepeatFrequencies() {
		return apply_filters(
			'seopress_get_options_schema_course_repeat_frequencies',
			[
				[
					'value' => 'none',
					'label' => __( 'Select a category', 'webseo' ),
				],
				[
					'value' => 'Daily',
					'label' => __( 'Daily', 'webseo' ),
				],
				[
					'value' => 'Weekly',
					'label' => __( 'Weekly', 'webseo' ),
				],
				[
					'value' => 'Monthly',
					'label' => __( 'Monthly', 'webseo' ),
				],
				[
					'value' => 'Yearly',
					'label' => __( 'Yearly', 'webseo' ),
				],
			]
		);
	}
}
