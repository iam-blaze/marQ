<?php

     $from = $_POST['email'];
     $to = 'nvignesh3398@gmail.com';
     $subject = 'marQ - feedback';
     $message = $_POST ['message'];
     $headers = 'From: ' . $from;

    if(mail($to,$subject,$message, $headers))
    {
        echo "Test email send.";
    }
    else
    {
        echo "Failed to send.. please check your mail id...";
    }
?>
