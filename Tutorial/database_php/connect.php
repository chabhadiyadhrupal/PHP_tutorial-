<?php
$host="localhost";
$username="root";
$password="";
$database="notes";
$conn=new PDO("mysql:host=$host;dbname=$database",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//echo "connect successfully";

?>