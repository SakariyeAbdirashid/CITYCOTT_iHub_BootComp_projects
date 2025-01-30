<?php

include "connection.php";


?>



<?php



if(isset($_POST["Add"])){
    
    $Asset_Name =  $_POST["Asset_Name"];
    $CATEGORY =  $_POST["CATEGORY"];
    $PURCHASE_DATE =  $_POST["PURCHASE_DATE"];
    $LOCATION = $_POST["LOCATION"];
    $CONDITION = $_POST["CONDITION"];
    $TEXT =  $_POST["TEXT"];
    $MESSEGE = $_POST["MESSEGE"];
    
    if(empty($Asset_Name) || empty($CATEGORY) || empty($PURCHASE_DATE) || empty($LOCATION) || empty($CONDITION) || empty($TEXT) || empty($MESSEGE) ){
        echo '<p style="text-align: center;font-weight:bold;color:red;">fill missing informartion</p>';
    }else{

        $query = "SELECT* FROM Asset_reg WHERE Asset_Name = '$Asset_Name' ";
        $sql = mysqli_query($conn,$query);
        $row = mysqli_num_rows($sql);
        if($row > 0){
            echo"this name is already exist";
        }else{
             if(strlen($TEXT) < 5){
                 echo"write at least 2 words";
                }else{
                    if(empty($MESSEGE)){
                        echo"please share us your complaint";
                    }else{
                        
                        $query = "INSERT INTO Asset_reg (Asset_Name  , Category , Purchase_Date ,  `LOCATION` ,  `Condition` , Text_field , Messege )
                                    VALUES('$Asset_Name','$CATEGORY','$PURCHASE_DATE','$LOCATION','$CONDITION','$TEXT','$MESSEGE')";
                        $sql = mysqli_query($conn,$query);
                        header("location: read.php");

                }
            }
        }
        
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration_form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

.container{
    margin-top: 5%;
}

.card{
    box-shadow:  0 0 5px 0px blue;
}
.btn:hover{
    
    box-shadow:  2px 1px 5px 0px green;
}


    </style>
</head>
<body class="bg-info">
<nav class="navbar bg-body-tertiary "style="margin-top: 0;">
            <div class="container-fluid bg-primary rounded p-2 ">
              <a class="navbar-brand" href="home.php">
                <img src="images/citycott_log.jpg" alt="Logo" width="50" height="34" class="d-inline-block align-text-top rounded">
                </a>
                <span class="me-5 text-light fw-bold">Welcome To Asset Registration system</span>
                <div>
                 <a href="Login.php" target="blank"><button class="btn btn-danger">Logout</button></a> 
                </div>
            </div>
            <div style="text-transform: uppercase;" class="fw-bold"><p>Citycott</p></div>
          </nav>
    <div class="container container-fluid">
            <div>
                <h3 class="fw-bold">Asset registration</h3>
            </div>
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
                                    <input type="text" class="form-control" name="ID" disabled placeholder="ID will be auto">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="Asset_name">Asset_name</label><br>
                                <div class="input-group mt-md-2">
                                    <span class="input-group-text"><i class="fa-solid fa-user" style="color: blue;"></i></span>
                                    <input type="text" class="form-control" name="Asset_Name" placeholder="Enter Asset_Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="Category">Category</label><br>
                                <div class="input-group mt-md-2">
                                    <span class="input-group-text"><i class="fa-solid fa-list" style="color: blue;"></i></span>
                                    <input type="text" class="form-control" name="CATEGORY" placeholder="Enter category">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mt-3">
                                    <label for="purchased">Purchased Date</label><br>
                                    <div class="input-group mt-md-2">
                                    <span class="input-group-text"><i class="fa-solid fa-calendar-days" style="color: blue;"></i></span>
                                    <input type="date" name="PURCHASE_DATE" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4 mt-md-3">
                                    <label for="location">Location</label><br>
                                    <div class="input-group mt-md-2">
                                        <span class="input-group-text"><i class="fa-sharp fa-solid fa-location-dot" style="color: blue;"></i></span>
                                        <select name="LOCATION" class="form-select">
                                            <option value="Nikhiil Compus">Nakhiil Compus</option>
                                            <option value="Main Compus">Main Compus</option>
                                        </select>
                            
                                    </div>
                                </div>
                                <div class="col-md-4 mt-md-3">
                                    <label for="Condition">Condition</label><br>
                                    <div class="input-group mt-md-2">
                                        <span class="input-group-text"><i class="fa-solid fa-user-nurse" style="color: blue;"></i></span>
                                        <select name="CONDITION" class="form-select">
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
                                    <input type="text" placeholder="Enter text" name="TEXT" class="form-control">
                                </div>
                                </div>
                                <div class="col-md-4 mt-md-3">
                                <label for="messege">Messege</label><br>
                                <div class="input-group mt-md-2">
                                    <span class="input-group-text"><i class="fa-solid fa-message" style="color: blue;"></i></span>
                                    <textarea name="MESSEGE" style="max-height: max-content;" placeholder="share us your complaint" class="form-control"></textarea>
                                </div>
                                </div>
                                <div class="col-md-4 mt-md-3">
                                <label for="save" class="form-label fw-bold">Save</label><br>
                                <div class="input-group mt-md-2">
                                    <span class="input-group-text"><i class="fa-solid fa-floppy-disk" style="color: green;" ></i></span>
                                <input type="submit" name="Add" value="Add" class="btn btn-success form-control fw-bold p-2">
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
