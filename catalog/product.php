<?php

require 'sql/connection.php';
require 'sql/functions.php';
// $product_id = $_GET["product_id"];

// error_reporting(E_ALL);
// ini_set('display_errors', 1);
$action = $_GET["action"];
if (isset($_GET['id']) && $action == "delete") {
    $product_id = $_GET["id"];
    $del_result = delete($conn, "ccc_product", ['product_id' => $product_id]);
    if ($del_result === "success") {
        echo "<script>alert('Data Deleted Successfully')</script>
        <script>location. href='product_list.php'</script>";
    } else {
        echo "<h2 style='color: red;'>ERROR: Unable to INSERT data into the database.</h2>";
    }
}
if (isset($_GET['id']) && $action == "edit") {
    $product_id = $_GET["id"];
    $sql = "SELECT * FROM ccc_product WHERE product_id='$product_id'";
    $result = $conn->query($sql);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $postData = $_POST['pdata'];

        if ($product_id == $postData['product_id']) {
            $upd_result = update($conn,"ccc_product", $postData, ['product_id' => $product_id]);
                if ($upd_result === "success") {
                    echo "<script>alert('Data UPDATE Successfully')</script>
                    <script>location. href='product_list.php'</script>";
                } else {
                    echo "<h2 style='color: red;'>ERROR: Unable to INSERT data into the database.</h2>";
                }
        } else {
            $ins_result = insert($conn,"ccc_product", $postData);
                if ($ins_result === "success") {
                    echo "<script>alert('Data INSERT Successfully')</script>
                    <script>location. href='product_list.php'</script>";
                } else {
                    echo "<h2 style='color: red;'>ERROR: Unable to INSERT data into the database.</h2>";
                }
        }
    }

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Product Information Form</title>
        <style>
            .input-box-1 {
                width: 300px;
                max-width: 100%;
            }

            form .input-box-1 span.details {
                display: block;
                font-weight: 500;
                margin-bottom: -10px;
            }
        </style>
    </head>

    <body>
        <?php if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <div class="box">
                    <div class="container">
                        <div class="title">Product Information</div>
                        <div class="content">
                            <form action="#" method="post">
                                <div class="user-details">
                                    <div class="input-box">
                                        <span class="details" for="product_id">Product ID</span>
                                        <input type="text" placeholder="Enter Product ID" id="product_id" name="pdata[product_id]" value="<?php echo $row['product_id']; ?>">
                                    </div>
                                    <div class="input-box">
                                        <span class="details" for="productName">Product Name</span>
                                        <input type="text" placeholder="Enter Product Name" id="product_name" name="pdata[product_name]" value="<?php echo $row['product_name']; ?>" required>
                                    </div>
                                    <div class="input-box">
                                        <span class="details" for="sku">SKU</span>
                                        <input type="text" placeholder="Enter SKU" id="sku" name="pdata[sku]" value="<?php echo $row['sku']; ?>" required>
                                    </div>
                                    <div class="input-box-1" style="justify-content:left">
                                        <span class="details" for="product_type">Product Type</span><br>
                                        <?php if ($row['product_type'] == "Simple") : ?>
                                            <input type="radio" id="simple_type" name="pdata[product_type]" value="Simple" checked>
                                            <span for="simple_type">Simple</span><br>
                                            <input type="radio" id="bundle_type" name="pdata[product_type]" value="Bundle">
                                            <span for="bundle_type">Bundle</span>
                                        <?php else : ?>
                                            <input type="radio" id="simple_type" name="pdata[product_type]" value="Simple">
                                            <span for="simple_type">Simple</span><br>
                                            <input type="radio" id="bundle_type" name="pdata[product_type]" value="Bundle" checked>
                                            <span for="bundle_type">Bundle</span>
                                        <?php endif; ?>

                                    </div>
                                    <div class="input-box">
                                        <span class="details" for="category">Category</span>
                                        <select id="category" name="pdata[category]" class="input-box" required>
                                            <?php
                                            $categories = ["Bar & Game Room", "Bedroom", "Decor", "Dining & Kitchen", "Lighting", "Living Room", "Mattresses", "Office", "Outdoor"];

                                            foreach ($categories as $category) {
                                                echo '<option value="' . $category . '" ' . (($row['category'] == $category) ? 'selected' : '') . '>' . $category . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="input-box">
                                        <span class="details" for="manufacturer_cost">Manufacturer Cost</span>
                                        <input type="text" placeholder="Enter Manufacturer Cost" id="manufacturer_cost" name="pdata[manufacturer_cost]" value="<?php echo $row['manufacturer_cost']; ?>" required>
                                    </div>
                                    <div class="input-box">
                                        <span class="details" for="shipping_cost">Shipping Cost </span>
                                        <input type="text" placeholder="Enter Shipping Cost" id="shipping_cost" name="pdata[shipping_cost]" value="<?php echo $row['shipping_cost']; ?>" required>
                                    </div>
                                    <div class="input-box">
                                        <span class="details" for="price">Price</span>
                                        <input type="text" placeholder="Enter Price" id="price" name="pdata[price]" value="<?php echo $row['price']; ?>" required>
                                    </div>
                                    <div class="input-box">
                                        <span class="details" for="status">Status</span>
                                        <select id="status" name="pdata[status]" class="input-box" required>

                                            <?php
                                            if ($row['status'] == "Enabled") {
                                            ?>
                                                <option value="<?php echo $row['status']; ?>" selected><?php echo $row['status']; ?></option>
                                                <option value="Disabled">Disabled</option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value="Enabled">Enabled</option>
                                                <option value="<?php echo $row['status']; ?>" selected><?php echo $row['status']; ?></option>
                                            <?php
                                            }
                                            ?>

                                        </select>
                                    </div>
                                    <div class="input-box">
                                        <span class="details" for="created_at">Created At</span>
                                        <input type="date" id="created_at" name="pdata[created_at]" value="<?php echo $row['created_at']; ?>" required>
                                    </div>
                                    <div class="input-box">
                                        <span class="details" for="updated_at">Updated At</span>
                                        <input type="date" id="updated_at" name="pdata[updated_at]" value="<?php echo $row['updated_at']; ?>" required>
                                    </div>
                                </div>
                                <div class="button">
                                    <input type="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </body>

    </html>
<?php
            }
        } else {
            echo "no record available";
        }
        $conn->close();
    }
?>