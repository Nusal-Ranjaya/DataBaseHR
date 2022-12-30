<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Second</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Centered-Links-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
            <h2 class="display-4 text-uppercase fw-bold">Login</h2>
            <p class="lead fw-normal w-lg-50">Please enter your username and password</p>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-xl-4">
            <div class="card mb-5">
                <div class="card-body d-flex flex-column align-items-center" style="background: #00D7FF;border-width: 4.28571px;border-style: solid;">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: #00D7FF;padding-top: 0px;padding-bottom: 0px;margin-top: -7px;margin-bottom: -7px;"><img src="assets/img/letter_j_ol8xz0y402rg_64.png" width="46" height="47" style="text-align: center;"></div>
                    <form class="text-center" action = "page3.php" method="post">
                        <div class="mb-3"></div>
                        <div class="mb-3"><input class="form-control" type="text" placeholder="Username" name = "user" style="margin-top: 19px;margin-bottom: 19px;">
                        <input class="form-control" type="password" name="password" placeholder="Password" name = "password"></div>
                        <div class="mb-3"><button class="btn btn-dark border rounded-pill d-block w-100" type="submit">Login</button><button class="btn active" type="button" style="border-style: none;"><span style="color: rgb(108, 117, 125);">Forgot your password?</span><br></button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>