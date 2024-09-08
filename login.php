<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center> <br><img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Blinkit-yellow-rounded.svg" height="100"> </center>
	<h1 align="center"> <b> India's last Minute App </b> </h1>
  <div class="header">
  	<h2>Login </h2>
  </div>
	 <a href="https://play.google.com/store/search?q=blinkit&c=apps&hl=en-IN"><img src="https://play-lh.googleusercontent.com/iFAOCerhyHM1MPE1AQeXZTOPtV8X0Eknk3sCap2cmMVmVgaPREjXviBBj9MoqdKB0Q" style="position:fixed;top:0;left:0" height="100%" width="28%"></a>
	 <img src="https://play-lh.googleusercontent.com/4Dzd6nzvtpt1AGKBU_IANwLWjwGNsJZjEgCP_s7bkDqGA7HHp0JBdN5YcK0NlDXifM4=w1052-h592-rw" style="position:fixed;top:0;right:0" height="100%" width="28%">
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
	
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNot yet a member? <a href="register.php">Sign up</a>
  	</div>
  	<p>
  		 <br><center> <span>By continuing, you agree to our <a href="https://blinkit.com/terms"><em> <u>Terms of service</u></em></a> & <a href="https://blinkit.com/privacy"><em><u>Privacy policy</em></u></a> </span> </center> 
	
  	</p>
  </form>
 
</body>
</html>