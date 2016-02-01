$(function () {
    
    // Window resize functions
    // set initial window width
    var width = $(window).width();
    
    $(window).resize(function(){
        // Hide pages on resize if over 800
        if(($(window).width() > 800) && (width < 800)){
            $(".page").hide();
            // Reshow correct page on resize
            if(location.hash){
                $(".page" + location.hash).toggle('slide');
            }
        }else if(($(window).width() < 800 && (width > 800))){
            $("#about").show();
            $("#portfolio").show();
            $("#contact").show();
        }
        
        // reset width to new window width
        width = $(window).width();
    });
    
    // Hide pages on initial load
    if($(window).width() > 800){
        $(".page").hide();
    }
    
    // Show page on initial load if hash value is given
    if(location.hash){
        $(".page" + location.hash).toggle('slide');
    }
    
    // Fade in name and description
    jQuery(window).load(function(){
        $(".hero-img h1").animate({opacity: 1.00, top: "+=25"}, 1000 );
        setTimeout(function(){
            $(".hero-img p").animate({opacity: 1.00, top: "+=25"}, 1000 );
        }, 2000);
    });

    // Contact form real-time verification
    $("#contact__submit").prop('disabled', true);
    
    $("#contact__email").focusout(function(){
        if(isValidEmailAddress($("#contact__email").val())){
            $(".contact__emailError").slideUp();
        }else{
            $(".contact__emailError").slideDown();
        }
        if(validateContact()){
            $("#contact__submit").prop('disabled', false);
        }else{
            $("#contact__submit").prop('disabled', true);
        }
    });
    $("#contact__firstName").focusout(function(){
        if($("#contact__firstName").val()){
            $(".contact__firstNameError").slideUp();
        }else{
            $(".contact__firstNameError").slideDown();
        }
        if(validateContact()){
            $("#contact__submit").prop('disabled', false);
        }else{
            $("#contact__submit").prop('disabled', true);
        }
    });
    $("#contact__lastName").focusout(function(){
        if($("#contact__lastName").val()){
            $(".contact__lastNameError").slideUp();
        }else{
            $(".contact__lastNameError").slideDown();
        }
        if(validateContact()){
            $("#contact__submit").prop('disabled', false);
        }else{
            $("#contact__submit").prop('disabled', true);
        }
    });
    $("#contact__subject").focusout(function(){
        if($("#contact__subject").val()){
            $(".contact__subjectError").slideUp();
        }else{
            $(".contact__subjectError").slideDown();
        }
        if(validateContact()){
            $("#contact__submit").prop('disabled', false);
        }else{
            $("#contact__submit").prop('disabled', true);
        }
    });
    $("#contact__message").focusout(function(){
        if($("#contact__message").val()){
            $(".contact__messageError").slideUp();
        }else{
            $(".contact__messageError").slideDown();
        }
        if(validateContact()){
            $("#contact__submit").prop('disabled', false);
        }else{
            $("#contact__submit").prop('disabled', true);
        }
    }); 
    
    // Contact form disable submit unless validated
    function validateContact(){
        var validContact = true;
        if(!($("#contact__lastName").val() && $("#contact__firstName").val() && $("#contact__subject").val() && $("#contact__message").val() && isValidEmailAddress($("#contact__email").val()))){
            validContact = false;
        } 
        return validContact;
    }
    
    
    // Top navigation pagination scripts
    $(".top-nav__link").click(function(){
        if($("#contact-success").is(':visible')){
            $("#contact-success").toggle('slide');
        }
        if($("#contact-failed").is(':visible')){
            $("#contact-failed").toggle('slide');
        }
    });
    
    $(".top-nav__link#about-link").click(function(){
        if($(window).width() > 800){
            if($("#portfolio").is(':visible')){
                $("#portfolio").toggle('slide');
            }
            if($("#contact").is(':visible')){
                $("#contact").toggle('slide');
            }
            setTimeout(function(){
                $("#about").toggle('slide');
            }, 500);
        }
    });
    $(".top-nav__link#portfolio-link").click(function(){
        if($(window).width() > 800){
            if($("#about").is(':visible')){
                $("#about").toggle('slide');
            }
            if($("#contact").is(':visible')){
                $("#contact").toggle('slide');
            }
            setTimeout(function(){
                $("#portfolio").toggle('slide');
            }, 500);
        }
    });
    $(".top-nav__link#contact-link").click(function(){
        if($(window).width() > 800){
            if($("#about").is(':visible')){
                $("#about").toggle('slide');
            }
            if($("#portfolio").is(':visible')){
                $("#portfolio").toggle('slide');
            }
            setTimeout(function(){
                $("#contact").toggle('slide');
            }, 500);
        }
    });
});

function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};