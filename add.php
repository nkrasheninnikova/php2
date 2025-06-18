<?php

require_once '../config/db.php'; // Подключаем БД

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавить автомобиль</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Добавить автомобиль</h1>
<form method="post">
    <label>Модель автомобиля:
        <input type="text" name="model" required>
    </label><br><br>
    <label>Имя владельца:
        <input type="text" name="owner" required>
    </label><br><br>
    <label>Дата въезда:
        <input type="datetime-local" name="entry_date" required>
    </label><br><br>
    <label>Дата выезда:
        <input type="datetime-local" name="exit_date" required>
    </label><br><br>
    <label>Стоимость:
        <input type="number" name="price" required>
    </label><br><br>
    <label>Скидка:
        <input type="number" name="discount" value="0">
    </label><br><br>
    <button type="submit">Сохранить</button>
</form>
<br>
<a href="index.php">Главная страница</a>
</body>
</html>
