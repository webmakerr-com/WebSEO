<?php
/**
 * WebSEO PRO functions.
 *
 * @package WebSEO
 * @subpackage Functions
 */

defined( 'ABSPATH' ) || exit( 'Please don&rsquo;t call the plugin directly. Thanks :)' );

use SEOPressPro\Core\Kernel;

/**
 * Get a service.
 *
 * @param string $service The service name.
 *
 * @return object
 */
function seopress_pro_get_service( $service ) {
	return Kernel::getContainer()->getServiceByName( $service );
}

/**
 * Enable Google Suggestions
 *
 * @param boolean true Whether to enable Google Suggestions.
 *
 * @return boolean
 */
add_filter( 'seopress_ui_metabox_google_suggest', '__return_true' );

/**
 * Get Page Speed Mobile Score
 *
 * @since 5.3
 *
 * @return string
 * @param mixed $json The JSON data.
 * @param mixed $is_mobile Whether to get the score for mobile.
 */
function seopress_pro_get_ps_score( $json, $is_mobile = false ) {
	if ( ! is_array( $json ) ) {
		return;
	}
	if ( 'error' === array_key_first( $json ) ) {
		return;
	}

	$ps_score = $json['lighthouseResult']['categories']['performance']['score'] ? ( $json['lighthouseResult']['categories']['performance']['score'] ) * 100 : '';
	if ( true === $is_mobile ) {
		$i18n = __( 'Mobile', 'webseo' );
	} else {
		$i18n = __( 'Desktop', 'webseo' );
	}

	if ( $ps_score >= 0 && $ps_score < 49 ) {
		$class_score = 'red';
	} elseif ( $ps_score >= 50 && $ps_score < 90 ) {
		$class_score = 'yellow';
	} elseif ( $ps_score >= 90 && $ps_score <= 100 ) {
		$class_score = 'green';
	} else {
		$class_score = 'grey';
	}

	$perf_score = '<div class="wrap-chart">
	<p>' . $i18n . '</p>
		<div class="ps-score ' . $class_score . '">
			<svg role="img" aria-hidden="true" focusable="false" width="100%" height="100%" viewBox="0 0 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg">
				<path stroke-dasharray="100, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
				<path id="bar" stroke-dasharray="' . $ps_score . ', 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
			</svg>
			<span>' . $ps_score . '%</span>
		</div>
	</div>';

	return $perf_score;
}

/**
 * Get Core Web Vitals Score
 *
 * @return string
 * @param mixed $json The JSON data.
 */
function seopress_pro_get_cwv_score( $json ) {
	if ( array_key_first( $json ) === 'error' ) {
		return;
	}
	$core_web_vitals_score = false;

	if ( ! isset( $json['loadingExperience']['metrics'] ) ) {
		$core_web_vitals_score = null;
		return $core_web_vitals_score;
	}

	if (
		( isset( $json['loadingExperience']['metrics']['FIRST_INPUT_DELAY_MS']['category'] ) && 'FAST' === $json['loadingExperience']['metrics']['FIRST_INPUT_DELAY_MS']['category'] ) &&
			( isset( $json['loadingExperience']['metrics']['LARGEST_CONTENTFUL_PAINT_MS']['category'] ) && 'FAST' === $json['loadingExperience']['metrics']['LARGEST_CONTENTFUL_PAINT_MS']['category'] ) &&
			( isset( $json['loadingExperience']['metrics']['CUMULATIVE_LAYOUT_SHIFT_SCORE']['category'] ) && 'FAST' === $json['loadingExperience']['metrics']['CUMULATIVE_LAYOUT_SHIFT_SCORE']['category'] ) ) {
		$core_web_vitals_score = true;
	} elseif (
		( isset( $json['loadingExperience']['metrics']['LARGEST_CONTENTFUL_PAINT_MS']['category'] ) && 'FAST' === $json['loadingExperience']['metrics']['LARGEST_CONTENTFUL_PAINT_MS']['category'] ) &&
		( isset( $json['loadingExperience']['metrics']['CUMULATIVE_LAYOUT_SHIFT_SCORE']['category'] ) && 'FAST' === $json['loadingExperience']['metrics']['CUMULATIVE_LAYOUT_SHIFT_SCORE']['category'] )
	) {
		$core_web_vitals_score = true;
	}

	return $core_web_vitals_score;
}

