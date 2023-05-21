<?php 
header('Access-Control-Allow-Origin: *'); 
header("Content-Type:application/json");
ini_set('allow_url_fopen', 'On');
include("config.php");

$userid = $_REQUEST["userid"];
$amount = $_REQUEST["amount"];
// $email = trim(stripcslashes($_REQUEST["email"]));
$client_name = $_REQUEST["client_name"];
$number = $_REQUEST["number"];
$description = $_REQUEST["description"];
$token = trim($_REQUEST["token"]);
$extractToken = $db->selectSRow(array("*"), "tokens", "token='$token'", "", "");



	$arr = array("user_id"=>$userid,"name"=>$client_name,"unit_price"=>$amount,"phone"=>$number,"description"=>$description);

	$result = $db->insert($arr, PREFIX. "invoices");
	if($result){
           $response['success'] = 'Your Invoice Has Been Created Successfully.';
	}else{
		  $response['status'] = 'failed';
	       $response['error'] = 'Failed.';
    }




     $json_response = json_encode($response,JSON_UNESCAPED_UNICODE);
	 echo $json_response;

// else{
// 	$response['response_code'] = 400;
// 	$response['response_desc'] = "Invalid Parameters";
// 	$json_response = json_encode($response,JSON_UNESCAPED_UNICODE);
// 	 echo $json_response;
// }
  
?> 
