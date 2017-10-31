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
    loadedSlideHash = $('#service-slider .owl-item.active > .service__slide').data('hash');

}); //End Owl Carousel Setup
/*
 *----------------------------------------------------------------------
 * Logo Bar
 * ---------------------------------------------------------------------
 * */
jQuery(function($){

    var logo = $('.js-logo-select .logos-row__item > a'),
        triangle = $('.services-nav .nav--arrow'),
        triangleWidth = triangle.outerWidth(),
        logoWidth,
        leftOfTriangle;
    



    //adding active class
    logo.on('click',function () {

       var $this = $(this);

        $('.js-logo-select .active').removeClass('active');
        $this.addClass('active');

        moveTriangle( $this );

    });



    //moving the triangle
    function moveTriangle( currentLogo ) {
        logoWidth = currentLogo.width();
        leftOfTriangle = currentLogo.offset().left + logoWidth * 0.5 - triangleWidth * 0.5;
        triangle.css("left",leftOfTriangle);
    }
}); //End Of siaf!




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


