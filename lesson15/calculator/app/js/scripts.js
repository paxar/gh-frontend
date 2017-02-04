/**
 * Created by paxar on 03.02.2017.
 */

;

var calc = document.calculator; // задаем объект DOM

var a = ''; // число 1

var b = ''; //число 2

var c = ''; // результат вычислений

var oper = '0'; // математическая операция

var NewInput = true; // флаг для сброса нуля при вводе нового числа 1


function inverse() {   // функция для добавления отрицательных чисел

    if (oper = '0') {
        a = "-" + a;
        calc.display.value = a;
    }
    else {
        b = "-" + b;
        calc.display.value = b;
    }

}


function number(digit) { // функция ввода новых чисел

    if (NewInput == true)  // сброс 0 при новом вводе
    {
        calc.display.value = digit;
        a = calc.display.value;
        NewInput = false;
    }
    else {
        if (oper == '0')  // вводим число 1
        {
            a += digit;
            calc.display.value = a;
        }
        else  // вводим число 2
        {
            b += digit;
            calc.display.value = b;
        }
    }
}

function operation(sign) { // функция операции

    oper = sign;

    if (b != '') { // считаем последующие значения без клавиши "="
        compute();
    }
}

function compute() { //функция вычислений

    var summa = a + oper + b;
    c = eval(summa);
    a = c;
    b = ''; // перенос и обнуление значений для последующих операций
    calc.display.value = c;
}

function percent() { // функция вычисления процентов

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

function clearing() { //сброс значений

    a = '';
    c = '';
    b = '';
    NewInput = true;
    oper = '0';
    calc.display.value = '0';
}






