<?php 
header('Access-Control-Allow-Origin: *'); 
header("Content-Type:application/json");
ini_set('allow_url_fopen', 'On');
include("config.php");

$fname = $_REQUEST["fname"];
$email = trim(stripcslashes($_REQUEST["email"]));
$number = $_REQUEST["phone"];
$companyName = $_REQUEST["company_name"];

$getrecords = $db->selectSRow(array("*"),PREFIX."users","email='".$email."'");
if($getrecords){
	$response['status'] = 'failed';
	$response['error'] = 'Registration Failed. Email already exists';
}else{
	$arr = array("fname" => $fname, "email"=>$email, "company_name"=>$companyName, "phone" => $number);
	$result = $db->insert($arr, PREFIX. "users");
	if($result){
           $response['success'] = 'Your Account Has Been Successfully Registered.';
	}else{
		  $response['status'] = 'failed';
	       $response['error'] = 'Registration Failed.';
    }
}

     $json_response = json_encode($response,JSON_UNESCAPED_UNICODE);
	 echo $json_response;
  
?> 


