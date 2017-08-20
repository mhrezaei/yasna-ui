jQuery(function ($) {
	//OnLoad Variable Set
	var $window = $(window),
		windowWidth = $(window).width(),
        profileCards = $('.cards'),
		profileCard =	$('.cards').find('.card'),
		cardsNumber = profileCard.length, //calculating ul.cards width
		cardWidth = profileCard.outerWidth(true), //calculating ul.cards width
		ulCardsWidth = cardWidth * cardsNumber, //calculating ul.cards width
		header = $('#fixed-header'),
		headerHeight = header.outerHeight(),
        LogoContainer = $('.logo-container');

    	customerDataChanger ();



       if(windowWidth>1000){
           $('[data-toggle="tooltip"]').tooltip();
	   }


		


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
    $('.start-btn').on('click',function(e){

        if(this.hash !=""){
            e.preventDefault();

            var hash = this.hash;

            $("html, body").animate({

                scrollTop: $(hash).offset().top - 150

            },800, function(){
                window.location.hash = hash;
            });
        } //end if

    });
	/*------------ End smooth scrolling to contact section------------*/





	/*------------Logo Bar Slider Functions ---------------*/
	LogoContainer.on('translated.owl.carousel', customerDataChanger); //changes data as logo changes

	//Jumps To The Selected Slide
    LogoContainer.find('.owl-item').on('click',function (e) {
		e.preventDefault();
		 var n = $(this).index();
		if(windowWidth < 1000){
            LogoContainer.trigger('to.owl.carousel', n-4);
		}else{
            LogoContainer.trigger('to.owl.carousel', n-5);
		}

        /* @TODO find out why should I -5 the index to navigate property */
    });

    //Stops Logo Slide When Mouse Enters The Detail Section
	//And Starts Whe Mouse Leaves.
    $('#product-view').on('mouseenter',function(){
        LogoContainer.trigger('stop.owl.autoplay');
    })
		.on('mouseleave',function() {
            LogoContainer.trigger('play.owl.autoplay');
        });


    //Gets Data And Updates The Customer Section
    function customerDataChanger () {
        var centralLogo = $('.center'),
            data = centralLogo.find('.product-data'),
            imgSrc = data.find('img').attr('src'),
            header = data.find('h1').text(),
            paragraph = data.find('p').text(),
            linkAdd = data.find('a').attr('href'),
            product = $('.product');

        classUpdater(LogoContainer, centralLogo,"color");

        product.find('.product-pic images').attr('src',imgSrc);
        product.find('.product-title').text(header);
        product.find('.description').text(paragraph);
        product.find('.product-link').attr('href',linkAdd);
    };
	/*------------ End Logo Bar Slider Functions ---------------*/







	/*------------Profile Cards ------------------*/
    profileCard.on('click', function () {
        staffDataChanger( this ); //Updates Profile Data In The Upper Row On Click
    });


    //Gets Data And Updates The About Section
    function staffDataChanger (This) {
        var container = $('.story-container'),
            $this = $(This),
            imgSrc = $this.find('.profile-data images').attr('src'),
            name = $this.find('.profile-name').text(),
            jobtitle = $this.find('.profile-title').text(),
            story = $this.find('.profile-data p').text();

        classUpdater(profileCards, $this ,"active-card");

        container.find('.about-image-lg images').attr('src', imgSrc);
        container.find('.job-title').text(jobtitle);
        container.find('.name').text(name);
        container.find('.story').text(story);

    };
	/*------------End Profile Cards ------------------*/





}); /*siaf ends*/


//Function For Removing Existing Class And Adddin To
//New Location. "selected" Is The New Class Position.
//"className" Should Be Passed As String.
function classUpdater(parentEl, selected, className) {
    var classSelector = "."+ className;
    parentEl.find(classSelector).removeClass(className);
    selected.addClass(className);
}


