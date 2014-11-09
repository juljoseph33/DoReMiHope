<!DOCTYPE html>
<html>
<head>
	<title>DoReMiHope</title>
	<link rel="stylesheet" type="text/css" href="styles/stylesheet.css">
</head>
<body>
	<div id="header">
		<a href="./index.php"><span id="doremi">DOREMIHOPE</span></a>
		<img src="Img/logocircle.png">

		<div class="menu"><?php include './menu.php';?></div>
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
		<input type="email" name="email" placeholder="Email" size="50"><br>
		<textarea name="message" placeholder="Message" rows="10" cols="90"></textarea><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
