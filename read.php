<?php

include "connection.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read_data__table</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        @media (max-width:865px){
            table thead tr{
                display: none;
            }
            table tr{
                display: block;
            }
            table th,table td{
                padding: .5em;
            }
            table td{
                text-align: right;
                display: block;
            }
            table td::before{
                content: attr(data-tittle)": ";
                float: left;
            }
            nav{
                margin: 0;

            }
        }
       
    </style>
</head>
<body class="bg-info">
<nav class="navbar bg-body-tertiary ">
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

            <div class="conainer container-fluid mt-md-3 mx-md-2 ">
            <h3 class="text-light">Stored Database</h3><hr>
                <table class="table table-sm table-striped table-hover table-info table-bordered ">
                 <thead class="table-danger fw-bold" style="font-size: 1.1rem;">
                    <t>
                        <th>ID</th>
                        <th>Asset_Name</th>
                        <th>Category</th>
                        <th>Purchase_Date</th>
                        <th>LOCATION</th>
                        <th>Condition</th>
                        <th>Text_field</th>
                        <th>Messege</th>
                        <th>Action</th>
                    </tr>
                </thead>
                 <tbody>
             <?php

                $query = "SELECT* FROM Asset_reg";
                $sql = mysqli_query($conn,$query);
                $result = mysqli_num_rows($sql);

              
                while($fetch = mysqli_fetch_assoc($sql) ){
                    echo'
                        <tr>
                            <td data-tittle="ID"> '.$fetch["ID"].' </td>
                            <td data-tittle="Asset_Name">'.$fetch["Asset_Name"].'</td>
                            <td data-tittle="Category">'.$fetch["Category"].'</td>
                            <td data-tittle="Purchase_Date">'.$fetch["Purchase_Date"].'</td>
                            <td data-tittle="LOCATION">'.$fetch["LOCATION"].'</td>
                            <td data-tittle="Condition">'.$fetch["Condition"].'</td>
                            <td data-tittle="Text_field">'.$fetch["Text_field"].'</td> 
                            <td data-tittle="Messege">'.$fetch["Messege"].'</td>
                            <td data-tittle="Action">
                            <a href="update.php?id='.$fetch["ID"].'"><button class="btn btn-success">UPDATE</button></a> 
                            <a href="delete.php?id='.$fetch["ID"].'"><button class="btn btn-danger">DELETE</button></a>
                            </td>
                        </tr>
                    ';
                }
                
             ?>
                 </tbody>
                </table>
            </div>


    <script src="js/bootstrap.min.js"></script>
</body>
</html>
