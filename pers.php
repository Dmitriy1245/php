<?php
include "connect.php";

$result = pg_query("SELECT * FROM pers");

echo "<table border='1' align='center' width='80%'>";
echo "<caption><b>Персональные данные студентов</b></caption>";
echo "<tr>
        <th>ID</th>
        <th>Дата рождения</th>
        <th>Город</th>
        <th>Адрес</th>
        <th>Зачётка</th>
        <th>Логин</th>
        <th>Пароль</th>
      </tr>";

while ($row = pg_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
    echo "<td>" . htmlspecialchars($row['birth_date']) . "</td>";
    echo "<td>" . htmlspecialchars($row['city']) . "</td>";
    echo "<td>" . htmlspecialchars($row['address']) . "</td>";
    echo "<td>" . htmlspecialchars($row['academic_record_book']) . "</td>";
    echo "<td>" . htmlspecialchars($row['login']) . "</td>";
    echo "<td>" . htmlspecialchars($row['password']) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
