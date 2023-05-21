<?php include 'assets/common/config.php' ?>
<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php' ?>
<?php 
$id=base64_decode($_GET['id']);
$getOrders=$db->selectSRow(array("*"),PREFIX."orders","id=$id"); 
$orderDetails = $db->select(array("*"),PREFIX."order_detail","order_id=$id");
  $invoiceno = $getOrders['invoice']; 
   $item = $getOrders['invoice']; 
  ?>
<style type="text/css">
	table.invoiceTable tr td {
    padding: 3px 4px;
    font-size: 13px;
}
.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
    font-size: 14px;
}
table.attentionTable.table-bordered {
    border: 1px solid #000000;
}
table.attentionTable {
    margin-top: 10px;
}
table.attentionTable tr td:first-child {
    font-weight: 600;
    text-transform: uppercase;
}
.invoiceItemeTable thead tr {
	text-align: center;
}
/*.table td {
    padding: 1rem;
}*/
.table td, .table th {
    vertical-align: middle;
}
table.attentionTable tr td p {
    font-size: 11px;
    line-height: 13px;
    margin-bottom: 3px;
    font-weight: 600;
}

table#server_data_table thead tr, table.invoiceItemeTable thead tr {
    background: #97c23c;
    color: black;
}
table.currencyTable {
    margin-top: -175px;
}
.table tbody + tbody {
    border-top: 2px solid #dee2e6;
}
.topContent p {
	font-size: 13px !important;
}
.topContent img {
    max-height: 100px;
}
 @media print {
    .pagetitle {
       display: none;
    }
    .header-nav {
       display: none;
       box-shadow: none;
    }
    .header {
       box-shadow: none;
    }
    .header a, .header i, .header img {
       display: none;
    }
    .harry {
       display: none;
    }
    .eventDetailCard {
       display: block;
           background: #f6f9ff !important;
           box-shadow: none;
    }
    .card {
           background: #f6f9ff !important;
           box-shadow: none;
    }
    .sidebar {
           box-shadow: none;
    }
    .harry1 {
       display: none;
    }
    .logoimmage img {
       display: block;
    }
    #footer {
    	display: none;
    }
	.btn-primary {
		display: none;
	}
	body {
		margin-top: 0 !important;
		margin-bottom: 0 !important;
	}

 }


</style>

