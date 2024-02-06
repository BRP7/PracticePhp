<?php
include 'sql/connection.php';
include  'sql/functions.php';

// Fetch all categories from the database
$query = selectQuery('ccc_category');
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
</head>
<body>

<h2>Category List</h2>

<ul>
    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['name']}</li>";
    }
    ?>
</ul>

</body>
</html>
