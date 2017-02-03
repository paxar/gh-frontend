/**
 * Created by paxar on 12.01.2017.
 */



/* smooth  scroll   */

$(document).ready(function () {
    $("#footer-downside").on("click", "a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 900);
    });
});

$(document).ready(function () {
    $("#header").on("click", "a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 700);
    });
});

$(document).ready(function () {
    $("#footer").on("click", "a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 700);
    });
});

/*   Masonry    */

$(document).ready(function(){
    $('#masonry').masonry({
// указываем элемент-контейнер в котором расположены блоки для динамической верстки
        itemSelector: '.blog-item',
// указываем класс элемента являющегося блоком в нашей сетке
        singleMode: true,
// true - если у вас все блоки одинаковой ширины
        isResizable: true,
// перестраивает блоки при изменении размеров окна
        isAnimated: true,
// анимируем перестроение блоков

        animationOptions: {
            queue: false,
            duration: 500
        }
// опции анимации - очередь и продолжительность анимации
    });
});






