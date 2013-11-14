<?php 

//variables passed from AJAX
//are ['stuff'] from the ajax variabls or the name of the inputs
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//email variables
//you need to change this before live
$to = "KerickTatiana@gmail.com";
$sub = $subject;

//html message
$msg = "
	<html>
		<head>" . $subject . "</head>
		<body>
			<p>You have a message from: " . $name . "</p>
			<p>reply to this person at: " . $email . "</p>
			<br />
			<p>----Beginning of message---</p>
			<br />
			<p>" . $message . "</p>
			<br />
			<p>----End of message----</p>
		</body>
	</html>
";

//setting content-type
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n"; //I have no idea what charset portion is
$headers .= "From: " . $email . "\r\n";

//send function
mail($to, $sub, $msg, $headers);

?>