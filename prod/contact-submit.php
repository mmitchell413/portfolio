<?php
    $to = "matt@mattmitchell.org";
    $subject = "New contact message from mattmitchell.org";
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $from = $_POST['email'];
    $message = "First Name: " . $firstName . "<br>Last Name: " . $lastName . "<br>" . $_POST['message'];
    $headers = 'From: '.$from."\r\n".'Reply-To: '.$from."\r\n".'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)){
        header("Location: contact-success.php");
        exit();
    }
    else{
        phpinfo();
        header("Location: contact-failed.php");
        exit();
    }
?>
