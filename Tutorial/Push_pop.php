<?php
$users=["dhrupal","utsav","smit","nirav"];
array_push($users,"test","testing");
foreach( $users as $i)
{
    echo "$i<br>";
}
echo "<br><br>";
// array_pop($users);
array_splice($users,-2);
foreach( $users as $i)
{
    echo "$i<br>";
}

?>