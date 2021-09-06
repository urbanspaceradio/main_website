"use strict";

$(document).ready(function () {
    $('#mobileMenu').on('click', function () {
        $('.mobileMenu').toggleClass('mobileMenuShow');
    });

    $('.closeMenuBtn').on('click', function () {
        $('.mobileMenu').toggleClass('mobileMenuShow');
    });
    $("a[href^='#']").click(function () {
        $('.mobileMenu').toggleClass('mobileMenuShow');
    });

    $('.episode-items_item').on('click', function () {
        $(this).toggleClass('audioShow');
    });


    $.scrollUp = function (options) {

        // Defaults
        var defaults = {
            scrollName: 'scrollUp',
            topDistance: 600,
            topSpeed: 800,
            animationInSpeed: 200,
            animationOutSpeed: 200
        };

        var o = $.extend({}, defaults, options),
            scrollId = '#' + o.scrollName;

        // Scroll function
        $(window).on('scroll', function () {
            $(($(window).scrollTop() > o.topDistance) ? $(scrollId).slideDown(o.animationInSpeed) : $(scrollId).slideUp(o.animationOutSpeed));
        });

        // To the top
        $(scrollId).on('click', function (event) {
            $('html, body').animate({scrollTop: 0}, o.topSpeed);
            event.preventDefault();
        });

    };

    $.scrollUp();
});
