<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$email_from = 'kovacscs889@gmail.com'

$email_subject = "Új céges üzenet"

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "subject: $phone.\n".
                "User Message: $message.\n".
$to = 'intranethukapcsolat@gmail.com';


$headers ="From  $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);


header("Location: weblap.html");






?>