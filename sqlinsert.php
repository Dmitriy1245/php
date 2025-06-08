<!-- Скрипт, который вставляет данные в fo и pers -->

<?php
include "connect.php";

// Получаем следующий ID
$q = pg_query("SELECT MAX(id) FROM fo");
$f = pg_fetch_array($q);
$id = $f[0] + 1;

// Получаем данные из формы
$surname = $_GET['surname'];
$name = $_GET['name'];
$patronymic = $_GET['patronymic'];

$birth_date = $_GET['birth_date'];
$city = $_GET['city'];
$address = $_GET['address'];
$academic_record_book = $_GET['academic_record_book'];
$login = $_GET['login'];
$password = $_GET['password'];

// Вставка в таблицу fo
$sql_fo = "INSERT INTO fo (id, surname, name, patronymic)
           VALUES ($id, '$surname', '$name', '$patronymic')";
pg_query($sql_fo);

// Вставка в таблицу pers
$sql_pers = "INSERT INTO pers (id, birth_date, city, address, academic_record_book, login, password)
             VALUES ($id, '$birth_date', '$city', '$address', $academic_record_book, '$login', '$password')";
pg_query($sql_pers);

echo "Студент добавлен! ID: $id";
?>
