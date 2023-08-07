<?php
$name = $_POST['name'];
$visitor = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@mywebsite.com';
$email_subject = "New From Submission";

$email_body = "User Name: $name.\n"
                "User Email: $visitor.\n"
                "Subject: $subject.\n"
                "User Message: $message.\n"


$to = 'simransingh9876rajgir@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to, $email_subject,$email_body,$headers);

header("Location: contact.html");

?>