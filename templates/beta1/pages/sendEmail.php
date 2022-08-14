<?php
if(isset($_POST["submit"])){
	$name=$_POST["name"];
	$email=$_POST["email"];	$phone=$_POST["phone"];	
	$to= 'boomingbiomedicals@gmail.com';
$subject = 'Message from web user';
$text=$_POST["message"];

$message = "<b>Email From : ".$name."</b>";
$message .= "<b>Phone No : ".$phone."</b>";
$message .= "<h1>Message : ".$text."</h1>";


$headers = 'From: '.$email.' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


mail($to, $subject, $message, $headers);
echo "message send successfully";
}
?> 