$(function () {

    // Hide pages on initial load
    $(".page").hide();
    
    // Show page on initial load if hash value is given
    if(location.hash){
        $(".page" + location.hash).toggle('slide');
    }
    
    // Fade in name and description
    jQuery(window).load(function(){
        //$(".hero-img h1").fadeIn(3000);
        $(".hero-img h1").animate({opacity: 1.00, top: "+=25"}, 1000 );
        setTimeout(function(){
            $(".hero-img p").animate({opacity: 1.00, top: "+=25"}, 1000 );
        }, 2000);
    });

    // Contact form real-time verification
    $("#contact__email").focusout(function(){
        if(isValidEmailAddress($("#contact__email").val())){
//            $("#contact-label__email").removeClass('error');
//            $("#contact__email").removeClass('error');
            $(".contact__emailError").slideUp();
        }else{
//            $("#contact-label__email").addClass('error');
//            $("#contact__email").addClass('error');
            $(".contact__emailError").slideDown();
        }
    });
    $("#contact__firstName").focusout(function(){
        if($("#contact__firstName").val()){
//            $("#contact-label__firstName").removeClass('error');
//            $("#contact__firstName").removeClass('error');
            $(".contact__firstNameError").slideUp();
        }else{
//            $("#contact-label__firstName").addClass('error');
//            $("#contact__firstName").addClass('error');
            $(".contact__firstNameError").slideDown();
        }
    });
    $("#contact__lastName").focusout(function(){
        if($("#contact__lastName").val()){
//            $("#contact-label__lastName").removeClass('error');
//            $("#contact__lastName").removeClass('error');
            $(".contact__lastNameError").slideUp();
        }else{
//            $("#contact-label__lastName").addClass('error');
//            $("#contact__lastName").addClass('error');
            $(".contact__lastNameError").slideDown();
        }
    });
    $("#contact__subject").focusout(function(){
        if($("#contact__subject").val()){
//            $("#contact-label__subject").removeClass('error');
//            $("#contact__subject").removeClass('error');
            $(".contact__subjectError").slideUp();
        }else{
//            $("#contact-label__subject").addClass('error');
//            $("#contact__subject").addClass('error');
            $(".contact__subjectError").slideDown();
        }
    });
    $("#contact__message").focusout(function(){
        if($("#contact__message").val()){
//            $("#contact-label__message").removeClass('error');
//            $("#contact__message").removeClass('error');
            $(".contact__messageError").slideUp();
        }else{
//            $("#contact-label__message").addClass('error');
//            $("#contact__message").addClass('error');
            $(".contact__messageError").slideDown();
        }
    });
    
    // Contact form submit
    $("#contact__submit").click(function(){
        var firstName = $("#contact__firstName").val();
        var lastName = $("#contact__lastName").val();
        var email = $("#contact__email").val();
        var subject = $("#contact__subject").val();
        var message = $("#contact__message").val();
        var formSubmitError = false;
        
        if(firstName == ""){
            $("#contact-label__firstName").addClass('error');
            $("#contact__firstName").addClass('error');
            formSubmitError = true;
        }else{
            $("#contact-label__firstName").removeClass('error');
            $("#contact__firstName").removeClass('error');
        }
        if(lastName == ""){
            $("#contact-label__lastName").addClass('error');
            $("#contact__lastName").addClass('error');
            formSubmitError = true;
        }else{
            $("#contact-label__lastName").removeClass('error');
            $("#contact__lastName").removeClass('error');
        }
        if(!isValidEmailAddress(email)){
            $("#contact-label__email").addClass('error');
            $("#contact__email").addClass('error');
            formSubmitError = true;
        }else{
            $("#contact-label__email").removeClass('error');
            $("#contact__email").removeClass('error');
        }
        if(subject == ""){
            $("#contact-label__subject").addClass('error');
            $("#contact__subject").addClass('error');
            formSubmitError = true;
        }else{
            $("#contact-label__subject").removeClass('error');
            $("#contact__subject").removeClass('error');
        }
        if(message == ""){
            $("#contact-label__message").addClass('error');
            $("#contact__message").addClass('error');
            formSubmitError = true;
        }else{
            $("#contact-label__message").removeClass('error');
            $("#contact__message").removeClass('error');
        }
        
        if(!formSubmitError){
            $.post("contact.php", {
                firstName1: firstName,
                lastName1: lastName,
                email1: email,
                subject1: subject,
                message1: message
                },
                function(data){
                    alert(data);
                    $('#contact-form')[0].reset();
                }
            );
        }else{
            
        }
    });
     
    
    // Page display script
    /*$(".top-nav__link").click(function(){
        console.log(this.id);
        console.log(location.hash);
        if(location.hash != this.id){
            var target = $(".page").filter(!this.id);
            if(target.is(':visible')){
                target.toggle('slide');
            }
                
        }
        setTimeout(function(){
            if(location.hash === this.id){
                $('.page').filter(this.id).toggle('slide');
            }
        });
    });*/
    
    $(".top-nav__link#about-link").click(function(){
        if($("#portfolio").is(':visible')){
            $("#portfolio").toggle('slide');
        }
        if($("#blog").is(':visible')){
            $("#blog").toggle('slide');
        }
        if($("#contact").is(':visible')){
            $("#contact").toggle('slide');
        }
        setTimeout(function(){
            $("#about").toggle('slide');
        }, 500);
    });
    $(".top-nav__link#portfolio-link").click(function(){
        if($("#about").is(':visible')){
            $("#about").toggle('slide');
        }
        if($("#blog").is(':visible')){
            $("#blog").toggle('slide');
        }
        if($("#contact").is(':visible')){
            $("#contact").toggle('slide');
        }
        setTimeout(function(){
            $("#portfolio").toggle('slide');
        }, 500);
    });
    $(".top-nav__link#blog-link").click(function(){
        if($("#about").is(':visible')){
            $("#about").toggle('slide');
        }
        if($("#portfolio").is(':visible')){
            $("#portfolio").toggle('slide');
        }
        if($("#contact").is(':visible')){
            $("#contact").toggle('slide');
        }
        setTimeout(function(){
            $("#blog").toggle('slide');
        }, 500);
    });
    $(".top-nav__link#contact-link").click(function(){
        if($("#about").is(':visible')){
            $("#about").toggle('slide');
        }
        if($("#blog").is(':visible')){
            $("#blog").toggle('slide');
        }
        if($("#portfolio").is(':visible')){
            $("#portfolio").toggle('slide');
        }
        setTimeout(function(){
            $("#contact").toggle('slide');
        }, 500);
    });
});

function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};