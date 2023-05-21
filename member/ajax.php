<?php include'common/config.php' ?>



<?php 

if ($_POST['call']=="Add") {

extract($_POST);
			$arr = array("isbn" => $isbn, "customer_name" => $customer_name, "phone" => $phone, "gender" => $gender, "email" => $email,"address" => $address);
			
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
	extract($_POST);
	$getRecord = $db->selectSRow(array("*"),PREFIX."customers","id=$id");
	echo json_encode($getRecord);
}
?>

