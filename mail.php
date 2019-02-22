<?php

$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="$message";
$recipient = "jeremie-soffichiti@gmail.com";
$subject = "Contact Form :" .$_POST['subject'];
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
