(function($) {
    "use strict";  
    $(window).on('load', function() {
        /*Page Loader active
        ========================================================*/
        //   $('#preloader').fadeOut();
    
        // Sticky Nav
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 150) {
                $('.scrolling-navbar').addClass('back-color');
            } else {
                $('.scrolling-navbar').removeClass('back-color');
            }
        });
    });      



  }(jQuery));