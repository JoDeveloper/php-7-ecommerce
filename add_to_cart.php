<?php
// parameters from the add to cart button
$product_id = isset($_GET['id']) ? $_GET['id'] : "";
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : 1;

// make quantity a minimum of 1
$quantity=$quantity<=0 ? 1 : $quantity;

// connect to database
include 'config/database.php';

// include object
include_once "objects/cart_item.php";

$database = new Database();
$db = $database->getConnection();


$cart_item = new CartItem($db);

$cart_item->user_id=1; 
$cart_item->product_id=$product_id;
$cart_item->quantity=$quantity;

echo $cart_item->user_id;
echo $cart_item->product_id;
echo $cart_item->quantity;

if($cart_item->exists()){

    header("Location: cart.php?action=exists");
}else{
 
    if($cart_item->create()){

        header("Location: products.php?id={$product_id}&action=added");
    }else{
        header("Location: products.php?id={$product_id}&action=unable_to_add");
    }
}
?>
