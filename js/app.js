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