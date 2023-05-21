
<?php 
header('Access-Control-Allow-Origin: *'); 
header("Content-Type:application/json");
ini_set('allow_url_fopen', 'On');
include("config.php");




$userid = stripcslashes($_REQUEST["id"]);
// $password = stripcslashes($_REQUEST["password"]);
$getrecords = $db->selectSRow(array("*"),PREFIX."users","id='$userid'");

if($getrecords){
	$userid = $getrecords['id'];
	$response['success'] = 'Successfully Opening Users Detail.';
	$response['userid'] = $userid;
	// $response['organization_id'] = $getrecords['organization_id'];
	$response['fname'] = $getrecords['fname'];
	$response['number'] = $getrecords['phone'];
	$response['email'] = $getrecords['email'];
	$response['company_name'] = $getrecords['company_name'];
	$response['logo'] = $getrecords['logo'];
}else{
	$response['error'] = 'Something went wrong.';
}

     $json_response = json_encode($response,JSON_UNESCAPED_UNICODE);
	 echo $json_response;
  
?> 


