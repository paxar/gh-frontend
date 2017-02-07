/**
 * Created by paxar on 30.01.2017.
 */


$(document).ready(function(){

    $("#addClass").click(function () {
        console.log($(this));
        $(this).addClass('clicked');
        console.log($(this));
    });

    $("#removeClass").click(function () {
        console.log($(this));
        $(this).removeClass('button');
        console.log($(this));
    });

    $("#toggleClass").click(function () {
        console.log($(this));
        $(this).toggleClass('pressed');
        console.log($(this));
    });

    $("#getAttr").click(function () {
        console.log($(this).attr("name"));

    });

    $("#setAttr").click(function () {
        $(this).attr("name", "attribute-set");
        console.log($(this).attr("name"));
    });

    $("#alertOnClick").click(function () {
        alert('Alert Button');

    });

    $("#triggerAlert").click(function () {
        $("#alertOnClick").trigger('click')

    });

    $("#cloneThis").click(function(){
        $(this).clone().appendTo(".clone").append(" (cloned)");
    });

    $("#closestElement").click(function(){
        console.log($(this).parent());
    });

    $("#eachBtnText").click(function(){
        $("button").each(function(){
            var a = [];
            a += $(this).text();
            console.log(a);
        });
    });

    $("#findMe").click(function(){
        console.log($("body").find("#findMe"));
    });

    $("#fadeInText").click(function(){
        $(".fade-in").fadeIn(1000);
    });

    $("#fadeOutText").click(function(){
        $(".fade-out").fadeOut(1000);
    });

    $("#hideText").click(function(){
        $(".hide").hide();
    });

    $("#showText").click(function(){
        $(".show").show();

    });

    $("#dataAboutMe").click(function(){
           var p = $(this).position();
           var h = $(this).height();
           var w = $(this).width();
       console.log("Top: " + p.top + " Left: " + p.left + " Height: " + h + " Width " + w);


    });
});


