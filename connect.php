<?php
// Подключение к PostgreSQL
$conn = pg_connect("host=localhost dbname=univer user=postgres password=qawsedrf147");

if (!$conn) {
    echo "Ошибка подключения к базе данных";
    exit;
}
?>
