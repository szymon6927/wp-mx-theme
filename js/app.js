// This is a functions that scrolls to #{blah}link
function goToByScroll(id) {
  // Remove "link" from the ID
  id = id.replace("link", "");
  // Scroll
  $('html,body').animate({
      scrollTop: $("#" + id).offset().top - 80
    },
    'slow');
}

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

$("#see-more").click(function(e) {
  e.preventDefault();
  goToByScroll("about");
});

$('#go-to-services').click(function(e) {
  e.preventDefault();
  goToByScroll("services");
})

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