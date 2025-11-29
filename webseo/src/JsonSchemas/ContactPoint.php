<?php // phpcs:ignore

namespace WebSEO\JsonSchemas;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WebSEO\Models\GetJsonData;
use WebSEO\Models\JsonSchemaValue;

/**
 * ContactPoint
 */
class ContactPoint extends JsonSchemaValue implements GetJsonData {
	/**
	 * The NAME constant.
	 *
	 * @var string
	 */
	const NAME = 'contact-point';

	/**
	 * The getName function.
	 *
	 * @return string
	 */
	protected function getName() {
		return self::NAME;
	}

	/**
	 * The getJsonData function.
	 *
	 * @since 4.5.0
	 *
	 * @param array $context The context.
	 *
	 * @return string|array
	 */
	public function getJsonData( $context = null ) {
		$data = $this->getArrayJson();

		return apply_filters( 'seopress_get_json_data_contact_point', $data );
	}
}
