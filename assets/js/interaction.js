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