<?php
include 'include/connection.php';

if(isset($_POST['btnAddcat']) and isset($_FILES['Pujaimage'])){
   echo $filename=$_FILES['Pujaimage']['name'];
   echo $catid=$_POST['Catid'];
   echo $Puja_name=$_POST['Puja_name'];
   echo $Puja_charges=$_POST['Puja_charges'];
   echo $Puja_duration=$_POST['Puja_duration'];
   echo $description=$_POST['description'];
   echo $Puja_code=$_POST['Puja_code'];
    $filename='assets/storeimages/'.$filename;
    $tmpname=$_FILES['Pujaimage']['tmp_name'];
    if(move_uploaded_file($tmpname,$filename)){
      
        $query=mysqli_query($con,"INSERT INTO puja_category (pujacategory_id, puja_Name, puja_charges, puja_Duration, puja_Image, puja_Description, puja_code) VALUES ('$catid','$Puja_name','$Puja_charges','$Puja_duration','$filename','$description','$Puja_code')");
        if(mysqli_affected_rows($con)>0){
            header('location: view_Category.php');
        }
        else{
            echo "Fail to insert".mysqli_error($con);
        }
    }
    else{
        echo 'can not move file to folder';
    } 
}
else{
    echo 'Fail to post data';
}

if(isset($_POST['btnupdate']) and isset($_FILES['Pujaimage'])){
    echo $filename=$_FILES['Pujaimage']['name'];
   echo $catid=$_POST['Catid'];
   echo $Puja_name=$_POST['Puja_name'];
   echo $Puja_charges=$_POST['Puja_charges'];
   echo $Puja_duration=$_POST['Puja_duration'];
   echo $description=$_POST['description'];
   echo $Puja_code=$_POST['Puja_code'];
   $filename='assets/storeimages/'.$filename;
   $tmpname=$_FILES['Pujaimage']['tmp_name'];
   if(move_uploaded_file($tmpname,$filename)){
      
        $query=mysqli_query($con,"UPDATE puja_category SET puja_Name='$Puja_name',puja_charges='$Puja_charges',puja_Duration='$Puja_duration',puja_Image='$filename',puja_Description='$description',puja_code='$Puja_code' WHERE pujacategory_id='$catid'");
        if(mysqli_affected_rows($con)>0){
            header('location: view_Category.php');
        }
        else{
            echo "Fail to insert".mysqli_error($con);
        }
    }
    else{
        echo 'can not move file to folder';
    } 
}
else{
    echo 'Fail to post data';
}

if(isset($_GET['Catid']))
{
    $catid=$_GET['Catid'];
    $query=mysqli_query($con," DELETE FROM puja_category WHERE  pujacategory_id='$catid'") ;

    if(mysqli_affected_rows($con)>0){
        header('location: view_Category.php');
    }
    else{
        echo 'Fail to insert'.mysqli_error($con);
    }
}
?>