/**
 * Get GA Dashboard widget role option
 *
 * @return string
 */
function seopress_advanced_security_ga_widget_role_option() {
	$service = seopress_get_service( 'AdvancedOption' );

	if ( ! empty( $service ) || ! method_exists( $service, 'getSecurityGaWidgetRole' ) ) {
		$data = get_option( 'seopress_advanced_option_name' );
		if ( isset( $data['seopress_advanced_security_ga_widget_role'] ) ) {
			return $data['seopress_advanced_security_ga_widget_role'];
		}
	}

	return $service->getSecurityGaWidgetRole();
}

/**
 * Check GA Dashboard widget capability
 *
 * @return boolean
 */
function seopress_advanced_security_ga_widget_check() {
	if ( empty( seopress_advanced_security_ga_widget_role_option() ) ) {
		$seopress_ga_dashboard_widget_cap = 'edit_dashboard';
		$seopress_ga_dashboard_widget_cap = apply_filters( 'seopress_ga_dashboard_widget_cap', $seopress_ga_dashboard_widget_cap );

		return current_user_can( $seopress_ga_dashboard_widget_cap );
	}

	global $wp_roles;

	// Get current user role.
	if ( ! isset( wp_get_current_user()->roles[0] ) ) {
		return;
	}
	$seopress_user_role = wp_get_current_user()->roles[0];

	if ( array_key_exists( $seopress_user_role, seopress_advanced_security_ga_widget_role_option() ) ) {
		return true;
	}

	return;
}

/**
 * Get Matomo Dashboard widget role option
 *
 * @return string
 */
function seopress_advanced_security_matomo_widget_role_option() {
	$service = seopress_get_service( 'AdvancedOption' );

	if ( ! empty( $service ) || ! method_exists( $service, 'getSecurityMatomoWidgetRole' ) ) {
		$data = get_option( 'seopress_advanced_option_name' );
		if ( isset( $data['seopress_advanced_security_matomo_widget_role'] ) ) {
			return $data['seopress_advanced_security_matomo_widget_role'];
		}
	}

	return $service->getSecurityMatomoWidgetRole();
}

/**
 * Check Matomo Dashboard widget capability
 *
 * @return boolean
 */
function seopress_advanced_security_matomo_widget_check() {
	if ( empty( seopress_advanced_security_matomo_widget_role_option() ) ) {
		$cap = 'edit_dashboard';
		$cap = apply_filters( 'seopress_matomo_dashboard_widget_cap', $cap );

		return current_user_can( $cap );
	}

	global $wp_roles;

	// Get current user role.
	if ( ! isset( wp_get_current_user()->roles[0] ) ) {
		return;
	}
	$seopress_user_role = wp_get_current_user()->roles[0];

	if ( array_key_exists( $seopress_user_role, seopress_advanced_security_matomo_widget_role_option() ) ) {
		return true;
	}

	return;
}

/**
 * Retrocompatibility for PHP < 8.0
 */
if ( ! function_exists( 'str_starts_with' ) ) {
	/**
	 * Check if a string starts with a given substring.
	 *
	 * @param string $haystack The string to search in.
	 * @param string $needle The substring to search for.
	 *
	 * @return boolean
	 */
	function str_starts_with( $haystack, $needle ) {
		return '' !== (string) $needle && 0 === strncmp( $haystack, $needle, strlen( $needle ) );
	}
}

/**
 * Get LB types list
 */
