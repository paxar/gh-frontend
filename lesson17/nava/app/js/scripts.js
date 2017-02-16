

$(document).ready(function(){







    $("#scroll").on("click", "a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 900);
    });

    // modals windows ----------------------

    $(".mod-test").click(function() {
        $("#myModalBox").modal('show');
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
    $( ".hero-form-input" ).autocomplete({source: availableTags});



});








