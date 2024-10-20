<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="tital" placeholder="enter your tital">
        <br><br>
        <input type="text" name="description" placeholder="enter your description">
        <br><br>
        <button>insert</button>

    </form>

</body>

</html>
<?php
include("Connect.php");
class operation
{
    public $dbconn;
    function __construct($conn)
    {
        $this->dbconn = $conn;
    }
    function insert($request)
    {

        
           echo $tital=$_REQUEST['tital'];
            
            echo $desc=$_REQUEST['description'];
            $query="insert into `notes`(`tital`,`description`) values ('$tital','$desc')";
            $notes= $this->dbconn->prepare($query);
          $notes->execute();
          
        }
    }

$opertions= new operation($conn);
if (isset($_POST['tital'])) {
    $opertions->insert($_POST);
}
?>