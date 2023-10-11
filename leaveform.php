<?

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
    <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-7">
                    <div class="card mb-5">
                        <div class="card-body bg-info border rounded-0 border-4 border-dark p-sm-5" style="background:var(--bs-cyan);">
                            <h2 class="text-center mb-4">Request a Leave</h2>
                            <form action = "add_leave.php" method="post">
                                <!--<div>
                                    <p><strong>ID</strong></p><input class="form-control" type="number" placeholder="Employee ID" name="ID">
                                </div> -->
                                <!--<div>
                                    <p><strong>superviser ID</strong></p><input class="form-control" type="number" placeholder="Superviser ID" name="SUP_ID">
                                </div> -->
                                <div style="padding-top: 3px;padding-bottom: 3px;">
                                <div class="form-group" style="padding-top: 10px;padding-bottom: 10px;"><label class="form-label"><strong>Leave Type</strong></label>
                                <?php
                                    session_start();
                                    $connection = mysqli_connect('localhost','root','','project_hr');

                                    $id1 = $_SESSION['ID'];
                                    
                                    $qeury = "SELECT* FROM personal_data where ID = '$id1'";
                                    $qeury1 = "SELECT sup_ID FROM employee where ID = '$id1'";
                                    $result = mysqli_query($connection,$qeury);
                                    $result1 = mysqli_query($connection,$qeury1);
                                    $row = mysqli_fetch_assoc($result);
                                    $sup_ID = mysqli_fetch_assoc($result1);
                                    $sup = $sup_ID['sup_ID'];
                                    $_SESSION['sup_ID']=$sup;
                                    if($row['gender']=='Male'){?>
                                    <select class="form-select" name="leave_type">
                                        <option value="anual">anual</option>
                                        <option value="casual">casual</option>
                                        <option value="nopay">nopay</option>
                                        <!--<option value="maternity">metarnity</option>-->
                                    </select></div>
                                    </div>
                                    <?php
                                    }
                                    else{?>
                                    <select class="form-select" name="leave_type">
                                        <option value="anual">anual</option>
                                        <option value="casual">casual</option>
                                        <option value="nopay">nopay</option>
                                        <option value="maternity">metarnity</option>
                                    </select></div>
                                    </div>
                                    <?php

                                    }
                                ?>

                                <div style="padding-top: 0px;">
                                    <p><strong>Required Date</strong></p><input class="form-control" type="date" name="Required_date">
                                </div>

                                <div style="padding-top: 0px;">
                                    <p><strong>Number of Days</strong></p><input class="form-control" type="int" name="Number_of_Days">
                                </div>
                                <div><button class="btn btn-primary link-light border rounded-pill border-2 border-dark d-block w-100" type="submit" style="margin-top: 23px;">APPLY</button></div>
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