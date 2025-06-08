<!-- Получает список предметов, которые сдавал студент (через examen). -->

<?php
include "connect.php";

$surname = $_GET['surname'];
$name = $_GET['name'];

$sql = "SELECT DISTINCT subjects.subject_name, professors.surname AS prof_surname, professors.name AS prof_name
        FROM examen
        JOIN subjects ON examen.id_subject = subjects.id_subject
        JOIN professors ON subjects.id_prof = professors.id_prof
        WHERE examen.id IN (
            SELECT id FROM fo WHERE surname = '$surname' AND name = '$name'
        )";

echo "<table border=1 align=center width=80%>";
echo "<caption><b>Предметы, которые сдавал студент</b></caption>";
echo "<tr>
        <th>Предмет</th>
        <th>Преподаватель (фамилия)</th>
        <th>Преподаватель (имя)</th>
      </tr>";

include "sql.php";
echo "</table>";
?>
