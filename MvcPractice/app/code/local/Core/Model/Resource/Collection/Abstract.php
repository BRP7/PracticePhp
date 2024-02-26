<?php
class Core_Model_Resource_Collection_Abstract{
    protected $_resource = null;
    protected $_select = [];
    protected $_data = [];
        public function __construct(){}

        public function setResource($resource){
            $this->_resource = $resource;//obj of Catalog_Model_Resource_Product
            return $this;
        }
        public function select(){
            $this->_select['FROM'] = $this->_resource->getTableName();//table_name
            return $this;
        }
        public function addFieldToFilter($field, $value){
            $this->_select['WHERE'][$field][] = $value;
            return $this;
        }
        public function load()
        {
            $sql = "SELECT * FROM {$this->_select['FROM']}";//$this->_select['FROM']->tableName
            if (isset($this->_select["WHERE"])) {
                $whereCondition = [];
                foreach ($this->_select["WHERE"] as $column => $value) {
                    foreach ($value as $_value) {
                        if (!is_array($_value)) {
                            $_value = array('eq' => $_value);//('price', ['in' => [10, 20, 30]])//create assosiative array here with key "eq"
                        }
                        foreach ($_value as $_condition => $_v) {
                            if (is_array($_v)) {
                                $_v = array_map(function ($v) {
                                    return "'{$v}'";
                                }, $_v);//[10, 20, 30] ['10','20','30']one by one array ni andar ni value ne string ma convert karse ''
                                $_v = implode(',', $_v);//'10','20','30'  array to string conversion done here
                            }
                            switch ($_condition) {
                                case 'eq':
                                    $whereCondition[] = "{$column} = '{$_v}'";
                                    break;
                                case 'in':
                                    $whereCondition[] = "{$column} IN ({$_v})";//price IN ('10','20','30')
                                    break;
                                case 'like':
                                    $whereCondition[] = "{$column} LIKE '{$_v}'";
                                    break;
                            }
                        }
                    }
                }
                $sql .=" WHERE " . implode(" AND ", $whereCondition); 
                //print_r($whereCondition);
            }
            $result = $this->_resource->getAdapter()->fetchAll($sql);
            foreach ($result as $row) {
                $this->_data[]= MAge::getModel('catalog/product')->setData($row);
            }
        }
        public function getData(){
            $this->load();
            return $this->_data;
        }
}

?>
