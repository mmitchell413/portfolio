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

        <script>
            $("input").onfocus(this.placeholder = null);
        </script>

        <div class="page" id="contact">
            <div class="heading">
                <h1>Let's <span class="red-highlight">chat</span></h1>
            </div>
            <div class="container" id="contact">
                <div class="container--padding">
                    <form id="contact-form" name="contact-form" action="contact.php" method="post">
                        <div class="med-text grid">
                            <div class="grid-1-2">
                               <input type="text" id="firstName" name="firstName" placeholder="First name"/>
                            </div>
                            <div class="grid-1-2">
                                <input type="text" id="lastName" name="lastName" placeholder="Last name"/>
                            </div>
                            <input type="email" id="email" name="email" placeholder="Email (example@gmail.com)" />
                            <textarea id="message" name="message" placeholder="Message"></textarea>
                            <div class="grid-1-2">
                                <button type="submit" class="btn btn-primary full-width" name="submit">Submit</button>
                            </div>
                            <div class="grid-1-2">
                                <button type="reset" class="btn btn-ghost btn-cancel full-width" name="cancel">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="arrow-down">
            <img src="img/arrow-down.svg" alt="Scroll Down" />
            <p>Scroll</p>
        </div>

<?php include 'footer.php' ?>