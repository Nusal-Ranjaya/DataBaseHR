<!DOCTYPE html>
            <html>
            <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
            .alert {
            padding: 20px;
            background-color: green;
            color: white;
            }

            .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
            }

            </style>
            </head>
            <body>

            <h2>Alert</h2>
            <div class="alert">
            <div class="closebtn"> 
                <a class="btn btn-primary" type="button"   href="superviser_leave_details.php"> YES </a>
               
            </div> 
            <div class="closebtn">

                <a class="btn btn-primary" type="button"   href="superviser_leave_details.php"> NO </a>
            </div> 
            <strong>you only have <?php  $leave = 12 ; echo $leave ?> leaves left.Do you want to proceed ?</strong>
            </div>

            </body>
            </html>