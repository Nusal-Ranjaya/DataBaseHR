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
                    <li class="nav-item"><a class="nav-link active" href="#">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                </ul><button class="btn btn-dark border rounded-pill border-1 border-dark" type="button">Contact US</button>
            </div>
        </div>
    </nav>
    <h1 style="margin-top: 20px;margin-bottom: 30px;text-align: center;border-style: none;">Employee leave Details</h1>
    <section>
        <div></div>
    </section>
    <div class="container">
        <ul></ul>
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
                                          
                                               
                                                <th>REQUESTED DATE</th>
                                                <th>NUMBER OF DAYS</th>
                                                <th>LEAVE TYPE</th>
                                                <th>STATUS</th>

                                            
                                            </tr>
                                        </thead>
                                        <?php
                               
                                        ?>
                                        <tbody>
                                            <tr>
                                                <?php    
                                                        session_start();
                                                        $ID = $_SESSION['ID'];
                                                       
                                                        $connection = mysqli_connect('localhost','root','','project_hr');
                                                        if(!$connection)
                                                                die("could not connect".mysqli_connect_error());
                                                        
                                                        
                                                        $query = "SELECT ID,first_name,requested_date,number_of_days,leave_type,status from leave_table where ID = $ID";
                                                        
                                                        $result = mysqli_query($connection,$query);
                                                        while($row = mysqli_fetch_assoc($result)){
                                                            echo"
                                                            <tr>
                                                             
                                                                
                                                                <td> $row[requested_date]</td>
                                                                <td> $row[number_of_days]</td>
                                                                <td> $row[leave_type]</td>
                                                                <td> $row[status]</td>

                                                            </tr>";
                                                           
                                                        }
                                                     
                                                        
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
    <h1 style="margin-top: 20px;margin-bottom: 30px;text-align: center;border-style: none;">Your remaining Leaves</h1>
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
                                                <th>ANUAL</th>
                                                <th>CASUAL</th>
                                                <th>NOPAY</th>
                                                <th>MATERNITY</th>
                                            
                                            </tr>
                                        </thead>
                                        <?php
                               
                                        ?>
                                        <tbody>
                                            <tr>
                                                <?php    
                                                       
                                                        $connection = mysqli_connect('localhost','root','','project_hr');
                                                        if(!$connection)
                                                                die("could not connect".mysqli_connect_error());
                                                        
                                                        
                                                        $query1 = "SELECT anual,casual,nopay,maternity from leave_count where ID = $ID";
                                                        
                                                        $result1 = mysqli_query($connection,$query1);
                                                        while($row1 = mysqli_fetch_assoc($result1)){
                                                            echo"
                                                            <tr>
                                                             
                                                                
                                                                <td> $row1[anual]</td>
                                                                <td> $row1[casual]</td>
                                                                <td> $row1[nopay]</td>
                                                                <td> $row1[maternity]</td>

                                                            </tr>";
                                                           
                                                        }
                                                     
                                                        
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