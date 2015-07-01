//Determine height of window and scale content to fit
$(document).ready(function () {
    function setHeight() {
        windowHeight = $(window).innerHeight();
        windowHeight = windowHeight - $(".navbar-fixed").height();
        windowHeight = windowHeight - $(".page-footer").height();
        $('#content').css('min-height', windowHeight);
    }
    setHeight();

    $(window).resize(function () {
        setHeight();
    });
});
