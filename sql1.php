<!-- Этот скрипт делает SQL-запрос по имени/фамилии и выводит данные из pers. -->

<?php
$surname = $_GET['surname'];
$name = $_GET['name'];

include "connect.php";

// Находим id из таблицы fo
$sql = "SELECT id FROM fo WHERE surname = '$surname' AND name = '$name'";
$q = pg_query($sql);
$id_row = pg_fetch_assoc($q);

if (!$id_row) {
    echo "Студент не найден.";
    exit;
}

$id = $id_row['id'];

// Достаём данные из pers
$sql = "SELECT * FROM pers WHERE id = $id";

echo "<table border='1' align='center' width='80%'>";
echo "<caption><b>Персональные данные</b></caption>";
echo "<tr>
        <th>ID</th>
        <th>Дата рождения</th>
        <th>Город</th>
        <th>Адрес</th>
        <th>Зачётка</th>
        <th>Логин</th>
        <th>Пароль</th>
      </tr>";

include "sql.php"; // универсальный вывод
echo "</table>";
?>
