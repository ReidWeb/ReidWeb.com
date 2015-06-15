$(document).ready(function(){
      $('.parallax').parallax();
    });


 $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });


//Scrolling animations
$( document ).ready( function( )
{
    new ScrollFlow();
} );

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
