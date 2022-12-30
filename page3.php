<?php
//echo 'login success';
//object oriented style.
$username = $_POST['user'];
$password = $_POST['password'];
//echo $username;
// establish a connection
$connection = mysqli_connect('localhost','root','MyNewPass','hrm');
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
            header("Location: admin.php");
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
               $ID = $row['ID'];
               $stmt->close();
               $query = "SELECT title_ID FROM employee WHERE ID = '{$ID}'";
               // make query and get result
               $result = mysqli_query( $connection,$query);
               //fetch the result rows as an array
               $resultArray = mysqli_fetch_assoc($result); // assoc represent array 
               //header("Location:user.php");
               $title = $resultArray['title_ID'];
               if($title == "1"){
                header("Location:HR.html");
                exit();
               }else if($title =="2" || $title=="3"){
                header("Location:supervisor.php");
                exit();
               }else{
                header("Location:user.php");
                exit();
               }
           }
       }
       echo "<h2>Login unsuccessful<h2>";
    }}
   
    
}
?>