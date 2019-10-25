<?php

  include_once "config/database.php";
  include_once "objects/cart_item.php";

  // get database connection
  $database = new Database();
  $db = $database->getConnection();


  $cart_item = new CartItem($db);


  $cart_item->user_id=1; 
  $cart_item->deleteByUser();

  $page_title="Thank You!";


  include_once 'layout_head.php';

  echo "<div class='col-md-12'>";
     
      echo "<div class='alert alert-success'>";
          echo "<strong>Your order has been placed!</strong> Thank you very much!";
      echo "</div>";
  echo "</div>";


  include_once 'layout_foot.php';
?>