<main id="main" class="main">

    <!-- <div class="pagetitle">
      <h1>View Items</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">View Items</li>
        </ol>
      </nav>
    </div> -->

    <section class="section addEvent">
        <div class="row">
	        <div class="col-lg-12">
	        	<div class="card">
	        		<div class="card-body">
	        			<form action="#" method="post">

	        				<!-- <h5 class="card-title">View Record</h5> -->

		        				<div class="row mt-3">
		        					<div class="col-sm-12" bis_skin_checked="1">
			       						<div class="orderView">
			       							<div class="d-flex justify-content-end mb-2">
													<button class="btn btn-primary btn-sm me-2 ps-3 pe-3" onclick="window.print();"><i class="bi bi-printer-fill"></i>&nbsp;Print</button>
						        				</div>
			       							<div class="d-flex justify-content-between">
		       								<img class="img-fluid" src="assets/img/BG.png" style="max-height: 110px;">
		       								<?php
										
										// Include the library in your project
										require ('vendor/autoload.php');
										
										// Instantiate the library class
										$barcode = new \Com\Tecnick\Barcode\Barcode();
										$dir = "images/";
										
										// Directory to store barcode
										if (! is_dir($dir)) {
											mkdir($dir, 0777, true);
										}
										// data string to encode
										$source = "https://fisdemoprojects.com/ezpay/payment/invociesno=".$invoiceno;
										
										// ser properties
										$qrcodeObj = $barcode->getBarcodeObj('QRCODE,H', $source, - 16, - 16, 'black', array(
											- 2,
											- 2,
											- 2,
											- 2
										))->setBackgroundColor('#f5f5f5');
										
										// generate qrcode
										$imageData = $qrcodeObj->getPngData();
										$timestamp = time();
										
										//store in the directory
										file_put_contents($dir . $item . '.png', $imageData);
										
										 //Output image to the browser
										  echo '<img src="'.$dir . $item.'.png" width="130px" height="130px">';
									?>
									</div>
				       						<div class="order col-sm-4">
				       							<!-- <div class="d-flex justify-content-end mb-2">
													<button class="btn btn-primary btn-sm me-2 ps-3 pe-3" onclick="window.print();">Print</button>
						        				</div> -->
								       			<table class="table table-bordered invoiceTable">
								       				<tbody>
								       					<tr>
								       						<td>Invoice No</td>
								       						<input id="invoice_number" type="hidden" value="1670936890">
								       						<td id="invoice_num"><?=$getOrders['invoice'];?></td>
								       					</tr>
								       					<tr>
								       						<td>Date</td>
								       						<td>
																<?php echo $newDate = date("d-m-Y", strtotime($getOrders['created_At'])); ?>
															</td>
								       					</tr>
                                                        
                                                        <tr>
								       						<td>Customer</td>
								       						<td>
																<?=$getOrders['customer'];?>
															</td>
								       					</tr>
								       				
								       				</tbody>
								       			</table>
				       						</div>
			       						</div>
			       					</div>
						       	</div>

								<div class="row d-flex justify-content-between">
						       		<div class="col-sm-7" bis_skin_checked="1">
						       			<ul class="list-unstyled customerDetail">
		       								<li></li>
			       							<li><?=$getOrders['address'];?></li>
	                                        <?php if($getOrders['city_id']!=''){?>
	                                        <li><?=$getOrders['city_id'].', '.$getOrders['state_id'].', '.$getOrders['country_id'].' '.$getOrders['custZipcode'];?></li><?php }?>
			       							<li><?=$getOrders['phone'];?></li>
			       							<li><?=$getOrders['email'];?></li>
		       							</ul>
						       		</div>
								   	<!-- <div class="col-md-5 d-flex justify-content-end">
									
									<?php
										
										// Include the library in your project
										require ('vendor/autoload.php');
										
										// Instantiate the library class
										$barcode = new \Com\Tecnick\Barcode\Barcode();
										$dir = "images/";
										
										// Directory to store barcode
										if (! is_dir($dir)) {
											mkdir($dir, 0777, true);
										}
										// data string to encode
										$source = "https://fisdemoprojects.com/ezpay/payment/invociesno=".$invoiceno;
										
										// ser properties
										$qrcodeObj = $barcode->getBarcodeObj('QRCODE,H', $source, - 16, - 16, 'black', array(
											- 2,
											- 2,
											- 2,
											- 2
										))->setBackgroundColor('#f5f5f5');
										
										// generate qrcode
										$imageData = $qrcodeObj->getPngData();
										$timestamp = time();
										
										//store in the directory
										file_put_contents($dir . $item . '.png', $imageData);
										
										 //Output image to the browser
										  echo '<img src="'.$dir . $item.'.png" width="130px" height="130px">';
									?>
									</div> -->
								</div>


					       		<div class="col-sm-12" bis_skin_checked="1">
					       			<table class="table table-bordered table-striped" style="border: 2px">
					       				<thead>
					       					<tr>
					       						<th>Sr. #</th>
												<th>Item Name</th>
                                                <th>Unit Price</th>
												<!-- <th>Sale Price</th> -->
												
												<th>Quantity</th>
												<th style="text-align: right;">Total Price</th>
					       					</tr>
					       				</thead>
					       				<tbody>
									       <?php $i = 1 ; 
									       foreach ($orderDetails as $orderDetails ) {  
									       	// code...
									        ?>
											<tr>
												<td><?php echo $i ; ?></td>
												<td><?php echo $orderDetails->name;?></td>
                                                <td><?php echo number_format($orderDetails->list_price,2);?></td>
												<!-- <td><?php echo number_format($orderDetails->sale_price,2);?></td> -->
												
												<td><?=$orderDetails->quantity;?></td>
												<td style="text-align: right;"><?php echo number_format($orderDetails->total_price,2);?></td>
					       					</tr>
					       					<?php   $subTotal = $subTotal +$orderDetails->total_price;  $i++ ; } ?>
										</tbody>
									</table>
								</div>

                                <div class="row">
									<div class=" col-sm-9 ">
										<?php if($getOrders['remarks']!=''){?>
										<table class="table w-auto priceTable" style="font-weight: 600;">
											<tbody>	
												<tr class="totalCal">
													<td colspan="4"></td>
													<td>Remarks:<br><?php echo trim($getOrders['remarks']);?></td>
	 											</tr>
	                                        </tbody>
	                                    </table>
	                                    <?php }?>
                                	</div>
								<div>
								<div class="row d-flex justify-content-between">
									<div class=" col-md-6">
										<a target="_blank" href="https://fisdemoprojects.com/ezpay/payment/invociesno=<?= $invoiceno ;?>" class="btn btn-primary mb-3"><i class="fa-brands fa-amazon-pay"></i>&nbsp;Pay Now</a>  
										<input type="text" value="https://fisdemoprojects.com/ezpay/payment/invociesno=<?php echo $invoiceno; ?>" id="myInput" hidden>
										
										<button class="btn btn-primary ms-2 mb-3" ><i class="bi bi-whatsapp"></i> <a href="whatsapp://send?text=https://fisdemoprojects.com/ezpay/payment/invociesno=<?= $invoiceno;?>"       data-action="share/whatsapp/share"  
        target="_blank">Share Link </a></button> 
							    	
									</div>

										<div class=" col-md-3">
											<table class="table" style="font-weight: 600;">
												<tbody>	
														<tr class="totalCal">
															<td colspan="4"></td>
															<td> Total Price</td>
															<td><span id="subtotal_sign">SAR </span><span id="sub_total"><?php echo number_format($subTotal,2);?></span><input type="hidden" id="sub_total_hidden" value="" name="sub_total"></td>
														</tr>
													<tr class="totalCal" <?php if($getOrders['vat_total']<=0){ echo "style='display:none'";} ?>>
															<td colspan="4"></td>
															<td>Total VAT</td>
															<td>
																<span id="vatInpt">SAR <?=number_format($getOrders['vat_total'],2);?></span>
																
															</td>
														</tr>
														<tr class="totalCal" <?php if($getOrders['total_discount']<=0){ echo "style='display:none'";} ?>>
															<td colspan="4"></td>
															<td>Total Discount</td>
															<td>
																<span id="vatInpt">SAR <?=number_format($getOrders['total_discount'],2);?></span>
																<input type="hidden" id="vat" value="16" name="sub_total">
															</td>
														</tr>
														
														
														<tr class="totalCal">
															<td colspan="4"></td>
															<td>Discounted Total</td>
															<td><span id="alltotal_sign">SAR </span><span id="all_total"><?=number_format($getOrders['discounted_total'],2);?></span></td>
														</tr>
														<?php if($getOrders['additional_discount']!=0){ 
																?>
														<tr class="totalCal">
															<td colspan="4"></td>
															<td>Additional Discount</td>
															<td><span id="alltotal_sign">SAR </span><span id="all_total"><?=number_format($getOrders['additional_discount'],2);?></span></td>
														</tr>
		                                                <?php }?>
		                                                <?php if($getOrders['discount_per']!=0){ ?>
														<tr class="totalCal">
															<td colspan="4"></td>
															<td>Additional Discount</td>
															<td><span id="alltotal_sign">SAR </span><span id="all_total"><?=number_format($getOrders['discount_per'],2);?></span></td>
														</tr>
														
														
														 
														<?php }?>
														<?php if($getOrders['shippingCost']!=0){?>
		                                                
														<tr class="totalCal">
															<td colspan="4"></td>
															<td>Shipping Cost</td>
															<td><span id="alltotal_sign">SAR </span><span id="all_total"><?=number_format($getOrders['shippingCost'],2);?></span></td>
														</tr>
		                                                <?php }?>
														
														<tr class="totalCal">
															<td colspan="4"></td>
															<td>Grand Total</td>
															<td><span id="alltotal_sign">SAR </span><span id="all_total"><?=number_format($getOrders['discounted_total'],2);?></span></td>
														</tr>
														
														 <!-- for persentage discount  -->
														
												</tbody>
											</table>

										</div>
	                                </div>
								</div>

		        			</form>
	    				</div>
	    			</div>
	    	</div>
    	</div>
    </section>
</main>
<script src="https://kit.fontawesome.com/9833d01fa2.js" crossorigin="anonymous"></script>
<?php include'includes/footer.php'?>