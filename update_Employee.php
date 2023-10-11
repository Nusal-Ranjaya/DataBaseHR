<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" style="height: auto;background: #00D7FF;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>web</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/checkbox-checkbox.css">
    <link rel="stylesheet" href="assets/css/checkbox.css">
    <link rel="stylesheet" href="assets/css/Cute-Select.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Centered-Links-icons.css">
    <link rel="stylesheet" href="assets/css/Navbar-Dropdown-List-Item.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="border-width: 0px;display: block;background: linear-gradient(0deg, #00d7ff 0%, white 89%), #00D7FF;height: auto;">
    <nav class="navbar navbar-light navbar-expand-md sticky-top py-3" style="background: #00D7FF;border-color: rgb(16,112,118);">
        <div class="container"><img src="assets/img/letter_j_ol8xz0y402rg_64.png" width="34" height="36"><a class="navbar-brand d-flex align-items-center" href="#"><span style="margin-left: 9px;font-weight: bold;display: block;">Jupiter Apparels<br></span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3" style="background: var(--bs-cyan);"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-3">
                <ul class="navbar-nav mx-auto">
                </ul><a class="btn btn-dark border rounded-pill border-1 border-dark" type="button" href="Admin1.php">Home Page</a>
            </div>
        </div>
    </nav>
    <h1 style="margin-top: 20px;margin-bottom: 30px;text-align: center;border-style: none;">Update Employee</h1>
   
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-lg-flex justify-content-lg-end" style="padding-left: 15px;">
                <form action="" method ="post">
                    <div class="select">
                    <select class="form-select" name="variable">
                        <optgroup label="Category">
                            <option value="12" disabled selected="">type</option>
                            <option value="personal_data">Personal Data</option>
                            <option value="status">Employee Status</option>
                            <option value="mobile">Mobile Number</option>
                        </optgroup>
                    </select></div>
            </div>
                <div class="col d-lg-flex justify-content-lg-start">
                    <input type="submit" class="btn btn-primary" type="button" style="margin-right: 15px;margin-left: 15px;border-radius: 15px;width: 300px;">
                </div>
            </form>
            
    </div>
    <div class="container" style="margin-top: 20px;margin-bottom: 30px;">
        <section class="mt-4">
            <div class="container-fluid">
                <div class="row" style="padding-top: 0px;margin-top: 30px;padding-bottom: 20px;margin-bottom: 20px;">
                    <div class="col" style="margin-top: 20px;margin-bottom: 19px;">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="table-responsive table mb-0 pt-3 pe-2">
                                    <table class="table table-striped table-sm my-0 mydatatable">
                                    <?php 
                                            if(isset($_POST['variable'])){
                                                $var = $_POST['variable'];
                                                if($var == 'personal_data'){
                                                ?>
                                                <thead>
                                                   
                                                    <tr>
                                                    <th>ID</th>
                                                    <th>FIRST NAME</th>
                                                    <th>LAST NAME</th>
                                                    <th>BIRTHDAY</th>
                                                    <th>NIC</th>
                                                    <th>GENDER</th>
                                                    <th>NO</th>
                                                    <th>LANE</th>
                                                    <th>CITY</th>
                                                    <th>DISTRICT</th>
                                                    <th>PROVINCE</th>
                                                    <th>EMERGENCY</th>
                                                    <th>NATIONALITY</th>
                                                    <th>RELIGION</th>
                                                    <th>UPDATE</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                
                                                    
                                                        $connection = mysqli_connect('localhost','root','','project_hr');
                                                        if(!$connection)
                                                                die("could not connect".mysqli_connect_error());
                                                        
                                                        
                                                        $query = "SELECT * from personal_data";
                                                       
                                                        $result = mysqli_query($connection,$query);
                                                       while($row = mysqli_fetch_assoc($result)){
                                                        
                                                        
                                                           $id= $row['ID'];
                                                           $first=$row['first_name'];
                                                           $last=$row['last_name'];
                                                           $birth=$row['birthday'];
                                                           $nic=$row['NIC_no'];
                                                           $gender=$row['gender'];
                                                           $no=$row['house_no'];
                                                           $lane=$row['lane'];
                                                           $city=$row['city'];
                                                           $district=$row['district'];
                                                           $province=$row['province'];
                                                           $emergency=$row['emergency_contact'];
                                                           $religion=$row['religion'];
                                                           $nation=$row['nationality'];
                                                           echo '<tr>
                                                           <th scope="row" > '.$id.'</th>
                                                           <td>'.$first.'</td>
                                                           <td>'.$last.'</td>
                                                           <td>'.$birth.'</td>
                                                           <td>'.$nic.'</td>
                                                           <td>'.$gender.'</td>
                                                           <td>'.$no.'</td>
                                                           <td>'.$lane.'</td>
                                                           <td>'.$city.'</td>
                                                           <td>'.$district.'</td>
                                                           <td>'.$province.'</td>
                                                           <td>'.$emergency.'</td>
                                                           <td>'.$nation.'</td>
                                                           <td>'.$religion.'</td>
                                                          <td> <button class="btn btn-primary"><a href="Update_Emp.php?updateID='.$id.' " class ="text-light" name="btn_click">UPDATE</a></button></td>';
                                                        }
                                                    
                                                      
                                                    }

                                                      else if($var=='status'){
                                                    
                                                
                                                        ?>
                                                        <thead>
                                                           
                                                            <tr>
                                                            <th>ID</th>
                                                            <th>BRANCH ID</th>
                                                            <th>TITLE ID</th>
                                                            <th>STATUS ID</th>
                                                            <th>SALARY ID</th>
                                                            <th>DEPARTMENT</th>
                                                            <th>SUPERVISOR</th>
                                                        
                                                            </tr>
                                                        </thead>
                                                        <?php
                                                                $variable = $_POST['variable'];
                                                                $connection = mysqli_connect('localhost','root','','project_hr');
                                                                if(!$connection)
                                                                        die("could not connect".mysqli_connect_error());
                                                                
                                                                
                                                                        $query = "SELECT * from employee";
                                                       
                                                                        $result = mysqli_query($connection,$query);
                                                                       while($row = mysqli_fetch_assoc($result)){
                                                                        
                                                                        
                                                                           $id= $row['ID'];
                                                                           $branch=$row['branch_ID'];
                                                                           $title=$row['title_ID'];
                                                                           $status=$row['status_ID'];
                                                                           $salary=$row['salary_ID'];
                                                                           $dep=$row['dept_name'];
                                                                           $sup=$row['sup_ID'];
                                                                           
                                                                           echo '<tr>
                                                                           <th scope="row" > '.$id.'</th>
                                                                           <td>'.$branch.'</td>
                                                                           <td>'.$title.'</td>
                                                                           <td>'.$status.'</td>
                                                                           <td>'.$salary.'</td>
                                                                           <td>'.$dep.'</td>
                                                                           <td>'.$sup.'</td>
                                                                          <td> <button class="btn btn-primary"><a href="Update_employeetable.php?updateID='.$id.' " class ="text-light" name="btn_click">UPDATE</a></button></td>';
                                                                        
                                                                    
                                                            
                                                              }
                                                            }
                                                           
                                                                      else{
                                                    
                                                
                                                                        ?>
                                                                        <thead>
                                                                           
                                                                            <tr>
                                                                            <th>ID</th>
                                                                            <th>NUMBER TYPE</th>
                                                                            <th>NUMBER</th>
                                                                            
                                                                        
                                                                            </tr>
                                                                        </thead>
                                                                        <?php
                                                                                $variable = $_POST['variable'];
                                                                                $connection = mysqli_connect('localhost','root','','project_hr');
                                                                                if(!$connection)
                                                                                        die("could not connect".mysqli_connect_error());
                                                                                
                                                                                
                                                                                        $query = "SELECT * from phone_numbers";
                                                       
                                                                                        $result = mysqli_query($connection,$query);
                                                                                       while($row = mysqli_fetch_assoc($result)){
                                                                                        
                                                                                        
                                                                                           $id= $row['ID'];
                                                                                           $type=$row['number_type'];
                                                                                           $num=$row['number'];
                                                                                        

                                                                                           echo '<tr>
                                                                                           <th scope="row" > '.$id.'</th>
                                                                                           <td>'.$type.'</td>
                                                                                           <td>'.$num.'</td>
                    
                                                                                          <td> <button class="btn btn-primary"><a href="Update_telephone.php?updateID='.$id.'&type='.$type.' " class ="text-light" name="btn_click">UPDATE</a></button></td>';
                                                                                        
                                                                                    
                                                                            
                                                                              }
                                                                              }
                                                }

                                        
                                                
                                                
                                               
                                                     
                                                        
                                                    ?>
                                        <!-- <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>FIRST NAME</th>
                                                <th>LAST NAME</th>
                                                <th>BIRTHDAY</th>
                                                <th>NIC</th>
                                                <th>GENDER</th>
                                                <th>NO</th>
                                                <th>LANE</th>
                                                <th>CITY</th>
                                                <th>DISTRICT</th>
                                                <th>PROVINCE</th>
                                                <th>EMERGENCY</th>
                                                <th>NATIONALITY</th>
                                                <th>RELIGION</th>
                                                <th>UPDATE</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            <tr>
                                                // <?php    
                                                     
                                                        
                                                    //     $connection = mysqli_connect('localhost','root','MyNewPass','hrm');
                                                    //   //  if(!$connection)
                                                    //             die("could not connect".mysqli_connect_error());
                                                        
                                                        
                                                    //     $query = "SELECT * from personal_data";
                                                       
                                                    //     $result = mysqli_query($connection,$query);
                                                    //    while($row = mysqli_fetch_assoc($result)){
                                                        
                                                        
                                                    //        $id= $row['ID'];
                                                    //        $first=$row['first_name'];
                                                    //        $last=$row['last_name'];
                                                    //        $birth=$row['birthday'];
                                                    //        $nic=$row['NIC_no'];
                                                    //        $gender=$row['gender'];
                                                    //        $no=$row['house_no'];
                                                    //        $lane=$row['lane'];
                                                    //        $city=$row['city'];
                                                    //        $district=$row['district'];
                                                    //        $province=$row['province'];
                                                    //        $emergency=$row['emergency_contact'];
                                                    //        $religion=$row['religion'];
                                                    //        $nation=$row['nationality'];
                                                    //        echo '<tr>
                                                    //        <th scope="row" > '.$id.'</th>
                                                    //        <td>'.$first.'</td>
                                                    //        <td>'.$last.'</td>
                                                    //        <td>'.$birth.'</td>
                                                    //        <td>'.$nic.'</td>
                                                    //        <td>'.$gender.'</td>
                                                    //        <td>'.$no.'</td>
                                                    //        <td>'.$lane.'</td>
                                                    //        <td>'.$city.'</td>
                                                    //        <td>'.$district.'</td>
                                                    //        <td>'.$province.'</td>
                                                    //        <td>'.$emergency.'</td>
                                                    //        <td>'.$nation.'</td>
                                                    //        <td>'.$religion.'</td>
                                                    //       <td> <button class="btn btn-primary"><a href="Update_Emp.php?updateID='.$id.' " class ="text-light" name="btn_click">UPDATE</a></button></td>';
                                                    //     }
                                                    ?> 
                                                    
                                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <div></div>
    </div>
    <div></div>
    <div></div>
    <div></div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script src="assets/js/DataTable---Fully-BSS-Editable.js"></script>
</body>

</html>