/*  helper functions */
String.prototype.replaceAll = function (search, replacement) {
    var target = this;
    return target.replace(new RegExp(search, 'g'), replacement);
};
/* end of helper functions */


/* Ready */
jQuery(function($){
    // On Load variables
    var shutter = $('.shutter'),
        texts = shutter.find('b'),
        fistText = texts.first(),
        textWidth = fistText.outerWidth(true);


    texts.addClass('is-hidden'); // Makes all headlines hidden.
    fistText.removeClass('is-hidden').addClass('is-visible'); //Makes fist headline visible;

    shutterEffect();
    function shutterEffect(){
        shutter.animate({
            width: 0
        },2000, openShutter);
    }//end of shutterEffect()

    //slides to right, changes the visible class.
    function openShutter() {
        fistText.appendTo(shutter)
            .removeClass('is-visible').addClass('is-hidden');
        fistText = shutter.find('b').first()
            .removeClass('is-hidden').addClass('is-visible');
        textWidth = fistText.outerWidth(true);
        shutter.animate({
            width:textWidth
        },2000).delay(2000).queue(function(next) {
            shutterEffect();
            next();
        });
    } //end of openShutter();


 /*   $('.timer').TimeCircles({
        circle_bg_color: "#b4c4d4",
        time: {
            Days: {
                text:"روز",
                color: "#ee6e73"
            },
            Hours: {
                text:"ساعت",
                color: "#ee6e73"
            },
            Minutes: {
                text:"دقیقه",
                color: "#ee6e73"
            },
            Seconds: {
                text:"ثانیه",
                color: "#ee6e73"
            }
        },
        bg_width: 0.5,
        fg_width: 0.03
    });*/

 //On load and resize functions
    $(window).on("load resize",function(){

        //circle timer initiation
        $('.timer').TimeCircles({
            circle_bg_color: "#b4c4d4",
            time: {
                Days: {
                    text:"روز",
                    color: "#ee6e73"
                },
                Hours: {
                    text:"ساعت",
                    color: "#ee6e73"
                },
                Minutes: {
                    text:"دقیقه",
                    color: "#ee6e73"
                },
                Seconds: {
                    text:"ثانیه",
                    color: "#ee6e73"
                }
            },
            bg_width: 0.5,
            fg_width: 0.03
        }).rebuild(); //circle timer rebuilding on resize


        //footer locating
        var footer = $('footer').css("margin-top",  0),
            documentHeight = $(document).height(),
            containerHeight = $('.main-container').outerHeight(),
            marginTop = documentHeight - (containerHeight);

        if(marginTop===0){
            //avoids that footer and it's top element stick
            footer.css("margin-top",  25);
        }else{
            footer.css("margin-top",marginTop);
        }//end if

    }); //End of on load and resize functions

    // Changing timer digits
    translate();
    function translate() {
        var day = $('.textDiv_Days span').text(),
            hour = $('.textDiv_Hours span').text(),
            min = $('.textDiv_Minutes span').text(),
            sec = $('.textDiv_Seconds span').text();

        day = pd(day);
        hour = pd(hour);
        min = pd(min);
        sec = pd(sec);

        /*console.log(day,hour,min,sec);*/

        $('.textDiv_Days span').text(day); // not working !!!!
        $('.textDiv_Hours span').text(hour); // not working !!!!
        $('.textDiv_Minutes span').text(min); // not working !!!!
        $('.textDiv_Seconds span').text(sec); // not working !!!!


        setTimeout(translate,500);
    }



}); //End Of siaf!
/* End of Ready!!! */


/* helper functions */
function forms_pd($string) {
    if (!$string){
        return;
    }
    $string = $string.toString();

    $string = $string.replaceAll(/1/g, "۱");
    $string = $string.replaceAll(/2/g, "۲");
    $string = $string.replaceAll(/3/g, "۳");
    $string = $string.replaceAll(/4/g, "۴");
    $string = $string.replaceAll(/5/g, "۵");
    $string = $string.replaceAll(/6/g, "۶");
    $string = $string.replaceAll(/7/g, "۷");
    $string = $string.replaceAll(/8/g, "۸");
    $string = $string.replaceAll(/9/g, "۹");
    $string = $string.replaceAll(/0/g, "۰");

    return $string;
}


function forms_digit_fa(enDigit) {
    return forms_pd(enDigit);

    var newValue = "";
    for (var i = 0; i < enDigit.length; i++) {
        var ch = enDigit.charCodeAt(i);
        if (ch >= 48 && ch <= 57) {
            var newChar = ch + 1584;
            newValue = newValue + String.fromCharCode(newChar);
        }
        else {
            newValue = newValue + String.fromCharCode(ch);
        }
    }
    return newValue;
}

function pd(enDigit) {
    return forms_digit_fa(enDigit);

}
/* End of helper functions */