<?php
$gmail = $_Post['gmail'];

$email_from = 'ethanmthomas17@gmail.com';
$email_subject = "New Form Submission";
$email_body = "Gmail: $name.\n";


$to = "ethanmthomas17@gmail.com";

$headers = "From: $email_from \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: index.html");
?>