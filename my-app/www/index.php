<?php
$mysql_hostname = "127.0.0.1"; // where the saver located 
$mysql_username = "root"; //server username
$mysql_password = ''; //server user password
$db = "registerdb";

$db = mysqli_connect( $mysql_hostname, $mysql_username, $mysql_password, $db) or die("Unable to cnnect to database"); // conecting database



 mysql_select_db( $mysql_database,  $db)
 
or die("Database doesn't exist");
  
?>