function seopress_lb_types_list() {
	$seopress_lb_types = array(
		'LocalBusiness'               => __( 'Local Business (default)', 'webseo' ),
		'AnimalShelter'               => __( 'Animal Shelter', 'wp-seo- son phpress-pro' ),
		'AutomotiveBusiness'          => __( 'Automotive Business', 'webseo' ),
		'AutoBodyShop'                => __( '|-Auto Body Shop', 'webseo' ),
		'AutoDealer'                  => __( '|-Auto Dealer', 'webseo' ),
		'AutoPartsStore'              => __( '|-Auto Parts Store', 'webseo' ),
		'AutoRental'                  => __( '|-Auto Rental', 'webseo' ),
		'AutoRepair'                  => __( '|-Auto Repair', 'webseo' ),
		'AutoWash'                    => __( '|-AutoWash', 'webseo' ),
		'GasStation'                  => __( '|-Gas Station', 'webseo' ),
		'MotorcycleDealer'            => __( '|-Motorcycle Dealer', 'webseo' ),
		'MotorcycleRepair'            => __( '|-Motorcycle Repair', 'webseo' ),
		'ChildCare'                   => __( 'Child Care', 'webseo' ),
		'DryCleaningOrLaundry'        => __( 'Dry Cleaning Or Laundry', 'webseo' ),
		'EmergencyService'            => __( 'Emergency Service', 'webseo' ),
		'FireStation'                 => __( '|-Fire Station', 'webseo' ),
		'Hospital'                    => __( '|-Hospital', 'webseo' ),
		'PoliceStation'               => __( '|-Police Station', 'webseo' ),
		'EmploymentAgency'            => __( 'Employment Agency', 'webseo' ),
		'EntertainmentBusiness'       => __( 'Entertainment Business', 'webseo' ),
		'AdultEntertainment'          => __( '|-Adult Entertainment', 'webseo' ),
		'AmusementPark'               => __( '|-Amusement Park', 'webseo' ),
		'ArtGallery'                  => __( '|-Art Gallery', 'webseo' ),
		'Casino'                      => __( '|-Casino', 'webseo' ),
		'ComedyClub'                  => __( '|-Comedy Club', 'webseo' ),
		'MovieTheater'                => __( '|-Movie Theater', 'webseo' ),
		'NightClub'                   => __( '|-Night Club', 'webseo' ),
		'FinancialService'            => __( 'Financial Service', 'webseo' ),
		'AccountingService'           => __( '|-Accounting Service', 'webseo' ),
		'AutomatedTeller'             => __( '|-Automated Teller', 'webseo' ),
		'BankOrCreditUnion'           => __( '|-Bank Or Credit Union', 'webseo' ),
		'InsuranceAgency'             => __( '|-Insurance Agency', 'webseo' ),
		'FoodEstablishment'           => __( 'Food Establishment', 'webseo' ),
		'Bakery'                      => __( '|-Bakery', 'webseo' ),
		'BarOrPub'                    => __( '|-Bar Or Pub', 'webseo' ),
		'Brewery'                     => __( '|-Brewery', 'webseo' ),
		'CafeOrCoffeeShop'            => __( '|-Cafe Or Coffee Shop', 'webseo' ),
		'FastFoodRestaurant'          => __( '|-Fast Food Restaurant', 'webseo' ),
		'IceCreamShop'                => __( '|-Ice Cream Shop', 'webseo' ),
		'Restaurant'                  => __( '|-Restaurant', 'webseo' ),
		'Winery'                      => __( '|-Winery', 'webseo' ),
		'GovernmentOffice'            => __( 'Government Office', 'webseo' ),
		'PostOffice'                  => __( '|-PostOffice', 'webseo' ),
		'HealthAndBeautyBusiness'     => __( 'Health And Beauty Business', 'webseo' ),
		'BeautySalon'                 => __( '|-Beauty Salon', 'webseo' ),
		'DaySpa'                      => __( '|-Day Spa', 'webseo' ),
		'HairSalon'                   => __( '|-Hair Salon', 'webseo' ),
		'HealthClub'                  => __( '|-Health Club', 'webseo' ),
		'NailSalon'                   => __( '|-Nail Salon', 'webseo' ),
		'TattooParlor'                => __( '|-Tattoo Parlor', 'webseo' ),
		'HomeAndConstructionBusiness' => __( 'Home And Construction Business', 'webseo' ),
		'Electrician'                 => __( '|-Electrician', 'webseo' ),
		'HVACBusiness'                => __( '|-HVAC Business', 'webseo' ),
		'HousePainter'                => __( '|-House Painter', 'webseo' ),
		'Locksmith'                   => __( '|-Locksmith', 'webseo' ),
		'MovingCompany'               => __( '|-Moving Company', 'webseo' ),
		'Plumber'                     => __( '|-Plumber', 'webseo' ),
		'RoofingContractor'           => __( '|-Roofing Contractor', 'webseo' ),
		'InternetCafe'                => __( 'Internet Cafe', 'webseo' ),
		'MedicalBusiness'             => __( 'Medical Business', 'webseo' ),
		'CommunityHealth'             => __( '|-Community Health', 'webseo' ),
		'Dentist'                     => __( '|-Dentist', 'webseo' ),
		'Dermatology'                 => __( '|-Dermatology', 'webseo' ),
		'DietNutrition'               => __( '|-Diet Nutrition', 'webseo' ),
		'Emergency'                   => __( '|-Emergency', 'webseo' ),
		'Gynecologic'                 => __( '|-Gynecologic', 'webseo' ),
		'MedicalClinic'               => __( '|-Medical Clinic', 'webseo' ),
		'Midwifery'                   => __( '|-Midwifery', 'webseo' ),
		'Nursing'                     => __( '|-Nursing', 'webseo' ),
		'Obstetric'                   => __( '|-Obstetric', 'webseo' ),
		'Oncologic'                   => __( '|-Oncologic', 'webseo' ),
		'Optician'                    => __( '|-Optician', 'webseo' ),
		'Optometric'                  => __( '|-Optometric', 'webseo' ),
		'Otolaryngologic'             => __( '|-Otolaryngologic', 'webseo' ),
		'Pediatric'                   => __( '|-Pediatric', 'webseo' ),
		'Pharmacy'                    => __( '|-Pharmacy', 'webseo' ),
		'Physician'                   => __( '|-Physician', 'webseo' ),
		'Physiotherapy'               => __( '|-Physiotherapy', 'webseo' ),
		'PlasticSurgery'              => __( '|-Plastic Surgery', 'webseo' ),
		'Podiatric'                   => __( '|-Podiatric', 'webseo' ),
		'PrimaryCare'                 => __( '|-Primary Care', 'webseo' ),
		'Psychiatric'                 => __( '|-Psychiatric', 'webseo' ),
		'PublicHealth'                => __( '|-Public Health', 'webseo' ),
		'VeterinaryCare'              => __( '|-Veterinary Care', 'webseo' ),
		'LegalService'                => __( 'Legal Service', 'webseo' ),
		'Attorney'                    => __( '|-Attorney', 'webseo' ),
		'Notary'                      => __( '|-Notary', 'webseo' ),
		'Library'                     => __( 'Library', 'webseo' ),
		'LodgingBusiness'             => __( 'Lodging Business', 'webseo' ),
		'BedAndBreakfast'             => __( '|-Bed And Breakfast', 'webseo' ),
		'Campground'                  => __( '|-Campground', 'webseo' ),
		'Hostel'                      => __( '|-Hostel', 'webseo' ),
		'Hotel'                       => __( '|-Hotel', 'webseo' ),
		'Motel'                       => __( '|-Motel', 'webseo' ),
		'Resort'                      => __( '|-Resort', 'webseo' ),
		'ProfessionalService'         => __( 'Professional Service', 'webseo' ),
		'RadioStation'                => __( 'Radio Station', 'webseo' ),
		'RealEstateAgent'             => __( 'Real Estate Agent', 'webseo' ),
		'RecyclingCenter'             => __( 'Recycling Center', 'webseo' ),
		'SelfStorage'                 => __( 'Real Self Storage', 'webseo' ),
		'ShoppingCenter'              => __( 'Shopping Center', 'webseo' ),
		'SportsActivityLocation'      => __( 'Sports Activity Location', 'webseo' ),
		'BowlingAlley'                => __( '|-Bowling Alley', 'webseo' ),
		'ExerciseGym'                 => __( '|-Exercise Gym', 'webseo' ),
		'GolfCourse'                  => __( '|-Golf Course', 'webseo' ),
		'HealthClub'                  => __( '|-Health Club', 'webseo' ), //phpcs:ignore
		'PublicSwimmingPool'          => __( '|-Public Swimming Pool', 'webseo' ),
		'SkiResort'                   => __( '|-Ski Resort', 'webseo' ),
		'SportsClub'                  => __( '|-Sports Club', 'webseo' ),
		'StadiumOrArena'              => __( '|-Stadium Or Arena', 'webseo' ),
		'TennisComplex'               => __( '|-Tennis Complex', 'webseo' ),
		'Store'                       => __( 'Store', 'webseo' ),
		'AutoPartsStore'              => __( '|-Auto Parts Store', 'webseo' ), //phpcs:ignore
		'BikeStore'                   => __( '|-Bike Store', 'webseo' ),
		'BookStore'                   => __( '|-Book Store', 'webseo' ),
		'ClothingStore'               => __( '|-Clothing Store', 'webseo' ),
		'ComputerStore'               => __( '|-Computer Store', 'webseo' ),
		'ConvenienceStore'            => __( '|-Convenience Store', 'webseo' ),
		'DepartmentStore'             => __( '|-Department Store', 'webseo' ),
		'ElectronicsStore'            => __( '|-Electronics Store', 'webseo' ),
		'Florist'                     => __( '|-Florist', 'webseo' ),
		'FurnitureStore'              => __( '|-Furniture Store', 'webseo' ),
		'GardenStore'                 => __( '|-Garden Store', 'webseo' ),
		'GroceryStore'                => __( '|-Grocery Store', 'webseo' ),
		'HardwareStore'               => __( '|-Hardware Store', 'webseo' ),
		'HobbyShop'                   => __( '|-Hobby Shop', 'webseo' ),
		'HomeGoodsStore'              => __( '|-Home Goods Store', 'webseo' ),
		'JewelryStore'                => __( '|-Jewelry Store', 'webseo' ),
		'LiquorStore'                 => __( '|-Liquor Store', 'webseo' ),
		'MensClothingStore'           => __( '|-Mens Clothing Store', 'webseo' ),
		'MobilePhoneStore'            => __( '|-Mobile Phone Store', 'webseo' ),
		'MovieRentalStore'            => __( '|-Movie Rental Store', 'webseo' ),
		'MusicStore'                  => __( '|-Music Store', 'webseo' ),
		'OfficeEquipmentStore'        => __( '|-Office Equipment Store', 'webseo' ),
		'OutletStore'                 => __( '|-Outlet Store', 'webseo' ),
		'PawnShop'                    => __( '|-Pawn Shop', 'webseo' ),
		'PetStore'                    => __( '|-Pet Store', 'webseo' ),
		'ShoeStore'                   => __( '|-Shoe Store', 'webseo' ),
		'SportingGoodsStore'          => __( '|-Sporting Goods Store', 'webseo' ),
		'TireShop'                    => __( '|-Tire Shop', 'webseo' ),
		'ToyStore'                    => __( '|-Toy Store', 'webseo' ),
		'WholesaleStore'              => __( '|-Wholesale Store', 'webseo' ),
		'TelevisionStation'           => __( '|-Wholesale Store', 'webseo' ),
		'TouristInformationCenter'    => __( 'Tourist Information Center', 'webseo' ),
		'TravelAgency'                => __( 'Travel Agency', 'webseo' ),
	);

	$seopress_lb_types = apply_filters( 'seopress_schemas_lb_types', $seopress_lb_types );

	return $seopress_lb_types;
}

