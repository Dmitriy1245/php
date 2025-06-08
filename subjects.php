<?php
include "connect.php";

$result = pg_query("SELECT * FROM subjects");

echo "<table border='1' align='center' width='80%'>";
echo "<caption><b>Предметы</b></caption>";
echo "<tr>
        <th>ID</th>
        <th>Название предмета</th>
        <th>ID преподавателя</th>
      </tr>";

while ($row = pg_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id_subject']) . "</td>";
    echo "<td>" . htmlspecialchars($row['subject_name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['id_prof']) . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
