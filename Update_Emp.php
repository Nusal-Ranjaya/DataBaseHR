<?php
if(isset($_POST['click'])){
    
$reg_num = $_GET['updateID'];
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
$emergency=$_POST['emergency'];
$religion = $_POST['religion'];
$nationality = $_POST['nationality'];
$connection = mysqli_connect('localhost','root','','project_hr');
if(!$connection)
    die("could not connect".mysqli_connect_error());
$query="UPDATE `project_hr`.`personal_data` SET `ID` = '$reg_num', `first_name` = '$first_name', `last_name` = '$last_name', `birthday` = '$birth_day', `NIC_no` = '$NIC', `gender` = '$gender', `house_no` = '$house_no', `lane` = '$lane', `city` = '$city', `district` = '$district', `province` = '$province', `emergency_contact` = '$emergency', `nationality` = '$nationality', `religion` = '$religion' WHERE (`ID` = '$reg_num');";                                                      
//$query = "UPDATE personal_data SET ID=$reg_num,first_name=$first_name,last_name=$last_name,birthday=$birth_day,NIC_no=$NIC,gender=$gender,house_no=$house_no,lane=$lane,city=$city,district=$district,province=$province,emergency_contact=$emergency,nationality=$nationality,religion=$religion WHERE ID=$reg_num";

 if(mysqli_query($connection,$query)){
    
    header("Location:update_Employee.php");
    exit();
 }else{
     echo "ERROR: sorry process failed. "
     . mysqli_error($connection);
    
 }    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin_Options</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/Responsive-Form-Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form.css">
</head>

<body style="background: var(--bs-gray-300);">
    <nav class="navbar navbar-light navbar-expand-md sticky-top py-3" style="background: #00D7FF;border-color: rgb(16,112,118);">
        <div class="container"><img src="assets/img/letter_j_ol8xz0y402rg_64.png" width="34" height="36"><a class="navbar-brand d-flex align-items-center" href="#"><span style="margin-left: 9px;font-weight: bold;display: block;">Jupiter Apparels<br></span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3" style="background: var(--bs-cyan);"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-3">
                <ul class="navbar-nav mx-auto">
                </ul><a class="btn btn-dark border rounded-pill border-1 border-dark" type="button" href="update_Employee.php">Home Page</a>
            </div>
        </div>
    </nav>
    <section>
        <div>
            <div></div>
        </div>
    </section>
    <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-7">
                    <div class="card mb-5">
                        <div class="card-body bg-info border rounded-0 border-4 border-dark p-sm-5" style="background:var(--bs-cyan);">
                            <h2 class="text-center mb-4">Add Employee</h2>
                            <form action = "" method="post">
    
                                <div style="padding-top: 10px;padding-bottom: 10px;">
                                    <p><strong>Name</strong></p>
                                    <div class="d-flex flex-row mb-3"><input class="form-control" type="text" id="name-2"  placeholder="First Name" name="first_name" style="margin-right: 2px;"><input class="form-control" type="text" id="name-3" name="last_name" placeholder="Last Name" required></div>
                                </div>
                                <div>
                                    <p><strong>NIC no</strong></p><input class="form-control" type="text" name="NIC" style="margin-top: -7px;margin-bottom: 13px;" required>
                                </div>
                                <div style="padding-top: 0px;">
                                    <p><strong>Birth Date</strong></p><input class="form-control" type="date" name="birth_day" required>
                                </div>
                                <div style="padding-top: 3px;padding-bottom: 3px;">
                               <div class="form-group" style="padding-top: 10px;padding-bottom: 10px;"><label class="form-label"><strong>Gender</strong></label>
                                <select class="form-select" name="gender">
        
                                 <option value="Male">Male</option>
                                 <option value="Female">Female</option>
    </select></div>
                                </div>
                                <div style="padding-top: 0px;">
                                    <p><strong>Address</strong></p>
                                    <div>
                                        <p style="padding-bottom:0px;">No&nbsp;&nbsp;</p><input class="form-control" type="text" placeholder="House No" name="house_no" style="padding-bottom: 8px;margin-bottom: 3px;margin-top: -16px;" required>
                                    </div>
                                    <div style="margin-top: 2px;margin-bottom: 2px;">
                                        <p style="margin-top: 1px;">Lane</p><input class="form-control" type="text" placeholder="Lane" name="lane" style="margin-bottom: 3px;margin-top: -16px;"required>
                                        <div>
                                            <p style="margin-top: 4px;">City</p><input class="form-control" type="text" placeholder="City" name="city" style="padding-bottom: 3px;margin-bottom: 3px;margin-top: -17px;" required>
                                        </div>
                                    </div>
                                    <div>
                                        <p style="margin-top: 8px;">District</p><input class="form-control" type="text" placeholder="District" name="district" style="padding-bottom: 2px;margin-bottom: 3px;margin-top: -17px;" required>
                                    </div>
                                    <p style="margin-top: 7px;">Province</p>
                                    
                                        <div class="form-group"><select class="form-select" name="province" style="margin-bottom: 3px;margin-top: -17px;">
                                                <option value="Province">Province</option>
                                                <option value="Southern">Southern</option>
                                                <option value="Central">Central</option>
                                                <option value="North Central">Noth Central</option>
                                                <option value="Nothern">Norhthen</option>
                                                <option value="Eastern">Eastern</option>
                                                <option value="Western">North Western</option>
                                                <option value="Uva">Uva</option>
                                                <option value="Sabaragamuva">Sabaragamuva</option>
                                                <option value="Western">Western</option>
                                            </select></div>
                                   
                                </div>
                                <div>
                                <p>Emergency Contact</p><input class="form-control" type="tel" placeholder="Emergency Contact number" name="emergency" style="margin: 2px 0px 0px;margin-top: -18px;margin-bottom: 2px;" required>
                                </div>
                                <div>
                                        <p style="margin-top: 8px;">Religion</p><input class="form-control" type="text" placeholder="Religion" name="religion" style="padding-bottom: 2px;margin-bottom: 3px;margin-top: -17px;" required>
                                </div>
                                <div>
                                        <p style="margin-top: 8px;">Nationality</p><input class="form-control" type="text" placeholder="Nationality" name="nationality" style="padding-bottom: 2px;margin-bottom: 3px;margin-top: -17px;" required>
                                </div>
                        
                                </div>
                                <div><button class="btn btn-primary link-light border rounded-pill border-2 border-dark d-block w-100" type="submit" name="click" style="margin-top: 23px;">UPDATE</button></div>
                           
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>