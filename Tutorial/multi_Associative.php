<?php
$users=[
    ["sn"=>1,"name"=>"dhrupal","city"=>"rajkot"],
    ["sn"=>2,"name"=>"smit","city"=>"jamanagar"],
    ["sn"=>3,"name"=>"nirav","city"=>"morbi"],
    ["sn"=>4,"name"=>"Akash","city"=>"paddhri"]

];
foreach ($users as $user)
{
    foreach($user as$key=> $item)
    {
        echo "$key is $item";
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";
}
?>