<?php

require_once('storeclass.php');
$products = $store->get_products();


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
<body class="container bg-dark text-white">


 <?php foreach($products as $product){?>
<table class="table-dark">
    <tr class="table-dark">
        <td class="table-dark"><a href="product_details.php?id=<?=$product['ID'];?>"><?=$product['product_name'];?> | <?= $product['min_stocks'];?></a></td>
</tr>
</table>
<?php } ?>

</body>
</html>