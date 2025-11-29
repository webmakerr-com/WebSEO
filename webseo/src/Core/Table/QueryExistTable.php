<?php // phpcs:ignore

namespace WebSEO\Core\Table;

defined( 'ABSPATH' ) || exit;

use WebSEO\Models\Table\TableInterface;

/**
 * QueryExistTable
 */
class QueryExistTable {

	/**
	 * The exist function.
	 *
	 * @param TableInterface $table The table.
	 *
	 * @return bool
	 */
	public function exist( TableInterface $table ) {

		global $wpdb;

		$query = "SHOW TABLES LIKE '{$wpdb->prefix}{$table->getName()}'";
		try {
			$result = $wpdb->query( $query ); // phpcs:ignore -- TODO: prepare and use placeholder.

			if ( 0 === $result ) {
				return false;
			}

			return true;
		} catch ( \Exception $e ) {
			return false;
		}
	}
}
