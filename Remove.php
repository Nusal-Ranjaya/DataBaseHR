<?php
$ID = $_POST['ID'];
$connection = mysqli_connect('localhost','root','MyNewPass','hrm');
if(!$connection)
    die("could not connect".mysqli_connect_error());
$sql = "DELETE FROM personal_data WHERE ID='$ID'";
if(mysqli_query($connection,$sql)){
    echo "<h3> record remove successfully."
         ." please browse your localhost php personal_data"
         ." to view updated data</h3>";
}else{
    echo "ERROR: sorry process failed. "
    . mysqli_error($connection);
    
}

?>