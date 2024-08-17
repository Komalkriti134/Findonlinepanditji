<?php
 
 include '../Admin_Pandit/include/connection.php';

    if(isset($_POST['bookpandit'])){
		$email = $_POST['email'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$subject = $_POST['subject'];
		$Address  = $_POST['address '];

		$query=mysqli_query($con,"insert into bookpandit(bookpanditid,email,name,phone,subject,Address ) values('$bookpanditid','$email','$name','$phone','$subject','$Address ')");
		if(mysqli_affected_rows($con)>0){
			header('location:Panditjii.php?res=1');
		}
		else{
			echo 'Fail to insert'.mysqli_error($con);
		}
	}
   ?>