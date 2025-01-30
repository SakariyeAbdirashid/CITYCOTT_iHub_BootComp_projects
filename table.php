<?php

include "connection.php";

$query = "CREATE TABLE Asset_reg (
        ID INT PRIMARY KEY AUTO_INCREMENT, 
        Asset_Name VARCHAR(50), 
        Category VARCHAR(50), 
        Purchase_Date DATE, 
        `LOCATION` VARCHAR(50), 
        `Condition` VARCHAR(50),
        Text_field VARCHAR(50), 
        Messege VARCHAR(100))";


$sql = mysqli_query($conn,$query);

if($sql){
    echo"created table successfully";
}else{
    echo"failed table creation".mysqli_error($conn);
}

?>