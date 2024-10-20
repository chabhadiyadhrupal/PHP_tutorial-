<?php
$User=[
    [1,"dhrupal","rajkot","dhrupal@test"],
    [2,"ram","dhrol","ram@test"],
    [3,"ravi","latipur","ravi@test"]];
for($i=0; $i<count($User); $i++)
{
    for($j=0; $j<count($User[$i]);$j++)
    {
        echo $User[$i][$j];
        Echo "<br>";
    }
// print_r($User[$i]);
// echo "<br>";
}
?>