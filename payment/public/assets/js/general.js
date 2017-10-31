/*
*----------------------------------------------------------------------
* Owl Carousel Setup
* ---------------------------------------------------------------------
* */
jQuery(function($){

    // Banner Carousel
    $('#header-slider').owlCarousel({
        nav:true,
        navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        loop: true,
        rtl: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    // Services Carousel
    $('#service-slider').owlCarousel({
        items: 1,
        nav:true,
        navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        loop: true,
        rtl: true,
        center:true,
        URLhashListener:true,
        startPosition: 'URLHash'
    })

}); //End Owl Carousel Setup

/*
 *----------------------------------------------------------------------
 * Control Buttons
 * ---------------------------------------------------------------------
 * */
jQuery(function($){

    var ToggleBTN = $('.header .js-hamburger-btn'),
        nav = $('.header .js-hamburger-nav');

    ToggleBTN.on('click',function (e) {
        e.preventDefault();
        nav.slideToggle();
    })

}); //End Of siaf!

/*
 *----------------------------------------------------------------------
 * Modernizer
 * ---------------------------------------------------------------------
 * */
