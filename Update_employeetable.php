<?php



if(isset($_POST['click'])){
 $id = $_GET['updateID'];
$branch_id = $_POST['branch_id'];
$title_id = $_POST['title_id'];
$status_id = $_POST['status_id'];
$salary_id = $_POST['salary_id'];
$department = $_POST['department'];
$sup_id = $_POST['sup_id'];
$reg_num = $_GET['updateID'];

$connection = mysqli_connect('localhost','root','','project_hr');
if(!$connection)
    die("could not connect".mysqli_connect_error());
$query="UPDATE `project_hr`.`employee` SET `branch_ID` = '$branch_id', `title_ID` = '$title_id', `status_ID` = '$status_id', `salary_ID` = '$salary_id', `dept_name` = '$department', `sup_ID` = '$sup_id' WHERE (`ID` = '$reg_num');";                                                      
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
                </ul><a class="btn btn-dark border rounded-pill border-1 border-dark" type="button" href="update_employee.php">Home Page</a>
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
                            <div style="padding-top: 10px;">
                                    <p><strong>Employee Details</strong></p>
                                    <p>Branch ID</p><input class="form-control" type="number" placeholder="Brach ID" name="branch_id" style="margin-top: -16px;margin-bottom: 3px;" required>
                                    <p>Title ID</p><input class="form-control" type="number" placeholder="Title ID" name="title_id" style="margin-top: -18px;margin-bottom: 0px;" required>
                                    <p>Status ID</p><input class="form-control" type="number" placeholder="Status ID" name="status_id" style="margin-top: -18px;margin-bottom: 2px;" required>
                                    <p>Salary ID</p><input class="form-control" type="number" placeholder="Salary ID" name="salary_id" style="margin-top: -16px;margin-bottom: 2px;" required>
                                    <p>Department name</p>
                                    <select class="form-select" style="padding-top: 10px; margin-top: -18px; margin-bottom: 2px" name="department">
                                        <option value="General">General</option>
                                        <option value="Accounts">Account</option>
                                        <option value="HRM">HRM</option>
                                        <option value="Operations">Operations</option>
                                       </select>
                                    </div>
                                    <p>Supervisor ID</p><input class="form-control" type="number" placeholder="Supervisor ID" name="sup_id" style="margin-top: -17px;margin-bottom: 0px;">
                                </div>
                                <div><button class="btn btn-primary link-light border rounded-pill border-2 border-dark d-block w-100" type="submit" name="click" style="margin-top: 23px;">ADD</button></div>
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