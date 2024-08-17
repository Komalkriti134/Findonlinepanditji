<?php
include '../Admin_Pandit/include/connection.php';

if(isset($_POST['btnAddUser']) and isset($_FILES['Panditimage'])){
   echo $filename=$_FILES['Panditimage']['name'];
   echo $catid=$_POST['Catid'];
   echo $UserPanditjii_name=$_POST['UserPanditjii_name'];
   echo $UserPanditjii_charges=$_POST['UserPanditjii_charges'];
   echo $UserPanditjii_phoneno=$_POST['UserPanditjii_phoneno'];
   echo $UserPanditjii_experties=$_POST['UserPanditjii_experties'];
      $filename='assets/images/'.$filename;
    $tmpname=$_FILES['Panditimage']['tmp_name'];
    if(move_uploaded_file($tmpname,$filename)){
      
        $query=mysqli_query($con,"INSERT INTO user_panditjii(Userpanditjii_id, Userpanditjii_Name,Userpanditjii_photo,Userpanditjii_phoneno, Userpanditjii_experties,Userpanditjii_charges) VALUES ('$catid','$UserPanditjii_name','$filename','$UserPanditjii_phoneno','$UserPanditjii_experties','$UserPanditjii_charges')");
        if(mysqli_affected_rows($con)>0){
            header('location: view_Userpandit.php');
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

// if(isset($_POST['btnupdpan']) and isset($_FILES['Panditimage'])){
//     echo $filename=$_FILES['Panditimage']['name'];
//     echo $catid=$_POST['Catid'];
//     echo $Panditjii_name=$_POST['Panditjii_name'];
//     echo $Panditjii_charges=$_POST['Panditjii_charges'];
//     echo $Panditjii_phoneno=$_POST['Panditjii_phoneno'];
//     echo $Panditjii_experties=$_POST['Panditjii_experties'];
//    $filename='assets/storeimages/'.$filename;
//    $tmpname=$_FILES['Panditimage']['tmp_name'];
//    if(move_uploaded_file($tmpname,$filename)){
      
//         $query=mysqli_query($con,"UPDATE panditjii_category SET panditjii_Name='$Panditjii_name',panditjii_photo='$filename',panditjii_phoneno='$Panditjii_phoneno',panditjii_experties='$Panditjii_experties',panditjii_charges='$Panditjii_charges' WHERE panditjii_id='$catid'");
//         if(mysqli_affected_rows($con)>0){
//             header('location:view_Pandit.php');
//         }
//         else{
//             echo "Fail to insert".mysqli_error($con);
//         }
//     }
//     else{
//         echo 'can not move file to folder';
//     } 
// }
// else{
//     echo 'Fail to post data';
// }

// if(isset($_GET['Catid']))
// {
//     $catid=$_GET['Catid'];
//     $query=mysqli_query($con," DELETE FROM panditjii_category WHERE  panditjii_id='$catid'") ;

//     if(mysqli_affected_rows($con)>0){
//         header('location: view_Pandit.php');
//     }
//     else{
//         echo 'Fail to insert'.mysqli_error($con);
//     }
// }
?>