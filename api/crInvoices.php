<?php

header('Access-Control-Allow-Origin: *'); 
header("Content-Type:application/json");
ini_set('allow_url_fopen', 'On');
include("config.php");

$userid = $_REQUEST["userid"];
$amount = $_REQUEST["amount"];
$client_name = $_REQUEST["client_name"];
$number = $_REQUEST["number"];
$description = $_REQUEST["description"];


	$arr = array("user_id"=>$userid, "unit_price"=>$amount,"name"=>$client_name,"phone"=>$number, "description"=>$description, "quantity"=>1);
	$result = $db->insert($arr, PREFIX. "invoices");
	if ($result) {
		$getrecords = $db->selectSRow(array("*"),PREFIX."customers","customer_name='".$client_name."'");
	if($getrecords){
		
	    // $response['status'] = 'Name Already Exist.';
	    $response['status'] = 'success.';
		}
	else{
		$arra = array("customer_name"=>$client_name,"phone"=>$number,"isbn"=>null,"registration_number"=>null,"email"=>null,"gender"=>null,"city"=>null, "address"=>null,"status"=>null, "created_at"=>$created_at);
		$result1 = $db->insert($arra, PREFIX. "customers");
	    $response['status'] = 'success.';
    }		
}
	else{
		$response['status'] = 'failed';
	    $response['error'] = 'Failed.';
    }
     $json_response = json_encode($response,JSON_UNESCAPED_UNICODE);
	 echo $json_response;
?> 
