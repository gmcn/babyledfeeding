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

   $('.videohero').bxSlider({
    infiniteLoop: true,
    minSlides: 1,
    maxSlides: 1,
    pager: true,
    auto: true,
    speed: 1500,
    controls: false,
    touchEnabled: false,
    pause: 7500,
    infiniteLoop: true,
    });

   $('.videoslider').bxSlider({
     slideWidth: 300,
     minSlides: 2,
     maxSlides: 50,
     slideMargin: 10,
     pager: false,
     touchEnabled: false,
    });

  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.matchheight').matchHeight();
    $('.featureheight').matchHeight();
    $('.plannerheight').matchHeight();
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

 $(document).ready(function() {

  $('.dropdown').on('hidden.bs.dropdown', function(e) {
    $(this).find('.caret').toggleClass('rotate-180');
  });

  $('.dropdown').on('shown.bs.dropdown', function(e) {
    $(this).find('.caret').toggleClass('rotate-180');
  });

  //this is to avoid the menu from closing if clicked inside the menu
  $('body').on("click", ".dropdown-menu", function(e) {
    $(this).parent().is(".open") && e.stopPropagation();
  });
});

 // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });


} ) (jQuery);
