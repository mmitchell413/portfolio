<?php
    
    if (isset($_POST['submit'])){
        $to = "mmitchell413@gmail.com";
        $firstName = $_POST['firstName1'];
        $lastName = $_POST['lastName1'];
        $subject = $_POST['subject1'];
        $from = $_POST['email1'];
        $message = $_POST['message1'];
        $headers = "From:" . $from;
        
        if (mail($to, $subject, $message, $headers)){
            echo "Mail sent.";
        }
        else{
            echo "failed";
        }
    }
    
?>