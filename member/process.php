
<?php include 'assets/common/config.php' ?>
<?php

error_reporting(1);
session_start();
$userid = $_SESSION['userid'];
require 'stripe/Stripe.php';


$publishable_key     = "pk_test_51Kj0IyC7BxmWdrORvRYKlefkpQWt1EkaTfMw6AHWqtF0Mqz5s2xaflibFWXjGiVS6wk51jfQ0xTma9Q62MJ8NO3G003k0t0DA9";
$secret_key            = "sk_test_51Kj0IyC7BxmWdrORFp7Ig1vDzIYRANuPOD0hM2ztUHSh0ELmtcYVq10Xcp9cCJUEVROrH7jPu2uiMDosfJpsAd8K00KVBHxH8E";

if(isset($_POST['stripeToken'])){
	


    $_POST[ 'name'];
    $_POST[ 'email'];
    $_POST[ 'cardnumber'];
    $_POST[ 'month'];
    $_POST[ 'year'];
    $_POST[ 'year'];
    $_POST[ 'cvv'];
    $_POST[ 'price_charge'];
    if($_POST['start_renew_data'])
    {
        $date_start =$_POST['start_renew_data'];
      

   
    }
    else
    {
        $date_start = date('y-m-d');
    }
   
if($_POST['price_charge'] == '200'){
    // $enddate =date('m');
    // $end_date =$enddate +1;
    // $final_end_date = date('20'.'y-'.'0'. $end_date.'-d');
    $enddate=date_create($date_start);
    date_add($enddate,date_interval_create_from_date_string("30 days"));
    $final_end_date =  date_format($enddate,"Y-m-d");
    $price_charge_name = 'Monthly';
    // print_r($final_end_date);
    // die();
 
}else{
    // $enddate =date('y');
    // $end_date =$enddate +1;
  
    // $final_end_date = date('20'.$end_date.'-m-d');
    $enddate=date_create($date_start);
    date_add($enddate,date_interval_create_from_date_string("365 days"));
    $final_end_date =  date_format($enddate,"Y-m-d");
    $price_charge_name='Yearly';

   
}

// print_r($final_end_date);

    //
	Stripe::setApiKey($secret_key);
	$description 	= "Invoice #".rand(99999,999999999);
	$amount_cents 	= $_POST[ 'price_charge'];
	$tokenid		= $_POST['stripeToken'];
 
	try {
		$charge 		= Stripe_Charge::create(array( 
		"amount" 		=> $amount_cents,
		"currency" 		=> "usd",
		"source" 		=> $tokenid,
		"description" 	=> $description)			  
		);
   
		$customer = Stripe_Customer::create(array( 
            'name' =>  $_POST[ 'name'],
            'description' =>  $_POST[ 'name'],
            'email' =>  $_POST[ 'email'],
            'balance' => $_POST[ 'price_charge'],
            'payment_method' => 'pm_card_visa',
            'source'  => $token 
        ));
       
		$id			= $charge['id'];
		$amount 	= $charge['amount'];
        $balance_transaction = $charge['balance_transaction'];
        $currency 	= $charge['currency'];
        $status 	= $charge['status'];
        $date 	= date("Y-m-d H:i:s");
		
      
      
        extract($_POST);
      
        $arr = array("user_id" => $userid, "isbn" => $item, "type" => '1', "transaction_id" => $_POST[ 'cardnumber'],"account_number" =>$_POST[ 'cardnumber'],"cvv" => $_POST[ 'cvv'],"balance" => $_POST[ 'price_charge'],"last_transfer" => 'Null');
    
        $result = $db->insert($arr, PREFIX. "transactions");
        $arr_t = array("user_id" => $userid, "pakage_type" => $price_charge_name, "start_date" =>  $date_start, "end_date" => $final_end_date, "price" => $_POST[ 'price_charge'], "status" => '1');
        $arr_s = array("active_pakage" => 'subscription');	
      
        $result = $db->updateCondition($arr_s, PREFIX. "users","id=$userid");

        $result = $db->selectSRow(array("*"),PREFIX."subscription","user_id=$userid");
   
       
        if($result){
        $result = $db->updateCondition($arr_t, PREFIX. "subscription","user_id=$userid");

        }	
        else{
        $result = $db->insert($arr_t, PREFIX. "subscription");

        }

		$result = "succeeded";
		/* You can save the above response in DB */
		header("location:welcome.php");
        
		exit;

		}catch(Stripe_CardError $e) {			
			$error = $e->getMessage();
			$result = "declined";
		}
}

?>