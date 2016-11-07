$(document).ready(function(){

    //scrolling effects begin here
    var lastScrollTop = 0; //might be unnecessary
    var screenOffset = 450; //screen offset for amount scrolled before containers begin appearing
    $(window).scroll(function() {
        var height = $(this).scrollTop(); //set height to position user has scrolled to

        //iterate through each container on page to get position of element
        var containerPosition = [];
        $(".container").each(function(index){
            //get top position of container at index
            containerPosition[index] = $(this).offset().top;
            if(height > (containerPosition[index] - screenOffset)){
                $(".arrow-down").fadeOut();
                $(".container").eq(index).animate({
                    opacity: 1.0,
                    top: "0"
                }, 500);
            }
//            if(height > ($("footer").offset().top + screenOffset)){
//
//            }
            // animate delay in tech cards
            if($(this).attr("id")==="container__tech"){
                if(height > (containerPosition[index] - (screenOffset+400))){
                    $("#container__tech .grid-1-3").each(function(foo){
                       setTimeout(function(){$("#container__tech .grid-1-3#"+foo).animate({
                          opacity:1.0,
                          top: "0"
                       }, 800, "easeInExpo")}, 600*foo);
                    });
                }
            }
        });
        //var containerPosition = $(".container").offset().top;

        //add functionality for "sticky" top menu
        if(height > 0) {
            $(".top-nav").addClass("top-nav__scrolled");
        }else if(height == 0){
            $(".top-nav").removeClass("top-nav__scrolled");
        }
    });

    // typed.js functionality for typing effect
  $(function(){
      $(".rotating_text").typed({
        strings: ["a designer^1000", "a developer^1000", "an artist^1000", "Matt^1000"],
        typeSpeed: 100
      });
  });

    window.setTimeout(function(){
        $(".heading img").animate({opacity:1.0}, 1500);
    }, 10500);

    // contact input label animation code
    $("input, textarea").focusin(function(){
        $("label[for='"+$(this).attr('id')+"']").addClass("label-focus");
    });
    $("input, textarea").focusout(function(){
        if( !$(this).val() ){
            $("label[for='"+$(this).attr('id')+"']").removeClass("label-focus");
        } else {
            $("label[for='"+$(this).attr('id')+"']").addClass("label-focus-filled");
        }
    });

    console.log("Hello there! I see you are taking a look at my code. If you have any comments or suggestions, feel free to drop me a line.");


    // contact form checking
    var emailVal, fnVal, lnVal, mesVal = false;
    $('input[type="submit"]').prop('disabled', true);
    $('input[type="text"], input[type="email"], textarea').keyup(function(){
        if(emailVal && fnVal && lnVal && mesVal){
            $('input[type="submit"]').prop('disabled', false);
        }
    });
    // validate email input field
    $('input[type="email"]').keyup(function(){
        console.log($(this).val());
        if (validateEmail($(this).val())){
            emailVal = true;
        }else{
            emailVal = false;
        }
    });
    // validate last name input
    $('input[name="lastName"]').keyup(function(){
        if($(this).val() != ''){
            lnVal = true;
        }else{
            lnVal = false;
        }
    });
    // validate last name input
    $('input[name="firstName"]').keyup(function(){
        if($(this).val() != ''){
            fnVal = true;
        }else{
            fnVal = false;
        }
    });
    // validate last name input
    $('textarea[name="message"]').keyup(function(){
        if($(this).val() != ''){
            mesVal = true;
        }else{
            mesVal = false;
        }
    });

    // function to validate email using regex
    function validateEmail(email){
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
});

    // function to reset contact form labels and disable submit button when reset button is pressed
    function contactFormReset(){
        $('#contact-form label').removeClass("label-focus-filled");
        $('#contact-form label').removeClass("label-focus");
        $('input[type="submit"]').prop('disabled', true);
    }
