<?php

$servername = "localhost";
$username = "root";
$password = "";
// $dbname = "";
$database_name = "CITYCOT";

// $connection = mysqli_connect($servername,$username,$dbname,$password);
$conn = mysqli_connect($servername,$username,$password,$database_name);

// if($conn){
//     echo"connected database successfully ";
// }else{
//     echo"failed connection".mysqli_connect_error($connection);
// }

?>