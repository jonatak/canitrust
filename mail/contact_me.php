<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

// create email body and send it
$to = 'contact@canitrust.fr'; // ****PUT YOUR EMAIL ADDRESS HERE****
$email_subject = "CaniTrust demande de contact:  $name";
$email_body = "Name: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@canitrust.fr\n"; // ****ENTER WHO YOU WANT THE MESSAGE TO BE FROM HERE****
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
