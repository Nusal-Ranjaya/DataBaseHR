<?php
$reg_num = $_POST['register_number'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$birth_day = $_POST['birth_day'];
$NIC = $_POST['NIC'];
$gender = $_POST['gender'];
$house_no = $_POST['house_no'];
$lane = $_POST['lane'];
$city = $_POST['city'];
$district = $_POST['district'];
$province = $_POST['province'];
$mobile = $_POST['mobile'];
$emergency = $_POST['emergency'];
$land_line = $_POST['land_line'];
$branch_id = $_POST['branch_id'];
$title_id = 1;
$status_id = $_POST['status_id'];
$salary_id = 1;
$department = "HRM";


/*
echo $reg_num;
echo $first_name;
echo $last_name;
echo $birth_day;
echo $gender;
echo $house_no;
echo $lane;
echo $city;
echo $district;
echo $province;
echo $mobile;

echo $land_line;
echo $branch_id;
echo $title_id;
echo $status_id;
echo $salary_id;
echo $department;
echo $sup_id;
*/


$connection = mysqli_connect('localhost','root','','project_hr');
if(!$connection)
    die("could not connect".mysqli_connect_error());
 
$quary1 = "INSERT INTO personal_data (ID,first_name,last_name,birthday,NIC_no,gender,house_no,lane,city,district,province,emergency_contact) VALUES ('$reg_num','$first_name','$last_name','$birth_day','$NIC','$gender','$house_no','$lane','$city','$district','$province','$emergency')";
if(mysqli_query($connection,$quary1)){
    /*echo "<h3> data stored in a database successfully."
         ." please browse your localhost php personal_data"
         ." to view updated data</h3>";*/?>
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
            <div class="closebtn"><a class="btn btn-primary" type="button"   href="Admin1.php"> close(x) </a></div> 
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
          <div class="closebtn"><a class="btn btn-primary" type="button"  href="superviser_leave_details.php"> close(x) </a></div> 
          <strong>successfully rejected</strong> 
        </div>

        </body>
        </html>
    <?php
    
}

$quary2 = "INSERT INTO employee (ID,branch_ID,title_ID,status_ID,salary_ID,dept_name) VALUES ('$reg_num','$branch_id','$title_id','$status_id','$salary_id','$department')";
if(mysqli_query($connection,$quary2)){
    /*echo "<h3> data stored in a database successfully."
         ." please browse your localhost php employee"
         ." to view updated data</h3>";*/ ?>
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
            <!--<div class="closebtn"><a class="btn btn-primary" type="button"   href="Admin1.php"> close(x) </a></div> -->
            <strong>data stored in a database successfully please browse your localhost php personal_data to view updated data</strong> 
            </div>

            </body>
            </html>
    <?php
}else{
    /*echo "ERROR: sorry process failed. "
    . mysqli_error($connection);*/?>
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
    
}
?>
