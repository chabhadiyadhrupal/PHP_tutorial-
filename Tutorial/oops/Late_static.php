<?php
class perent{
    static $name ="perent";
    function getname()
    {
        echo static::$name;//self remove and static insert
    }


} 
class child extends perent{
    static $name="child";
}
$call=new child;
$call->getname();

?>