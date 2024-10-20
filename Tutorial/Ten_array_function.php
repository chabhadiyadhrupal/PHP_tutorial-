<?php
$user=["name"=>"dhrupal","age"=>"19","city"=>"rajkot"];
$users=["dhrupal","nirav","smit","dhrupal","utsav","smit"];
//chack array
//echo is_array($user);

//how many element of array
//echo count($users);

//add element
//array_push($user,"xyz");

//remove last element
// array_pop($users);

//remove any element
//unset($users[2]);
// print_r($users);

//key 
//print_r( array_keys($user));

//array to string convert
//echo implode($users);

//string to array 
//$str="hello dhrupal how are you ?";
//print_r(explode(" ",$str));

//merge two array
// print_r(array_merge($user,$users));

//dublicat element remove
print_r(array_unique($users));

?>