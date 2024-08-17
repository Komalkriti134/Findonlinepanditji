<?php
session_start(); 
include '../Admin_Pandit/include/connection.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Instamojo Thank You - Tutsmake</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="">
	
	<br><br><br><br>
	<article class="bg-secondary mb-3">  
	<div class="card-body text-center">
	<h4 class="text-white">Thank you for payment<br></h4>
	<?php

		require_once('vendor/autoload.php');

		$API_KEY = "test_9b384ec814d5b9e3fe4e2116dc2";
        $AUTH_TOKEN = "test_dcfc584cdf7087f4b7121cf61c2";
        $URL = "https://test.instamojo.com/api/1.1/";
		$api = new Instamojo\Instamojo($API_KEY, $AUTH_TOKEN,$URL);

		$payid = $_GET["payment_request_id"];

		try {
		$response = $api->paymentRequestStatus($payid);
		$paymentid= $response['payments'][0]['payment_id'];
		$customer_name= $response['payments'][0]['buyer_name'];
		$customer_phone= $response['payments'][0]['buyer_phone'];
		$customer_emailid= $response['payments'][0]['buyer_email'];
		$customer_state=$_SESSION['buyer_state'];
		$customer_city=$_SESSION['buyer_city'];
		$customer_pinno= $_SESSION['buyer_pin'];
		$customer_address=  $_SESSION['buyer_address'];
		$customer_landmark=  $_SESSION['buyer_landmark'];
		
		 $query=mysqli_query($con,"INSERT INTO  paymentgetway(paymentid, customer_name, customer_phone, customer_emailid, customer_state,customer_city, customer_pinno, customer_address, customer_landmark) VALUES('$paymentid','$customer_name','$customer_phone','$customer_emailid','$customer_state','$customer_city','$customer_pinno','$customer_address','$customer_landmark')");
		 if(mysqli_affected_rows($con)>0){
			//echo 'data inserted Successfully';
		}
		else{
		//echo 'fail to insert'.mysqli_error($con);
	  }
	  echo "<h5>Payment ID: " . $response['payments'][0]['payment_id'] . "</h5>" ;
	  echo "<h5> Name: " . $response['payments'][0]['buyer_name'] . "</h5>" ;
	  echo "<h5> Email: " . $response['payments'][0]['buyer_email'] . "</h5>" ;
	  echo "<h5> Mobile: " . $response['payments'][0]['buyer_phone'] . "</h5>" ;
	  echo "<h5> amount: " . $response['payments'][0]['amount'] . "</h5>" ;
	  echo "<h5> pin: " . $_SESSION['buyer_pin'];
	  echo "<h5> City: " . $_SESSION['buyer_city'];
	  echo "<h5> Sate: " . $_SESSION['buyer_state'];
	  echo "<h5> Address: " . $_SESSION['buyer_address'];
	  echo "<h5> landmark: " . $_SESSION['buyer_landmark'];
	   echo "<h5>Payment status: " . $response['payments'][0]['status'] . "</h5>" ;

		echo "<pre>"; 

		}
		catch (Exception $e) {
		print('Error: ' . $e->getMessage());
		}
	?>
	<br>
	<p><a class="btn btn-warning" target="_blank" href="index.php"> Back to Dashboard
	 <i class="fa fa-window-restore "></i></a></p>
	</div>
	<br><br><br>
	</article>
</body>
</html>
