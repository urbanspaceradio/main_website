"use strict";

$(document).ready(function () {

    const screen = $(window);
    const podcastFilter = $('.podcastFilter-wrapper');
    const podcastsSeasons = $('.podcasts-seasons');

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
        screen.on('scroll', function () {
            $((screen.scrollTop() > o.topDistance) ? $(scrollId).slideDown(o.animationInSpeed) : $(scrollId).slideUp(o.animationOutSpeed));
        });

        // To the top
        $(scrollId).on('click', function (event) {
            $('html, body').animate({scrollTop: 0}, o.topSpeed);
            event.preventDefault();
        });

    };

    $.scrollUp();

    $('.new-photos_slider').slick({
        infinite: true,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.yearsSlider').slick({
        dots: true,
        arrows: false,
        infinite: false,
        slidesToShow: 5,
        responsive: [
            {
                breakpoint: 630,
                settings: {
                    slidesToShow: 3,
                }
            }
        ]
    });

    let $items = $('.podcasts-seasons');
    $items.isotope({
        filter: '*',
    });

    $('.podcasts-filter_years .slick-slide').click(function () {
        $('.podcasts-filter_years .activeYear').removeClass('activeYear');
        $(this).addClass('activeYear');

        let selector = $(this).attr('data-filter');
        $items.isotope({
            filter: selector,
            animationOptions: {
                duration: 500,
                animationEngine: "jquery"
            }
        });
    });

    screen.on('scroll', function () {
        const hasFilterFixedClass = podcastFilter.hasClass('filterFixed');
        if (screen.scrollTop() >= 373 && !hasFilterFixedClass) {
            podcastFilter.addClass('filterFixed');
            podcastsSeasons.addClass('podcastsSeasons');
        }
        if (screen.scrollTop() <= 373 && hasFilterFixedClass) {
            podcastFilter.removeClass('filterFixed')
            podcastsSeasons.removeClass('podcastsSeasons')
        }
    });
});
