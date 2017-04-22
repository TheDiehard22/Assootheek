$(function() {

    var header;
    var headerHeight;
    var window_width;


    function calcWindowWidth() {
        window_width = $(window).width();
    }

    $(window).scroll(function() {
      if ($(window).scrollTop() > 1) {
        $('.newheader').addClass('newheader--scrolled');
      } else {
        $('.newheader').removeClass('newheader--scrolled');
      }
    });

    $(window).resize(function() {
        /*calcHeaderHeight();
        calcWindowWidth();*/
    });

    $(document).ready(function() {
        header = $('.newheader');

        //HAMBURGER
        var hamburger = $('.newheader__button');
        var submenu = $('.newheader__list');
        var dropdownToggle = $('.newheader__item--dropdown');
        var dropdown = $('.newheader__dropdown');
        var dropdownActive = 'newheader__dropdown--open';

        hamburger.on('click', function() {
          console.log('test');
            if (!submenu.hasClass('newheader__list--open')) {
                submenu.addClass('newheader__list--open');
            } else {
                submenu.removeClass('newheader__list--open');
            }
        });
        //END HAMBURGER

        dropdownToggle.on('click', function() {
          if (!dropdown.hasClass(dropdownActive)) {
            dropdown.addClass(dropdownActive);
          } else {
            dropdown.removeClass(dropdownActive);
          }
        });

    });
});
