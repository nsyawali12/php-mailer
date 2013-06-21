<?php
$name = $_POST['name'];
$email = $_POST['email'];
$website = $_POST['website'];
$message = $_POST['message'];
$formcontent=" From: $name \n\n Website: $website \n\n Subject: $subject \n\n Message: $message";
$recipient = "damzaky@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
 
?>

<html>

<body>

<div style="font-size: 20px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    top: 100px;
    width: 450px;">Thanks for contacting us we will launch you shortly....</div>

<html>

<body>
