"use strict";$(document).ready(function(){const e=$(window),s=$(".podcastFilter-wrapper"),o=$(".podcasts-seasons"),i=$(".yearsSlider");$("#mobileMenu").on("click",function(){$(".mobileMenu").toggleClass("mobileMenuShow")}),$(".closeMenuBtn").on("click",function(){$(".mobileMenu").toggleClass("mobileMenuShow")}),$("a[href^='#']").click(function(){$(".mobileMenu").toggleClass("mobileMenuShow")}),$(".episode-items_item span").on("click",function(){$(".episode-items_item").toggleClass("audioShow")}),$.scrollUp=function(s){var o=$.extend({},{scrollName:"scrollUp",topDistance:600,topSpeed:800,animationInSpeed:200,animationOutSpeed:200},s),i="#"+o.scrollName;e.on("scroll",function(){$(e.scrollTop()>o.topDistance?$(i).slideDown(o.animationInSpeed):$(i).slideUp(o.animationOutSpeed))}),$(i).on("click",function(e){$("html, body").animate({scrollTop:0},o.topSpeed),e.preventDefault()})},$.scrollUp(),$(".new-photos_slider").slick({infinite:!0,arrows:!0,slidesToShow:1,slidesToScroll:1});const n=e=>{$("#filter .activeYear").removeClass("activeYear"),e.addClass("activeYear");const s=e.attr("data-filter");let o=t.find("div");"all"!==s&&(o=t.find("div[data-type="+s+"]")),l.quicksand(o,{duration:800,easing:"easeInOutQuad"})};i.slick({arrows:!1,infinite:!0,slidesToShow:5,centerMode:!0,focusOnSelect:!0,swipe:!0,responsive:[{breakpoint:630,settings:{slidesToShow:3}}]}),i.on("swipe",()=>n($(".slick-current.slick-center"))),e.on("scroll",function(){const i=s.hasClass("filterFixed");e.scrollTop()>=373&&!i&&(s.addClass("filterFixed"),o.addClass("podcastsSeasons")),e.scrollTop()<=373&&i&&(s.removeClass("filterFixed"),o.removeClass("podcastsSeasons"))});const l=$("#seasons"),t=l.clone();$("#filter .slick-slide").click(function(){n($(this))})});