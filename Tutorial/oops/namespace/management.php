<?php
include "./teacher.php";
include "./student.php";
$call =new teacher\join;
$call->joining();
echo "<br>";
$call2=new student\join;
$call2->admission();
 ?>