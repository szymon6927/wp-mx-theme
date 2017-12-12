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
  console.log('ready');
})