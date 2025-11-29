<?php // phpcs:ignore

namespace WebSEO\Services\Table;

defined( 'ABSPATH' ) || exit;

use WebSEO\Models\Table\TableInterface;
use WebSEO\Core\Table\TableFactory;
use WebSEO\Models\Table\TableStructure;
use WebSEO\Models\Table\TableColumn;
use WebSEO\Models\Table\Table;

/**
 * TableList
 */
class TableList {

	/**
	 * The getTableContentAnalysis function.
	 *
	 * @return Table
	 */
	public function getTableContentAnalysis() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
		$table_structure = new TableStructure(
			array(
				new TableColumn(
					'id',
					array(
						'type'       => 'bigint(20)',
						'primaryKey' => true,
					)
				),
				new TableColumn(
					'post_id',
					array(
						'type'  => 'bigint(20)',
						'index' => true,
					)
				),
				new TableColumn(
					'title',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'description',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'og_title',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'og_description',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'og_image',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'og_url',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'og_site_name',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'twitter_title',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'twitter_description',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'twitter_image',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'twitter_image_src',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'canonical',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'h1',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'h2',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'h3',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'images',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'meta_robots',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'meta_google',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'links_no_follow',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'outbound_links',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'internal_links',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'json_schemas',
					array(
						'type' => 'longtext',
					)
				),
				new TableColumn(
					'keywords',
					array(
						'type' => 'text',
					)
				),
				new TableColumn(
					'permalink',
					array(
						'type' => 'text',
					)
				),
				new TableColumn(
					'score',
					array(
						'type' => 'text',
					)
				),
				new TableColumn(
					'analysis_date',
					array(
						'type'    => 'datetime',
						'default' => 'CURRENT_TIMESTAMP',
					)
				),

			)
		);

            return new Table( 'webseo_content_analysis', $table_structure, 1 );
	}

	/**
	 * The getTables function.
	 *
	 * @return array
	 */
	public function getTables() { // phpcs:ignore -- TODO: check if method is outside this class before renaming.
            return array(
                    'webseo_content_analysis' => $this->getTableContentAnalysis(),
            );
    }
}
