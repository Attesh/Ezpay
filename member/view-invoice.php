<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php' ?>
<?php include 'assets/common/config.php'; ?>
<?php 
$id =base64_decode($_GET['id']);
 $checkLogin = $db->selectSRow(array("*"),PREFIX."invoices","id='$id'"); 
 $item =$checkLogin['invoice_no'];
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
    background: #94ceec;
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

    <div class="pagetitle">
      <h1>Invioces</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="manage-invioces.php">Invoices</a></li>
          <li class="breadcrumb-item active">View Invioce</li>
        </ol>
      </nav>
    </div>

    <section class="section addEvent">
        <div class="row">
	        <div class="col-lg-12">
	        	<div class="card">
	        		<div class="card-body">
	        			<form action="#" method="post">
        				<!-- <h5 class="card-title">View Record</h5> -->
	        				<div class="row mt-3">
	        					<div class="col-sm-8" bis_skin_checked="1">
		       						<div class="topContent" bis_skin_checked="1">
		       							<img class="img-fluid" src="assets/img/BG.png">
		       							<!-- <p>KITAB HOUSE</p>
		       							<p>Calle 3 Liebre No. 20 SM 20 M.7. Lote 18</p>
		       							<p>Cancún 3, Q. Roo, México C.P. 77500</p>
		       							<p>Tel:	+52 (998) 887 6552</p> -->
		       						</div>
		       					</div>
	        					
	        					<div class="col-sm-4" bis_skin_checked="1">
	        						<div class="d-flex justify-content-end mb-4">
										<button class="btn btn-primary btn-sm me-2 ps-3 pe-3" onclick="window.print();"><i class="bi bi-printer-fill"></i>&nbsp;Print</button>
										<!-- <a class="btn btn-primary btn-sm me-2 ps-3 pe-3" href="edit-items.php">Edit</a> -->
			        				</div>
									<?php 
								
$checkLogin = $db->selectSRow(array("*"),PREFIX."invoices","id='$id'");
?>

					       			<table class="table table-bordered invoiceTable">
					       				<tbody>
					       					<tr>
					       						<td>Invioce No.</td>
					       						<input id="invoice_number" type="hidden" value="1670936890">
					       						<td id="invoice_num"><?php echo $checkLogin['invoice_no'] ?></td>
					       					</tr>
					       					<tr>
					       						<td>Date</td>
					       						<td><?php echo $checkLogin['created_at'] ?></td>
					       					</tr>
					       				
					       				</tbody>
					       			</table>
					       		</div>
					       	</div>
 							<div class="row d-flex justify-content-between">
				       		<div class="col-sm-7" bis_skin_checked="1">
				       			<table class="table table-bordered">
				       				<tbody>
				       					<tr>
				       						<!-- <td>Attention</td> -->
				       						<td>
				       							<input id="customer_name" type="hidden" value="test">
				       							<p>
												   Name: <?php echo $checkLogin['name'] ?>	</p>

				       							<p>
				       								Phone:<?php echo $checkLogin['created_at'] ?>
				       							</p>

				       							<p>
				       								Email: <?php echo $checkLogin['email'] ?>
				       							</p>

				       							<p>
												   	</p>
												   
				       						</td>
				       					</tr>
				       				</tbody>
				       			</table>
				       		</div>
 								<div class="col-md-5 d-flex justify-content-end">
									
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
    $source = "https://fisdemoprojects.com/ezpay/payment/invociesno=$item";
	
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
								</div>
				       		<div class="col-sm-12" bis_skin_checked="1">
				       			<table class="table table-bordered invoiceItemeTable" style="border: 2px">
				       				<thead>
				       					<tr>
				       						<th>Barcode No.</th>
											<th>Item Name</th>
											<!-- <th>Customer Name</th> -->
											<th>Unit Price</th>
											<th>Quantity</th>
											<th>Total Price</th>
				       					</tr>
				       				</thead>
				       				<tbody>

									   <?php 
$checkLogin = $db->selectSRow(array("*"),PREFIX."invoices","id='$id'");
$isbn = $checkLogin['isbn'];
$itemname = $db->selectSRow(array("*"),PREFIX."items","isbn='$isbn'");

?>
										<tr>
											<td class="text-center"><?php echo $checkLogin['isbn'] ?></td>
											<td class="text-center"><?php echo $itemname['item'] ?></td>
											<!-- <td class="text-center">Sis</td> -->
											<td class="text-center"><?php echo $checkLogin['unit_price'] ?></td>
											<td class="text-center"><?php echo $checkLogin['quantity'] ?></td>
											<td class="text-center"><?php echo $checkLogin['total_price'] ?></td>
				       					</tr>
									</tbody>
								</table>
							</div>

							<div class="d-flex justify-content-between">

								<div>
									<a href="https://fisdemoprojects.com/ezpay/payment/invociesno=<?= $checkLogin['invoice_no'] ;?>" class="btn btn-primary"><i class="fa-brands fa-amazon-pay"></i>&nbsp;Pay now</a>  

									<input type="text" value="https://fisdemoprojects.com/ezpay/payment/invociesno=<?php echo $item ?>" id="myInput" hidden>
									<button class="btn btn-primary ms-2" onclick="myFunction()"><i class="fa-regular fa-copy"></i>&nbsp;Copy link</button>      	
									<button class="btn btn-primary ms-2" onclick=""><i class="bi bi-whatsapp"></i> Share Link</button>     	
								</div>

								<table class="table w-auto" style="font-weight: 600;">
									<tbody>	
										<tr class="totalCal">
											<td colspan="12"></td>
											<td>Sub Total</td>
											<td><span id="subtotal_sign">SAR &nbsp;</span><span id="sub_total">0.01</span><input type="hidden" id="sub_total_hidden" value="" name="sub_total"></td>
										</tr>
										<tr class="totalCal">
											<td colspan="12"></td>
											<td>VAT &nbsp; (10%)</td>
											<td>
												<span id="vatInpt">0.00</span>
												<input type="hidden" id="vat" value="16" name="sub_total">
											</td>
										</tr>
										<tr class="totalCal">
											<td colspan="12"></td>
											<td>Discount</td>
											<td>
												<span id="subtotal_sign">SAR &nbsp;</span><span id="vatInpt">5.10</span>
												<input type="hidden" id="vat" value="16" name="sub_total">
											</td>
										</tr>
										<tr class="totalCal">
											<td colspan="12"></td>
											<td>Grand Total</td>
											<td>
												<span id="subtotal_sign">SAR &nbsp;</span><span id="vatInpt">0.00</span>
												<input type="hidden" id="vat" value="16" name="sub_total">
											</td>
										</tr>
									</tbody>
								</table>

							</div>
							
							<!-- <a href="https://fisdemoprojects.com/ezpay/payment/invociesno=<?= $checkLogin['invoice_no'] ;?>" class="me-2">Pay now</a>        	
							<?php
						// echo $id;
	 						// echo "<div><br><img src='".$file."' width='150'></div>";
							//  QRcode::png($content) ;
 
							 ?> -->
<!-- <a href="whatsapp://send?text=urlencodedtext">Share this</a> -->




<script>
function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
  
  // Alert the copied text
//   alert("Copied the text: " + copyText.value);
}
</script>



	
	    			</div>
	    		</div>
	    	</div>
    	</div>
    </section>

    
</main>
<script src="https://kit.fontawesome.com/9833d01fa2.js" crossorigin="anonymous"></script>
<?php include 'includes/footer.php'?>