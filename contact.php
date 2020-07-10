<?php

if($_POST["submit"]) {
    $recipient="rajwant.singh84rajan1@gmail.com";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];
    $subject="Message on portfolio from "+$sender;
    
    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
    
    $headers = “From: $recipient\n”;
    $headers .= “Reply-To: $senderEmail;

    mail($recipient, $subject, $mailBody, $headers);

    $thankYou="<p>Thank you! Your message has been sent.</p>";
    echo $thankYou;
}

?>