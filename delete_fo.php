<?php
include "connect.php";

$id = $_GET['id'];

// Удалим из обеих таблиц
$sql_pers = "DELETE FROM pers WHERE id = $id";
$sql_fo = "DELETE FROM fo WHERE id = $id";

pg_query($conn, $sql_pers);
pg_query($conn, $sql_fo);

echo "Запись успешно удалена!";
?>
