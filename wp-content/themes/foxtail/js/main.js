/**
 * Created by nktquan@gmail.com on 11/10/16.
 */

jQuery('[data-toggle="tooltip"]').tooltip();

function openMobileMenu() {
    jQuery('.menu-mobile').addClass('open');
}

function closeMobileMenu() {
    jQuery('.menu-mobile').removeClass('open');
}

jQuery(document).ready(function () {
    jQuery('.home-big-slider').owlCarousel({
        loop: true,
        nav: false,
        autoplay: 1500,
        items:1,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        touchDrag: false,
        mouseDrag: false
    });
    jQuery('.home-content-slider').owlCarousel({
        loop: true,
        nav: false,
        autoplay: 1500,
        items:1,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        touchDrag: false,
        mouseDrag: false
    });
    jQuery('.home-calendar').owlCarousel({
        loop: true,
        nav: true,
        autoplay: false,
        items:7
    });
    jQuery('.teachers-slider').owlCarousel({
        loop: true,
        nav: false,
        autoplay: 1000,
        responsive: {
            0: {
                items: 1, // from 480 to 677
            },

            480: {
                items: 2, // from 480 to 677
            },

            641: {
                items: 3, // from this breakpoint 678 to 959
            },

            768: {
                items: 4, // from this breakpoint 960 to 1199

            }
        }
    });
    jQuery('.banner-top .banner-pop .close').click(function () {
        jQuery('.banner-top').slideUp();
        jQuery('body').removeClass('have-ads');
    });
    jQuery('.header .mid .navbar ul li.menu1 .sub-menu li:first-child a').mouseenter(function () {
        jQuery('.header .mid .navbar ul li.menu1 .sub-menu').addClass('hover');
    });
    jQuery('.header .mid .navbar ul li.menu1 .sub-menu li:first-child a').mouseleave(function () {
        jQuery('.header .mid .navbar ul li.menu1 .sub-menu').removeClass('hover');
    });
    jQuery('.register-form .register-form-content .right .register .form-group .form-control').focus(function () {
        jQuery(this).parent().addClass('focus');
    });
    jQuery('.register-form .register-form-content .right .register .form-group .form-control').each(function(){
        var text_value=jQuery(this).val();
        if(text_value!='')
        {
            jQuery(this).parent().addClass('focus');
        }
    })
});