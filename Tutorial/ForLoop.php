<?php
$step=0.1;
for($i=0;$i<5;$i+=$step)
{
    if($i>3)
    {
        // break;
        continue;
    }
    echo "$i<br>";
    
}
?>