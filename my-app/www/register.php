<?php

ob_start();
$host="127.0.0.1"; // Host name 
$username="dany753"; // Mysql username 
$password=""; // Mysql password 
$db_name="USER_DB"; // Database name 
$tbl_name="users"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die(mysql_error());
echo "Connected to MySQL<br />";
mysql_select_db("$db_name") or die(mysql_error());
echo "Connected to Database<br />";

   //require_once('ConnectRegphp.php');
  if(isset($_POST) & !empty($_POST)){
      
      $username = trim($_POST["userName"]);
     // $username = mysqli_real_escape_string($con, trim($_POST["username"]));
      $email = trim($_POST["userEmail"]);
      //$email = mysqli_real_escape_string($conection, $_POST['email']) ;
      $password = md5($conection, $_POST['userPass']) ;


     
//{
    $sql = "INSERT INTO users 
    VALUES ('".$_POST["userName"]."','".$_POST["userEmail"]."','".$_POST["userPass"]."')";

    $result = mysql_query(/*$conn,*/$sql);}
    
    if($result){
    echo 'You have successfully registered';
            }
    else{
        echo 'Unable to register';
       
}


?>