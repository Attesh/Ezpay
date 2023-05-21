<?php 
header('Access-Control-Allow-Origin: *'); 
header("Content-Type:application/json");
ini_set('allow_url_fopen', 'On');
include("config.php");

$fname = $_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$username = $_REQUEST["username"];
// $email = trim(stripcslashes($_REQUEST["email"]));
$age = $_REQUEST["age"];
$country = $_REQUEST["country"];
$gender = $_REQUEST["gender"];
$number = $_REQUEST["number"];
$password = $_REQUEST["password"];
$parameter = print_r($_REQUEST,true);
$Checknumber = $_REQUEST["number"];
$token = trim($_REQUEST["token"]);
$extractToken = $db->selectSRow(array("*"), "tokens", "token='$token'", "", "");

$getrecords = $db->selectSRow(array("*"),PREFIX."users","username='".$username."'");  

if($getrecords){
	$response['status'] = 'failed';
	$response['error'] = 'Registration Failed. Email or Number already exists';
}else{

	$arr = array("fname" => $fname,"lname" => $lname, "age" => $age,"country" => $country,"gender" => $gender,"number" => $number,"password" => $password,"username"=>$username);

	$result = $db->insert($arr, PREFIX. "users");
	if($result){
		$checkcode= $db->selectSRow(array("code"),PREFIX."users","id='".$result."'");
		if (!empty($checkcode[0])) {
			 $arr=["is_verified"=>"1"];
			$update_is_verified=$db->updateCondition($arr,PREFIX."users","id='".$result."'");
			
		}else{
			$arr=["is_verified"=>"0"];
		}
		// $response['is_verified'] = $update_is_verified;
		// $response['status'] = 'success';
        //    $response['user_id'] = $result;
        //    $response['code'] = $code;
        //    $response['code_sent_date'] = $code_sent_date;
           $response['success'] = 'Your Account Has Been Successfully Registered.';
	}else{
		  $response['status'] = 'failed';
	       $response['error'] = 'Registration Failed.';
    }

}


     $json_response = json_encode($response,JSON_UNESCAPED_UNICODE);
	 echo $json_response;


  
?> 
