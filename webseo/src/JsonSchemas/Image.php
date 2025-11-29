<?php // phpcs:ignore

namespace WebSEO\JsonSchemas;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WebSEO\Models\GetJsonData;
use WebSEO\Models\JsonSchemaValue;

/**
 * Image
 */
class Image extends JsonSchemaValue implements GetJsonData {
	/**
	 * The NAME constant.
	 *
	 * @var string
	 */
	const NAME = 'image';

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
	 * @since 4.6.0
	 *
	 * @param array $context The context.
	 *
	 * @return string|array
	 */
	public function getJsonData( $context = null ) {
		$data = $this->getArrayJson();

		return apply_filters( 'seopress_get_json_data_image', $data );
	}
}
