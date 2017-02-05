$(function() {

    var header;
    var headerHeight;
    var window_width;
    var menuOffset = $('.header__top').height() + $('.header__middle').height();

    function calcHeaderHeight() {
        menuOffset = $('.header__top').height() + $('.header__middle').height();
    }

    function menuPos() {
        var scrollProgress = $(this).scrollTop();
        if (window_width > 992) {
            if (scrollProgress > menuOffset) {
                $('body').css('padding-top', menuOffset);
                $('.header').addClass('header--sticky');
            } else {
                $('body').css('padding-top', 0);
                $('.header').removeClass('header--sticky');
            };
        } else {
            $('.header').addClass('header--sticky');
        };
    };

    function calcWindowWidth() {
        window_width = $(window).width();
    }

    $(window).scroll(function() {
        menuPos();
    });

    $(window).resize(function() {
        calcHeaderHeight();
        calcWindowWidth();
    });

    $(document).ready(function() {

        calcWindowWidth();
        menuPos();

        header = $('.header');

        //HAMBURGER
        var hamburger = $('.header__hamburger');
        var submenu = $('.header__menu');

        hamburger.on('click', function() {
            if (!submenu.hasClass('header__menu--open')) {
                submenu.addClass('header__menu--open');
            } else {
                submenu.removeClass('header__menu--open');
            }
        });
        //END HAMBURGER

    });
});
