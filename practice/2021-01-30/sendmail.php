<?php

// ini_set("SMTP","ssl:smtp.gmail.com");

// ini_set("smtp_port","587");

// ini_set("sendmail_from","jay.piparava16695@marwadieducation.edu.in");
$to = 'jay.piparava16695@marwadieducation.edu.in';
$subject = 'This is test email';
$body = "This is a test email \n\n from a php mail() Hope you got it..!";
$headers = 'From: phpAcademy <someone@gmail.com>';

if (mail($to, $subject, $body, $headers)) {
    echo 'Email has been sent to ' . $to;
} else {
    echo 'There was an error while sending an email.';
}

?>