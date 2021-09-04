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
        console.log($(this))
        $(this).toggleClass('audioShow');
        // $(this)[0].children[2].toggleClass('audioShow');
    });
});
