<?php header('Access-Control-Allow-Origin: *'); 
header("Content-Type:application/json");
ini_set('allow_url_fopen', 'On');
 /* error_reporting(E_ALL);
ini_set("display_errors", 1); */
include("config.php");




$username = $_REQUEST["username"];
$password = $_REQUEST["password"];
$confirm_password = password_hash($password, PASSWORD_DEFAULT);

if (password_verify($password, $confirm_password)) {
  $getrecords = $db->selectSRow(array("*"),PREFIX."users","email='$username'");

  if ($getrecords && password_verify($password, $getrecords['password'])) {
   $userid = $getrecords['id'];
    $response['success'] = 'Successfully logged in.';
    $response['userid'] = $userid;
    $response['email'] = $getrecords['email'];
    $response['number'] = $getrecords['phone'];
    $response['fname'] = $getrecords['fname'];
    $response['company_name'] = $getrecords['company_name'];
    $response['logo'] = $getrecords['logo'];
  }else{
    $response['error'] = 'Invalid Login.';
  
                  }
      }
  $json_response = json_encode($response,JSON_UNESCAPED_UNICODE);
   echo $json_response;
      
  
?>
