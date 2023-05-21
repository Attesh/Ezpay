<?php header('Access-Control-Allow-Origin: *'); 
header("Content-Type:application/json");
ini_set('allow_url_fopen', 'On');
 /* error_reporting(E_ALL);
ini_set("display_errors", 1); */
include("config.php");
// $number = $_REQUEST["number"];
$username = $_REQUEST["username"];
$password = stripcslashes($_REQUEST["password"]);
$token = trim($_REQUEST["token"]);
$extractToken = $db->selectSRow(array("*"), "tokens", "token='$token'", "", "");

	$getrecords = $db->selectSRow(array("*"),PREFIX."users","(username='$username' || number='$username') AND password='$password'");  

	if($getrecords){
		
		$userid = $getrecords['id'];
		$response['success'] = 'Successfully logged in.';
		$response['userid'] = $userid;
		$response['username'] = $getrecords['username'];
		$response['number'] = $getrecords['number'];
		$response['fname'] = $getrecords['fname'];
		$response['lname'] = $getrecords['lname'];
	}else{
		$response['error'] = 'Invalid Login.';
	}
	$json_response = json_encode($response,JSON_UNESCAPED_UNICODE);
	 echo $json_response;


	 
			
  
?> 
