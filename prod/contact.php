<?php
    /*
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
    */
?>

<?php include 'header.php' ?>

        <div class="page contact">
            <div class="heading">
                <h1>Let's <span class="red-highlight">chat</span></h1>
            </div>
            <div class="container" id="contact">
                <div class="container--padding">
                    <div class="med-text grid">
                        <div class="grid-1-2">
                           <input type="text" id="firstName" name="firstName" placeholder="First name"/>
                        </div>
                        <div class="grid-1-2">
                            <input type="text" id="lastName" name="lastName" placeholder="Last name"/>
                        </div>
                        <input type="email" id="email" name="email" placeholder="Email (example@gmail.com)" />
                        <textarea id="message" name="message" placeholder="Message"></textarea>
                    </div>
                </div>
            </div>
        </div>
        
<?php include 'footer.php' ?>