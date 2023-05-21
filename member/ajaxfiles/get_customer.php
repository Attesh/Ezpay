<?php 
include '../assets/common/config.php';

$item_id =$_POST['item_id'];
$getRecord = $db->selectSROW(array("*"),"customers","id = '$item_id'");


$item_detail = array(

			"name"=>$getRecord['customer_name'],
			"email"=>$getRecord['email'],
			"phone"=>$getRecord['phone'],
			"address"=>$getRecord['address'],
			);
echo json_encode($item_detail);

?>


