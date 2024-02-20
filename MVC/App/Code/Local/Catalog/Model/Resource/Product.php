<?php
class Catalog_Model_Resource_Product
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
    public function getTableName(){
        return $this->_tableName;
    }

    public function __construct()
    {
        $this->init('catalog_product','product_id');
    }
    public function load($id,$column=null){
        $query = "SELECT * FROM {$this->_tableName} WHERE {$this->_primaryKey}={$id}";
        return $this->getAdapter()->fetchRow($query);
    }
    public function save(Catalog_Model_Product $product){
        $data = $product->getData();
        if(isset($data[$this->getPrimaryKey()])){  
            unset($data[$this->getPrimaryKey()]);
         }
        // echo $this->insertSql($this->getTableName(),$data);
        $sql =  $this->insertSql($this->getTableName(),$data);
        $id = $this->getAdapter()->insert($sql);
        $product->setId($id);
        var_dump($id);
        print_r($product->getData());
        
        // echo 8999;
        // print_r($data);
    }

    public function insertSql($tableName, $data)
    {
        $columns = $values = [];
        foreach ($data as $key => $value) {
            $columns[] = sprintf("`%s`", $key);
            $values[]  = sprintf("'%s'", ($value));
        }
        $columns = implode(",", $columns);
        $values = implode(",", $values);
        return "INSERT INTO {$tableName} ({$columns}) VALUES ({$values});";
    }

    public function getAdapter(){
        return new Core_Model_DB_Adapter();
    }
}
















// <?php

// class Catalog_Model_Resource_Product
// {
//     protected $_tableName = null;
//     protected $_primaryKey = null;

//     public function __construct()
//     {
//         $this->init();
//     }


//     public function getPrimaryKey()
//     {
//         return $this->_primaryKey;
//     }

//     public function getTableName()
//     {
//         return $this->_tableName;
//     }

//     public function getAdapter()
//     {
//         return new Core_Model_DB_Adapter();
//     }

//     public function load($id, $column = null)
//     {
//         // echo "In product resource <br>";
//         $sql = "SELECT * FROM {$this->_tableName} WHERE {$this->_primaryKey}={$id} LIMIT 1";
//         return $this->getAdapter()->fetchRow($sql);
//     }

//     public function save(Catalog_Model_Product $product)
//     {

//         $data = $product->getData();
//         print_r($data);

//         if (isset($data[$this->getPrimaryKey()])) {
//             unset($data[$this->getPrimaryKey()]);
//         }

//         $insertData = $this->insertQuery($this->getTableName(), $data);

//         // echo $insertData;
//         $id = $this->getAdapter()->insert($insertData);
//         ($product->setId($id));

//     }
//     function insertQuery($tbname, $data)
//     {
//         $columns = $values = [];
//         foreach ($data as $key => $val) {
//             $columns[] = "`{$key}`";
//             $values[] = "'" . addslashes($val) . "'";
//         }
//         $columns = implode(" , ", $columns);
//         $values = implode(" , ", $values);

//         return "INSERT INTO {$tbname}({$columns}) VALUES ({$values})";
//     }

//     // function updateQuery($tbname, $data, $where)
//     // {
//     //     $joint = $con = [];
//     //     foreach ($data as $key => $val) {
//     //         $columns[] = "`{$key}`" . "=" . "'" . addslashes($val) . "'";
//     //     }
//     //     foreach ($where as $key => $val) {
//     //         $condition[] = "`{$key}`=" . "'" . addslashes($val) . "'";
//     //     }
//     //     $joint = implode(",", $columns);
//     //     $con = implode(" AND ", $condition);
//     //     // $where = implode(",",$where);
//     //     return "UPDATE {$tbname} SET {$joint} WHERE {$con}";
//     // }

//     // Above all code move to resource abstract
//     public function init()
//     {
//         $this->_tableName = "catalog_product";
//         $this->_primaryKey = "product_id";
//     }

// }