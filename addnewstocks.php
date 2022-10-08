<?php
require_once('storeclass.php');
$id = $_GET['id'];
$product = $store->get_single_product($id);
$store->add_stocks($_POST);
$userdatails = $store->get_userdata();



if(isset($userdatails)){
    

    if($userdatails['access'] != "administrator"){
        
        header('Location: login.php');
    }

}else{
   

}

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
    <form  method="post">
        <label>Brand Name</label>
        <input type="text" name="brand_name" id="brand_name" require>
        <label>Qty</label>
        <input type="number" name="qty" min="1" id="qty" value="1">
        <label>Price</label>
        <input type="text" name="price" id="price">
        <label>Batch Number</label>
        <input type="text" name="batch_number" id="batch_number">
        <input type="hidden" name="product_id" value="<?= $id?>">
        <input type="hidden" name="added_by" value="<?= $userdatails["fullname"];?>">
        <button type="submit" name="add_stock">Add Stock</button>
    </form>
</body>
</html>