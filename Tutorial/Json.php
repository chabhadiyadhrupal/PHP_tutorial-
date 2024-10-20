<?php
// $user=["name"=>"dhrupal","age"=>"19","city"=>"rajkot"];
// $Userjson=json_encode($user);
// echo $Userjson;
$data='{"name":"dhrupal","age":"19","city":"rajkot"}';
$dataArray=json_decode($data,true);
foreach($dataArray as $key=>$data)
{
    echo $key."is".$data;
}
?>