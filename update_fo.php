<?php
include "connect.php";

$id = $_GET['id'];
$surname = $_GET['surname'];
$name = $_GET['name'];
$patronymic = $_GET['patronymic'];
$birth_date = $_GET['birth_date'];
$city = $_GET['city'];
$address = $_GET['address'];
$academic_record_book = $_GET['academic_record_book'];
$login = $_GET['login'];
$password = $_GET['password'];

// Обновим обе таблицы
$sql_fo = "UPDATE fo 
           SET surname = '$surname', name = '$name', patronymic = '$patronymic' 
           WHERE id = $id";

$sql_pers = "UPDATE pers 
             SET birth_date = '$birth_date', city = '$city', address = '$address',
                 academic_record_book = $academic_record_book,
                 login = '$login', password = '$password'
             WHERE id = $id";

pg_query($conn, $sql_fo);
pg_query($conn, $sql_pers);

echo "Запись успешно обновлена!";
?>
