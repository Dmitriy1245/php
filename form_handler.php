<?php
$surname = $_GET['surname'];
$name = $_GET['name'];
$action = $_GET['action'];

if ($action == "1") {
    include "sql1.php"; // Персональные данные
} elseif ($action == "2") {
    include "sql2.php"; // Экзамены
} elseif ($action == "3") {
    include "sql3.php"; // Предметы
} else {
    echo "Другие варианты ещё не реализованы.";
}
?>
