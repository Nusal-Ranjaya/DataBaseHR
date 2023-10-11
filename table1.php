<?php
$department = $_POST['department'];
echo $department;
$connection = mysqli_connect('localhost','root','','project_hr');
if(!$connection)
    die("could not connect".mysqli_connect_error());
$query = "SELECT * from employee_by_department WHERE deptname = $department";
$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($result)){
     
}

?>