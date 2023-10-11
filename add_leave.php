<!DOCTYPE html>
<?php
    session_start();                           
    //$connection = mysqli_connect('localhost','root','MyNewPass','hrm');
     $connection = mysqli_connect('localhost','root','','project_hr');
    if(!$connection){
        die("could not connect".mysqli_connect_error());
    }
    
    //echo $_SESSION['ID'];
    
    $reg_num = $_SESSION['ID'];
    
    //echo "reg number".$reg_num."<br>";
    $sup_id = $_SESSION['sup_ID'];
    $leave_type = $_POST['leave_type'];
    $date = $_POST['Required_date'];
    $no_date = $_POST['Number_of_Days'];
    
    $qry = "SELECT ".$leave_type. " FROM leave_count WHERE ID = '$reg_num'";
    $result = mysqli_query($connection,$qry);
    $row = mysqli_fetch_assoc($result);
    $date_having = $row[$leave_type];

    
    if(($date_having-$no_date) <= 0){
        
     //header("Location: Alert1.html");?>
    
        <html>
            <head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                .alert {
                    padding: 20px;
                    background-color: #cf0f0f;
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
            <div class="closebtn"><a class="btn btn-primary" type="button"   href="Leaveform.php"> close(x) </a></div> 
            <strong>No leaves remaining!</strong> 
            </div>

        </body>
    </html>
    <?php

    

    }
    else{
        /*echo "date having".$date_having."<br>";
        echo "number of date".$no_date."<br>";
        echo "remaining".($date_having-$no_date)."<br>";*/
        $qry1 = "SELECT first_name FROM personal_data WHERE ID = '$reg_num'";
        $result1 = mysqli_query($connection,$qry1);
        $row = mysqli_fetch_assoc($result1);
        $first_name = $row['first_name'];
        //echo $first_name;
        $qry2 = "INSERT INTO leave_table VALUES('$reg_num','$sup_id','$first_name','$leave_type','$date','$no_date','pending');";
        $result2 = mysqli_query($connection,$qry2);

        ?>
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
                    color: darkgrey;
                    font-weight: bolder;
                    float: right;
                    font-size: 22px;
                    line-height: 20px;
                    cursor: pointer;
                    transition: 0.3s;
                    }

                    </style>
                </head>
            <body>
            
            <?php
                $query = "SELECT sup_ID from employee where sup_id = $reg_num";
                //echo $reg_num;
                $result = mysqli_query($connection,$query);
                $row = mysqli_fetch_assoc($result);
                error_reporting(0);
                /*if($row['sup_ID']==NULL){
                    echo "asdssadas";
                }*/
                if($row['sup_ID']!=NULL){
                    //echo 'is a supervisor';
                    ?>
                    <div class="alert">
                    <div class="closebtn"><a class="btn btn-primary" type="button"   href="Supervisor.php"> close(x) </a></div> 
                    <strong>Leave Request Added successfully!</strong> 
                    </div>
                <?php
                }else{
                    //echo "is not a supervisor"
                    ?>

                    <div class="alert">
                    <div class="closebtn"><a class="btn btn-primary" type="button"   href="Employee.php"> close(x) </a></div> 
                    <strong>Leave Request Added successfully!</strong> 
                    </div>
                <?php
                }
            ?>
            

        </body>
    </html>
    <?php
    }
?>

