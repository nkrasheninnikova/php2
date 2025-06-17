<?php

require_once 'config/db.php'; // Подключаем БД

// Получаем все записи из таблицы parking_car
$sql = "SELECT * FROM parking_car";
// $conn - это объект подключения к базе данных
//->query($sql) - Это стандартный способ выполнить SQL-запрос
$result = $conn->query($sql);