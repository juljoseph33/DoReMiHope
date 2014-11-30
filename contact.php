<!DOCTYPE html>
<html>
<head>
	<title>DoReMiHope</title>
	<link rel="stylesheet" type="text/css" href="styles/stylesheet.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="JS/backstretch.js"></script>
	<script src="JS/style.js"></script>
</head>
<body class="repeat">
	<div id="header">
		<a href="./index.php"><span id="doremi">DOREMIHOPE</span></a>
		<img alt="logo" src="Img/logocircle.png">

		<div class="menu"><?php include './menu.php';?></div>
	</div>
	<div id="contact">
	<h2>HOW YOU CAN HELP</h2>
	<p id="help">We are open to donations of any amount to help provide for more classes, teachers, and materials for the kids.
	Let's bring smiles to those children, brighten their futures, and branch out to other cities and countries! 
	If you are interested in donating, please fill out the form below so we can contact you with more details! Thank you!</p>
	<h2>CONTACT US</h2>
	<p>
		Send us an email at <span id="contactemail">info@doremihope.org</span>!
	</p>
	<p>
		You can also find us on Facebook <a href="https://www.facebook.com/Doremihope" target="_blank">here</a>.
	</p>
<!-- 	<a href="https://www.facebook.com/Doremihope" target="_blank"><img src="Img/facebook.png"></a> -->
	<h3>Email Form</h3>
	<form name="input" method="post" action="thankYouPage.php">
		I am interested in donating:<br><br>
		<input type="radio" id="yes" name="donate" value="yes">Yes
		<input type="radio" id="no" name="donate" value="no">No<br><br>
		<input type="email" id="email" required name="email" placeholder="Email" size="50"><br><br>
		<textarea name="message" id="message" required placeholder="Message" rows="10" cols="80"></textarea><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	</div>
</body>
