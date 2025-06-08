<!-- универсальный вывод таблицы -->
<?php
$result = pg_query($sql);
if (!$result) {
    echo "Ошибка запроса.";
    exit;
}

while ($row = pg_fetch_assoc($result)) {
    echo "<tr>";
    foreach ($row as $val) {
        echo "<td>" . htmlspecialchars($val) . "</td>";
    }
    echo "</tr>";
}
?>
