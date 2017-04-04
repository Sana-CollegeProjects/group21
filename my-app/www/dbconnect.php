<?php

define('db_host', '127.0.0.1');
define('db_name', 'register');
define('db_user','root');
define('db_password','');



$con=mysql_connect(db_host,db_user,db_password) or die("Database failed to connect to MYSQL: " . mysql_error()); 
$db=mysql_select_db(db_name,$con) or die("Database failed to connect to MYSQL: " . mysql_error());
if (mysqli_connect_errno($con)) { echo "Database failed to connect to MYSQL: " . mysqli_connect_error(); } 
else 
{
echo “Database Connected Successfully”;
} 

?>


