jQuery(function($){

    var shutter = $('.shutter'),
        texts = shutter.find('b'),
        fistText = texts.first(),
        textWidth = fistText.outerWidth(true),
        shutterWidth = shutter.width(textWidth);

    texts.addClass('is-hidden');
    fistText.removeClass('is-hidden').addClass('is-visible');

    shutterEffect();
    function shutterEffect(){
        shutter.animate({
            width: 0
        },2000, openShutter);
    }

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

    }

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
    });

    $(window).on("load resize",function(){

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
        }).rebuild();
    });

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

        console.log(day)
    }




}); //End Of siaf!

function pd(enDigit) {
    return forms_digit_fa(enDigit);
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



function forms_pd($string) {

    $string = $string.toString();
    console.log($string);


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


