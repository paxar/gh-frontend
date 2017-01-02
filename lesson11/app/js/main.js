
$('.slider-hero').slick({
    dots: true,
    arrows: false,
    cssEase: 'ease-in'
});

$('.slider-main').slick({
    dots: true,
    arrows: false,
    cssEase: 'ease-in',
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
        {
            breakpoint: 680,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }
    ]
});