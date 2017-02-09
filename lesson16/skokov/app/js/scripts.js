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

$(document).ready(function(){
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
});