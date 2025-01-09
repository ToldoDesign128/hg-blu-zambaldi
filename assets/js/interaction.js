// Table of Content Mobile
jQuery(".menu-item-has-children").click(function () {
    jQuery(".sub-menu").toggleClass("sub-menu-active");
});

// Mobile Menu
jQuery("#hamburgerBtn").click(function () {
    jQuery("#hamburgerBtn").toggleClass("hamburger-active");
    jQuery("#menuMobile").toggleClass("panel-active");
    jQuery("body").toggleClass("stop-scroll");
})

// FAQ
jQuery(document).ready(function($) {
    $('.faq-icon').on('click', function() {
      var $itemWrap = $(this).closest('.item-wrap');
      $itemWrap.find('.risposta').toggleClass('risposta-active');
    });
  });