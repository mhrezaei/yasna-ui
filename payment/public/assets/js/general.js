/*
*----------------------------------------------------------------------
* Owl Carousel Setup
* ---------------------------------------------------------------------
* */

jQuery(function($){

    var headerSlider = $('#header-slider'),
        serviceSlider = $('#service-slider'),
        logo = $('.js-logo-select .logos-row__item > a'),
        triangle = $('.services-nav .nav--arrow'),
        triangleWidth = triangle.outerWidth(),
        logoWidth,
        leftOfTriangle,
        options = {
            items: 1,
            nav:true,
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
            loop: true,
            rtl: true,
            center:true,
            URLhashListener:true,
            startPosition: 'URLHash'
        };





    // Banner Carousel
    headerSlider.owlCarousel({
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

    $(window).on('load', function () {
        var windowWidth = $(window).outerWidth();
        console.log(windowWidth);
        if(windowWidth > 800){
            // Services Carousel
            $('.services').removeClass('mobile');
            serviceSlider.owlCarousel(options);
        }else{
            $('.services').addClass('mobile');
            serviceSlider.removeClass('owl-carousel')
        }
    });





    /*
     *----------------------------------------------------------------------
     * Logo Bar
     * ---------------------------------------------------------------------
     * */

    $(document).ready(function () {
        currentSlideFinder(serviceSlider);
    });

    serviceSlider.on('translated.owl.carousel', function () {
        var $this = $(this);
        currentSlideFinder($this);
    });

    if(triangle.length){
        $(window).on('resize',function () {
            moveTriangle($('.js-logo-select .active'));
        });
    }



    //Finds Current slide and its related logo. Activates the Logo.
    function currentSlideFinder(slider) {
        var activeSlide = slider.find('.owl-item.active '),
            hash = activeSlide.children('.service__slide').data('hash'),
            relatedLogo = $('.js-logo-select  a[href$="#'+ hash +'"]');
        //Activates the related logo
        logoActivate(relatedLogo);
    }


    //Add active class
    function logoActivate(currentLogo) {

        $('.js-logo-select .active').removeClass('active');
        currentLogo.addClass('active');
        moveTriangle( currentLogo );
    }

    //moving the triangle
    function moveTriangle( currentLogo ) {
        logoWidth = currentLogo.width();
        leftOfTriangle = currentLogo.offset().left + logoWidth * 0.5 - triangleWidth * 0.5;
        triangle.css("left",leftOfTriangle);
    }

}); //End Owl Carousel Setup





/*
 *----------------------------------------------------------------------
 * Control Buttons
 * ---------------------------------------------------------------------
 * */
jQuery(function($){

    var ToggleBTN = $('.header .js-hamburger-btn'),
        nav = $('.header .js-hamburger-nav'),
        navOpen = false;


    ToggleBTN.on('click',function (e) {
        e.preventDefault();
        if(navOpen){
            nav.slideUp(function () {
                nav.removeAttr('style');
            });
            navOpen = !navOpen;
        }else{
            nav.slideDown();
            navOpen = !navOpen;
        }
    });


}); //End Of siaf!


/*
 *----------------------------------------------------------------------
 * Fixed Nabvar
 * ---------------------------------------------------------------------
 * */

jQuery(function($){

    var header = $('#fixed-header'),
        $window = $(window),
        headerHeight = header.outerHeight();

    function toggleNavbar(){
        var headerFixed = header.hasClass('header-fixed'),
            scroll = $(document).scrollTop();


        if(scroll > headerHeight){

            if(!headerFixed){
                header.addClass('header-fixed');
                header.css('margin-top', -headerHeight);
                header.animate({marginTop:0}, 500, function(){
                    $window.one('scroll',toggleNavbar);
                });
            }else{
                $window.one('scroll',toggleNavbar);
            }

        }else{

            if(headerFixed){
                header.removeClass('header-fixed');
            }
            $window.one('scroll',toggleNavbar);
        }
    }

    $window.one('scroll',toggleNavbar());

}); //End Of siaf!