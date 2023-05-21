<?php header('Access-Control-Allow-Origin: *'); 
header("Content-Type:application/json");
ini_set('allow_url_fopen', 'On');
 /* error_reporting(E_ALL);
ini_set("display_errors", 1); */
include("config.php");

// $token = trim($_REQUEST["token"]);
$id = $_REQUEST["id"];
   $getrecords = $db->selectSRow(array("*"),PREFIX."invoices","id='$id'");
    
   if($getrecords){
   $response['success'] = 'Successfully Opening Users Detail.';
   $response['name'] = $getrecords['name'];
    $response['price'] = $getrecords['unit_price'];
     $response['phone'] = $getrecords['phone'];
   $response['description'] = $getrecords['description'];
}
// else{ 
   
//     $response['response_code'] = 400;
//    $response['response_desc'] = "Invalid Parameters";
   
// }
 $json_response = json_encode($response,JSON_UNESCAPED_UNICODE);
    echo $json_response;  
?> 
