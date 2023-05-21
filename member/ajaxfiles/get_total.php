<?php 
include '../assets/common/config.php';


$inv_no =$_POST['inv']; 

$getRecord = $db->selectSROW(array("*"),"orders","invoice = '$inv_no'");
		$order_id = $getRecord['id'];
		$get_order_detail = $db->select(array("*"),"order_detail","order_id = '$order_id'");
				$total_item = 0;
				$total_quantity = 0 ;
				$total_sale_price = 0 ;
				$total_list_price = 0 ;
				$getvat = $db->selectSROW(array("*"),"general_settings","id = '1'");
				$vat_val = $getvat['vat'];
foreach ($get_order_detail as $get_order_detail) { 

				$total_item = $total_item + 1 ;
				$total_quantity = $total_quantity + $get_order_detail->quantity ;
				//$total_sale = $get_order_detail->quantity * $get_order_detail->sale_price ;
				$total_sale = $get_order_detail->quantity * $get_order_detail->list_price ;
				$total_sale_price = $total_sale_price + $total_sale ;
				$total_list = $get_order_detail->quantity *	$get_order_detail->list_price ;
				$total_list_price = $total_list_price + $total_list ;

						}
						$setvat = ($total_sale_price*$vat_val)/100 ; 
						$item_detail = array(

			"total_item"=>$total_item,
			"total_quantity"=>$total_quantity,
			"total_sale_price"=>number_format($total_sale_price,2),
			"total_list_price"=>number_format($total_list_price,2),
			"vat" => number_format($setvat,2),
			"with_vat" => number_format(($setvat+$total_list_price),2)
			
			);
echo json_encode($item_detail);



?>