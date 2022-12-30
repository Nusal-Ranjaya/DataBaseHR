<?php
   $attribute = $_POST['attribute_name'];
   $data_type = $_POST['data_type'];
   echo $attribute;
   echo $data_type;
   $connection = mysqli_connect('localhost','root','MyNewPass','hrm');
   if(!$connection)
           die("could not connect".mysqli_connect_error());
   $quary = "ALTER TABLE personal_data ADD '$attribute' '$data_type'";
   if(mysqli_query($connection,$quary)){
            echo "<h3> database changed successfully."
                 ." please browse your localhost php personal_data"
                 ." to view updated data</h3>";
        }else{
            echo "ERROR: sorry process failed. "
            . mysqli_error($connection);
            
        }
   


?>