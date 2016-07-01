$(document).ready(function(){
    $(window).scroll(function() {
        var height = $(window).scrollTop();
        var containerPosition = $(".container").position();
        console.log(height);
        
        
        if(height > 0) {
            $(".top-nav").addClass("top-nav__scrolled");
        }else if(height == 0){
            $(".top-nav").removeClass("top-nav__scrolled");
        }
        
        if(height < containerPosition.top - 500){
            $(".container").show();
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