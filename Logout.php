<?php 
 session_start();
 $userid=$_SESSION['username'];
 include 'include/connection.php';
 $query1=mysqli_query($con,"update admin_tbl set Login_status=0 where emailid='$userid'");
 if(mysqli_affected_rows($con)>0){
     session_destroy();
         header('location:login.php');
}
else{
    echo 'Fail to logout'.mysqli_error($con);
}
?>
