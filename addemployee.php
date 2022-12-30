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
$title_id = $_POST['title_id'];
$status_id = $_POST['status_id'];
$salary_id = $_POST['salary_id'];
$department = $_POST['department'];
$sup_id = $_POST['sup_id'];

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
echo $emergency;
echo $land_line;
echo $branch_id;
echo $title_id;
echo $status_id;
echo $salary_id;
echo $department;
echo $sup_id;
*/

$connection = mysqli_connect('localhost','root','MyNewPass','hrm');
if(!$connection)
    die("could not connect".mysqli_connect_error());
 
$quary1 = "INSERT INTO personal_data (ID,first_name,last_name,birthday,NIC_no,gender,house_no,lane,city,district,province,emergency_contact) VALUES ('$reg_num','$first_name','$last_name','$birth_day','$NIC','$gender','$house_no','$lane','$city','$district','$province','$emergency')";
if(mysqli_query($connection,$quary1)){
    echo "<h3> data stored in a database successfully."
         ." please browse your localhost php personal_data"
         ." to view updated data</h3>";
}else{
    echo "ERROR: sorry process failed. "
    . mysqli_error($connection);
    
}

$quary2 = "INSERT INTO employee (ID,branch_ID,title_ID,status_ID,salary_ID,dept_name,reports_to) VALUES ('$reg_num','$branch_id','$title_id','$status_id','$salary_id','$department','$sup_id')";
if(mysqli_query($connection,$quary2)){
    echo "<h3> data stored in a database successfully."
         ." please browse your localhost php employee"
         ." to view updated data</h3>";
}else{
    echo "ERROR: sorry process failed. "
    . mysqli_error($connection);
    
}
?>