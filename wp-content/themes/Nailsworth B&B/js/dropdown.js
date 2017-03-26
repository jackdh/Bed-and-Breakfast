$(document).ready(function(){
   $("button").click(function () {
      $('.login').toggle('slide', {
         duration: 1000,
         easing: 'easeOutBounce',
         direction: 'up'
      });
   });
});