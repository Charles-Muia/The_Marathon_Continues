<?php
//code for the contact form in the contact us page

$name = $_POST ['name'];
$email = $_POST ['email'];
$subject = $_POST ['subject'];
$message = $_POST ['message'];


$email_from = 'email domain name';

$email_subject = 'Subject: ';

$email_body =    "Sender's Name:  $name. \n".
                 "Sender's Email:  $email .\n".
                 "Sender's Subject:  $subject .\n".
                 "Sender's Message:  $message . \n";

$to = 'Charles.K.Muia@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location .Contact.php");

?>






