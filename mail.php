<?php
$name = $_POST['name'];
$email = $_POST['email'];
$major = $_POST['subject'];
$gradyear = $_POST['graduation'];
$formcontent=" From: $name \n;
$recipient = "chelseadeane14@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
