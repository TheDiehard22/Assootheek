$(document).ready(function() {




  $('.usps__list').after($('iframe'));

});

$(window).on('load', function() {

  $('#flexslider').flexslider({
    animation: "fade"
  });

  $('#newsslider').flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 350
  });


});
