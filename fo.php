<?php
include "connect.php";

$result = pg_query("SELECT * FROM fo");

echo "<table border='1' align='center' width='80%'>";
echo "<caption><b>ФИО студентов (fo)</b></caption>";
echo "<tr>
        <th>ID</th>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Отчество</th>
      </tr>";

while ($row = pg_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
    echo "<td>" . htmlspecialchars($row['surname']) . "</td>";
    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['patronymic']) . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
