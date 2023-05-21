<?php include'common/config.php' ?>



<?php 
if ($_POST['call']=="Add") {
extract($_POST);
			$arr = array( "registration_number" => $registration_number, "company_name" => $company_name, "customer_name" => $customer_name, "phone" => $phone, "gender" => $gender, "email" => $email,"address" => $address);

			$result = $db->insert($arr, PREFIX. "customers");
			if($result){
				$msg = array("status"=> '1',    "message"=>"success message");
			}
				else {    
		       $msg = array("status"=> '0', "message"=>"some error");		   
			}
			echo json_encode($msg);	
}
elseif ($_POST['call']=="fetch_edit_data") {
	$id = base64_decode($_GET['id']);
	extract($_POST);
	$getRecord = $db->selectSRow(array("*"),PREFIX."customers","id=$id");
	echo json_encode($getRecord);
}
elseif ($_POST['call']=="update") {
	$id = base64_decode($_GET['id']);
	extract($_POST);
     $arr = array("registration_number" => $registration_number, "company_name" => $company_name, "customer_name" => $customer_name, "phone" => $phone, "gender" => $gender, "email" => $email,"address" => $address);

     $result = $db->updateCondition($arr, PREFIX. "customers","id='$id'");
			if($result){
				$msg = array("status"=> '1',    "message"=>"success message");
			}
				else {    
		       $msg = array("status"=> '0', "message"=>"some error");
		   
			}
			echo json_encode($msg);	
}


elseif ($_POST['call']=="delete") {
	$id = base64_decode($_GET['id']);
	extract($_POST);
     // $arr = array("isbn" => $isbn, "customer_name" => $customer_name, "phone" => $phone, "gender" => $gender, "email" => //$email,"address" => $address);
			$result = $db->delete("id='$id'",PREFIX."customers");
			if($result){
				$msg = '1';
			}
				else {    
		       $msg = array("status"=> '0', "message"=>"some error");		   
			}
			echo json_encode($msg);	
}

// elseif ($_POST['call']=="view") {
// 	$id = base64_decode($_GET['id']);
// 	extract($_POST);
// 	// header('location:view-customer.php');
//      // $arr = array("isbn" => $isbn, "customer_name" => $customer_name, "phone" => $phone, "gender" => $gender, "email" => $email,"address" => $address);
//      // $getCustomer = $db->select(array("*"),PREFIX."customers");
// 			if($){
// 				$msg = array("status"=> '1',    "message"=>"success message");
// 			}
// 				else {    
// 		       $msg = array("status"=> '0', "message"=>"some error");
		   
// 			}
// 			echo json_encode($msg);	
// }


?>