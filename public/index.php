<?php

require_once 'config/db.php'; // Подключаем БД

// Получаем все записи из таблицы parking_car
$sql = "SELECT * FROM parking_car";
// $conn - это объект подключения к базе данных
//->query($sql) - Это стандартный способ выполнить SQL-запрос
$result = $conn->query($sql);

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Автостоянка</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Список автомобилей на стоянке</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Модель</th>
            <th>Владелец</th>
            <th>Дата въезда</th>
            <th>Дата выезда</th>
            <th>Цена</th>
            <th>Скидка (%)</th>
            <th>Задолженность</th>
            <th>Действия</th>
        </tr>
    </table>
</body>
</html>
