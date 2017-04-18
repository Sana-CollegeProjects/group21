<html DOCTYPE!>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />
   
   
    <link rel="stylesheet" type="text/css" href="my-app/www/css/register.css" />
    <title>login</title>
</head>

    <body>
         
    
     <div class="register" >
      <div style=" background-color: gray; position: absolute;   width: 400px;  height: 500px;   left: 35%;   margin: 0 auto;  margin-top:10px;" class="child">
       <img src="my-app/www/img/Shapping.png" >
       <form action="check_user-pass.php" class="input" method="POST" >
      <h1 class="h1"><b>Login</b></h1>
      </b></b><input style="height:30px; width: 200px; font-size:12pt; font-family: Helvetica Neue;" type="text" name="userName" required="required" placeholder="Enter Username" required /><br>
      <br><br>
      </b></b><input style="height:30px; width: 200px; font-size:12pt; font-family:Helvetica Neue;" type="password" name="password" required="required" placeholder="Enter Password" required/><br>
      <br><br>
      <input style="height:40px; width: 110px; font-size:13pt; color:black; font-family:Helvetica Neue; cursor: pointer; background-color: gray;"  type="submit" value="Login"/>
      
    <p style="text-align:center;"> Don't have an account </p><br/>
    <input class="regGuestBtn" onclick="location.href ='my-app/www/reg2.html';"  type="button" value="Register" /> or 
    <input class="regGuestBtn" onclick="location.href ='my-app/www/product_categories.html';"  type="button" value="Use as Guest" /></p>
      </form></div>
</div>
   

</body>
