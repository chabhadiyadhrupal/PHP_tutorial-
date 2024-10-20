<?php
trait car{
    function start(){
        echo "car start";

    }
}
trait bike{
    function start()
    {
        echo " bike start";
    }

}
class human{
    use car;
    use bike{
        car::start insteadof bike;
        bike::start as motercycle;
    }
    // function start()
    // {
    //     echo "human start engine";
    // }

}

$call= new human;
$call ->start();
$call->motercycle();
?>