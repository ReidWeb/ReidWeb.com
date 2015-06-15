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
