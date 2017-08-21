jQuery(function($){

    var years = $('.years'),
        year = years.find('.year'),
        yearCount = year.length,
        num = yearCount,
        used = yearCount;

    function blink() {
        while(used===num){
            num = Math.floor(Math.random() * yearCount);
        }

        $('.blink').removeClass('blink');
        year.eq(num).addClass('blink');
        return used = num;
    }
    blink();
    setInterval(blink,2000);

}); //End Of siaf!
