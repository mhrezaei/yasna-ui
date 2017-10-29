jQuery(function($) {
    var $window = $(window),
        windowWidth = $window.width(),
        navTab = $('.nav-tab');

    //giving active class to activated nav item
    navTab.find('.subnav').first().addClass('is-active');

    $window.on('load resize',function () {
        var windowWidth = $window.width();

        if(windowWidth < 1200){
            $('.select-nav').removeClass('is-hidden');
            $('.nav-tab').addClass('is-hidden');
        }else{
            $('.nav-tab').removeClass('is-hidden');
            $('.select-nav').addClass('is-hidden');
        }
    });

    navTab.find('.subnav').on('click',function(e){
        e.preventDefault();
        classUpdater(navTab,$(this),"is-active");
    });


}); //End Of Siaf
