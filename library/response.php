<?php
// include file
include_once('easebuzz-lib/easebuzz_payment_gateway.php');
include './Backend/connection.inc.php';
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

print_r($result);
$result = json_decode($result, true);

//echo "<h1>EaseBuzz</h1>"; 
$chk_tx = $result["data"]["status"];
$bank_ref_num=['data']['bank_ref_num'];
$bank_ref_num=['data']['bank_ref_num'];
$bank_ref_num=['data']['bank_ref_num'];
$bank_ref_num=['data']['bank_ref_num'];
$bank_ref_num=['data']['bank_ref_num'];

