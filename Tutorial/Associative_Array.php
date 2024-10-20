<?php
$userdetail=["name"=>"dhrupal","age"=>"19","city"=>"rajkot","email"=>"chabhadiyadhrupal99@gmail.com"];
//  foreach($userdetail as $key=>$val)
//  {
//     echo $key." is "."$val<br>";
//  }
foreach ($userdetail as $key=>$data):
    {       
        echo $key." is ".$data."<br>";
    }
endforeach;
?>