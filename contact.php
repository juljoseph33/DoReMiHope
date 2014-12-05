<?php
	$email = "";
	$message = "";
	$donate = "";
	$emailerror = "";
	$messageerror = "";
	$yes = "";
	$no = "";
	$success = TRUE;
	function check_if_radio($answer, $var, $checked) {
        if ($answer == $var) {
            $checked = "checked";
        }
        return $checked;
    }
    if (isset($_POST["submit"])) {
    	$success = FALSE;
    	if (isset($_POST["email"]) && !empty($_POST["email"])) {
    		$email = trim($_POST["email"]);
    	}
    	else {
    		$emailerror .= " Please enter an email.";
    	}
    	if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
            $emailerror .= " This is not a valid email address.";
        }
    	if (isset($_POST["message"]) && !empty($_POST["message"])) {
    		$message = htmlspecialchars(strip_tags(trim($_POST["message"])));
    	}
    	else {
    		$messageerror .= " Please enter a message.";
    	}
    	if (isset($_POST["donate"]) && !empty($_POST["donate"])) {
    		$donate = $_POST["donate"];
    	}
    	$yes = check_if_radio($donate, "yes", $yes);
    	$no = check_if_radio($donate, "no", $no);
    	if (empty($emailerror) && empty($messageerror)) {
            $success = TRUE;
        }
        if($success) { 
            //mail function using email, message, and radio button
            //mail("info@doremihope.org", "Interested in donating: "+$donate, "From: "+$email+"\n\n"+$message);
            mail('jrj85@cornell.edu', 'Interested in donating: '.$donate, 'From: '.$email."\n\n".$message);
            header('Location: thankYouPage.php');
            exit();
        }
    }

?>

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
	<form name="input" method="post">
		I am interested in hearing more about donating:<br><br>
		<input type="radio" id="yes" name="donate" value="yes" <?php echo $yes;?> >Yes
		<input type="radio" id="no" name="donate" value="no" <?php echo $no;?> >No<br><br><br>
		<em id="req">The following fields are required</em><br><br>
		<input type="email" id="email" required name="email" placeholder="Email" size="50" value='<?php echo $email;?>'><br>
		<div class="green"><?php echo $emailerror;?></div><br>
		<textarea name="message" id="message" required placeholder="Message" rows="10" cols="60"><?php echo $message;?></textarea><br>
		<div class="green"><?php echo $messageerror;?></div><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	</div>
</body>
</html>
