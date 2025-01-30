<?php

include "connection.php";

$query = "CREATE DATABASE CITYCOT";
$sql = mysqli_query($connection,$query);

if($sql){
    echo"database created successfully";
}else{
    echo"database creation failed".mysqli_error($connection);
}


?>