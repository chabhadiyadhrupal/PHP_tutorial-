<?php
include("./connect.php");
if(isset( $_GET['Indexno']))
{
    $getnotes=$conn->prepare("select * from notes where Indexno=".$_GET['Indexno']."");
    $Indexno= $_GET['Indexno'];
    $getnotes->execute();
    $data=$getnotes->fetchAll();
    
     $tital=$data[0]['tital'];
     $desc=$data[0]['description'];
}

?>
<form action="" method="post">
    <input type="text" value="<?php echo $tital;?>" name="tital">
    <br><br>
    <input type="text" value="<?php echo $desc;?>" name="description">
    <br>
    <button name="update" value="<?php echo $Indexno;?>" >update</button>
</form>
<?php
if(isset($_POST['update']))
{
    $id=$_POST['update'];
  $tital=$_POST['tital'];
    $desc=$_POST['description'];
$getUpdate=$conn->prepare("update notes set tital='$tital' , description='$desc' where Indexno='$id'");

if($getUpdate->execute())
{
    header("location:delete_edit.php");


}
else{
 echo "not updeted value";
}

}
?>