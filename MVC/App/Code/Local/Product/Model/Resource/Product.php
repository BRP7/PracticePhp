<?php
class Product_Model_Resource_Product
{
    protected $_tableName = "";
    protected $_primaryKey = "";
    public function init($tableName,$primaryKey)
    {
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }
    public function getPrimaryKey(){
        return $this->_primaryKey;
    }

    public function __construct()
    {
        $this->init('ccc_product','product_id');
    }
    public function load($id,$column=null){
        $query = "SELECT * FROM {$this->_tableName} WHERE {$this->_primaryKey}={$id}";
        return $this->getAdapter()->fetchRow($query);
    }

    public function getAdapter(){
        return new Core_Model_DB_Adapter();
    }
}
