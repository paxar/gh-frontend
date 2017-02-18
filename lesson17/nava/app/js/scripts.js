

$(document).ready(function(){







    $("#scroll").on("click", "a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 900);
    });

    // modals windows ----------------------

    $(".modal-dest-1").click(function() {
        $("#modal-box-dest-1").modal('show');
    });

    $(".modal-dest-2").click(function() {
        $("#modal-box-dest-2").modal('show');
    });

    $(".modal-dest-3").click(function() {
        $("#modal-box-dest-3").modal('show');
    });

    $(".modal-dest-4").click(function() {
        $("#modal-box-dest-4").modal('show');
    });

    $(".modal-dest-5").click(function() {
        $("#modal-box-dest-5").modal('show');
    });

    $(".modal-boats-1").click(function() {
        $("#modal-box-boats-1").modal('show');
    });

    $(".modal-boats-2").click(function() {
        $("#modal-box-boats-2").modal('show');
    });

    $(".modal-boats-3").click(function() {
        $("#modal-box-boats-3").modal('show');
    });

    $(".modal-boats-4").click(function() {
        $("#modal-box-boats-4").modal('show');
    });

    $(".owner-button").click(function() {
        $("#modal-box-owner").modal('show');
    });

    // read more button

    $(".destination-item").slice(0, 5).show();
    $(".destination-btn").on('click', function (e) {
        e.preventDefault();
        $(".destination-item:hidden").slice(0, 3).slideDown();
        if ($(".destination-item:hidden").length == 0) {
            $(".destination-btn").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });

    $(".boats-item").slice(0, 4).show();
    $(".boats-btn").on('click', function (e) {
        e.preventDefault();
        $(".boats-item:hidden").slice(0, 2).slideDown();
        if ($(".boats-item:hidden").length == 0) {
            $(".boats-btn").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });




    // массив строк
    var availableTags = [
        "Abkhazia",
        "Afghanistan",
        "Albania",
        "Algeria",
        "Argentina",
        "Armenia",
        "Australia",
        "Austria",
        "Azerbaijan",
        "Bahamas",
        "Bahrain",
        "Bangladesh",
        "Belarus",
        "Belgium",
        "Bermuda Islands",
        "Bolivia",
        "Brazil",
        "Bulgaria",
        "Burundi",
        "Cambodia",
        "Cameroon",
        "Canada",
        "Chile",
        "China",
        "Colombia",
        "Congo",
        "Costa Rica",
        "Cuba",
        "Cyprus ",
        "Czech Republic ",
        "Denmark ",
        "Dominican Republic ",
        "Ecuador ",
        "Egypt ",
        "El Salvador ",
        "Estonia ",
        "Ethiopia ",
        "Finland ",
        "France ",
        "Georgia ",
        "Germany ",
        "Ghana ",
        "Gibraltar ",
        "Great Britain / United Kingdom ",
        "Greece ",
        "Guatemala ",
        "Guinea ",
        "Haiti ",
        "Hawaii ",
        "Honduras ",
        "Hong Kong ",
        "Hungary ",
        "Iceland ",
        "India ",
        "Indonesia ",
        "Iran ",
        "Iraq ",
        "Ireland ",
        "Israel ",
        "Italy ",
        "Ivory Coast ",
        "Jamaica ",
        "Japan ",
        "Kazakhstan ",
        "Kenya ",
        "Kuwait ",
        "Kyrgyzstan ",
        "Latvia ",
        "Lebanon ",
        "Liberia ",
        "Libya ",
        "Lithuania ",
        "Luxemburg ",
        "Madagascar ",
        "Malawi ",
        "Malaysia ",
        "Malta ",
        "Mexico ",
        "Moldova ",
        "Monaco ",
        "Mongolia ",
        "Morocco ",
        "Nepal ",
        "Netherlands / Holland ",
        "New Zeland ",
        "Nicaragua ",
        "Nigeria ",
        "North Korea ",
        "Norway ",
        "Oman ",
        "Pakistan ",
        "Panama ",
        "Papua New Guinea ",
        "Paraguay ",
        "Peru ",
        "Philippines ",
        "Poland ",
        "Portugal ",
        "Puerto Rico ",
        "Romania ",
        "Russia ",
        "Rwanda ",
        "Saudi Arabia ",
        "Senegal ",
        "Sierra Leone ",
        "Singapore ",
        "Slovakia ",
        "Slovenia ",
        "South Africa ",
        "South Korea ",
        "South Ossetia ",
        "Spain ",
        "Sri Lanka ",
        "Sudan ",
        "Sweden ",
        "Switzerland ",
        "Syria ",
        "Taiwan ",
        "Tajikistan ",
        "Thailand ",
        "Togo ",
        "Tunisia ",
        "Turkey ",
        "Turkmenistan ",
        "Uganda ",
        "Ukraine ",
        "United Arab Emirates ",
        "United States of America / USA ",
        "Uruguay ",
        "Uzbekistan ",
        "Venezuela ",
        "Yemen ",
        "Zaire ",
        "Zambia ",
        "Zimbabwe "
    ];


// задаем массив в качестве источника слов для автозаполнения.
    $(".hero-form-input").autocomplete({
        source: function(request, response) {
            var results = $.ui.autocomplete.filter(availableTags, request.term);

            response(results.slice(0, 5));
        }
    });

    $(".modal-form-input").autocomplete({
        source: function(request, response) {
            var results = $.ui.autocomplete.filter(availableTags, request.term);

            response(results.slice(0, 5));
        }
    });



});








