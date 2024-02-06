<?php
include 'sql/connection.php';
include 'sql/functions.php'; 


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id']) && $_GET['action']=="edit") {
    $product_id = $_GET['id'];
    $row = fetchProductData($product_id, $conn);
    if ($row !== null) {
 ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Product</title>
        </head>
        <body>

        <h2>Edit Product</h2>

        <form action="update_k.php" method="post">
            <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" value="<?php echo $row['product_name']; ?>" required><br>
            <label for="sku">SKU:</label>
            <input type="text" name="sku" value="<?php echo $row['sku']; ?>" required><br>
            <!-- Update this line to match your actual column name -->
            <label for="category">Product Category:</label>
            <!-- Update this line to match your actual column name -->
            <label for="category">Product Category:</label>
            <select name="category" required>
                <option value="Bar & Game Room" <?php echo ($row['category'] == 'Bar & Game Room') ? 'selected' : ''; ?>>Bar & Game Room</option>
                <option value="Bedroom" <?php echo ($row['category'] == 'Bedroom') ? 'selected' : ''; ?>>Bedroom</option>
                <option value="Decor" <?php echo ($row['category'] == 'Decor') ? 'selected' : ''; ?>>Decor</option>
                <option value="Dining & Kitchen" <?php echo ($row['category'] == 'Dining & Kitchen') ? 'selected' : ''; ?>>Dining & Kitchen</option>
                <option value="Lighting" <?php echo ($row['category'] == 'Lighting') ? 'selected' : ''; ?>>Lighting</option>
                <option value="Living Room" <?php echo ($row['category'] == 'Living Room') ? 'selected' : ''; ?>>Living Room</option>
                <option value="Mattresses" <?php echo ($row['category'] == 'Mattresses') ? 'selected' : ''; ?>>Mattresses</option>
                <option value="Office" <?php echo ($row['category'] == 'Office') ? 'selected' : ''; ?>>Office</option>
                <option value="Outdoor" <?php echo ($row['category'] == 'Outdoor') ? 'selected' : ''; ?>>Outdoor</option>
            </select><br>
            <label for="manufacturer_cost">Manufacturer Cost:</label>
                        <input type="text" name="manufacturer_cost" value="<?php echo $row['manufacturer_cost']; ?>" required><br>

                        <label for="shipping_cost">Shipping Cost:</label>
                        <input type="text" name="shipping_cost" value="<?php echo $row['shipping_cost']; ?>" required><br>

                        <label for="total_cost">Total Cost:</label>
                        <input type="text" name="total_cost" value="<?php echo $row['total_cost']; ?>" required><br>

                        <label for="price">Price:</label>
                        <input type="text" name="price" value="<?php echo $row['price']; ?>" required><br>

                        <label for="status">Status:</label>
            <select name="status" required>
                <option value="Enabled" <?php echo ($row['status'] == 'Enabled') ? 'selected' : ''; ?>>Enabled</option>
                <option value="Disabled" <?php echo ($row['status'] == 'Disabled') ? 'selected' : ''; ?>>Disabled</option>
            </select><br>

            <label for="created_at">Created At:</label>
            <input type="date" name="created_at" value="<?php echo $row['created_at']; ?>" required><br>

            <label for="updated_at">Updated At:</label>
            <input type="date" name="updated_at" value="<?php echo $row['updated_at']; ?>" required><br>

            

            <!-- Add other form fields here with their values -->

            <input type="submit" value="Update Product">
        </form>

        </body>
        </html>
<?php
    } else {
        echo "Product not found";
    }
}elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == "delete") {
    $product_id = $_GET['id'];
    
    $deleteQuery = deleteQuery('ccc_product', "product_id=$product_id");
    if ($conn->query($deleteQuery) === TRUE) {
        echo "Product successfully deleted.";
    } else {
        echo "Error deleting product: " . $conn->error;
    }
        
}else {
    echo "Invalid request";
}

// Close the database connection
  $conn->close();
?>
