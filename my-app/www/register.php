<?php


    
    
    
    


 ob_start();
 session_start();
 if (isset($_SESSION['user']) != "") {
     
 }
 
 include_once 'dbconnect.php';
 
$error = true;

if (isset($_POST['button-register'])) {
 
     $username = trim($_POST['name']);
     $username = strip_tags($name);
     $username = htmlspecialchars($name);
 
     $email = trim($_POST['email']);
     $email = strip_tags($email);
     $email = htmlspecialchars($email);
 
     $password = trim($_POST['pass']);
     $password = strip_tags($pass);
     $password = htmlspecialchars($pass);
 
     if (empty($username)) {
        $error = true;
         $usernameError = "Please enter your username.";
     } else if (strlen($username) < 3) {
         $error = true;
         $usernameError = "Username must contains atleat 3 characters.";
   } else if (!preg_match("/^[a-zA-Z ]+$/", $username)) {
        $error = true;
         $usernameError = "Name must contain alphabets and space.";
     }
 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $error = true;
         $emailError = "Please enter valid email address.";
     } else {
 
         $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
         $result = mysqli_query($conn, $query);
         $count = mysqli_num_rows($result);
         if ($count != 0) {
             $error = true;
             $emailError = "The Email is already in use.";
         }
     }
 
     if (empty($password)) {
         $error = true;
        $passError = "Please enter password.";
     } else if (strlen($password) < 6) {
         $error = true;
         $passError = "Password must contain 6 characters.";
     }
 
 
     $password = hash('Group21', $password);
 
 
     if (!$error) {
 
         $query = "INSERT INTO users(userName,userEmail,userPass) VALUES('$username','$email','$password')";
         $res = mysqli_query($connection, $query);
 
         if ($res) {
             $errTyp = "Successful";
             $errMSG = "Register Successfully ";
             unset($name);
             unset($email);
             unset($pass);
         } else {
             $errTyp = "Danger";
             $errMSG = "oops unable to connect";
         }
     }
 }
 
 ?>