<?php
class Model_Product extends Model_Abstract
{
    public $tableName = "ccc_product";

    public function __construct()
    {
        // echo "I'm here";
        // echo get_class($this);
    }

    public function save($data)
    {
        echo "<pre>";
        $sql = $this->getQueryBuilder()->insert(
                $this->tableName,
                $data
            );
         $this->getQueryBuilder()->exec($sql);
        // echo $sql;
        // print_r($data);
    }

        public function update($data,$condition)
    {
        echo "<pre>";
        $sql = $this->getQueryBuilder()->update(
                $this->tableName,
                $data,
                $condition
            );
         $this->getQueryBuilder()->exec($sql);
        // echo $sql;
        // print_r($data);
    }
        public function del($condition)
    {
        echo "<pre>";
        $sql = $this->getQueryBuilder()->delete(
                $this->tableName,
                $condition
            );
         $this->getQueryBuilder()->exec($sql);
        // echo $sql;
        // print_r($data);
    }
    public function show($columns = "*", $condition = [])
{
    // Ensure $columns is a string
    if (!is_string($columns)) {
        $columns = implode(', ', $columns);
    }

    if (is_array($condition) && !empty($condition)) {
        $conditions = [];
        foreach ($condition as $key => $value) {
            $conditions[] = "$key = '$value'";
        }
        $condition = implode(' AND ', $conditions);
    }

    $sql = $this->getQueryBuilder()->selectQuery($this->tableName, $columns, $condition);
    $result = $this->getQueryBuilder()->exec($sql);

    return $this->getQueryBuilder()->fetch_asso($result);
}
    
}
