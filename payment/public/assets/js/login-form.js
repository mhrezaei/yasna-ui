/*
 *----------------------------------------------------------------------
 * Login Page js functions
 * ---------------------------------------------------------------------
 * */

 jQuery(function($){

     var tabs = $('.js-tabs-control'),
         tabsLeft = tabs.offset().left,
         tab = $('.js-tabs-control .login-tabs__tab'),
         passInput = $('#password'),
         passHidden = ( passInput.attr('type') === 'password' ),
         input = $('.form-input input');


     tab.on('click',function (e) {
         e.preventDefault();
         var $this = $(this),
             href = $this.children('a').attr('href'),
             lineLeft = $this.offset().left - tabsLeft;

         $('.js-tabs-control .active').removeClass('active');
         $this.addClass('active');

         $('.login-tabs-underline').animate({
             left: lineLeft
         });

     });


     // Toggle password view
     $('.js-toggle-visibility').on('click',function (e) {
         e.preventDefault();
         var $this = $(this);
        if(passHidden){
            passInput.attr('type','text');
            $this.children('i.fa')
                .removeClass('fa-eye')
                .addClass('fa-eye-slash');
            passHidden = !passHidden;
        }else{
            passInput.attr('type','password');
            $this.children('i.fa')
                .removeClass('fa-eye-slash')
                .addClass('fa-eye');
            passHidden = !passHidden;
        }
     });

     input.on('change', function () {
         var $this = $(this);
         if( $this.val().length ){
             $this.addClass('form-input--filled')
         }else{
             $this.removeClass('form-input--filled');
         }
     });




 }); //End Of siaf!