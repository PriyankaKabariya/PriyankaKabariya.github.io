<?php

$name=$_POST['name'];
$vemail=$_POST['vemail'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from="priyankakabariya13@gmail.com";
// $email_subject="New Form Submission";
$email_body="User Name: $name.\nUser Email: $vemail.\nUser Message: $message.\n";

$to="priyankakabariya13@gmail.com";
$headers="From: $email_from \r\n";
$headers="Reply-To: $vemail \r\n";
mail($to,$subject,$email_body,$headers);
header("Location: index.html");

?>