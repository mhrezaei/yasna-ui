(function(){


	$('.circle').on('click',function(){
		

		$(this).siblings('.popup').animate({
			width: 'toggle',
			height: 'toggle',
			opacity: 'toggle'
		},800,function(){
			$(this).toggleClass('contentFade');

		})
		
	});

})();