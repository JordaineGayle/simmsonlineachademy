<?php

?>
<!DOCTYPE html>
<html>
    
    <head>
	     <title>Simms Online Academy</title>		 
		 
		 <!----------META---------->
		 <meta http-equiv="Content-Type" content="text/html; charset-utf-8">
		 
		 <link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">
		 <link rel="stylesheet" href="css/login.css" type="text/css">
		 
		 <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
		 
		 <script type="text/javascript" src="js/login.js"></script>
    </head>
    
    <body style="background-image:url(image/bakground.png);background-size:100%;">
        <header>
            <div class="loginheader">
            <a href="index.html"><img  src="image/logo.png" width="115px" ></a>
            </div>
        </header>
        
        <div class="choice">
              <div class="policy" style="overflow:auto">
            <h2>Choose Account Type</h1>
            
            <div id="loginCoach" class="Coach" >
                <h2>Coach</h2>
            </div>
            <div id="loginStudent" class="Student">
                <h2>Student</h2>
            </div>
          
        </div>
        </div>
        
        <div class="login">
            <h1>Welcome</h1><br><br>
            <from>
            <div class="inputholder"><input type="text" name="username" placeholder="Username / Email"></div><br>
            <div class="inputholder"><input type="text" name="password" placeholder="Password"><a href="#">Forget Password</a></div>
            <div class="inputholder"><input type="text" name="type" disabled id="type" ></div>
            <a class="loginButton">Log into Your Account</a>
            <a class="loginRegister" href="register.php">Don't have an account? <strong>Sign Up</b></strong>
            </from>
        </div>
    </body>
    
</html>