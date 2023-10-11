<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
<style>
    .body {
    background: #67B26F;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #4ca2cd, #67B26F);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #4ca2cd, #67B26F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    padding: 200px;
    margin: 0;
    font-family: 'Lato', sans-serif;
    color: #000;
    }
    </style>

<div class="body">
<div class="student-profile py-4">
    <div class="container d-sm-flex d-lg-flex justify-content-sm-center justify-content-lg-center" style="height: 600px;max-width: 1000px;margin-top: 40px;background: var(--bs-body-bg);border-color: var(--bs-btn-active-color);border-radius: 12px;">
      <div class="row">
        <div class="col-lg-8">
          <div class="card shadow-sm">
            <div class="card-header bg-transparent text-center">
              <?php
              session_start();
                $connection = mysqli_connect('localhost','root','','project_hr');
                $reg_num = $_SESSION['ID'];
              
                $qery =  "SELECT* FROM view_personal_data WHERE ID =  $reg_num"; 
                $result = mysqli_query($connection,$qery);
                $row = mysqli_fetch_assoc($result);
                $name = $row['first_name']." ".$row['last_name'];  
              ?>
              <h3><?php echo $name ?></h3>
            </div>
            <div class="card-body">
              <p class="mb-0"><strong class="pr-1">ID:</strong><?php echo $row['ID'] ?></p>
              <p class="mb-0"><strong class="pr-1">Department:</strong><?php echo $row['dept_name'] ?></p>
              <p class="mb-0"><strong class="pr-1">Supervisor ID:</strong><?php echo $row['sup_ID'] ?></p>
              <p class="mb-0"><strong class="pr-1">Salary:</strong><?php echo $row['amount'] ?></p>
              <p class="mb-0"><strong class="pr-1">Branch Name:</strong><?php echo $row['branch_city'] ?></p>
              <p class="mb-0"><strong class="pr-1">Title:</strong><?php echo $row['job'] ?></p>
              <p class="mb-0"><strong class="pr-1">Status:</strong><?php echo $row['state'] ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card shadow-sm">
            <div class="card-header bg-transparent border-0">
              <h3 class="mb-0">    General Information</h3>
            </div>
            <div class="card-body pt-0">
              <table class="table table-bordered">
                <tr>
                  <th width="30%">Birth Day</th>
                  <td width="2%">:</td>
                  <td><?php echo $row['birthday'] ?></td>
                </tr>
                <tr>
                  <th width="30%">Address</th>
                  <td width="2%">:</td>
                  <td><?php echo $row['house_no'].' '.$row['lane'].' '.$row['city'] ?></td>
                </tr>
                <tr>
                  <th width="30%">Gender</th>
                  <td width="2%">:</td>
                  <td><?php echo $row['gender'] ?></td>
                </tr>
                <tr>
                  <th width="30%">Mobile Number</th>
                  <td width="2%">:</td>
                  <td><?php echo $row['number'] ?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>