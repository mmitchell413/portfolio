$(document).ready(function(){
    $(window).scroll(function() {
        var height = $(window).scrollTop();
        console.log(height);
        
        
        if(height > 0) {
            $(".top-nav").addClass("top-nav__scrolled");
        }else if(height == 0){
            $(".top-nav").removeClass("top-nav__scrolled");
        }
    });
}); 