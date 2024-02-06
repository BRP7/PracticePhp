<?php 
class ReturnQuery{
    public  function insertQuery($table, $data) {
            $columns = implode(", ", array_keys($data));
            $values = "'" . implode("', '", array_values($data)) . "'";
            $query = "INSERT INTO $table ($columns) VALUES ($values)";
            return $query;
        }



    public function update($table, $data, $condition) {
            $set = "";
            $conditions="";
            foreach ($data as $key => $value) {
                $set .= "$key = '$value', ";
            }
            foreach ($condition as $key => $value) {
                $conditions .= "$key = '$value', ";
            }
            $set = implode(", ",$set);
            $condition = implode(", ",$condition);
            $query = "UPDATE $table SET ($set) WHERE ($conditions)";
            return $query;
        }



    public function deleteQuery($table, $condition) {
            foreach ($condition as $key => $value) {
               $conditions .= "$key = '$value', ";
            }
            $condition = implode(", ",$condition);
            $query = "DELETE FROM $table WHERE $condition";
            return $query;
        }


        
    public function selectQuery($table, $columns = "*", $condition = "") {
            $query = "SELECT $columns FROM $table";
            if (!empty($condition)) {
                $query .= " WHERE $condition";
            }
            return $query;
        }
}
    
?>