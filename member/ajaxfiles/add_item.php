<?php 
include '../assets/common/config.php';
session_start();

$item_sale =$_POST['item_sale'];
$item_qty =$_POST['item_qty']; if($item_qty==''){$item_qty=1;}
$item_isban =$_POST['item_isban']; 
$custname =$_POST['custname'];
$custemail =$_POST['custemail'];
$phoneNo =$_POST['phone'];
$total_val =$_POST['total_val'];
$inv_no =$_POST['inv'];
$user_id= $_SESSION['userid'];
$selectedItem = $_POST['selectedItem'];
$itemName = $_POST['itemName'];
$list_price = $_POST['list_price'];
	
	if($itemName!=''){
		if($selectedItem=='' || $selectedItem == 0){
			$new_code = rand(10,10000000000);
			$item_isban = $new_code ;
			//$new_code = check_code($gen_code) ;

		$add_item = array(
				"isbn" => $new_code,
				"item"=> $itemName ,
				"list_price"=> $list_price ,
				"sale_price"=> $list_price

		);
		$add_new = $db->insert($add_item,"items");
	}
	
	$upd_qty = array("isbn"=>$item_isban, "user_id"=>$user_id,"invoice_no"=> $inv_no, "name"=> $custname, "email"=> $custemail,"unit_price"=> $list_price,"quantity"=>$item_qty,"total_price"=>$total_val,"phone"=>$phoneNo,"status"=>'0');
	$set_new = $db->insert($upd_qty,"invoices");
	
}
$check_order = $db->selectSROW(array("*"),"orders","invoice = '$inv_no' ");
//echo $db->sql;
if($check_order){


$order_id = $check_order['id'];
$get_order_detail = $db->select(array("*"),"order_detail","order_id = '$order_id'");
}

if($item_isban!='' ){
	
		$getRecord = $db->selectSROW(array("*"),"items","isbn = '$item_isban'");
	

if($getRecord){

$total_val =$item_qty * $getRecord['list_price']; 

//echo $db->sql;
		if($check_order){

					$order_id = $check_order['id'];
		
			$check_item = $db->selectSROW(array("*"),"order_detail","isbn = '$item_isban' && order_id='$order_id' ");
			
			//exit();
			// echo $check_item['id'];
			if($check_item){
				$detail_id = $check_item['id'];
				$old_qty = $check_item['quantity'];
				$new_qty = $old_qty + $item_qty ;
				//$new_total = $new_qty * $getRecord['sale_price'] ;
				$new_total = $new_qty * $getRecord['list_price'] ;
				$upd_qty = array("quantity"=> $new_qty, "total_price"=> $new_total );
				$set_new = $db->updateCondition($upd_qty,"order_detail","id = '$detail_id' ");
				
				
				$upd_item = array(
		
							"invoice"=>$inv_no,
							"grand_total"=>$total_val,
							"shippingCost"=>$shippingCost,
							"customer"=>$_POST['custname'],
							"email"=>$_POST['custemail'],
							"phone"=>$_POST['phoneNo'],
							"custZipcode"=>$_POST['custZipcode'],
							"address"=>$_POST['custAddress'],
							"status"=>0,
		
							);
							//$set_new = $db->updateCondition($upd_item,"order_detail","id = '$detail_id' ");
						//echo $db->sql; 
			}else{
				$item_detail = array(
		
									"order_id"=>$order_id,
									"isbn"=>$item_isban,
									"name"=>$getRecord['item'],
									"publisher"=>$getRecord['publisher'],
									"list_price"=>$getRecord['list_price'],
									//"sale_price"=>$getRecord['sale_price'],
									"sale_price"=>$getRecord['list_price'],
									"quantity"=> $item_qty,
									//"total_price"=> ($item_qty * $getRecord['sale_price']) 
									"total_price"=> ($item_qty * $getRecord['list_price']) 
						);
									$ins_detail = $db->insert($item_detail,"order_detail");
									
			}
			$get_order_detail = $db->select(array("*"),"order_detail","order_id = '$order_id'");
			
		}else{
		
			$add_item = array(
		
							"invoice"=>$inv_no,
							"grand_total"=>$total_val,
							"customer"=>$_POST['custname'],
							"email"=>$_POST['custemail'],
							"phone"=>$_POST['phoneNo'],
							"custZipcode"=>$_POST['custZipcode'],
							"address"=>$_POST['custAddress'],
							"status"=>0,
		
							);
						$ins_item = $db->insert($add_item,"orders");
						
						$item_detail = array(
		
									"order_id"=>$ins_item,
									"isbn"=>$item_isban,
									"name"=>$getRecord['item'],
									"publisher"=>$getRecord['publisher'],
									"list_price"=>$getRecord['list_price'],
									//"sale_price"=>$getRecord['sale_price'],
									"sale_price"=>$getRecord['list_price'],
									"quantity"=> $item_qty,
									//"total_price"=> ($item_qty * $getRecord['sale_price']) 
									"total_price"=> ($item_qty * $getRecord['list_price']) 
						);
									$ins_detail = $db->insert($item_detail,"order_detail");
									
									$get_order_detail = $db->select(array("*"),"order_detail","order_id = '$ins_item'");
		
		}
					
					
	}
}
					
					foreach ($get_order_detail as $get_order_detail) { ?>
						<tr>
                                    <td style="text-align:left">
                                    	<input type="text" name="" style="position: absolute;opacity: 0;" value="<?php  echo base64_encode($get_order_detail->order_id) ?>" id="orderId"> 
                                    	<?php echo $get_order_detail->isbn ; ?></td>
                                    <td style="text-align:left"><?php echo $get_order_detail->name ; ?></td>
                                    <!-- <td style="text-align:left"><?php echo substr($get_order_detail->publisher,0,20); ?></td> -->
                                    <td style="text-align:right"><?php echo $get_order_detail->list_price ; ?></td>
                                    <td style="text-align:right"><?php echo $get_order_detail->list_price ; ?></td>
                                    <td><?php echo $get_order_detail->quantity ; ?></td>
                                    <td style="text-align:right"><?php echo $get_order_detail->total_price ; ?></td>
                                    <td> 
                                          	
                                       <a href="#" data-bs-toggle="modal" onclick="edit_row(<?php echo $get_order_detail->id ; ?>)" data-bs-target="#editBilling" data-bs-id=" " class="me-2 "><i class="bi bi-pencil-square" style="color:blue;"></i></a>
                                       <a onclick="del_rec(<?php echo $get_order_detail->id ; ?>)" href="#"> <i class="bi bi-trash" style="color:red;"></i></a>
                                    </td>
                                 </tr>
					<?php }
					/*function check_code($a){
						$test_code = $a ;
						$alread_code = $db->selectSROW(array("*"),"items","isbn = '$test_code' ");
						if($alread_code){
							$re_code = rand(10,10000000000);
							check_code($re_code) ;
						} else {
							return $test_code ;
						}
					}*/
?>


