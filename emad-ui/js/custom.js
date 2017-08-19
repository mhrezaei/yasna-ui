jQuery(function($){

    $('.nav-toggle').on('click',function(){
       $('.nav-list').slideToggle();
    });

    $('.load-line').animate({
        width:"100%"
    },1500,titleFadeIn);

    function titleFadeIn() {
        $('.title-big').delay(500).animate({
            opacity :1
        },1500, slideFade);
    }
    function slideFade() {
        $('.nav-center').animate({
            opacity:1,
            marginTop:0,
            marginBottom:20
        },800);
    }

}); //End Of siaf!
