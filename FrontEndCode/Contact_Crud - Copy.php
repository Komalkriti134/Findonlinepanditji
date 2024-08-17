<?php
include '../Admin_Pandit/include/connection.php';

    if(isset($_POST['btncontact'])){
		$email = $_POST['email'];
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		$query=mysqli_query($con,"insert into contact_us(Contactid,email,name,subject,message) values('$Contactid','$email','$name','$subject','$message')");
		if(mysqli_affected_rows($con)>0){
			header('location:contact.php?res=1');
		}
		else{
			echo 'Fail to insert'.mysqli_error($con);
		}
	}
   ?>