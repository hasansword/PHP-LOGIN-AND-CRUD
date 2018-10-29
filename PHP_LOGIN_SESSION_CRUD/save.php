<?php
session_start();
include_once "control.php";
	$i=$_GET[i];
	
	$name=$_POST["name"];
	$surname=$_POST["surname"];
	$age=$_POST["age"];

	if($i=="new"){
		$sql_insert= "INSERT INTO users (name, surname, age) VALUES('".$name."', '".$surname."', '".$age."')";
		$result=$conn->query($sql_insert);

		header("location:create.php?i=1");
	}else if($i=="update"){
		$sql_update="UPDATE users set name='".$name."', surname='".$surname."', age='".$age."' where id='".$_GET["id"]."'";
		$result=$conn->query($sql_update);
		header("location:update.php?i=1&id=".$_GET["id"]);
	}

?>