<?php
include_once('storeclass.php');
$total = count($_POST['stock_id']);
$insert_sale = $store;

for($i = 0; $i < $total; $i++){

  $store->insert_sales($_POST['stock_id'][$i], $_POST['qty'][$i], $_POST['price'][$i], $_POST['product_id'], $_POST['customer_name']); 
  

}

header("Location: ".$_SERVER['HTTP_REFERER']);
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
  
</body>
</html>