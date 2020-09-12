<?php

    $name = $_POST['naam'];
    $visitor_email = $_POST['email'];
    $text = $_POST['text'];

    $email_from = '(email)';

    $email_subject = "Nieuwe email verzonden";

    $email_body = "User Name: $name.\n". 
                    "User Email: $visitor_email.\n". 
                        "User Message: $text.\n";

    $to = "(email))";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");


?>