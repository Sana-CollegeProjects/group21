<html DOCTYPE!>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />
   
     <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css.map">
       <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css.map">
           <link rel="stylesheet" type="text/css" href="css/bootstrap.css.map">
               <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" type="text/css" href="/my-app/www/css/register.css" />
    <title>login</title>
</head>

    <body>
         
    
     <div class="register" >
      <div class="child">
       <img src="img/Shapping.png" >
       <form action="check_user-pass.php" class="input" method="POST" >
      <h1 class="h1"><b>Login</b></h1>
      </b></b><input type="text" name="userName" required="required" placeholder="Enter Username" required /><br>
      <br><br>
      </b></b><input  type="password" name="password" required="required" placeholder="Enter Password" required/><br>
      <br><br>
      <input id="loginBtn" type="submit" value="Login"/>
      
    <p> Don't have an account </p><br/>
    <input class="regGuestBtn" onclick="location.href ='reg2.php';"  type="button" value="Register" /> or 
    <input class="regGuestBtn" onclick="location.href ='product_categories.html';"  type="button" value="Use as Guest" /></p>
      </form></div>
</div>
   

</body>
