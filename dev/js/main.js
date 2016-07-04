$(document).ready(function(){
    
    var lastScrollTop = 0;
    var screenOffset = 450;
    $(window).scroll(function() {
        var height = $(this).scrollTop();
        
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
                }, 300);
            }
        });
        //var containerPosition = $(".container").offset().top;
        
        if(height > 0) { 
            $(".top-nav").addClass("top-nav__scrolled");
        }else if(height == 0){
            $(".top-nav").removeClass("top-nav__scrolled");
        }
    }); 
    
    // typed.js functionality 
  $(function(){
      $(".rotating_text").typed({
        strings: ["a designer^1000", "a developer^1000", "an artist^1000", "Matt^1000"],
        typeSpeed: 100 
      });
  });
    
    console.log("Hello there! I see you are taking a look at my code. If you have any comments or suggestions, feel free to drop me a line.");
}); 