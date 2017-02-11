

$(document).ready(function(){

    $(function () {
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 50) {
                $(".navbar-default").addClass("active");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $(".navbar-default").removeClass("active");
            }
        });
    });
//thanks stackoverflow.com :-)


    $('#masonry').masonry({
// указываем элемент-контейнер в котором расположены блоки для динамической верстки
        itemSelector: '.portfolio-item',
        columnWidth: 1,
// указываем класс элемента являющегося блоком в нашей сетке
        //singleMode: false,
// true - если у вас все блоки одинаковой ширины
        isResizable: true,
// перестраивает блоки при изменении размеров окна
        isAnimated: true,
// анимируем перестроение блоков

        fitWidth: true,

        isFitWidth: true,
        //контейнер по ширине содержимого

        animationOptions: {
            queue: false,
            duration: 500
        }
// опции анимации - очередь и продолжительность анимации
    });



    $('#clients-carousel').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 8,
        slidesToScroll: 1,
        prevArrow: '.carousel-prev',
        nextArrow: '.carousel-next',
        //centerMode: true,
        //centerPadding: '50%',

        responsive: [
            {
                breakpoint: 1300,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]
    });

    $('#hero-carousel').slick({
        dots: true,
        infinite: true,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '.hero-carousel-prev',
        nextArrow: '.hero-carousel-next'
        //centerMode: true,
        //centerPadding: '50%',


    });


    $("#scroll").on("click", "a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 900);
    });




});







