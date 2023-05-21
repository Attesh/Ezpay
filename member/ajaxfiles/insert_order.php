<?php 
include '../assets/common/config.php';



$name =$_POST['name'];
$email =$_POST['email'];
$p_no =$_POST['p_no'];
$address =$_POST['address'];

$country =$_POST['country'];
$state =$_POST['state'];
$city =$_POST['city'];
$remarks =$_POST['remarks'];
$inv_no =$_POST['inv_no'];
$inv_date =$_POST['inv_date'];

$total_price =$_POST['total_price'];
$total_dis =$_POST['total_dis'];
$discon_total =$_POST['discon_total'];
$discon_per =$_POST['discon_per'];
$per_total =$_POST['per_total'];
$disc_amount =$_POST['disc_amount'];
$amount_total =$_POST['amount_total'];
$status =$_POST['ship'];
$custZipcode =$_POST['custZipcode'];
$shippingCost =$_POST['shippingCost'];
$cust_save =$_POST['cust_save'];
$vat_val =$_POST['vat_total'];
$grand_total  = 0 ;
$grand_total  =  $amount_total ;
$selectedcus = $_POST['selectedcus'];
 $user_id = $_SESSION['userid'];
$check_order = $db->selectSROW(array("*"),"orders","invoice = '$inv_no' ");
if($check_order){
	if($cust_save==true){
	if($selectedcus=='' || $selectedcus <=0){
		$add_cus = array(
				"customer_name"=> $name ,
				"email"=> $email ,
				"phone"=> $p_no ,
				"address"=> $address ,
				"city" => $city,
				"user_id" => $user_id

		);
		$add_new = $db->insert($add_cus,"customers ");
	} }

	$upd_order = array(

							"customer"=>$name,
							"email"=>$email,
							"phone"=>$p_no,
							"address"=>$address,
							"country_id"=>$country,
							"state_id"=>$state,
							"city_id"=> $city,
							"remarks"=> $remarks,
							"vat_total"=> $vat_val,
							"discounted_total"=>$discon_total,
							"additional_discount"=>$disc_amount,
							"discount_per"=> $discon_per,
							"grand_total"=> $grand_total,
							"total_discount"=> $total_dis,
							"shippingCost"=> $shippingCost,
							"custZipcode"=> $custZipcode,
							"status"=>$status
				);
							$ins_order = $db->updateCondition($upd_order,"orders","invoice = '$inv_no'");
							
							if($ins_order){
								
								echo base64_encode($check_order['id']);
							
							}

}






?>