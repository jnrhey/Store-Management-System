<?php
require_once('storeclass.php');
$store->login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="bg-dark text-center">
    <main class="position-absolute top-50 start-50 translate-middle w-50">
        <div class="form container">
            <form action="" method="POST">
                <div class="form-input form-floating mb-3">
                <input type="email" name="email" id="email" autocomplete="off" class="form-control" placeholder="username@example.com">    
                <label for="floatingInput">Username</label>
                </div>
                <div class="form-input form-floating mb-3">
                <input type="password" name="password" id="password" autocomplete="off" class="form-control" placeholder="username@example.com" required>    
                <label for="floatingInput">Password</label>
                </div>
                <button type="submit" name="submit" class="btn btn-outline-light">Login</button>
            </form>
        </div>
     </main>
</body>
</html>


