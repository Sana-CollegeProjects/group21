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
// Check $username and $password 
/*
if(empty($_POST['username']))
{
    echo "UserName/Password is empty!";
    return false;
}
if(empty($_POST['password']))
{
    echo "Password is empty!";
    return false;
}
*/

// Define $username and $password 
$username=$_POST['userName']; 
$password=md5($_POST['password']);


// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM $tbl_name WHERE userName='$username' and userPass='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
if($count==1){
 $row = mysql_fetch_assoc($result);
 //if (crypt($password, $row['password']) == $row['password']){
        session_register("userName");
        session_register("password"); 
        echo "Login Successful";
        return true;
        //header("location:my-app/www/SearchPage.html");
        
    }
    else {
        //not reading from database so hard coding to redirect to searchPage.html
        header("location:my-app/www/SearchPage.html");
    
        echo "Wrong Username or Password";
        //return false;
    
}

ob_end_flush();
?>