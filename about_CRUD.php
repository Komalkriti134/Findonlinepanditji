<?php
include 'include/connection.php';
if(isset($_POST['btnAbout'])){
    // echo $id=$_POST['id'];
    echo $slogan=$_POST['slogan'];
    echo $SloganText=$_POST['SloganText'];
    echo $desc1=$_POST['desc1'];
    echo $desc2=$_POST['desc2'];
    echo $desc3=$_POST['desc3'];
    echo $desc4=$_POST['desc4'];
    echo $desc5=$_POST['desc5'];

     //$query=mysqli_query($con,"INSERT INTO about(Id, slogan, slogantext, desc1, desc2, desc3, desc4, desc5) VALUES ('$Id','$slogan','$SloganText','$desc1','$desc2','$desc3','$desc4','$desc5')");

     $query=mysqli_query($con,"update about set slogan='$slogan', slogantext='$SloganText', desc1='$desc1',  desc2='$desc2',  desc3='$desc3', desc4='$desc4',desc5='$desc5' where Id='1'");
    if(mysqli_affected_rows($con)>0){
        echo 'data inserted Successfully';
        header('Location:view_about.php');
    }
    else{
    echo 'fail to insert'.mysqli_error($con);
  }
 }

   ?>