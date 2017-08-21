jQuery(function ($) {

    var parent = $('.scroll'),
        parentWidth = parent.width(),
        years = $('.years'),
        yearsWidth = years.prop("clientWidth"),
        minusePadding = yearsWidth - parentWidth,
        year = years.find('.year'),
        yearWidth = year.width(),
        yearHeight = year.height(),
        yearCount = year.length,
        index = 1;
        year.eq(index).addClass('active');

    years.css({
        marginTop: 0
    });
    parent.height(yearHeight * 3);



    years.on('mousewheel', function (event) {
        //prevents animations interference
        //and returns if animation is not done
        if (years.is(':animated')) {
            event.preventDefault();
            return;
        }


        var mt = parseInt(years.css('margin-top'));
        if (event.deltaY > 0) { //of user is scrolling up
            var target = mt + yearHeight;
                --index;
                if(index<0){
                    index=0;
                }
        } else { //of user is scrolling down
            var target = mt - yearHeight;
                ++index;
            if(index >= yearCount){
                index= yearCount - 1;
            }
        }
        //scrolling limits
        if ( target < -546 || target > 78) {
            event.preventDefault();
            return;
        }

        //stopping any running animation and
        //running new animation
        years.stop(true, true).animate({
            marginTop: target
        },function () {
            $('.active').removeClass('active');
            year.eq(index).addClass('active');
        });

        event.preventDefault();
    });


}); //End Of siaf!



