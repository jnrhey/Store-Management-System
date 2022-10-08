<?php

require_once('storeclass.php');
$store->add_product($_POST);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Product Name</label>
        <input type="text" name="product_name" id="product_name">
        <label>Product Type</label>
        <select name="product_type" id="product_type">
            <option value="">---</option>
            <option value="Food">Food</option>
            <option value="Clothing">Clothing</option>
            <option value="Tools">Tools</option>
        </select>
        <label>Minimum Stocks</label>
        <input type="number" name="min_stock" id="min_stock" min="1" value="1">
        <button type="submit" name="add_product">Add Product</button>
    </form>

    <a href="products.php">Products</a>
</body>
</html>