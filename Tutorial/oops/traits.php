<?php
trait car{
    function start()
    {
        echo "car start";

    }
}
trait bike{
    function on()
    {
        echo "bike start";
    }
}
class men {
   use car;
   use bike;

}
$call=new men;
$call->start();
?>