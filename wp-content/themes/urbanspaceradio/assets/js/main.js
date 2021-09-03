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

});
