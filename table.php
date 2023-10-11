

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Second (copy)</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.css">
    <link rel="stylesheet" href="assets/css/dropdown-search-bs4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Centered-Links-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<style>
.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>
<body style="border-width: 0px;display: block;background: 4649FF;">
    <nav class="navbar navbar-light navbar-expand-md sticky-top py-3" style="background: #00D7FF;">
        <div class="container"><img src="assets/img/letter_j_ol8xz0y402rg_64.png" width="34" height="36"><a class="navbar-brand d-flex align-items-center" href="#"><span style="margin-left: 9px;font-weight: bold;display: block;">Jupiter Apparels<br></span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-3">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                </ul><button class="btn btn-dark border rounded-pill border-1 border-dark" type="button">Contact US</button>
            </div>
        </div>
    </nav>
    <form action = "" method=post>
        <div class="form-group" style="margin:40px; padding-top: 10px;padding-bottom: 10px;"><label class="form-label"><strong>Department</strong></label>
        <select class="form-select" name="department">
          <option value="All">All</option>
          <option value="General">General</option>
          <option value="Accounts">Account</option>
          <option value="HRM">HRM</option>
          <option value="Operations">Operations</option>
        </select></div>
        <input type=submit class="btn btn-dark border rounded-pill border-1 border-dark center" style="margin: 10px;" type="button">
    </form>       
                                          
                                           
    <div class="container" style="margin: 80px;padding: 30px ;text-align: center;">
        <div class="card" id="TableSorterCard">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div>
                        <table class="table table tablesorter" id="ipi-table">
                            <thead class="thead-dark">
                                <tr>
                                    
                                    <th class="sorter-false">ID</th>
                                    <th class="filter-false">FIRST NAME</th>
                                    <th class="filter-false sorter-false">LAST NAME</th>
                                    <th class="filter-false sorter-false">JOB</th>
                                    <th class="filter-false sorter-false">DEPARTMENT</th>

                                </tr>
                            </thead>
                            <?php
                               
                            ?>
                            <tbody>
                                <tr>
                                    <?php    
                                         if(isset($_POST['department'])){
                                            $department = $_POST['department'];
                                            $connection = mysqli_connect('localhost','root','','project_hr');
                                            echo $department;
                                            if(!$connection)
                                                    die("could not connect".mysqli_connect_error());
                                            
                                            if($department=='All'){
                                                $query = "SELECT * from employee_by_department";
                                            }
                                            else{
                                                $query = "SELECT * from employee_by_department WHERE dept_name = '$department'";
                                            }
                                            $result = mysqli_query($connection,$query);
                                           while($row = mysqli_fetch_assoc($result)){
                                            
                                            ?>
                                              <td> <?php echo $row['ID']; ?></td>
                                              <td> <?php echo $row['first_name']; ?></td>
                                              <td> <?php echo $row['last_name']; ?></td>
                                              <td> <?php echo $row['job']; ?></td>
                                              <td> <?php echo $row['dept_name']; ?></td>
                                              </tr>
                                          <?php
                                            }
                                         }
                                            
                                        ?>
              
                                  
                                
                            </tbody> 
                        </table>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <div></div>
    <div></div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
    <script src="assets/js/dropdown-search-bs4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>