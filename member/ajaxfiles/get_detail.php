<?php 
include '../assets/common/config.php';
$row_id =$_POST['row'];
$getRecord = $db->selectSROW(array("*"),"order_detail","id = '$row_id'");


$item_detail = array(

			"isbn"=>$getRecord['isbn'],
			"name"=>$getRecord['name'],
			"list_price"=>$getRecord['list_price'],
			"sale_price"=>$getRecord['sale_price'],
			"item_qty"=>$getRecord['quantity'],
			"item_total"=>$getRecord['total_price'],
			"row_id"=>$row_id
			);
echo json_encode($item_detail);

?>


