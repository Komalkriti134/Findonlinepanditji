<?php   
  session_start();  
//  echo $_SESSION['buyer_name']=$_POST['name'];
//  echo $_SESSION['buyer_phone']=$_POST['mobile_number'];
  echo $_SESSION['Amount']=$_POST['amount'];
 echo $_SESSION['buyer_pin']=$_POST['pin'];
 echo $_SESSION['buyer_city']=$_POST['city'];
 echo $_SESSION['buyer_state']=$_POST['State'];
 echo $_SESSION['buyer_address']=$_POST['address'];
 echo $_SESSION['buyer_landmark']=$_POST['landmark'];
    require_once('vendor/autoload.php');

    $API_KEY = "test_9b384ec814d5b9e3fe4e2116dc2";
    $AUTH_TOKEN = "test_dcfc584cdf7087f4b7121cf61c2";
    $URL = "https://test.instamojo.com/api/1.1/";

    $api = new Instamojo\Instamojo($API_KEY, $AUTH_TOKEN, $URL);
 echo $amt=$_POST['amount'];
    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => "PUJA ",
             "amount" => $amt,
          
            "buyer_name" => $_SESSION['buyer_name']=$_POST['name'],
            "send_email" => true,
             "phone" => $_SESSION['buyer_phone']=$_POST['mobile_number'],
             "email" => $_SESSION['buyer_email']=$_POST['email'],
             $pin=$_SESSION['buyer_pin'],
             $State=$_SESSION['buyer_state'],
             $address=$_SESSION['buyer_address'],
             $landmark=$_SESSION['buyer_landmark'],
             "redirect_url" => "http://localhost:8081/Uni_Project/frontend/payment-success.php"
            ));

            header('Location: ' . $response['longurl']);
            exit();
    }catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
?>