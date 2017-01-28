var  mn = $(".main-nav");
mns = "main-nav-scrolled";
hdr = $('.topbar').height();

$(window).scroll(function() {
    if( $(this).scrollTop() > hdr ) {
        mn.addClass(mns);
        $('.hero').css({'margin-top': '100px'});
    } else {
        mn.removeClass(mns);
        $('.hero').css({'margin-top':'0'});
    }
});

$(".form-down, .close-form").click(function(){
    $(".contact-form").slideToggle(500);
});