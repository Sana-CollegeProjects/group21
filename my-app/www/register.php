<?php
 ob_start();
 session_start();
 if (isset($_SESSION['user']) != "") {
     
 }
 
 include_once 'dbconnect.php';
 b
$error = false;

if (isset($_POST['button-signup'])) {
 
     $name = trim($_POST['name']);
     $name = strip_tags($name);
     $name = htmlspecialchars($name);
 
     $email = trim($_POST['email']);
     $email = strip_tags($email);
     $email = htmlspecialchars($email);
 
     $pass = trim($_POST['pass']);
     $pass = strip_tags($pass);
     $pass = htmlspecialchars($pass);
 
     if (empty($name)) {
        $error = true;
         $nameError = "Please enter your username.";
     } else if (strlen($name) < 3) {
         $error = true;
         $nameError = "Username must contains atleat 3 characters.";
   } else if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $error = true;
         $nameError = "Name must contain alphabets and space.";
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
             $emailError = "Provided Email is already in use.";
         }
     }
 
     if (empty($pass)) {
         $error = true;
        $passError = "Please enter password.";
     } else if (strlen($pass) < 6) {
         $error = true;
         $passError = "Password must contain 6 characters.";
     }
 
 
     $password = hash('Group21', $pass);
 
 
     if (!$error) {
 
         $query = "INSERT INTO users(userName,userEmail,userPass) VALUES('$username','$email','$password')";
         $res = mysqli_query($connection, $query);
 
         if ($res) {
             $errTyp = "success";
             $errMSG = "Register Successfully ";
             unset($name);
             unset($email);
             unset($pass);
         } else {
             $errTyp = "danger";
             $errMSG = "oops unable to connect";
         }
     }
 }