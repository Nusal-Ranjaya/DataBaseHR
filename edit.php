<?php
 
    session_start();
    //$ID12 = $_SESSION['ID'];
    $ID1 = $_GET['ID'];
    $sup_id = $_GET['sup_id'];
    //echo $ID1;
    //echo $ID12;
    //echo $sup_id;

    $requested_date = $_GET['date'];
    //echo $requested_date;

    
    $connection = mysqli_connect('localhost','root','','project_hr');
    if(!$connection){
        die("could not connect".mysqli_connect_error());
    }

    $sql1 = "UPDATE leave_table set status='approved' where ID= $ID1 and requested_date = '$requested_date'";
    $sql2 = "SELECT leave_type, number_of_days FROM leave_table where ID = $ID1 and requested_date = '$requested_date'";
    
    
    $result1 = mysqli_query($connection,$sql1);
    $result2 = mysqli_query($connection,$sql2);
    $row = mysqli_fetch_assoc($result2);
    $day_number = $row['number_of_days'];
    $leave_type = $row['leave_type'];

    $sql3 = "SELECT * FROM leave_count where ID = $ID1 ";

    $result3 = mysqli_query($connection,$sql3);
    $row2 = mysqli_fetch_assoc($result3);
    $leave = $row2[$leave_type];
    //echo "day ".$day_number."<br>";
    //echo "l_type ".$leave_type."<br>";
    //echo "leave ".$leave."<br>";

  
    $qry4 = "UPDATE leave_count set ".$leave_type. " = $leave-$day_number WHERE ID = $ID1 ";   //redusing the number of leaves in selectedd leave type
    
    
    

    ?>
        <!DOCTYPE html>
            <html>
            <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
            .alert {
            padding: 20px;
            background-color: green;
            color: white;
            }

            .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
            }

            </style>
            </head>
            <body>

            <h2>Alert Messages</h2>
            <div class="alert">
            <div class="closebtn"><a class="btn btn-primary" type="button"   href="superviser_leave_details.php"> close(x) </a></div> 
            <strong>successfully Approved</strong> 
            </div>

            </body>
            </html>

   <?php
    $result4 = mysqli_query($connection,$qry4);
    $_SESSION['ID'] = $sup_id;
    //echo $ID1;
    $connection->close();
    


    
    ?>
     

    
   
