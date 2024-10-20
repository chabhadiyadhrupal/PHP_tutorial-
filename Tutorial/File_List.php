<?php
$path="files";
$item=scandir($path);
$item=array_diff($item,array(".",".."));
foreach($item as $i)
{
    echo "<a href =./files/$i>$i<a>";
    echo "<br>";
}
?>