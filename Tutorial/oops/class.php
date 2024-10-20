<?php
 class school{
    function student()
    {
        echo "i am student";

    }

    function teacher()
    {
        echo "i am teacher";

    }
    function owner()
    {
        echo "i am school owner";
    }
 } 
 $val= new school();
 echo $val->teacher();
 echo "<br>";
 echo $val->student();
 
?>