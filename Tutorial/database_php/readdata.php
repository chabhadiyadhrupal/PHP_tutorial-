<?php
include("./connect.php");
$getdata = $conn->prepare("SELECT * FROM  notes");
$getdata->execute();
$student = $getdata->fetchAll();
echo "<table border ='1'>";
// echo "< border ='0'> ";

foreach ($student as $s) {

    echo "<tr> ";
    // echo "<td>" . $key. "</td>";
    echo "<td>" . $s['tital'] . "</td>";
    echo "<td>" . $s['description'] . "</td>";
    echo "<td>" . $s['time'] . "</td>";
    echo "</tr>";
}
