<?php

require __DIR__ . "/classes/Products.php";
require __DIR__ . "/classes/User.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online-Shop</title>
</head>
<body>

<header>
   <h1>Elia's Online Shop</h1>
</header>
<main>
   <?php
   
   $product1 = new Product("GameBoy color", 80.00);
   $product2 = new Product("Nintendo Switch", 150.00);

   $user1 = new User("Elia", "Stellati", "eliastellatibvb@gmail.com");
   
   ?>  

   <h2>Available Products</h2>

   
</main>    
</body>
</html>