particlesJS.load('particles-js', 'js/particles.json', function() {
    console.log('callback - particles.js config loaded');
})
$(function() {
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
    $(document).ready(function(){
    $('.carousel').carousel();
  });
})($);
