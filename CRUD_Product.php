<?php
include 'include/connection.php';

if(isset($_POST['btnAddpro']) and isset($_FILES['product_photo'])){
   echo $filename=$_FILES['product_photo']['name'];
   echo $proid=$_POST['Proid'];
   echo $product_name=$_POST['product_name'];
   echo $product_rate=$_POST['product_rate'];
   echo $product_weight=$_POST['product_weight'];
   echo $product_description=$_POST['product_description'];
   echo $product_code=$_POST['product_code'];
    $filename='assets/storeimages/'.$filename;
    $tmpname=$_FILES['product_photo']['tmp_name'];
    if(move_uploaded_file($tmpname,$filename)){
      
        $query=mysqli_query($con,"INSERT INTO product(product_id, product_name, product_photo, product_rate, product_weight,product_description, product_code) VALUES ('$proid','$product_name','$filename','$product_rate','$product_weight','$product_description','$product_code')");
        if(mysqli_affected_rows($con)>0){
            header('location: view_Product.php');
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

if(isset($_POST['btnupdpro']) and isset($_FILES['product_photo'])){
    echo $filename=$_FILES['product_photo']['name'];
    echo $proid=$_POST['Proid'];
    echo $product_name=$_POST['product_name'];
    echo $product_rate=$_POST['product_rate'];
    echo $product_weight=$_POST['product_weight'];
    echo $product_description=$_POST['product_description'];
    echo $product_code=$_POST['product_code'];
     $filename='assets/storeimages/'.$filename;
     $tmpname=$_FILES['product_photo']['tmp_name'];
     if(move_uploaded_file($tmpname,$filename)){
      
        $query=mysqli_query($con,"UPDATE product SET product_name='$product_name',product_photo='$filename',product_rate='$product_rate',product_weight='$product_weight', product_description='$product_description',product_code='$product_code' WHERE product_id='$proid'");
        if(mysqli_affected_rows($con)>0){
            header('location: view_Product.php');
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

if(isset($_GET['Proid']))
{
    $proid=$_GET['Proid'];
    $query=mysqli_query($con," DELETE FROM Product WHERE  product_id='$proid'") ;

    if(mysqli_affected_rows($con)>0){
        header('location: view_Product.php');
    }
    else{
        echo 'Fail to insert'.mysqli_error($con);
    }
}
?>