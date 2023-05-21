<?php header('Access-Control-Allow-Origin: *'); 
header("Content-Type:application/json");
ini_set('allow_url_fopen', 'On');
 /* error_reporting(E_ALL);
ini_set("display_errors", 1); */
include("config.php");
$token = trim($_REQUEST["token"]);
$userid = $_REQUEST["userid"];
// print_r($userid);
$extractToken = $db->selectSRow(array("*"), "tokens", "token='$token'", "", "");

	$getrecords = $db->select(array("*"),PREFIX."invoices","user_id='$userid'","id DESC");
    
	if($getrecords){
        $i=0;
        foreach($getrecords as $record){
            $response['details'][$i]['name'] = $record->name;
            $response['details'][$i]['phone'] = $record->phone;
            $response['details'][$i]['total'] = $record->total_price;
            $response['details'][$i]['Date'] = $record->created_at;
            $response['details'][$i]['status'] = $record->status;

            $i++;
        }
		
    }

// else{ 
	
//     $response['response_code'] = 400;
//    $response['response_desc'] = "Invalid Parameters";
   
// }
 $json_response = json_encode($response,JSON_UNESCAPED_UNICODE);
    echo $json_response;
	 
			
  
?> 
