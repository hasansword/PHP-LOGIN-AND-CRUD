<?php
include "connection.php";

$sql_delete="Delete from users where id=".$_GET["id"];
$conn->query($sql_delete);
header("location:index.php?i=delete");
?>