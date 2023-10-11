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
                    </ul><a class="btn btn-dark border rounded-pill border-1 border-dark" type="button" href="report_choice.html">Back</a>
            </div>
        </div>
    </nav>
    <h1 style="margin-top: 20px;margin-bottom: 30px;text-align: center;border-style: none;">Custom Reports</h1>
    <section>
        <div></div>
    </section>
    <div class="container">
        <ul></ul>
    </div>
    <div class="container">
    <form action="" method ="post">
        <div class="row">
        
            <div class="col-md-6 d-lg-flex justify-content-lg-center" style="padding-left: 15px;">
                <div class="select">
                    <select class="form-select" name="department">
                        <optgroup label="department">
                            <option value="12" disabled selected="">Department</option>
                            <option value="Accounts">Accounts</option>
                            <option value="All">ALL</option>
                            <option value="HRM">HRM</option>
                            <option value="General">Genearl</option>
                            <option value="Operations">Operations</option>
                        </optgroup>
                    </select></div>
            </div>
            <div class="col d-lg-flex justify-content-lg-center">
                <div class="select" style="margin-left: 3px;"><select class="form-select" name="nationality">
                        <optgroup label="Detail">
                            <option value="12" disabled selected="">Nationality</option>
                            <option value="Sri Lankan">Sri Lankan</option>
                            <option value="United States">United States</option>
                        </optgroup>
                    </select></div>
            </div>
            <div class="col d-lg-flex justify-content-lg-center">
                <div class="select" style="margin-left: 3px;"><select class="form-select" name="religion">
                        <optgroup label="Detail">
                            <option value="12" disabled selected="">Religion</option>
                            <option value="Buddhism">Buddhism</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Muslim">Muslim</option>
                            <option value="Christian">Christian</option>
                        </optgroup>
                    </select></div>
            </div>
            <div class="row">
        <div class="col d-flex d-lg-flex justify-content-center justify-content-lg-center" style="margin-top: 20px;"><input type="submit"  button class="btn btn-primary" type="button" style="margin-right: 15px;margin-left: 15px;border-radius: 15px;width: 500px; height: 40px;"></button></div>
     </div>
        </form>
        </div>

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
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Department</th>
                                                <th>Nationality</th>
                                                <th>Religion</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            <tr>
                                                <?php    
                                                if(isset($_POST['department']) && $_POST['nationality'] && $_POST['religion']){
                                                
                                                   $department = $_POST['department'];
                                                   $nationality = $_POST['nationality'];
                                                   $religion = $_POST['religion'];
                                                   $connection = mysqli_connect('localhost','root','','project_hr');
                                                   if(!$connection)
                                                           die("could not connect".mysqli_connect_error());
                                                   
                                                   if($department=='All'){
                                                       $query = "SELECT * from custom_report Where  religion='$religion' and nationality='$nationality'";
                                                   }
                                                   else{
                                                    $query = "SELECT * from custom_report Where dept_name='$department' and religion='$religion' and nationality='$nationality'";
                                                   }
                                                   $result = mysqli_query($connection,$query);
                                                  while($row = mysqli_fetch_assoc($result)){
                                                   
                                                   ?>
                                                     <td> <?php echo $row['ID']; ?></td>
                                                     <td> <?php echo $row['first_name']; ?></td>
                                                     <td> <?php echo $row['last_name']; ?></td>
                                                     <td> <?php echo $row['dept_name']; ?></td>
                                                     <td> <?php echo $row['religion']; ?></td>
                                                     <td> <?php echo $row['nationality']; ?></td>
                                                     
                                                     
                                                     </tr>
                                                 <?php
                                                   }
                                                }
                                                   
                                               ?>
                                            </tr>
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