<?php
class Constructor{
    public $name;
    function __construct($name)
    {
        $this->name=$name;
        echo "by default call construct <br>";
    }
    function displayval()
    {
        echo $this->name;
    }
}
$call= new Constructor("dhrupal");
$call->displayval();
?>