$versions       = get_option( 'seopress_versions' );
$actual_version = isset( $versions['free'] ) ? $versions['free'] : 0;

if ( version_compare( $actual_version, '6.7', '>=' ) || ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG === true ) ) {
	add_filter( 'seopress_notifications_center_item', 'seopress_pro_notifications_list', 10, 5 );
	/**
	 * Filter Notifications manager
	 *
	 * @param array $args The array of notifications.
	 * @param int   $alerts_info The number of info alerts.
	 * @param int   $alerts_low The number of low alerts.
	 * @param int   $alerts_medium The number of medium alerts.
	 * @param int   $alerts_high The number of high alerts.
	 * @return array
	 */
	function seopress_pro_notifications_list( $args, $alerts_info, $alerts_low, $alerts_medium, $alerts_high ) {
		$option_pro_service    = seopress_pro_get_service( 'OptionPro' );
		$notice_option_service = seopress_pro_get_service( 'NoticeOption' );

                if ( null !== $option_pro_service && method_exists( $option_pro_service, 'get404Cleaning' ) ) {
                        if ( $option_pro_service->get404Cleaning() === '1' && ! wp_next_scheduled( 'webseo_404_cron_cleaning' ) && ! wp_next_scheduled( 'seopress_404_cron_cleaning' ) ) {

				$args[] = array(
					'id'         => 'notice-title-tag',
					'title'      => __( 'You have enabled 404 cleaning BUT the scheduled task is not running.', 'webseo' ),
                                      'desc'       => __( 'To solve this, please disable and re-enable WebSEO PRO. No data will be lost.', 'webseo' ),
					'impact'     => array(
						'medium' => __( 'Medium impact', 'webseo' ),
					),
					'deleteable' => false,
					'status'     => true,
				);
			}
		}
		if ( '1' === seopress_get_toggle_option( 'rich-snippets' ) ) {
			if ( '1' !== $option_pro_service->getRichSnippetEnable() ) {
				++$alerts_high;

				$args[] = array(
					'id'         => 'notice-schemas-metabox',
					'title'      => __( 'Structured data types is not correctly enabled', 'webseo' ),
					'desc'       => __( 'Please enable <strong>Structured Data Types metabox for your posts, pages and custom post types</strong> option in order to use automatic and manual schemas. (SEO > PRO > Structured Data Types (schema.org)', 'webseo' ),
					'impact'     => array(
						'high' => __( 'High impact', 'webseo' ),
					),
					'link'       => array(
						'en'       => esc_url( admin_url( 'admin.php?page=seopress-pro-page#tab=tab_seopress_rich_snippets' ) ),
						'title'    => __( 'Fix this!', 'webseo' ),
						'external' => false,
					),
					'deleteable' => false,
					'status'     => true,
				);
			}
		}

		if ( 'valid' !== get_option( 'seopress_pro_license_status' ) ) {
			++$alerts_info;

			$args[] = array(
				'id'         => 'notice-license',
				'title'      => __( 'You have to enter your licence key to get updates and support', 'webseo' ),
                              'desc'       => __( 'Please activate the WebSEO PRO license key to automatically receive updates to guarantee you the best user experience possible.', 'webseo' ),
				'impact'     => array(
					'info' => __( 'License', 'webseo' ),
				),
				'link'       => array(
					'en'       => admin_url( 'admin.php?page=seopress-license' ),
					'title'    => __( 'Fix this!', 'webseo' ),
					'external' => false,
				),
				'deleteable' => false,
				'status'     => true,
			);
		}

		$status = false;
		if ( null !== $notice_option_service && file_exists( ABSPATH . 'robots.txt' ) && '1' !== $notice_option_service->getNoticeRobotsTxt() ) {
			++$alerts_high;
			$status = true;

			$args[] = array(
				'id'         => 'notice-robots-txt',
				'title'      => __( 'A physical robots.txt file has been found', 'webseo' ),
				'desc'       => __( 'A robots.txt file already exists at the root of your site. We invite you to remove it so we can handle it virtually.', 'webseo' ),
				'impact'     => array(
					'high' => __( 'High impact', 'webseo' ),
				),
				'deleteable' => true,
				'status'     => $status ? $status : false,
			);
		}

		// GA4: property ID === measurement.
		if ( '1' === seopress_get_toggle_option( 'google-analytics' ) ) {
			if ( ! empty( seopress_get_service( 'GoogleAnalyticsOption' )->getGA4PropertId() ) && ! empty( seopress_get_service( 'GoogleAnalyticsOption' )->getGA4() ) ) {
				$status = false;
				if ( seopress_get_service( 'GoogleAnalyticsOption' )->getGA4PropertId() === seopress_get_service( 'GoogleAnalyticsOption' )->getGA4() ) {
					++$alerts_info;
					$status = true;

					$args[] = array(
						'id'         => 'notice-ga4-property-id',
						'title'      => __( 'Your GA4 property ID is incorrectly set!', 'webseo' ),
						'desc'       => __( 'To get your Google Analytics stats in dashboard, your GA4 property ID must NOT be equal to your GA4 measurement ID.', 'webseo' ),
						'impact'     => array(
							'high' => __( 'High impact', 'webseo' ),
						),
						'link'       => array(
							'en'       => admin_url( 'admin.php?page=seopress-google-analytics#seopress-analytics-stats' ),
							'title'    => __( 'Fix this!', 'webseo' ),
							'external' => false,
						),
						'deleteable' => false,
						'status'     => ( $status ? $status : false ),
					);
				}
			}
		}

		$args['impact']['high']   = $alerts_high;
		$args['impact']['medium'] = $alerts_medium;
		$args['impact']['low']    = $alerts_low;
		$args['impact']['info']   = $alerts_info;

		return $args;
	}
}
