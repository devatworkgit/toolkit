(function($){
//Scroll animation header  
  Drupal.behaviors.header_behaviors = {
    attach: function(context, settings) {
      $(document).ready(function (event) {
        scroll_effect();
      });
      $(window).scroll(function (event) {
        scroll_effect();
      });
    }
  };
  
  function scroll_effect() {
    var scroll = $(window).scrollTop();
    if (scroll >= 750 && !$('header#navbar').hasClass('scrolled')) {
      $('header#navbar').addClass('scrolled');
      $('#navigation-bottom').addClass('hidden');
    } else if (scroll < 750 && $('header#navbar').hasClass('scrolled')) {
      $('header#navbar').removeClass('scrolled');
      $('#navigation-bottom').removeClass('hidden');
    }
    //console.log(scroll);
  }

 })(jQuery); 