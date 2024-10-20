<?php
include("./Connect.php");
class Students{
    public $Dbconnect;
    function __construct($conn)
    {
        $this->Dbconnect=$conn;
    }
    function fatchval()
    {
        $getnote=$this->Dbconnect->prepare("select * from notes ");
        $getnote->execute();
        $result=$getnote->fetchAll();
       // print_r($result);
       
       echo "<table border='1'>";
        foreach( $result as $note)
        {
            // echo $note['tital'];
            echo "<tr>
            <td>".$note['tital']."</td>";
            echo "<td>".$note['description']."</td></tr>";

        }
        echo "</table>";
    }
    function insert()
    {
        $query="insert into notes (`tital`, `description`)values ('php','testing ')";
        $notes=$this->Dbconnect->prepare($query);
        $notes->execute();
        // $result=$notes->fetchAll();
        if($notes){
            echo"insert value";
        }
        // $this->fatchval();
    }
    function update()
    {
        $query="update notes set `tital`='jay', `description`='pipariya' where Indexno='66'";
        $notes=$this->Dbconnect->prepare($query);
        $notes->execute();
        if($notes)
        {
            echo "update value";

        }
        else 
        {
            echo "update value";
        }
    }
    function delete()
    {
        $query="delete from notes where tital='php'";
        $notes=$this->Dbconnect->prepare($query);
        $notes->execute();
        if($notes)
        {
            echo "php deleted";

        }
        else 
        echo "php is not deleted";
    }
    
}
$showtable= new Students($conn);
// $showtable->fatchval();
//$showtable->insert();
//$showtable->update();
$showtable->delete();
?>