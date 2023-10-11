<?php
session_start();
$connection = mysqli_connect('localhost','root','','project_hr');
//echo 'login success';
//object oriented style.
$username = mysqli_real_escape_string($connection,$_POST['user']);
$password = mysqli_real_escape_string($connection,$_POST['password']);
//echo $username;
// establish a connection

if(!$connection)
    die("Failed to connect :".$connection->mysqli_connect_error);
else{
    $stmt = $connection->prepare("select username,password from admin where username = ?"); //preapred statement
    // use preapred statements when enter the data
    $stmt->bind_param("s",$username); //here s refer string and next one is binding variable
    $stmt->execute(); //execute the query
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows>0){  //we always have to check whether a result has more than 0 arrows 
        //otherwise we can't get the result for enumeration or anything result must have at least one row
         $data = $stmt_result->fetch_assoc(); //give the associative rows
         if($data['password'] == $password){
            $_SESSION['user']=$username;
            $_SESSION['password']=$password;
            header("Location: Admin1.php");
            exit();
         }
         else{
            echo"<h2> admin details wrong<h2>";
         }
    }else{
       
       $stmt->close(); // for use of the stmt again we hav to close it
       $stmt = $connection->prepare("select username,password,ID from user where username = ?");
       $stmt->bind_param("s",$username);
       $stmt->execute();
       $stmt_result = $stmt->get_result();
       if($stmt_result->num_rows>0){
       while($row = $stmt_result->fetch_assoc()){ //fetch one row by row in result
           if($row['password']==$password){
              $_SESSION['user']=$username;
              
              $_SESSION['password']=$password;
              
               $ID = $row['ID'];
               $_SESSION['ID']=$ID;
               $stmt->close();
               $query1 = "SELECT ID,title_ID FROM employee WHERE ID = '{$ID}'";
               $query2 = "SELECT sup_ID from employee WHERE sup_ID = '{$ID}'";
               // make query and get result
               $result1 = mysqli_query( $connection,$query1);
               $result2 = mysqli_query( $connection,$query2);
               //fetch the result rows as an array
               $resultArray1 = mysqli_fetch_assoc($result1); // assoc represent array 
               $resultArray2 = mysqli_fetch_assoc($result2); // assoc represent array 
               //header("Location:user.php");
               $title = $resultArray1['title_ID'];
               if($title == "1" && $ID){
                header("Location:HRmanger.php");
                exit();
               }else if($ID == $resultArray2['sup_ID']){
                header("Location:supervisor.php");
                exit();
               }else {
                header("Location:Employee.php");
                exit();
               }
           }
       }
       echo "<h2>Login unsuccessful<h2>";
    }}
   
    
}
?>