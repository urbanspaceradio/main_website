"use strict";

$(document).ready(function () {

    const screen = $(window);
    const podcastFilter = $('.podcastFilter-wrapper');
    const podcastsSeasons = $('.podcasts-seasons');
    const yearsSlider = $('.yearsSlider');

    $('#mobileMenu').on('click', function () {
        $('.mobileMenu').toggleClass('mobileMenuShow');
    });

    $('.closeMenuBtn').on('click', function () {
        $('.mobileMenu').toggleClass('mobileMenuShow');
    });
    $("a[href^='#']").click(function () {
        $('.mobileMenu').toggleClass('mobileMenuShow');
    });

    $('.episode-items_item span').on('click', function () {
        $(this.offsetParent).toggleClass('audioShow');
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

    const filterYears = (elem) => {
        $('#filter .activeYear').removeClass('activeYear');
        elem.addClass('activeYear');
        const dataFilter = elem.attr('data-filter');

        let sortedData = data.find('div');

        if ( dataFilter !== 'all') {
            sortedData = data.find('div[data-type=' + dataFilter + ']');
        }

        seasons.quicksand(sortedData, {
            duration: 800,
            easing: 'easeInOutQuad'
        });
    }

    yearsSlider.slick({
        arrows: false,
        infinite: true,
        slidesToShow: 5,
        centerMode: true,
        focusOnSelect: true,
        swipe: true,
        responsive: [
            {
                breakpoint: 630,
                settings: {
                    slidesToShow: 3,
                }
            }
        ]
    });
    yearsSlider.on('swipe',() => filterYears($('.slick-current.slick-center')));


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

    const seasons = $('#seasons');
    const data = seasons.clone();

    $('#filter .slick-slide').click(function () {
        filterYears($(this));
    });
});
