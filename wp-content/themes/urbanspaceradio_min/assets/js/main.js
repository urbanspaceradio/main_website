"use strict";$(document).ready(function(){const e=$(window),o=$(".podcastFilter-wrapper"),s=$(".podcasts-seasons"),i=$(".yearsSlider");$("#mobileMenu").on("click",function(){$(".mobileMenu").toggleClass("mobileMenuShow")}),$(".closeMenuBtn").on("click",function(){$(".mobileMenu").toggleClass("mobileMenuShow")}),$("a[href^='#']").click(function(){$(".mobileMenu").toggleClass("mobileMenuShow")}),$(".episode-items_item span").on("click",function(){$(this.offsetParent).toggleClass("audioShow")}),$.scrollUp=function(o){var s=$.extend({},{scrollName:"scrollUp",topDistance:600,topSpeed:800,animationInSpeed:200,animationOutSpeed:200},o),i="#"+s.scrollName;e.on("scroll",function(){$(e.scrollTop()>s.topDistance?$(i).slideDown(s.animationInSpeed):$(i).slideUp(s.animationOutSpeed))}),$(i).on("click",function(e){$("html, body").animate({scrollTop:0},s.topSpeed),e.preventDefault()})},$.scrollUp(),$(".new-photos_slider").slick({infinite:!0,arrows:!0,slidesToShow:1,slidesToScroll:1});const n=e=>{const o=e.attr("data-filter");let s=t.find("div");"all"!==o&&(s=t.find("div[data-type="+o+"]")),l.quicksand(s,{duration:800,easing:"easeInOutQuad"})};i.slick({arrows:!1,infinite:!0,slidesToShow:5,centerMode:!0,focusOnSelect:!0,swipe:!0,responsive:[{breakpoint:630,settings:{slidesToShow:3}}]}),i.on("swipe",()=>n($(".slick-active.slick-center"))),e.on("scroll",function(){const i=o.hasClass("filterFixed");e.scrollTop()>=373&&!i&&(o.addClass("filterFixed"),s.addClass("podcastsSeasons")),e.scrollTop()<=373&&i&&(o.removeClass("filterFixed"),s.removeClass("podcastsSeasons"))});const l=$("#seasons"),t=l.clone();$("#filter .slick-slide").click(function(){n($(this))})});