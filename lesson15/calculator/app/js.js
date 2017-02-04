/**
 * Created by paxar on 30.01.2017.
 */


var calc = document.calculator;

var a = '';

var b = '';

var c = '';

var oper = '0';

var NewInput = true;


function inverse() {

    if (oper = '0') {
        a = "-" + a;
        calc.display.value = a;
    }
    else {
        b = "-" + b;
        calc.display.value = b;
    }

}


function number(digit) {

    if (NewInput == true)
    {
        calc.display.value = digit;
        a = calc.display.value;
        NewInput = false;
    }
    else {
        if (oper == '0')
        {
            a += digit;
            calc.display.value = a;
        }
        else
        {
            b += digit;
            calc.display.value = b;
        }
    }
}

function operation(sign) {

    oper = sign;

    if (b != '') {
        compute();
    }
}

function compute() {

    var summa = a + oper + b;
    c = eval(summa);
    a = c;
    b = '';
    calc.display.value = c;
}

function percent() {

    if (oper == '+')
    {
        c = (a / b) * 100;
    }
    else if (oper == '-')
    {
        c = (a * b) / 100;
    }
    else if (oper == '*')
    {
        c = a / b;
    }
    else {
        c = b * a;
    }

    calc.display.value = c;
    b = '';
}

function clearing() {

    a = '';
    c = '';
    b = '';
    NewInput = true;
    oper = '0';
    calc.display.value = '0';
}





