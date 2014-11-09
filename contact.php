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
	<div id="contact">
	<h2>CONTACT US</h2>
	<p>
		Send us an email at <span id="contactemail">info@doremihope.org</span>!
	</p>
	<p>
		You can also find us on Facebook <a href="https://www.facebook.com/Doremihope" target="_blank">here</a>.
	</p><br>
	<h3>Email Form</h3>
	<form name="input">
		I am interested in donating:<br>
		<input type="radio" id="yes" name="donate" value="yes">Yes
		<input type="radio" id="no" name="donate" value="no">No<br><br>
		<input type="email" id="email" name="email" placeholder="Email" size="50"><br><br>
		<textarea name="message" id="message" placeholder="Message" rows="10" cols="80"></textarea><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	</div>
</body>
