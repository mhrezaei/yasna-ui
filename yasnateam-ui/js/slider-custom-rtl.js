(function(){



		/*-------Main Slider---------*/

		$('.owl-carousel.big-slider').owlCarousel({
			items:6,
		    rtl:true,
		    loop:true,
		    margin:10,
		    nav:true,
		    autoplay:true,
			autoplayTimeout:5000,
			autoplayHoverPause:true,
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


		$('.big-slider .owl-nav').addClass('cursor-shape');
		$('.cursor-shape .owl-next, .cursor-shape .owl-prev').empty();

		if($(window).width() <769){
			$('.big-slider .owl-nav').removeClass('cursor-shape').addClass('arrow-shape');
		}
		$('.big-slider .arrow-shape .owl-prev').empty().append('<span class="fa fa-chevron-left arrow-icon"></span>');
		$('.big-slider .arrow-shape .owl-next').empty().append('<span class="fa fa-chevron-right arrow-icon"></span>');
		
		/*-------End Main Slider---------*/




		/*----------End Small Slider-----------*/

		$('.small-slider').owlCarousel({
			margin:5,
			items:4,
		    rtl:true,
		    loop:true,
		    nav:false,
		    autoplay:true,
			autoplayTimeout:5000,
			autoplayHoverPause:false,
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

		/*----------End Small Slider-----------*/



		/*----------Logo Slider-----------*/

		$('.logo-container').owlCarousel({
			margin:200,
			rtl:true,
            center:true,
    		loop:true,
    		autoplay:true,
    		autoWidth:true,
			autoplayTimeout:5000,
            autoplayHoverPause:true,
    		responsiveClass:true,
		    responsive:{
		        0:{
		            items:3,
		            nav:false,
		            margin:0
		        },
		        600:{
		            items:3,
		            nav:false,
		            margin:100
		        },
		        1000:{
		            items:4,
		            nav:false,
		            margin:100
		        },
		        1440:{
		            items:5,
		            nav:false,
		            margin:200
		        }
		    }
		});
	/*----------End Logo Slider-----------*/




	/*---------Cards slider---------------*/
		$('.cards').owlCarousel({
			margin:20,
			rtl:true,
            center:true,
    		loop:true,
    		autoplay:false,
    		autoWidth:true,
			autoplayTimeout:5000,
    		responsiveClass:true,
		    responsive:{
		        0:{
		            items:1,
		            nav:false
		        },
		        600:{
		            items:3,
		            nav:false
		        },
		        1000:{
		            items:4,
		            nav:false
		        },
		        1440:{
		            items:4,
		            nav:false,
		            margin:40
		        }
		    }
		});
	/*-----------End Cards slider--------------*/
		
})(); /* End Of Siaf */