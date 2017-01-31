/**
 * Created by paxar on 12.01.2017.
 */

/* full screen menu */

function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}

/* smooth  scroll   */

$(document).ready(function () {
    $("#scroll").on("click", "a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 700);
    });
});

$(document).ready(function () {
    $("#scroll2").on("click", "a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
    });
});

/* ISOTOPE   */


$( document ).ready(function() {
    var $container = $('.isotope');
    // filter buttons
    $('#filters button').click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( !$this.hasClass('is-checked') ) {
            $this.parents('#options').find('.is-checked').removeClass('is-checked');
            $this.addClass('is-checked');
        }
        var selector = $this.attr('data-filter');
        $container.isotope({  itemSelector: '.item', filter: selector });
        return false;
    });

});


