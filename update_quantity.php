<?php

  $product_id = isset($_GET['id']) ? $_GET['id'] : 1;
  $quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "";

  $quantity=$quantity<=0 ? 0 : $quantity;


  include 'config/database.php';

 
  include_once "objects/cart_item.php";

  $database = new Database();
  $db = $database->getConnection();


  $cart_item = new CartItem($db);

  $cart_item->user_id=1; 
  $cart_item->product_id=$product_id;
  $cart_item->quantity=$quantity;


  if($cart_item->update()){
     
      header("Location: cart.php?action=updated");
  }else{
      header("Location: cart.php?action=unable_to_update");
  }
?>
