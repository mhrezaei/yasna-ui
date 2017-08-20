jQuery(function($){
    var parent =$('.scroll'),
        parentWidth = parent.width(),
        years = $('.years'),
        yearsWidth = years.prop("clientWidth"),
        minusePadding = yearsWidth - parentWidth,
        year = years.find('.year'),
        yearWidth = year.width(),
        yearHeight = year.height();

    /*years.css({
        right: minusePadding
    });
    parent.height( yearHeight*3 );

    years.on('scroll',function (e) {

    });*/

    var yearCount = year.length;

    function blink() {
        num = Math.floor(Math.random() * 9);
        $('.blink').removeClass('blink');
        year.eq(num).addClass('blink');

    }
    setInterval(blink,2000);
    console.log(yearCount)



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

    $('.img-row').owlCarousel({
        items:30,
        margin:0,
        loop:true,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        nav:false,
        autoWidth:true
    });




}); //End Of siaf!
