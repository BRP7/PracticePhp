<?php
class Lib_Sql_Query_Builder extends Lib_Connection
{
    public function __construct()
    {
        // echo get_class($this);
    }

    public function insert($tableName, $data)
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

    function update( $table, $data, $condition) {
        $set = "";
        foreach ($data as $key => $value) {
            $set .= "$key = '$value', ";
        }
        $set = rtrim($set, ", ");
    
        $conditions = "";
        foreach ($condition as $key => $value) {
            $conditions .= "$key = '$value' AND ";
        }
        $conditions = rtrim($conditions, " AND ");
        $query = "UPDATE $table SET $set WHERE $conditions";
        return $query;
    }
    
    // Function to generate SQL delete query
    function delete( $table, $condition) {
        $whereClause = '';
        foreach ($condition as $key => $value) {
            $whereClause .= "$key = '$value' AND ";
        }
        $whereClause = rtrim($whereClause, " AND ");
        $query = "DELETE FROM $table WHERE $whereClause";
        return $query;
    }
    
    function selectQuery( $table,$columns = "*", $condition = "") {
        $query = "SELECT $columns FROM $table";
        if (!empty($condition)) {
            $query .= " WHERE $condition";
        }
        return $query;
    }
}

