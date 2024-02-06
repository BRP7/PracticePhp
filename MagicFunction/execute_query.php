<?php
class ExecuteQuery{
    // Function to execute SQL insert query
   public function insert($conn, $table, $data) {
        $columns = [];
        $values = [];

        foreach ($data as $column => $value) {
            $columns[] = $column;
            $values[] = "'" . $value . "'";
        }

        $columnsString = implode(", ", $columns);
        $valuesString = implode(", ", $values);

        $query = "INSERT INTO $table ($columnsString) VALUES ($valuesString)";

        if ($conn->query($query)) {
            echo "Insert successful";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }

    // Function to execute SQL update query
   public function update($conn, $table, $data, $condition) {
        $set = "";
        $whereClause = "";
        
        foreach ($data as $key => $value) {
            $set .= "$key = '$value', ";
        }

        foreach ($condition as $key => $value) {
            $whereClause .= "$key = '$value' AND ";
        }

        $set = rtrim($set, ", ");
        $whereClause = rtrim($whereClause, " AND ");

        $query = "UPDATE $table SET $set WHERE $whereClause";

        if ($conn->query($query)) {
            echo "Update successful";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }



    // Function to execute SQL delete query
   public function delete($conn, $table, $condition) {
        $whereClause = '';
        
        foreach ($condition as $key => $value) {
            $whereClause .= "$key = '$value' AND ";
        }

        $whereClause = rtrim($whereClause, " AND ");

        $query = "DELETE FROM $table WHERE $whereClause";

        if ($conn->query($query)) {
            echo "Delete successful";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }

}
?>