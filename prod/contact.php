<?php
    /*
        $to = "matt@mattmitchell.org";
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $from = $_POST['email'];
        $message = "First Name: " . $firstName . "<br>Last Name: " . $lastName . "<br>" . $_POST['message'];
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

        <div class="page" id="contact">
            <div class="heading">
                <h1>Let's <span class="red-highlight">chat</span></h1>
            </div>
            <div class="container" id="contact">
                <div class="container--padding">
                    <form id="contact-form" name="contact-form" action="contact.php" method="post">
                        <div class="med-text grid">
                            <div class="grid-1-2">
                                <label for="firstName">First Name</label>
                                <input type="text" id="firstName" name="firstName" />
                            </div>
                            <div class="grid-1-2">
                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" name="lastName" />
                            </div>
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" />
                            <label for="message">Message</label>
                            <textarea id="message" name="message" ></textarea>
                            <div class="med-text">
                                <div class="grid-1-2">
                                    <input type="submit" class="btn btn-primary full-width" name="submit"></input>
                                </div>
                                <div class="grid-1-2">
                                    <input type="reset" class="btn btn-ghost btn-cancel full-width" name="cancel"></input>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="arrow-down">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="30px" height="20px" viewBox="0 0 500 300" enable-background="new 0 0 500 300" xml:space="preserve">
        <polyline fill="none" stroke="#92808b" stroke-width="40" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
            52.203,57 250,254.975 448.5,57 "/>
        </svg>
            <p>Scroll</p>
        </div>

<?php include 'footer.php' ?>