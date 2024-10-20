<?php

use LDAP\Result;

$server="localhost";
$username="root";
$password="";
$database="db";

$conn=new mysqli($server,$username,$password,$database);
if($conn->connect_error)
{
    die ("failed to connect database".$connect_error);
}
echo "connect sucessfully";
$Result=$conn->query("show tables")->fetch_all();
print_r($Result);

?>