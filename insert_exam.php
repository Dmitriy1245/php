<?php
include "connect.php";

// Получаем следующий ID
$q = pg_query($conn, "SELECT MAX(id) FROM examen");
$f = pg_fetch_array($q);
$id = $f[0] + 1;

// Получаем данные
$id_subject = $_GET['id_subject'];
$date = $_GET['date'];
$result = $_GET['result'];
$id_student = $_GET['id'];

// Вставка
$sql = "INSERT INTO examen (id, id_subject, date, result)
        VALUES ($id_student, $id_subject, '$date', $result)";
pg_query($conn, $sql);

echo "Экзамен добавлен! ID студента: $id_student";
?>
