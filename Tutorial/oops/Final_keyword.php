<?php
class perent{
   final function get(){
    echo "this is perent class";
    }

}
class child extends perent{
// function get()
// {
//     echo "this is child class";
// }
}
$call=new child;
$call->get();
?>