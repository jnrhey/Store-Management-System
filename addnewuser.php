<?php
require_once('storeclass.php');
$store->add_user();
$userdatails = $store->get_userdata();

if(isset($userdatails)){
    

    if($userdatails['access'] != "administrator"){
        
        header('Location: login.php');
    }

}else{
    header('Location: login.php');

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
    <h1>Add New User/User</h1>
    <div class="container">
        <div class="form container">
            <form action="" method="POST">
                <div class="form-input">
                    <label>Email</label>
                    <input type="email" name="email" id="email" autocomplete="off">
                </div>
                <div class="form-input">
                    <label>Password</label>
                    <input type="password" name="password" id="password" autocomplete="off">
                </div>
                <div class="form-input">
                    <label>First Name</label>
                    <input type="text" name="fname" id="fname" autocomplete="off">
                </div>
                <div class="form-input">
                    <label>Last Name</label>
                    <input type="text" name="lname" id="lname" autocomplete="off">
                </div>
                <button type="submit" name="add">Add User</button>
            </form>
        </div>
    </div>
</body>
</html>