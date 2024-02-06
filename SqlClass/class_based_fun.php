<?php
class queryBuilder{

    // Function to generate SQL insert query
    function insert($conn, $table, $data) {
        $columns = implode(", ", array_keys($data));
        $values = "'" . implode("', '", array_values($data)) . "'";
        $query = "INSERT INTO $table ($columns) VALUES ($values)";
    return $query;
}

// Function to generate SQL update query
function update($conn, $table, $data, $condition) {
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
function delete($conn, $table, $condition) {
    $whereClause = '';
    foreach ($condition as $key => $value) {
        $whereClause .= "$key = '$value' AND ";
    }
    $whereClause = rtrim($whereClause, " AND ");
    $query = "DELETE FROM $table WHERE $whereClause";
    return $query;
}

function selectQuery($table, $columns = "*", $condition = "") {
    $query = "SELECT $columns FROM $table";
    if (!empty($condition)) {
        $query .= " WHERE $condition";
    }
    return $query;
}
    
}

?>