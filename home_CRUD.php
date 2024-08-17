<?php
include 'include/connection.php';
if(isset($_POST['btnHome'])){
    // echo $id=$_POST['id'];
    echo $slogan=$_POST['slogan'];
    echo $SloganText=$_POST['SloganText'];
    echo $desc1=$_POST['desc1'];
    echo $desc2=$_POST['desc2'];
    echo $desc3=$_POST['desc3'];
    echo $desc4=$_POST['desc4'];
    echo $desc5=$_POST['desc5'];

     //$query=mysqli_query($con,"INSERT INTO home_setting(Id, slogan, slogantext, desc1, desc2, desc3, desc4, desc5) VALUES ('$Id','$slogan','$SloganText','$desc1','$desc2','$desc3','$desc4','$desc5')");

    $query=mysqli_query($con,"update home_setting set slogan='$slogan', slogantext='$SloganText', desc1='$desc1',  desc2='$desc2',  desc3='$desc3', desc4='$desc4',desc5='$desc5' where Id='1'");
    if(mysqli_affected_rows($con)>0){
        header('Location:view_home.php');
    }
    else{
    echo 'fail to insert'.mysqli_error($con);
  }
 }

    // $query=mysqli_query($con,"update home_setting set slogan='$slogan', slogantext='$SloganText', desc1='$desc1',  desc2='$desc2',  desc3='$desc3', desc4='$desc4',desc5='$desc5', where Id='1'");
    // if(mysqli_affected_rows($con)>0){
    //     header('location:view_home.php?res=1');
    // }
    // else{
    //     header('location:home.php?res=0');
    // }

?>