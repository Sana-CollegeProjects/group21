<?php
require('reg2.php');
$connection = mysqli_connect('127.0.0.1', 'root', '', 'USER_DB');
   if(!$conection){
       die("Unsuccessfully to Connect to Database" . mysqli_error($conection));
   }
   $select_db = mysqli_select_db($conection, 'USER_DB');
     if(!$isset_db){
       die("Database Connected Successfully" . mysqli_error($conection));
   
   }


  
?>

