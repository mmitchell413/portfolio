$(function () {
    jQuery(window).load(function(){
        //$(".hero-img h1").fadeIn(3000);
        $(".hero-img h1").animate({opacity: 1.00, left: "+=50"}, 3000 );
        setTimeout(function(){
            $(".hero-img p").animate({opacity: 1.00, left: "+=50"}, 3000 );
        }, 3000);
        
    });
});