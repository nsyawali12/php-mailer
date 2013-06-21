<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$website = $_POST['website'];
$message = $_POST['message'];
 
$to = 'damzaky@gmail.com';
$subject = "New message from $name";
 
if(empty($name) OR empty($email) OR empty($message)) {
 echo "Fill in all fields.";
} elseif($user_answer != $real_answer) {
	echo "Math question was incorrect, please try again";
} else {
	mail($to, $subject, $message, "From: $email");
	echo "Message sent";
}
?>
