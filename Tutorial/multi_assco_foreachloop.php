<?php
$users=[
    ["sn"=>1,"name"=>"dhrupal","city"=>"rajkot"],
    ["sn"=>2,"name"=>"smit","city"=>"jamanagar"],
    ["sn"=>3,"name"=>"nirav","city"=>"morbi"],
    ["sn"=>4,"name"=>"Akash","city"=>"paddhri"]

];
echo "<table border=1>";
foreach ($users as $user)
{
    echo "<tr>";
   
    foreach($user as $key=>$item)
    { echo "<td>";
        echo $item;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>