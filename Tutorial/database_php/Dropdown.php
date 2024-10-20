<?php
include("./connect.php");
$getnotes= $conn->prepare("select Indexno,tital from notes");
$getnotes->execute();
$notesdata=$getnotes->fetchAll();
echo "<select name='dropdown' id='name'>";
echo "<option>select your name </option>";
foreach($notesdata as $notes)
{
    echo "<option value=".$notes['indexno'].">".$notes['tital']."</option>";
}

echo "</select>";
?>