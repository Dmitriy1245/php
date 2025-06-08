<?php
include "connect.php";

// Получаем следующий ID
$q = pg_query($conn, "SELECT MAX(id_subject) FROM subjects");
$f = pg_fetch_array($q);
$id_subject = $f[0] + 1;

// Получаем данные из формы
$subject_name = $_GET['subject_name'];
$id_prof = $_GET['id_prof'];

// Вставка
$sql = "INSERT INTO subjects (id_subject, subject_name, id_prof)
        VALUES ($id_subject, '$subject_name', $id_prof)";
pg_query($conn, $sql);

echo "Предмет добавлен! ID: $id_subject";
?>
