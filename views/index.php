<!DOCTYPE html>
<html >
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Push Notifications</title>    
    <link rel="stylesheet" href="<?php echo PN_BASE_URL; ?>assets/css/main.css"></script>    
  </head>
  <body>
    <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		<span class='error-msg'><?php echo $error_message; ?></span>
		<form class="form" action="" method="POST">
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" id="login-button">Login</button>
		</form>
	</div>
	<ul class="bg-bubbles">
	  <li></li>
	  <li></li>
	  <li></li>
	  <li></li>
	  <li></li>
	  <li></li>
	  <li></li>
	  <li></li>
	  <li></li>
	  <li></li>
	</ul>
    </div>
    <script type="text/javascript" src="<?php echo PN_BASE_URL; ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo PN_BASE_URL; ?>assets/js/jquery.min.js"></script>
  </body>
</html>