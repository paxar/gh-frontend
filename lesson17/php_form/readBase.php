<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Home Work 3 </title>
        <link rel="stylesheet" href="forms.css">
    </head>
    <body>
        <div class="wrapper">


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
                $sql = "SELECT * FROM homework";  //делаем обращение к таблице
                $res = mysqli_query($base, $sql); //объединяем это все в запрос к БД

                print_r($res); //проверим количество данных

                if ($res) {

                    while ($row = mysqli_fetch_assoc($res)) { // переводим запрос в массив

                        echo "<tr>";
                        // распределяем данные по ключам массива
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td>' . $row['name'] . '</td>';
                        echo '<td>' . $row['surname'] . '</td>';
                        echo '<td>' . $row['sex'] . '</td>';
                        echo '<td>' . $row['sex2'] . '</td>';
                        echo '<td>' . $row['age'] . '</td>';
                        echo '<td>' . $row['birthday'] . '</td>';
                        echo '<td>' . $row['maritalstatus'] . '</td>';
                        echo '<td>' . $row['socialstatus'] . '</td>';
                        echo '<td>' . $row['location'] . '</td>';
                        echo '<td>' . $row['activity'] . '</td>';
                        echo '<td>' . $row['books'] . '</td>';
                        echo '<td>' . $row['booksnum'] . '</td>';
                        echo '<td>' . $row['comments'] . '</td>';
                        echo '<td>' . $row['position'] . '</td>';
                        echo '<td>' . $row['delivery'] . '</td>';
                        echo '<td>' . $row['difficult'] . '</td>';

                        echo "</tr>";

                    }
                }
                ?>
                </tbody>
            </table>


        </div>

    </body>
</html>




