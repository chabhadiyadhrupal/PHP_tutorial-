<form action="" method="post">
    <input type="search" name="search" placeholder="enter your tital">
    <br>
    <button>search</button>

</form>
<?php
include("./connect.php");
if(isset($_POST['search']))

{
    $search= $_POST['search'];
    $result=$conn->prepare(" select * from notes where  tital like '%$search%'");
    $result->execute();
    $notes= $result->fetchAll();
    echo "<table border ='1'>";
// echo "< border ='0'> ";

foreach ($notes as $s) {

    echo "<tr> ";
    // echo "<td>" . $key. "</td>";
    echo "<td>" . $s['tital'] . "</td>";
    echo "<td>" . $s['description'] . "</td>";
    echo "<td>" . $s['time'] . "</td>";
    echo "</tr>";
}

}
?>