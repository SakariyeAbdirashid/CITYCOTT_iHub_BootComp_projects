<?php

include "connection.php";

$id = $_GET["id"];
$query = "DELETE FROM Asset_reg WHERE ID = '$id'";
$sql = mysqli_query($conn,$query);
header("location: read.php");
?>