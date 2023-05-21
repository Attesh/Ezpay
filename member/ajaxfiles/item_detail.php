<?php 
include '../assets/common/config.php';

$item_id =$_POST['item_id'];
$getRecord = $db->selectSROW(array("*"),"items","id = '$item_id'");


$item_detail = array(

			"isbn"=>$getRecord['isbn'],
			"publisher"=>$getRecord['publisher'],
			"list_price"=>$getRecord['list_price'],
			"sale_price"=>$getRecord['sale_price'],
			);
echo json_encode($item_detail);

?>


