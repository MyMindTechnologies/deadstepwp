var $ = jQuery;

$(function () {

    // --------------------------------------------------------- //
    // FEATURES PANEL FIXED
    // --------------------------------------------------------- //
    $(window).scroll(function() {
         if ($(window).scrollTop() >= $('.features .headerWrapper').offset().top - 77) {
             $('.features .headerWrapper .header').addClass('fixed');
         } else {
             $('.features .headerWrapper .header').removeClass('fixed');
         }
    });

    // --------------------------------------------------------- //
    // CONTAINER OPACITY
    // --------------------------------------------------------- //
    $('.element .container').animate({opacity:0}, 0);

    $('.element').hover(function() {
        $(this).find('.container').animate({opacity:1},50);
    }, function() {
        $(this).find('.container').animate({opacity:0},50);
    });

});



