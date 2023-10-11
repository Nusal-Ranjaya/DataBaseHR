<?php
session_start();
?>
<?php
if(isset($_POST['click']) ){

$id = $_GET['updateID'];
$num=$_POST['mobile'];
$mobile = $_GET['type'];

$connection = mysqli_connect('localhost','root','','project_hr');
if(!$connection)
    die("could not connect".mysqli_connect_error());
$query="UPDATE `project_hr`.`phone_numbers` SET `number` = '$num' WHERE (`ID` = '$id' and `number_type` = '$mobile')";                                                      
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
                            <?php
                           if(isset($_GET['type'])){
                            $typer = $_GET['type'];
                            echo $typer;
                            if($typer=="mobile"){
                            ?>
                                <div style="padding-top: 10px;">
                                <p><strong>Contact Details</strong></p>
                                <p>Mobile Phone No</p><input class="form-control" type="tel" placeholder="Mobile" name="mobile" style="margin: 2px 0px 0px;margin-top: -18px;margin-bottom: 2px;">
                                <div><button class="btn btn-primary link-light border rounded-pill border-2 border-dark d-block w-100" type="submit" name="click" style="margin-top: 23px;">ADD</button></div>
                               
                                </div>
                            <?php
                           }  else{
                               ?> 
                                <div style="padding-top: 10px;">
                                    <p><strong>Contact Details</strong></p>
                                
                                    <p>Land Phone No</p><input class="form-control" type="tel" placeholder="Land-Line" name="mobile" style="padding-top: 4px;padding-bottom: 4px;margin-top: -15px;margin-bottom: 5px;">
                                    <div><button class="btn btn-primary link-light border rounded-pill border-2 border-dark d-block w-100" type="submit" name='click' style="margin-top: 23px;">ADD</button></div>
                                </div>
                                <?php
                            }
                            ?>
                       
                           <?php
                            } 
                            
                            ?> 
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