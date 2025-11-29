<?php // phpcs:ignore

namespace WebSEO\Services\Table;

defined( 'ABSPATH' ) || exit;

use WebSEO\Models\Table\TableInterface;
use WebSEO\Core\Table\QueryCreateTable;
use WebSEO\Core\Table\QueryExistTable;


/**
 * TableManager
 */
class TableManager {

	/**
	 * The queryCreateTable property.
	 *
	 * @var QueryCreateTable
	 */
	protected $query_create_table;

	/**
	 * The queryExistTable property.
	 *
	 * @var QueryExistTable
	 */
	protected $query_exist_table;

	/**
	 * The __construct function.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->query_create_table = new QueryCreateTable();
		$this->query_exist_table  = new QueryExistTable();
	}

	/**
	 * The exist function.
	 *
	 * @param TableInterface $table The table.
	 *
	 * @return bool
	 */
	public function exist( TableInterface $table ) {
		return $this->query_exist_table->exist( $table );
	}

	/**
	 * The create function.
	 *
	 * @param TableInterface $table The table.
	 *
	 * @return void
	 */
	public function create( TableInterface $table ) {
		if ( $this->exist( $table ) ) {
			return;
		}

		$this->query_create_table->create( $table );
	}

	/**
	 * The createTablesIfNeeded function.
	 *
	 * @param array $tables The tables.
	 *
	 * @return void
	 */
	public function createTablesIfNeeded( $tables ) { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		foreach ( $tables as $key => $table ) {
			$this->create( $table );
		}
	}
}
