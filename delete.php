<?php
 
 session_start();
    //$ID1 = $_SESSION['ID'];
    $ID2 = $_GET['ID'];
    //echo $ID2;
    $sup_id = $_GET['sup_id'];

    $requested_date1 = $_GET['date'];
    //echo $requested_date1;
                            
  $connection = mysqli_connect('localhost','root','','project_hr');
 if(!$connection){
     die("could not connect".mysqli_connect_error());
 }

   
   
    $sql1= "UPDATE leave_table set status='Rejected' where ID= $ID2 and requested_date = '$requested_date1' ";?>

   
    
    <!DOCTYPE html>
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
          <div class="closebtn"><a class="btn btn-primary" type="button"  href="superviser_leave_details.php"> close(x) </a></div> 
          <strong>successfully rejected</strong> 
        </div>

        </body>
        </html>

    <?php
    $qry1 = $connection->query($sql1);
    $_SESSION['ID'] = $sup_id;
   
    $connection->close();
   
?>