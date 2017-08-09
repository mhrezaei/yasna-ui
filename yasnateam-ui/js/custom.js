jQuery(function ($) {
	//OnLoad Variable Set
	var $window = $(window),
		windowWidth = $(window).width(),
		profileCard =	$('.cards .card'),
		cardsNumber = profileCard.length, //calculating ul.cards width
		cardWidth = profileCard.outerWidth(true), //calculating ul.cards width
		ulCardsWidth = cardWidth * cardsNumber, //calculating ul.cards width
		header = $('.header-style'),
		headerHeight = header.outerHeight(),
        LogoContainer = $('.logo-container');

    customerDataChanger ()



	
		


/*----------Fixed Navbar Function -------------*/

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

	$window.one('scroll',toggleNavbar);

/*----------End! Fixed Navbar Function -------------*/






/*--------------Language Window--------------*/
	$('.contact .lang-btn').on('click',function(){
		$('aside').fadeIn(function(){
			$(this).find('.close-btn').on('click',function(){
				$('aside').fadeOut();
			});
		});
	});
/*--------------End Language Window--------------*/






/*--------------Scroll FadeIn Effect--------------*/
	
	$('.hiddenDiv').css('opacity','0');
	
	$window.on('scroll',function(){


		/* Check the location of each hidden section */
		$('.hiddenDiv').each( function(i){
			var el = $(this);

			var topOfSection = el.position().top + 200,
				scrollPosition = $window.scrollTop() + $window.height();

			if( topOfSection < scrollPosition){

				el.animate({'opacity':'1'},1500);

			}

		});
	});

/*--------------End Scroll FadeIn Effect--------------*/





/*---------------smooth scrolling to contact section------------*/
    $('.start-btn').on('click',function(event){

        if(this.hash !=""){
            event.preventDefault();

            var hash = this.hash;

            $("html, body").animate({

                scrollTop: $(hash).offset().top - 150

            },800, function(){
                window.location.hash = hash;
            });
        } //end if

    });
	/*------------ End smooth scrolling to contact section------------*/





	/////Logo Bar Slider Functions
	/*----------Logo Colorize Function------------*/
        function colorize( selected) {
            LogoContainer.find('.color').removeClass('color');
            selected.addClass('color');
        }
	/*---------End Of Logo Colorize Function------------*/

    LogoContainer.on('translated.owl.carousel', customerDataChanger);

    LogoContainer.find('.owl-item').on('click',function (e) {
		e.preventDefault();
		 var n = $(this).index();
		 console.log(n);
        LogoContainer.trigger('to.owl.carousel', n-5);
        /* @TODO find out why should I -5 the index to navigate property */
    });

	function customerDataChanger () {
        var centralLogo = $('.center'),
            data = centralLogo.find('.product-data'),
            imgSrc = data.find('img').attr('src'),
            header = data.find('h1').text(),
            paragraph = data.find('p').text(),
			linkAdd = data.find('a').attr('href'),
            product = $('.product');


        colorize( centralLogo );

        product.find('.product-pic img').attr('src',imgSrc);
        product.find('.product-title').text(header);
        product.find('.description').text(paragraph);
        product.find('.product-link').attr('href',linkAdd);
    }


}); /*siaf ends*/