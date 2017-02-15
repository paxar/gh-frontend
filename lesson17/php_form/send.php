<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Home Work 3 </title>
    <link rel="stylesheet" href="forms.css">
</head>
<body>
<div class="wrapper">


<?php
/**
 * Created by PhpStorm.
 * User: paxar
 * Date: 2/14/17
 * Time: 8:38 PM
 */


print_r($_POST); //смотрим полученный массив

// Записываем данные из массива в переменные и выводим их на экран..

$name = $_POST["name"];
echo "</br>" . "Имя: " . $name . "</br>";

$surname = $_POST["surname"];
echo "Фамилия: " . $surname . "</br>";

$sex = $_POST["sex"];
echo "Пол: " . $sex . "</br>";

$age = $_POST["age"];
echo "Возраст: " . $age . "</br>";

$sex2 = $_POST["sex2"];
echo "Пол2: " . $sex2 . "</br>";

$birthday = $_POST["birthday"];
echo "Дата рождения: " . $birthday . "</br>";

$marital_status = $_POST["marital_status"];
echo "Женатость: " . $marital_status . "</br>";

$social_status = $_POST["social_status"];
echo "Соцстатус: " . $social_status . "</br>";

$location = $_POST["location"];
echo "Место жительства: " . $location . "</br>";


$activity = $_POST["activity"]; //получаем массив

if ($activity != null) { //проверка на наличие данных
    print_r($_POST["activity"]);  //смотрим содержимое
    $activityString = implode(", ", $activity); // переводим массив в строку
    echo "Увлечения: " . $activityString . "</br>";
} else {
    $activityString = "no records";
    echo "Увлечения: " . $activityString . "</br>";
}

$book = $_POST["book"];
echo "Книга: " . $book . "</br>";

$booksNum = $_POST["number_of_books"];
echo "Количество книг: " . $booksNum . "</br>";

$comments = $_POST["comments"];
echo "Комментарии: " . $comments . "</br>";

$position = $_POST["position"];
print_r($_POST["position"]);
$positionString = implode(", ", $position);
echo "Позиция: " . $positionString . "</br>";

$email = $_POST["email"];
echo "Почта: " . $email . "</br>";


$delivery = $_POST["delivery"];

if ($delivery != null) {
    print_r($_POST["delivery"]);
    $deliveryString = implode(", ", $delivery);
    echo "Рассылка: " . $deliveryString . "</br>";
} else {
    $deliveryString = "no records";
    echo "Рассылка: " . $deliveryString . "</br>";
}

$difficult = $_POST["difficult"];
echo "Сложность: " . $difficult . "</br>";


//Собрали все данные

// ---------------- блок работы с БД

// string mysqli_real_escape_string ( mysqli $link , string $escapestr ) //пример экранирования


$base = mysqli_connect("localhost", "user", "1", "user"); //задаем верные параметры подключения к БД
// экранируем переменные для передачи их в базу.
$name = mysqli_real_escape_string($base, $name);
$surname = mysqli_real_escape_string($base, $surname);
$sex = mysqli_real_escape_string($base, $sex);
$sex2 = mysqli_real_escape_string($base, $sex2);
$age = mysqli_real_escape_string($base, $age);
$birthday = mysqli_real_escape_string($base, $birthday);
$marital_status = mysqli_real_escape_string($base, $marital_status);
$social_status = mysqli_real_escape_string($base, $social_status);
$location = mysqli_real_escape_string($base, $location);
$activityString = mysqli_real_escape_string($base, $activityString);
$book = mysqli_real_escape_string($base, $book);
$booksNum = mysqli_real_escape_string($base, $booksNum);
$comments = mysqli_real_escape_string($base, $comments);
$positionString = mysqli_real_escape_string($base, $positionString);
$deliveryString = mysqli_real_escape_string($base, $deliveryString);
$difficult = mysqli_real_escape_string($base, $difficult);


$sql = "INSERT INTO homework (name, surname, sex, sex2, age, birthday, maritalstatus, socialstatus, location,  
activity, books, booksnum, comments, position, delivery, difficult)".
    " VALUES ('$name', '$surname', '$sex', '$sex2', '$age', '$birthday', '$marital_status', '$social_status', 
    '$location', '$activityString', '$book', '$booksNum', '$comments', '$positionString', '$deliveryString', '$difficult');";

echo "</br>" . $sql; // выведем готовый запрос

$res = $base->query($sql); //пытаемся запихнуть это в базу
if ($res) {                 // честно сперто из образца уловие проверки ошибок, ибо без него никак....
    echo "<p>Дані успішно додано в БД";
} else {
    echo "Виникла помилка:".$base->error;
}




//запрос для копипасты SQL на создание таблицы данных в базе

/*
 CREATE TABLE homework (
id int not null auto_increment primary key,

name varchar (50),
surname varchar (50),
sex varchar (50),
sex2 varchar (50),
age int,
birthday varchar (50),
maritalstatus varchar (50),
socialstatus varchar (50),
location varchar (50),
activity varchar (50),
books varchar (50),
booksnum varchar (50),
comments varchar (50),
position varchar (50),
delivery varchar (50),
difficult varchar (50));

  */

?>

    <a href="readBase.php">Прочитать все данные из базы</a>
</div>

    </body>
</html>



