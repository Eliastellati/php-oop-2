<?php

require __DIR__ . "/classes/Products.php";
require __DIR__ . "/classes/User.php";

$products = [
    $product1 = new Product("GameBoy color", 80.00),
    $product2 = new Product("Nintendo Switch", 150.00)
 ];


 $user1 = new User("Elia", "Stellati", "eliastellatibvb@gmail.com", 0);
 var_dump($user1,  $pruduct1, $product2)

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
   <h2>Available Products</h2>
   <div class="products">
   <?php foreach($products as $product) { ?>
     <div class="card">
       <h5><?=$product->name?></h5>
       <h6>
         <?= $product->price?>
       </h6>
     </div>
   <?php } ?>
   
   </div>
   
</main>    
</body>
</html>