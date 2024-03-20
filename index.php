<?php
include('db.php');

$mysql = "SELECT id, name, price FROM products";
$result = mysqli_query($conn, $mysql);

$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Table Project</title>
</head>

<body>
    <div class="table-container">
        <table class="table">
            <tbody>
                <tr>
                    <th colspan="2" class="table-header">Products</th>
                </tr>
                <tr>
                    <th class="table-header">Name</th>
                    <th class="table-header">Price</th>
                </tr>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <th class="table-item"><?php echo $product['name']; ?></th>
                        <th class=" table-item"><?php echo '$' . $product['price']; ?></th>
                    </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </div>

</body>

</html>