$(document).ready(function(){
    
    var lastScrollTop = 0;
    $(window).scroll(function() {
        var height = $(this).scrollTop();
        var containerPosition = $(".container").offset().top;

        if(height > 0) { 
            $(".top-nav").addClass("top-nav__scrolled");
        }else if(height == 0){
            $(".top-nav").removeClass("top-nav__scrolled");
        }
    
            if(height > (containerPosition - 450)){
                $(".container").animate({
                    opacity: 1.0,
                    top: "0"
                }, 300);
            }
    }); 
    
    // typed.js functionality 
  $(function(){
      $(".rotating_text").typed({
        strings: ["a designer^1000", "a developer^1000", "an artist^1000", "Matt^1000"],
        typeSpeed: 100 
      });
  });
}); 