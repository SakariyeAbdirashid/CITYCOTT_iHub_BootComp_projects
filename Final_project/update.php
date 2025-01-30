<?php

include "connection.php";
$id = $_GET["id"];
$query = "SELECT* FROM Asset_reg WHERE ID = '$id'";
$sql = mysqli_query($conn,$query);
$fetch = mysqli_fetch_assoc($sql);

?>

<?php


if(isset($_POST["UPDATE"])){
    
    $ID =  $_POST["ID"];
    $Asset_Name =  $_POST["Asset_Name"];
    $CATEGORY =  $_POST["CATEGORY"];
    $PURCHASE_DATE =  $_POST["PURCHASE_DATE"];
    $LOCATION = $_POST["LOCATION"];
    $CONDITION = $_POST["CONDITION"];
    $TEXT =  $_POST["TEXT"];
    $MESSEGE = $_POST["MESSEGE"];
    
    $query = "UPDATE Asset_reg SET 
    ID = '$ID',
    Asset_Name = '$Asset_Name',
    Category = '$CATEGORY', 
    Purchase_Date = '$PURCHASE_DATE',
    LOCATION = '$LOCATION', 
    `Condition` = '$CONDITION',
    Text_field = '$TEXT',
    Messege = '$MESSEGE'
  WHERE ID = '$ID'";

$sql = mysqli_query($conn,$query);
   echo"record updated successfully";
   header("location: read.php");
   mysqli_close($conn);

}

            
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update_form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
         body{
       background-image: url(images/background.jpeg);
        }
    </style>
</head>
<body>

<div class="container container-fluid  px-3 py-5 ">
            <div class="card bg-info ">
                <div class="card-title card-header ">
                    <h2 class=" mt-md-2 " style="font-style: italic;">Asset Registration Form</h2>
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="Asset_ID">Asset_ID</label><br>
                                <div class="input-group mt-2">
                                    <span class="input-group-text"><i class="fa-solid fa-id-card" style="color: blue;"></i></span>
                                    <input type="text" class="form-control" name="ID" value="<?php echo $fetch["ID"]?>"  placeholder="ID will be auto">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="Asset_name">Asset_name</label><br>
                                <div class="input-group mt-md-2">
                                    <span class="input-group-text"><i class="fa-solid fa-user" style="color: blue;"></i></span>
                                    <input type="text" class="form-control" value="<?php echo $fetch["Asset_Name"]?>" name="Asset_Name" placeholder="Enter Asset_Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="Category">Category</label><br>
                                <div class="input-group mt-md-2">
                                    <span class="input-group-text"><i class="fa-solid fa-list" style="color: blue;"></i></span>
                                    <input type="text" class="form-control" value="<?php echo $fetch["Category"]?>"  name="CATEGORY" placeholder="Enter category">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mt-3">
                                    <label for="purchased">Purchased Date</label><br>
                                    <div class="input-group mt-md-2">
                                    <span class="input-group-text"><i class="fa-solid fa-calendar-days" style="color: blue;"></i></span>
                                    <input type="date" value="<?php echo $fetch["Purchase_Date"]?>" name="PURCHASE_DATE" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4 mt-md-3">
                                    <label for="location">Location</label><br>
                                    <div class="input-group mt-md-2">
                                        <span class="input-group-text"><i class="fa-sharp fa-solid fa-location-dot" style="color: blue;"></i></span>
                                        <select name="LOCATION" value="<?php echo $fetch["LOCATION"]?>" class="form-select">
                                            <option value="Nikhiil Compus">Nakhiil Compus</option>
                                            <option value="Main Compus">Main Compus</option>
                                        </select>
                            
                                    </div>
                                </div>
                                <div class="col-md-4 mt-md-3">
                                    <label for="Condition">Condition</label><br>
                                    <div class="input-group mt-md-2">
                                        <span class="input-group-text"><i class="fa-solid fa-user-nurse" style="color: blue;"></i></span>
                                        <select name="CONDITION"  class="form-select"  value="<?php echo $fetch["CONDITION"]?>">
                                            <option value="Working">Working</option>
                                            <option value="Scrap">Scrap</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-4 mt-md-3">
                                <label for="text-field">text-field</label><br>
                                <div class="input-group mt-md-2">
                                    <span class="input-group-text"><i class="fa-regular fa-file-lines" style="color: blue;"></i></span>
                                    <input type="text" value="<?php echo $fetch["Text_field"]?>"   name="TEXT" placeholder="Enter text"  class="form-control">
                                </div>
                                
                                </div>
                                <div class="col-md-4 mt-md-3">
                                <label for="messege">Messege</label><br>
                                <div class="input-group mt-md-2">
                                    <span class="input-group-text"><i class="fa-solid fa-message" style="color: blue;"></i></span>
                                    <textarea name="MESSEGE" value="<?php echo $fetch["Messege"]?>" style="max-height: max-content;" placeholder="share us your complaint" class="form-control"></textarea>
                                </div>
                                </div>
                                <div class="col-md-4 mt-md-3">
                                <label for="save" class="form-label fw-bold">Save</label><br>
                                <div class="input-group mt-md-2">
                                    <span class="input-group-text"><i class="fa-solid fa-floppy-disk" style="color: green;" ></i></span>
                                <input type="submit"  name="UPDATE" value="UPDATE" class="btn btn-warning form-control fw-bold p-2">
                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        
        
        <script src="js/bootstrap.min.js"></script>
    </body>
    </html>
    
   

