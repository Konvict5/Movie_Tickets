<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>Created by Toni and Svetli</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="all" />.
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<!--[if IE 6]>
		<link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />
	<![endif]-->
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-func.js"></script>

</head>
<body>
<!-- Shell -->
<div id="shell">
	<!-- Header -->
	<div id="header">
		<h1 id="logo"><a href="#">Movie Hunter</a></h1>
		<div class="social">
			<span>FOLLOW US ON:</span>
			<ul>
			    <li><a class="twitter" href="#">twitter</a></li>
			    <li><a class="facebook" href="#">facebook</a></li>
			    <li><a class="vimeo" href="#">vimeo</a></li>
			    <li><a class="rss" href="#">rss</a></li>
			</ul>
		</div>
		<!-- Navigation -->
		<div id="navigation">
			<ul>
			    <li><a class="active" href="<?php echo base_url()?>index.php/form/buy_tickets">HOME</a></li>
			    <li><a href="<?php echo base_url()?>index.php/form/form_view">LOGIN</a></li>
			    <li><a href="#">IN THEATERS</a></li>
			    <li><a href="#">COMING SOON</a></li>
			    <li><a href="#">CONTACT</a></li>
			    <!-- <li><a href="#">ADVERTISE</a></li> -->
			</ul>
		</div>
		<!-- end Navigation -->
		<!-- Sub-menu -->
		<div id="sub-navigation">
			<?php 
			if (!empty($_SESSION['username'])) {
				echo "<b><font color='#2DC88B'>Hello"."<b><font size='4'> ".$_SESSION['username']."</b></font> ";
echo "<a href='first'>Edit Profile</a>";
echo "<p>First name - ".$_SESSION['first_name']."</p></font></b>";
echo "<p>".anchor('form/logout', 'LOGOUT')."</p>";
			}else{
				echo "<font color='#FF0101'>WELLCOME GUEST !!!</font>";
			}
			?>
			<!-- <ul>
			    <li><a href="#">SHOW ALL</a></li>
			    <li><a href="#">LATEST TRAILERS</a></li>
			    <li><a href="#">TOP RATED</a></li>
			    <li><a href="#">MOST COMMENTED</a></li>
			</ul> -->
			<div id="search">
				<form action="home_submit" method="get" accept-charset="utf-8">
					<label for="search-field">SEARCH</label>					
					<input type="text" name="search field" value="Enter search here" id="search-field" title="Enter search here" class="blink search-field"  />
					<input type="submit" value="GO!" class="search-button" />
				</form>
			</div>
		</div>
		<!-- end Sub-Menu -->
		
	</div>