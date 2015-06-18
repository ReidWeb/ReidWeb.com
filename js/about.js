$(document).ready(function(){
    $('.parallax').parallax();
});


$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
});

// Header image
$(document).ready(function() {
    function setHeight() {
        windowHeight = $(window).innerHeight();
        $('#index-banner').css('min-height', windowHeight);
    };
    setHeight();

    $(window).resize(function() {
        setHeight();
    });
});

//Fade in header on scroll
$(window).scroll(function() {
    var scrollPos = $(window).scrollTop();
    var windowHeight = $(window).innerHeight();
    var backgroundAlpha;

    if (backgroundAlpha != 1) {
        percentage = scrollPos / $(window).height();
        //Increase alpha of bg
        percentage = scrollPos / ($(window).height() - $( "#desktop-nav-about" ).height());
        $( "#desktop-nav-about" ).css('background', 'rgba(255, 255, 255,' + percentage + ')');

        if (percentage >= 1){
            $( "#desktop-nav-about" ).addClass( "z-depth-1" )
        }
        else {
            $( "#desktop-nav-about" ).removeClass( "z-depth-1" )
        }
        if (scrollPos < 101){
            $( "#desktop-nav-about" ).css('background', 'rgba(255, 255, 255,0)');
        }

        //Find the bottom of header banner div and take away 20%
        var bannerBottom = $('#index-banner').position().top+$('#index-banner').outerHeight(true);
        bannerBottom =  0.75 * bannerBottom;
        //Fade out banner scroll button upon being passed
        if (scrollPos > bannerBottom){
            $ ( "#download-button" ).fadeOut(200);
        } else {
            $ ( "#download-button" ).fadeIn(200);
        }


        //Find the bottom of header banner div and take away 20%
        var whoAmIBottom = $('#who-am-i-container').position().top+$('#who-am-i-container').outerHeight(true);
        whoAmIBottom =  0.75 * whoAmIBottom;
        //Fade out banner scroll button upon being passed
        if (scrollPos > whoAmIBottom){
            $ ( "#programming-jumper" ).fadeOut(300);
        } else {
            $ ( "#programming-jumper" ).fadeIn("fast");
        }

    }
});
