<?php

require_once('storeclass.php');
$id = $_GET['id'];
$product = $store->get_single_product($id);
$stocks = $store->view_all_stocks($id);
$userdatails = $store->get_userdata();
$inventory_array = array();


if(isset($userdatails)){
    

    if($userdatails['access'] != "administrator"){
        
        header('Location: login.php');
    }

}else{
   
return;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="container bg-dark">
    
    
    <div class="bg-dark text-white">
    <h1>Product Name : <?= $product["product_name"];?></h1>
    <h2>Category : <?= $product["product_type"];?></h2>
    <h3>Min Stock : <?= $product["min_stocks"];?></h3>
    <br>
 
    <hr>
    <table class="table table-dark table-hover table-bordered table-sm">
        <h2>Available Product Items</h2>
                <thead>
                    <tr>
                        <th class="col">Action</th>
                        <th class="col">Base Stock Qty</th>
                        <th class="col">SRP</th>
                        <th class="col">Sales Qty</th>
                        <th class="col">Total Sales</th>
                        <th class="col">Qty Remaining</th>
                        <th class="col">Status</th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">
                <?php if(is_array($stocks)){?> 
                    <?php foreach($stocks as $stock){?>          
                        <?php $sum = $stock['qty'] - $stock['sale_qty'];
                        $inventory_array[] = $sum;

                        ?>
                        <tr class="<?= ($sum == 0) ? 'disabledbtn' : ''; ?> ">
                            <td>
                                <div id="parent_<?= $stock['ID']?>">
                                    <label><?= $stock['vendor'];?> : <?= $stock['qty'];?></label>
                                    <input type="number" name="qty[]" min="1" max="<?= $sum?>" value="1">
                                    <input type="hidden" name="price[]" value="<?= $stock['price'] ?>">
                                    <input type="hidden" name="stock_id[]" value="<?= $stock['ID'] ?>">
                                    <button type="button" class="add_cart">Add to Cart</button>
                                    <button type="button" class="remove_cart" disabled id="<?= $stock['ID'] ?>">Remove</button>
                                </div>
                            </td>

                            <td class="table-dark"><?= $stock['qty'];?></td>
                            <td class="table-dark"><?= sprintf('%01.2f',$stock['price']);?></td>
                            <td class="table-dark"><?= $stock['sale_qty']?></td>
                            <td class="table-dark"><?= sprintf('%01.2f',$stock['TotalSales']);?></td>
                            <td class="table-dark"><?= $sum?></td>
                            <td class="table-dark">
                                <?= ($sum == 0) ? 'Out of Stock' : 'Available'; ?>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?> 
                </tbody>
        </table>
       

        <h4>Total Inventory: <?= $product['total']?></h4>
        <h4>Actual Inventory : <?= array_sum($inventory_array); ?></h4>
       
        <h4>Status:  <?php 
        if (array_sum($inventory_array) <= $product['min_stocks'] && array_sum($inventory_array) != 0){
            echo 'Low Inventory';
        }elseif(array_sum($inventory_array) == 0){
            echo 'Out of Stocks';
        }else{
            echo "Available";
        }
        ?>
        </h4>
    <br>
    <a href="products.php">Products</a>
    <a href="addnewstocks.php?id=<?= $id?>">Add New Stocks</a>

    <hr>
    <h2>Cart</h2>

        <form action="checkout.php" method="POST" id="check_out_form">
                <input type="hidden" name="customer_name" value="<?= $userdatails['fullname']?>">
                <input type="hidden" name="product_id" value="<?= $product['ID'];?>">
                <button type="submit" id="checkoutbtn">Proceed to Checkout</button>

        </form>

        <script src="js/index.js"></script>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</div>
</body>
</html>