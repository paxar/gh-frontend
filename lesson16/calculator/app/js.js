/**
 * Created by paxar on 30.01.2017.
 */

/*---------------CALCULATOR 2----------------*/

var display = '';

var A = '',

    B = '',

    C = '';

var operand = '0';

var newInput = true;

$(document).ready(function () {

    $(".number").click(function () {



        if (newInput == true){
            A = $(this).text();
            display = A;
            output();
            newInput = false;

        }
        else {
            if (operand == '0') {
                A += $(this).text();
                display = A;
            }
            else
            {
                B += $(this).text();
                display = B;
            }
        }

           output();
    });

    $(".operation").click(function () {

        operand = $(this).text();

        if (B != '') {
            compute();
        }

    });

    $(".compute").click(function () {

        compute();
    });



    function compute() {
        var summa;

        if (B == ''){
            summa = A + operand + A;
        }
        else {
            summa = A + operand + B;
        }

        console.log("summa = "+summa);
        C = eval(summa);
        console.log("C = "+C);
        A = C;
        B = '';
        display = C;

        output();
    }

    function output() {
        $(".display").val(display);
    }

    $(".inverse").click(function () {

        if (operand == '0') {
            A = "-" + A;
            display = A;
        }
        else {
            B = "-" + B;
            display = B;
        }

        output();
    });

    $(".clearing").click(function () {

        A = '';
        B = '';
        C = '';
        newInput = true;
        operand = '0';
        display = '0';

        output();

    });


    $(".percent").click(function () {

        if (operand == '+')
        {
            C = (A / B) * 100;
        }
        else if (operand == '-')
        {
            C = (A * B) / 100;
        }
        else if (operand == '*')
        {
            C = A / B;
        }
        else {
            C = B * A;
        }

        display = C;
        output();
        b = '';


    });



//end
});


