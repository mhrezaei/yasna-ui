/*
* Owl Carousel Setup
* */
jQuery(function($){

    // Banner Carousel
    $('#header-slider').owlCarousel({
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
        loop: true,
        rtl: true,
        center:true,
        URLhashListener:true,
        startPosition: 'URLHash'
    })

}); //End Of siaf!