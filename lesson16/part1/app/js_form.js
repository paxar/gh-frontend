/**
 * Created by paxar on 2/7/17.
 */

$(document).ready(function () {


    $("form").find('input, textarea, select').change(function () {
        console.log($(this).val());
    });

    /*copy field*/

    $("#email").change(function () {
        $("#copy").val($(this).val());
    });

    /*submit*/

    $("#form").submit(function(){

        $("#form").find('input, textarea, select').each(function(){
            var a = {};
            a[this.name] = $(this).val();
            console.log(a);

        });
        return false;
    });

    /*keypress and other press :-) */

    $(".keypress").keypress(function(){
        $(this).css("background-color", "#ffcc66");
    });

    $(".keydown").keydown(function(){
        $(this).css("background-color", "#ffa96e");
    });
    $(".keydown").keyup(function(){
        $(this).css("background-color", "#ff8579");
    });

});
