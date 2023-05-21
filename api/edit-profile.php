
<?php 
header('Access-Control-Allow-Origin: *'); 
header("Content-Type:application/json");
ini_set('allow_url_fopen', 'On');
include("config.php");

$ID = $_REQUEST["id"];
$fname = $_REQUEST["fname"];
// $lname = $_REQUEST["lname"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$company_name= $_REQUEST['company_name'];

// logo file starting here
$data = json_decode(file_get_contents("php://input"), true); 
	$upload_path = 'uploads/'; // set upload folder path 
	$fileExt = strtolower(pathinfo($_FILES['logo']['name'],PATHINFO_EXTENSION)); // get image extension            
	// valid image extensions
	$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx');
	$filename = $_FILES['logo']['name'];
	$filename = $filename;
	// Upload file
	move_uploaded_file($_FILES['logo']['tmp_name'],'uploads/'.$filename);
// end here
$arr = array("fname" => $fname, "email" => $email, "phone" => $phone,"company_name" => $company_name, "logo"=>$filename);

$result = $db->updateCondition($arr,PREFIX."users", "id=$ID");

if ($result) {
	$response['status'] = 'success';
	$response['success'] = 'Updated Successfully';
}
else{
	$response['status'] = 'failed';
	$response['error'] = 'Update Failed';
}
     $json_response = json_encode($response,JSON_UNESCAPED_UNICODE);
	 echo $json_response;
  
?> 


