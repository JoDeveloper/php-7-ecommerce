<?php
  
  $product_id = isset($_GET['id']) ? $_GET['id'] : "";


  include 'config/database.php';


  include_once "objects/cart_item.php";

  $database = new Database();
  $db = $database->getConnection();

  $cart_item = new CartItem($db);

 
  $cart_item->user_id=1; 
  $cart_item->product_id=$product_id;
  $cart_item->delete();

  header('Location: cart.php?action=removed&id=' . $id);
?>
