(function($) {
    "use strict";  
    $(window).on('load', function() {
        /*Page Loader active
        ========================================================*/
        //   $('#preloader').fadeOut();
    
        // Sticky Nav
    });  

    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 120) {
            $('.header').addClass('scrolling-navbar');
        } else {
            $('.header').removeClass('scrolling-navbar');
        }
    });
  }(jQuery));