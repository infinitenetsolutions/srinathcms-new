<?php
// include file
include_once('easebuzz-lib/easebuzz_payment_gateway.php');
// include '../Backend/connection.inc.php';
// salt for testing env
$SALT = "92HHB0OBFH";

/*
    * Get the API response and verify response is correct or not.
    *
    * params string $easebuzzObj - holds the object of Easebuzz class.
    * params array $_POST - holds the API response array.
    * params string $SALT - holds the merchant salt key.
    * params array $result - holds the API response array after valification of API response.
    *
    * ##Return values
    *
    * - return array $result - hoids API response after varification.
    * 
    * @params string $easebuzzObj - holds the object of Easebuzz class.
    * @params array $_POST - holds the API response array.
    * @params string $SALT - holds the merchant salt key.
    * @params array $result - holds the API response array after valification of API response.
    *
    * @return array $result - hoids API response after varification.
    *
    */
$easebuzzObj = new Easebuzz($MERCHANT_KEY = null, $SALT, $ENV = null);

$result = $easebuzzObj->easebuzzResponse($_POST);

// print_r($result);
$result = json_decode($result, true);
session_start();
$connection=mysqli_connect("localhost","phpmyadmin","raja@#","srinath_cms");
//echo "<h1>EaseBuzz</h1>"; 
// $chk_tx = $result["data"]["status"];
// echo "<br>";
$payment_status=$result['data']['status'];
if($payment_status=='success'){
    
$prospectus_rate=$result['data']['net_amount_debit'];
$prospectus_payment_mode=$result['data']['mode'];
$prospectus_deposit_to=$result['data']['bank_ref_num'];
$bank_name=$result['data']['bank_name'];
$transaction_no=$result['data']['txnid'];
$transaction_date=$result['data']['addedon'];
// $post_at=$result['data']['bank_ref_num'];
$type=$result['data']['PG_TYPE'];
$easebuzz_id=$result['data']['easepayid'];
$transaction_id=$result['data']['txnid'];
$status=md5('visible');
$email=$result['data']['email'];
$_SESSION['email']=$email;
echo $update_payment="UPDATE `tbl_prospectus` SET `payment_status`='$payment_status',`prospectus_rate`='$prospectus_rate',`prospectus_payment_mode`='$prospectus_payment_mode',`prospectus_deposit_to`='$prospectus_deposit_to',`bank_name`='$bank_name',`transaction_no`='$transaction_no',`transaction_date`='$transaction_date',`post_at`='NULL',`type`='$type',`easebuzz_id`='$easebuzz_id',`transaction_id`='$transaction_id',`status`='$status' WHERE `prospectus_emailid`='$email' ";
$update_payment_result=mysqli_query($connection,$update_payment);
if($update_payment_result){
echo '<script> window.location.replace("../print.php") </script>';
}
}
else{
    echo '<script> window.location.replace("../registration.php") </script>';
}
