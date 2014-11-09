<!DOCTYPE html>
<html>
<head>
	<title>DoReMiHope</title>
	<link rel="stylesheet" type="text/css" href="styles/stylesheet.css">
</head>
<body>
	<div id="header">
		<a href="./index.php">DOREMIHOPE</a>
		<?php include './menu.php';?>
	</div>
	<h2>Contact Us</h2>
	<p>
		Send us an email at info@doremihope.org!
	</p>
	<p>
		You can also find us on Facebook <a href="https://www.facebook.com/Doremihope" target="_blank">here</a>.
	</p>
	<h3>Email Form</h3>
	<form name="input">
		I am interested in donating:<br>
		<input type="radio" name="donate" value="yes">Yes<br>
		<input type="radio" name="donate" value="no">No<br>
		<input type="text" name="email" placeholder="Email" size="75"><br>
		<input type="textarea" name="message" placeholder="Message" size="75"><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
