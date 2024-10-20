<?php
$a=10;
for($i=1; $i<=10; $i++)
{   
    echo "$i<br>";
    if($i==7)
    {
        goto breakloop;
        
    }
}
breakloop:
    echo "outside of loop";


?>