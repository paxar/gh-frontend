<?php
/**
 * Created by PhpStorm.
 * User: paxar
 * Date: 2/14/17
 * Time: 8:38 PM
 */


print_r($_POST); //смотрим полученный массив

$name = $_POST["name"];
echo "</br>" . $name . "</br>";

$surname = $_POST["surname"];
echo $surname . "</br>";

$sex = $_POST["sex"];

echo $sex . "</br>";

$age = $_POST["age"];
echo $age . "</br>";



//--------

$sex2 = $_POST["sex2"];
echo $sex2 . "</br>";

$birthday = $_POST["birthday"];
echo $birthday . "</br>";

$marital_status = $_POST["marital_status"];
echo $marital_status . "</br>";

$social_status = $_POST["social_status"];
echo $social_status . "</br>";

$location = $_POST["location"];
echo $location . "</br>";

//------

$activity = $_POST["activity"];
print_r($_POST["activity"]);
$activityString = implode(", " , $activity);
echo $activityString . "</br>";