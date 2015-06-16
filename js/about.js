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
    }
});
