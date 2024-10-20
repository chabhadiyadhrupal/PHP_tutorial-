<?php
 class teacher{
    function name()
    {
        echo "teacher name is vivek";
    }
 }
 class student extends teacher{
    // function name()
    // {
    //     echo "my name is dhrupal";
    // }
 }
 $call= new student;
 $call->name();
 ?>