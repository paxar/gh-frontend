/**
 * Created by paxar on 12.01.2017.
 */



/* smooth  scroll   */

$(document).ready(function () {
    $("#scroll").on("click", "a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 700);
    });
});






