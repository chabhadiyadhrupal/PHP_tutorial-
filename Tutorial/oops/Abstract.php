<?php
abstract class human{
    abstract function hand();
    abstract function lag();
} 
class men extends human{
    function hand()
    {
        echo "men have 2 hand";

    }
    function lag(){
        echo "men have 2 lag";
    }

}
$callmen=new men;
$callmen->hand();
echo "<br>";
$callmen->lag();
?>