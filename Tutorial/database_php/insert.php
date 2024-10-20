<form action="" method="post">
    <input type="text" name="tital" placeholder="enter your name">
    <br><br>
    <textarea type="test" name="description" placeholder="enter your description"></textarea>
    <br>
    <button type="submit " >submit</button>
</form>
<?php
include("./connect.php");
if(isset($_POST['tital']))
{
    $tital=$_POST['tital'];
    $descrption=$_POST['description'];
$note=$conn->prepare("insert into notes(tital,description) values('$tital','$descrption')");
$result=$note->execute();
if($result)
{
    echo "inserted value";
    header("location:delete_edit.php");
}
else {
    echo "fail inserted value";
}
}
?>