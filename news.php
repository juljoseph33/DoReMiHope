<!DOCTYPE html>
<html>
<head>
	<title>DoReMiHope</title>
	<link rel="stylesheet" type="text/css" href="styles/stylesheet.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
	<div id="header">
		<a href="./index.php"><span id="doremi">DOREMIHOPE</span></a>
		<img alt="logo" src="Img/logocircle.png">

		<div class="menu"><?php include './menu.php';?></div>
	</div>
	<div id="news">
		<h2>News</h2>
		<div id="ticker"><?php include 'ticker.html';?></div>
	</div>
	<h2>Community Forum</h2>
	<a class="muut" href="https://muut.com/i/DoReMiHope">Your Community Title</a>
	<script src="//cdn.muut.com/1/moot.min.js"></script>
</body>
</html>
