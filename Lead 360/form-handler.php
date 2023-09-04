<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'fake-Lead360@xxx.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n" .
    "User Name: $visitor_email.\n" .
    "User Name: $subject.\n" .
    "User Name: $message.\n";

$to = 'fathima.20200693@iit.ac.lk';

$heards = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html")

    ?>