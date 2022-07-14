<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Haunt Signup Form Responsive Widget Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Haunt Signup Form Responsive, Signup form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="js/submit.js"></script>
</head>
<body>
<h1> Signup Form</h1>
<div class="container">
<form action="" method="post">

<div class="agile_ihj">

<div class="clear"></div>
</div>

<div class="agileinfo">
<input type="text" name="name" placeholder="First Name" id= "fname" required="">
</div>
<small id="name_error_empty" style="color:white">This field cannot be empty</small>
<div class="agileinfo">
<input type="text" name="name" placeholder="Last Name" id= "lname" required="">
</div>
<small id="name_error_empty2" style="color:white">This field cannot be empty</small>
<div class="agileinfo">
<input type="email" name="email" placeholder="Email" id= "email" required="">
</div>
<small id="email_error" style="color:white">Provide a valid email</small>
<div class="agileinfo">
<input type="Password" name="password" placeholder="Password" id= "password" required="">
</div>
<small id="pass_error_num" style="color:white">Provide a valid emial</small><br>
<small id="pass_error_len" style="color:white">Password should be atleast 5 characters</small>
<div class="agileinfo">
<input type="password" name="password" placeholder="Confirm Password" id= "conpass" required="">
</div>
<small id="pass_error_confirm" style="color:white">Password dont match</small>
<div class="agile_par">
<p>By signing up I agree to <a href="#">Terms of Service</a> and <a href="#">Private Policy</a></p>
</div>
<div class="w3l_but">
<button type="submit" onclick="submitSignUp()">REGISTER</button>
</div>
</form>
<div class="wthree_down">
<h3>Already had an Account please Login</h3>
</div>
<div class="w3agile_side">
<div class="main">
    <div class="panel">
        <a href="#login_form" id="login_pop">LOGIN</a>
    </div>
</div>
<!-- popup form #1 -->
<a href="#x" class="overlay" id="login_form"></a>
   <div class="popup">
     <h2>Welcome</h2>
     <p>Please enter your Email and Password here</p>
	 <form action="" method="post">
   <div>
      <input type="email" id="email1" name="name" placeholder="Username" required="">
   </div>
   
   <div>

   <input type="password" id="pass1" name="name" placeholder="Password" required="">
   <small id="email_error1" style="color:white">Email or password incorrect</small>
   </div>
   <a onclick="onLogin()"><input type="submit" value="LOGIN" /></a>
   <a class="close" href="#close"></a>
   </form>
</div>
</div>
<div class="clear"></div>
</div>
<div class="footer">
 <p>&copy; Haunt Signup Form  2018. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="blank">W3layouts</a></p>
 </div>
</body>
</html>