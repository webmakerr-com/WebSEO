<?php // phpcs:ignore

namespace WebSEO\Helpers;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * OpeningHoursHelper
 */
abstract class OpeningHoursHelper {
	/**
	 * The get_days function.
	 *
	 * @return array
	 */
	public static function getDays() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		return array(
			__( 'Monday', 'webseo' ),
			__( 'Tuesday', 'webseo' ),
			__( 'Wednesday', 'webseo' ),
			__( 'Thursday', 'webseo' ),
			__( 'Friday', 'webseo' ),
			__( 'Saturday', 'webseo' ),
			__( 'Sunday', 'webseo' ),
		);
	}

	/**
	 * The get_hours function.
	 *
	 * @return array
	 */
	public static function getHours() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		return array( '00', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23' );
	}

	/**
	 * The get_minutes function.
	 *
	 * @return array
	 */
	public static function getMinutes() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		return array( '00', '15', '30', '45', '59' );
	}
}
