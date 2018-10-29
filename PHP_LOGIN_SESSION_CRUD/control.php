<?php
session_start();
if($_SESSION["login"]){
    include "connection.php";

}else{
    header("location:login.php");
}
?>

 