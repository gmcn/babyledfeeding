( function($) {

  $('.bxslider').bxSlider({
   infiniteLoop: true,
   minSlides: 1,
   maxSlides: 1,
   pager: true,
   auto: true,
   speed: 1500,
   controls: false,
   touchEnabled: false,
   pause: 7500,
   });

  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.matchheight').matchHeight();
    $('.featureheight').matchHeight();
    $('.pheight').matchHeight();
  }
  window.onload = startMatchHeight;

  $(document).on('click', '.yamm .dropdown-menu', function(e) {
     e.stopPropagation()
  });

  $(function () {
  $('.icon_popover_freeze').popover({
      container: 'body',
      trigger : 'hover'
    })
  $('.icon_popover_self').popover({
      container: 'body',
      trigger : 'hover'
  })
});

/**
 * fancybox
 */
$(document).ready(function() {
  $(".fancybox").fancybox();
});
/**
 * END fancybox
 */

} ) (jQuery);
