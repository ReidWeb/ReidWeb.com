function scrollGo(a){a=a.replace("link",""),$("html,body").animate({scrollTop:$("#"+a).offset().top},"slow")}if(+$("#banner-text").outerHeight(!0)<100)var jumpScrollActivated=0;else var jumpScrollActivated=1;$(document).ready(function(){$(".parallax").parallax()}),$(document).ready(function(){$(".modal-trigger").leanModal()}),$(document).ready(function(){function a(){windowHeight=$(window).innerHeight(),$("#index-banner").css("min-height",windowHeight)}a(),$(window).resize(function(){a()})}),$(window).scroll(function(){var a,b=$(window).scrollTop();$(window).innerHeight();if(1!==a){var c=b/$(window).height();c=b/($(window).height()-$("#desktop-nav-about").height()),$("#desktop-nav-about").css("background","rgba(255, 255, 255,"+c+")"),c>=1?$("#desktop-nav-about").addClass("z-depth-1"):$("#desktop-nav-about").removeClass("z-depth-1"),101>b&&$("#desktop-nav-about").css("background","rgba(255, 255, 255,0)")}var d=$("#index-banner").position().top+$("#index-banner").outerHeight(!0);d=.75*d,b>d?$("#download-button").fadeOut(200):$("#download-button").fadeIn(200);var e=$("#who-am-i-container").position().top+$("#who-am-i-container").outerHeight(!0);e=.75*e,b>e?$("#programming-jumper").fadeOut(300):$("#programming-jumper").fadeIn("fast")});