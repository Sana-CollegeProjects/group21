
<?php if(!empty($success_message)) { ?>	
		<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
		<?php } ?>
		<?php if(!empty($error_message)) { ?>	
		<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
		<?php } ?> -->





<DOCTYPE html>
<html>
    

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />
   
   
    <link rel="stylesheet" type="text/css" href="css/register.css" />
    <title>Register</title>
    
</head>



<body>
    


    <div class="register">
      
      <div style=" background-color: brown; position: absolute;   width: 400px;  height: 500px;   left: 35%;   margin: 0 auto;  margin-top:10px; " class="child">
       <img src="img/Shapping.png" >
       
       <form class="input" action="register.php" method="post">
      <h1 class="h1"><b>Sign Up</b></h1>
      </b></b><input style="height:30px; width: 200px; font-size:12pt; font-family: Helvetica Neue;" type="text" name="username" required="required" placeholder="Enter Username" required /><br>
      <br>
      </b></b><input style="height:30px; width: 200px; font-size:12pt; font-family:Helvetica Neue;" type="email" name="email" required="required" placeholder="Enter Email" required/><br>
      <br>
      </b></b><input style="height:30px; width: 200px; font-size:12pt; font-family:Helvetica Neue;" type="password" name="psswd" required="required" placeholder="Enter Password" required/><br>
      <br>
      </b></b><input style="height:30px; width: 200px; font-size:12pt; font-family:Helvetica Neue; " type="password" name="psswd" required="required" placeholder="Comfirm Password" /><br>
      <br>
      <input name="button-register" style="height:40px; width: 110px; font-size:13pt; color:black; font-family:Helvetica Neue; cursor: pointer; background-color: gray;"  type="submit" value="Register" />

                                     
                               
      </form>

      </div>

    </div>

</body>
</html>

<!--|--http://mrbool.com/how-to-create-a-sign-up-form-registration-with-php-and-mysql/28675  -->