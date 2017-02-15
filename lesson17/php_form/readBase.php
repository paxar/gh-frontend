<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Home Work 3 </title>
    <link rel="stylesheet" href="forms.css">
</head>
<body>
<div class="wrapper">

<!--
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
-->


    <table border="2">
    <thead>
    <tr>
        <th>#</th>
        <th>name</th>
        <th>surname</th>
        <th>sex</th>
        <th>sex2</th>
        <th>age</th>
        <th>birthday</th>
        <th>maritalstatus</th>
        <th>socialstatus</th>
        <th>location</th>
        <th>activity</th>
        <th>books</th>
        <th>booksNum</th>
        <th>comments</th>
        <th>position</th>
        <th>delivery</th>
        <th>difficult</th>
    </tr>
    </thead>
    <tbody>

<?php
$base = mysqli_connect("localhost", "user", "1", "user"); //задаем верные параметры подключения к БД
$sql = "SELECT * FROM homework;";
$res = $base->query($sql);

print_r($res);
if ($res) {
    //array mysqli_fetch_assoc ( mysqli_result $result )
    while($row = $res->fetch_assoc()) {
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['surname'] ?></td>
            <td><?= $row['sex'] ?></td>
            <td><?= $row['sex2'] ?></td>
            <td><?= $row['age'] ?></td>
            <td><?= $row['birthday'] ?></td>
            <td><?= $row['maritalstatus'] ?></td>
            <td><?= $row['socialstatus'] ?></td>
            <td><?= $row['location'] ?></td>
            <td><?= $row['activity'] ?></td>
            <td><?= $row['books'] ?></td>
            <td><?= $row['booksnum'] ?></td>
            <td><?= $row['comments'] ?></td>
            <td><?= $row['position'] ?></td>
            <td><?= $row['delivery'] ?></td>
            <td><?= $row['difficult'] ?></td>
        </tr>
        <?php
    }
}
?>
    </tbody>
    </table>




</div>

</body>
</html>




