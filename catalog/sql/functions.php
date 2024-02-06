<?php
// Function to generate SQL insert query
// function insertQuery($table, $data) {
//     $columns = implode(", ", array_keys($data));
//     $values = "'" . implode("', '", array_values($data)) . "'";
//     $query = "INSERT INTO $table ($columns) VALUES ($values)";
//     return $query;
// }

// Function to generate SQL insert query
function insert($conn, $table, $data) {
    $columns = implode(", ", array_keys($data));
    $values = "'" . implode("', '", array_values($data)) . "'";
    $query = "INSERT INTO $table ($columns) VALUES ($values)";

    $result = $conn->query($query);

    if ($result) {
        return "success";
    } else {
        return $conn->error;
    }
}


// Function to generate SQL update query
// function update($table, $data, $condition) {
//     $set = "";
//     $conditions="";
//     foreach ($data as $key => $value) {
//         $set .= "$key = '$value', ";
//     }
//     foreach ($condition as $key => $value) {
//         $conditions .= "$key = '$value', ";
//     }
//     $set = rtrim($set, ", ");
//     $query = "UPDATE $table SET $set WHERE $conditions";
//     return $query;
// }

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

    $result = $conn->query($query);

    if ($result) {
        return "success";
    } else {
        return $conn->error;
    }
}


// function updateQuery($table, $data ,$product_id) {
//     $set = "";
//     foreach ($data as $key => $value) {
//         $set .= "$key = '$value', ";
//     }
//     $set = rtrim($set, ", ");
//     $query = "UPDATE $table SET $set WHERE product_id=$product_id";
//     return $query;
// }

// Function to generate SQL delete query
// function deleteQuery($table, $condition) {
//     $query = "DELETE FROM $table WHERE $condition";
//     return $query;
// }

// Function to generate SQL delete query
function delete($conn, $table, $condition) {
    $whereClause = '';
    foreach ($condition as $key => $value) {
        $whereClause .= "$key = '$value' AND ";
    }
    $whereClause = rtrim($whereClause, " AND ");

    $query = "DELETE FROM $table WHERE $whereClause";
    $result = $conn->query($query);

    if ($result) {
        return "success";
    } else {
        return "error";
    }
}


// Function to generate SQL select query
function selectQuery($table, $columns = "*", $condition = "") {
    $query = "SELECT $columns FROM $table";
    if (!empty($condition)) {
        $query .= " WHERE $condition";
    }
    return $query;
}

function fetchProductData($product_id, $conn) {
    // Fetch the record based on the Product ID
    $sql = "SELECT * FROM ccc_product WHERE product_id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}
?>
