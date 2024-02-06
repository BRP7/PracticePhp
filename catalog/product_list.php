<?php
require 'sql/connection.php';
include 'sql/functions.php'; 


// view_entries.php

// Connect to the database
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "ccc_practice";

// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Fetch the last 10 product records from the database
// $sql = "SELECT * FROM ccc_product ORDER BY created_at DESC LIMIT 10";
$sql=selectQuery("ccc_product");
$result = $conn->query($sql);
// print_r($result);

if ($result->num_rows > 0) {
    echo "<h2>Last 20 Product Entries</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Product Name</th><th>SKU</th><th>Category</th><th>Actions</th></tr>";
    //<th>Price</th><th>Status</th>

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['product_name']}</td>";
        echo "<td>{$row['sku']}</td>";
        echo "<td>{$row['category']}</td>";
        // echo "<td>{$row['price']}</td>";
        // echo "<td>{$row['status']}</td>";
        
        // Edit and Delete options
        echo "<td>";
        echo "<a href='product.php?action=edit&id={$row['product_id']}'>Edit</a> | ";
        echo "<a href='product.php?action=delete&id={$row["product_id"]}'>Delete</a>";
        echo "</td>";

        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No product entries found";
}

// Close the database connection
$conn->close();



?>
