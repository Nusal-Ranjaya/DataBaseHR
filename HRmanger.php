<?php
session_start();
?>
<?php
    if(!isset($_SESSION['user'])){
        header('location:login.php');
    }
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
    <?php
    if(!isset($_SESSION['user'])&& !isset($_SESSION['password'])){
        header("Location: login.php");
        exit();
    }


    ?>
    <nav class="navbar navbar-light navbar-expand-md sticky-top py-3" style="background: #00D7FF;border-color: rgb(16,112,118);">
        <div class="container"><img src="assets/img/letter_j_ol8xz0y402rg_64.png" width="34" height="36"><a class="navbar-brand d-flex align-items-center" href="#"><span style="margin-left: 9px;font-weight: bold;display: block;">Jupiter Apparels<br></span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-3">
                <ul class="navbar-nav mx-auto">
                
                </ul><a class="btn btn-dark border rounded-pill border-1 border-dark" type="button" href="logout.php">Log Out</a>
            </div>
        </div>
    </nav>
    <h1 style="margin-top: 20px;margin-bottom: 10px;text-align: center;border-style: none;">HR Manager</h1>
    <section>
        <div></div>
    </section>
    <div class="container">
        <ul></ul>
    </div>
    <div class="row" style="width: 500px;position: static;display: inline;padding-right: 40px;padding-left: 50px;">
        <div class="col d-lg-flex flex-grow-1 justify-content-lg-center">
            <div class="container d-sm-flex d-lg-flex justify-content-sm-center justify-content-lg-center" style="height: 600px;max-width: 550px;margin-top: 40px;background: var(--bs-body-bg);border-color: var(--bs-btn-active-color);border-radius: 12px;">
                <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
                    <div class="col" style="margin-top: 0px;margin-bottom: 0px;height: 400px;">
                        <div class="row">
                            <div class="col" style="margin-top: 20px;"><a href="Add_Emp.html"><button class="btn btn-primary" type="button" style="border-radius: 13px;max-width: 300px;width: 300px;margin-top: 15px;margin-bottom: 50px;" data-bs-target="addemployee.php">Add Employee</button></a></div>
                        </div>
                        <div class="row">
                            <div class="col"><a href="Remove_Emp.html"><button class="btn btn-primary" type="button" style="border-radius: 13px;max-width: 300px;width: 300px;margin-top: 20px;margin-bottom: 50px;">Remove Employee</button></a></div>
                        </div>
                        <div class="row">
                            <div class="col"><a href="report_choice.html"><button class="btn btn-primary" type="button" style="border-radius: 13px;max-width: 300px;width: 300px;margin-top: 20px;margin-bottom: 30px;">Generate Report</button></a></div>
                        </div>
                        <div class="row">
                            <div class="col" style="margin-top: 20px;"><a href="Add_Attribute.php"><button class="btn btn-primary" type="button" style="border-radius: 13px;max-width: 300px;width: 300px;margin-top: 20px;margin-bottom: 30px;">Add New Custom Employee Attribute</button></a></div>
                        </div>
                        <div class="row">
                            <div class="col" style="margin-top: 20px;"><a href="view_personal_info.php"><button class="btn btn-primary" type="button" style="border-radius: 13px;max-width: 300px;width: 300px;margin-top: 20px;margin-bottom: 30px;" >View My Personal Info</button></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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