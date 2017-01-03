//slider
$('.slider-hero').slick({
    dots: true,
    arrows: false,
    cssEase: 'ease-in'
});

$('.slider-clients').slick({
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

$('.slider-partners').slick({
    dots: true,
    arrows: false,
    cssEase: 'ease-in',
    slidesToShow: 6,
    slidesToScroll: 6,
    responsive: [
        {
            breakpoint: 680,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4
            }
        }
    ]
});

//counters
$(document).ready(function(){
    $('.comment').click(function() {
        $('.count-com').html(+$('.count-com').html()+1);
        controlCom.progressIncrement();
    });
    $('.views').click(function() {
        $('.count-view').html(+$('.count-view').html()+1);
        controlView.progressIncrement();
    });
    $('.progress').progressInitialize();
    var controlCom = $('.control'),
    controlView = $('.control-view');
    control.click(function(e){
        e.preventDefault();
    });
});
(function($){
    $.fn.progressInitialize = function(){
        return this.each(function(){
            var button = $(this),
                progress = 0;
            var options = $.extend({
                type:'background-horizontal'
            }, button.data());
            var bar = $('<span class="load ' + options.type + '">').appendTo(button);
            button.on('progress', function(e, val, absolute){
                if(!button.hasClass('in-progress')){
                    bar.show('10');
                    progress = 20;
                    button.addClass('in-progress')
                }
                if(absolute){
                    progress = val;
                }
                else{
                    progress += val;
                }
                if(progress >= 100){
                    progress = 100;
                }
                setProgress(progress);
            });
            function setProgress(percentage){
                bar.width(percentage+'%');
            }
        });
    };
    $.fn.progressIncrement = function(val){
        val = val || 5;
        var button = this.first();
        button.trigger('progress',[val])
        return this;
    };
})($);