<?php
  session_start();

  if(isset($_POST['item_src']))
  {
    $_SESSION['name'][]=$_POST['item_name'];
    $_SESSION['price'][]=$_POST['item_price'];
    //$_SESSION['brand'][]=$_POST['item_brand'];
    echo count($_SESSION['name']);
    exit();
  }

?>