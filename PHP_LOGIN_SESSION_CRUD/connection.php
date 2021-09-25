<?php


$hostname="localhost";
$user="root";
$password="password";
$dbname="dbname";
$conn=new mysqli($hostname,$user,$password,$dbname);
mysqli_set_charset($conn,"utf8");

?>
