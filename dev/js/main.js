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
    
    // contact input label manipulation code
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
}); 