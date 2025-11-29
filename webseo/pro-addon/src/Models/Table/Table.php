<?php

namespace SEOPressPro\Models\Table;

defined( 'ABSPATH' ) || exit;

use SEOPressPro\Models\Table\TableStructureInterface;

class Table implements TableInterface {

    protected $name;

    protected $alias;

    protected $version;

    protected $structure;

    public function __construct($name, TableStructureInterface $structure, $options = []){
        $this->name = $name;
        $this->structure = $structure;
        $defaultAliasSource = $name;
        $underscorePosition = strpos($name, '_');

        if ($underscorePosition !== false && strlen($name) > $underscorePosition + 1) {
            $defaultAliasSource = substr($name, $underscorePosition + 1);
        }

        $this->alias = isset($options['alias']) ? $options['alias'] : substr($defaultAliasSource, 0,3);
        $this->version = isset($options['version']) ? (int) $options['version'] : 1;
    }

    /**
     * @return string
     */
	public function getName(){
        return $this->name;
    }

    /**
     * @return string
     */
	public function getAlias(){
        return $this->alias;
    }

    public function getColumns(){
        return $this->structure->getColumns();
    }

    public function getVersion(){
        return $this->version;
    }

    public function getColumnByName($name){
        foreach ($this->getColumns() as $key => $value) {
            if($value->getName() === $name){
                return $value;
            }
        }
    }

}
