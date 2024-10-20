<?php
include("./connect.php");
$getnotes=$conn->prepare("select * from notes");
$getnotes->execute();
$notesdata=$getnotes->fetchAll();

echo "<table border='1'>";
foreach($notesdata as $note)
{
    echo "<tr> <td>".$note['tital']."</td>";
    echo "<td>".$note['description']."</td>";
    // echo "<td>".$note['Indexno']."</td>";
    echo "<td><form method='post'><button name=delete value=".$note['Indexno'].">delete</button></form></td>";
    echo "<td><a href='update.php?Indexno=".$note['Indexno']."'>edit</a></td>";
    echo "</tr>";
}
echo "</table>";
if(isset($_POST['delete']))
{
$id=$_POST['delete'];
$result=$conn->prepare("delete from notes where Indexno='$id'");



if($result->execute())
{
    //echo "record delete";
header("location:delete_edit.php");
}
else
{
    echo "opration failed";
}
}
?>