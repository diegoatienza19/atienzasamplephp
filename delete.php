<?php

include("config.php")

$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM country where id=$id");
header ("Location:index.php");

?>
