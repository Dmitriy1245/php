<?php
include "connect.php";

$result = pg_query("SELECT * FROM examen");

echo "<table border='1' align='center' width='80%'>";
echo "<caption><b>Экзамены</b></caption>";
echo "<tr>
        <th>ID</th>
        <th>ID предмета</th>
        <th>Дата</th>
        <th>Результат</th>
      </tr>";

while ($row = pg_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
    echo "<td>" . htmlspecialchars($row['id_subject']) . "</td>";
    echo "<td>" . htmlspecialchars($row['date']) . "</td>";
    echo "<td>" . htmlspecialchars($row['result']) . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
