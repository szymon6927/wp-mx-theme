particlesJS.load('particles-js', 'wp-content/themes/mx-theme/js/particles.json', function () {
  console.log('callback - particles.js config loaded');
});

$(window).scroll(function () {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});

$(document).ready(function() {
  $("#back-top").hide();
  $(function () {
   $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
     $('#back-top').fadeIn();
   } else {
     $('#back-top').fadeOut();
   }
 });
   $('#back-top a').click(function () {
    $('body,html').animate({
     scrollTop: 0
   }, 'slow');
    return false;
  });
 });
})

$(window).bind("load", function() { 
     
 let footerHeight = 0,
     footerTop = 0,
     $footer = $(".blog-footer");
     
 positionFooter();
 
 function positionFooter() {
  footerHeight = $footer.height();
  // 20 is as padding height
  footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";

  if ( ($(document.body).height()+footerHeight) < $(window).height()) {
     $footer.css({
          position: "absolute",
          width: "100%"
     }).animate({
          top: footerTop
     })
  } 
  else {
    $footer.css({
      position: "static"
    })
  }

}

$(window)
  .scroll(positionFooter)
  .resize(positionFooter)
});


$('.responsive').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});