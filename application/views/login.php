
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
<head>
<title>Unique Login Form Flat Responsive widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Unique Login Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files  -->
<link href='//fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
<!-- /font files  -->
<!-- css files -->
<link href="../css/login-style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
</head>
<body>
<h1>Unique Login Form</h1>
<div class="log">
	<div class="content1">
		<h2>Sign In Form</h2>
		<?php echo form_open('http://localhost/projects/Movie_Tickets/form/check'); ?>

		<?php echo form_error('user_name'); ?>
			<input type="text" name="user_name" value="<?php echo set_value('user_name'); ?>" placeholder="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}">
			<input type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}">
			<div class="button-row">
				<input type="submit" class="sign-in" value="Sign In">
				<input type="reset" class="reset" value="Reset">
				<div class="clear"></div>
			</div>
		<?php echo form_close(); ?>
	</div>
	<div class="content2">
		<h2>Sign Up Form</h2>
		<form>
			<input type="text" name="userid" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'NAME AND SURNAME';}">
			<input type="tel" name="usrtel" value="PHONE" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PHONE';}">
			<input type="email" name="email" value="EMAIL ADDRESS" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'EMAIL ADDRESS';}">
			<input type="password" name="psw" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}">
			<input type="submit" class="register" value="Register">
		</form>
	</div>
	<div class="clear"></div>
</div>
<div class="footer">
	<p>© 2016 Unique Login Form. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
</div>

</body>
</html>