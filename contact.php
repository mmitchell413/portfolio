<?php
    
        $to = "matt@mattmitchell.org";
        $firstName = $_POST['contact__firstName'];
        $lastName = $_POST['contact__lastName'];
        $subject = $_POST['contact__subject'];
        $from = $_POST['contact__email'];
        $message = "First Name: " . $firstName . "<br>Last Name: " . $lastName . "<br>" . $_POST['contact__message'];
        $headers = "From: " . $from;
        
        if (mail($to, $subject, $message, $headers)){
            header("Location: http://www.mattmitchell.org/#contact-success");
            exit();
        }
        else{
            header("Location: http://www.mattmitchell.org/#contact-failed");
            exit();
        }
    
?>