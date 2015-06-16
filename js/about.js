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

headerFadeInPoint = 56;

//Fade in header on scroll
$(window).scroll(function() {
    if ($(this).scrollTop() > headerFadeInPoint && $( "#desktop-nav-about" ).hasClass("transparent")) {

        $( "#index-banner" ).removeClass( "z-depth-0",800 );
        $( "#desktop-nav-about" ).removeClass( "transparent" ).fadeOut(100).addClass( "white z-depth-1").fadeIn("slow");
    } else if ($(this).scrollTop() <= headerFadeInPoint && $( "#desktop-nav-about" ).hasClass("white")) {
        $( "#index-banner" ).addClass( "z-depth-0" );
        $( "#desktop-nav-about" ).removeClass( "white z-depth-1" ).fadeOut(100).addClass( "transparent" ).fadeIn("slow");
    }
});
