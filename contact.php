<? php
    
    if (isset($_POST['submit'])){
        $to = "mmitchell413@gmail.com";
        $subject = $_POST['contact__subject'];
        $from = $_POST['contact__email'];
        $message = $_POST['contact__message'];
        $headers = "From:" . $from;
        
        if (mail($to, $subject, $message, $headers)){
            echo "Mail sent.";
        }
        else{
            echo "failed";
        }
    }
    
?>