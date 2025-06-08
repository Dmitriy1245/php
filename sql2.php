<!-- находит экзамены студента по ID и выводит их через sql.php.
 -->

 <?php
include "connect.php";

$surname = $_GET['surname'];
$name = $_GET['name'];

$sql = "SELECT examen.id, subjects.subject_name, examen.date, examen.result
        FROM examen
        JOIN subjects ON examen.id_subject = subjects.id_subject
        WHERE examen.id IN (
            SELECT id FROM fo WHERE surname = '$surname' AND name = '$name'
        )";

echo "<table border=1 align=center width=80%>";
echo "<caption><b>Экзамены студента</b></caption>";
echo "<tr>
        <th>ID</th>
        <th>Предмет</th>
        <th>Дата</th>
        <th>Оценка</th>
      </tr>";

include "sql.php";
echo "</table>";
?>
