<?php
include 'sql/functions.php'; 
// update_entry.php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ccc_practice";

    $conn = new mysqli($servername, $username, $password, $dbname);

//   echo "<pre>";
  $data=$_POST;
  print_r($data);
  $product_id = $_POST['product_id'];
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $product_id = $_POST['product_id'];
    // function updateQuery($table, $data ,$product_id) {
    //     $set = "";
    //     foreach ($data as $key => $value) {
    //         $set .= "$key = '$value', ";
    //     }
    //     $set = rtrim($set, ", ");
    //     $query = "UPDATE $table SET $set WHERE product_id=$product_id";
    //     return $query;
    // }
    $sql =updateQuery("ccc_product",$data,$product_id);
    
    // // Retrieve form data
    // $product_id = $_POST['product_id'];
    // $product_name = $_POST['product_name'];
    // $sku = $_POST['sku'];
    // // $category = $_POST['category'];
    // // Add other fields here

    // // Update data in the database
    // $sql = "UPDATE ccc_product
    //         SET product_name = '$product_name',sku='$sku'
    //         -- Add other fields here
    //         WHERE product_id = $product_id";

    if ($conn->query($sql) === TRUE) {
        echo "Product updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request";
}
?>
