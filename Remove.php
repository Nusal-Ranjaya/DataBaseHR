<?php
$ID = $_POST['ID'];
$connection = mysqli_connect('localhost','root','','project_hr');
if(!$connection)
    die("could not connect".mysqli_connect_error());
$sql = "DELETE FROM personal_data WHERE ID='$ID'";
$sql2 = "DELETE FROM employee WHERE ID='$ID'";
if(mysqli_query($connection,$sql) && mysqli_query($connection,$sql2)){?>
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
            <div class="closebtn"><a class="btn btn-primary" type="button"   href="Remove_Emp.html"> close(x) </a></div> 
            <strong>data stored in a database successfully please browse your localhost php personal_data to view updated data</strong> 
            </div>

            </body>
            </html>
    <?php
}else{
    /*echo "ERROR: sorry process failed. "*/
     mysqli_error($connection);?>
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
          <div class="closebtn"><a class="btn btn-primary" type="button"  href="Remove_Emp.html"> close(x) </a></div> 
          <strong>successfully rejected</strong> 
        </div>

        </body>
        </html>
    <?php
    
}

?>