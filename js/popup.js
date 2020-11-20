$('.open-popup-client').click(function(e) {
    e.preventDefault();
    $('.popup-bg-client').fadeIn(900);
    $('html').addClass('no-scroll');
});

$('.close-popup-client').click(function() {
    $('.popup-bg-client').fadeOut(900);
    $('html').removeClass('no-scroll');
});