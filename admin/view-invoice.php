<?php include 'common/config.php' ?>
<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php' ?>
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
/*    background: #97c23c;*/
    background: #ffbc35;
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
<?php $id=base64_decode($_GET['id']);
$getRecord=$db->selectSRow(array("*"),PREFIX."invoices","id=$id");
$userid=$getRecord['user_id'];
$getVAT=$db->selectSRow(array("*"),PREFIX."general_settings");
$vat=$getVAT['vat'];
$commission=$getVAT['ezpay_commission'];
$commission_amount=$getRecord['total_price']*$commission/100;
$vatamount=$getRecord['total_price']*$vat/100;
$grandtotal=$getRecord['total_price']+$vatamount+$commission_amount;
$getUser=$db->selectSRow(array("*"),PREFIX."users","id=$userid");
?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Invioces</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="manage-invoice.php">Invoices</a></li>
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
										<button class="btn btn-primary btn-sm me-2 ps-3 pe-3" onclick="window.print();">Print</button>
										<!-- <a class="btn btn-primary btn-sm me-2 ps-3 pe-3" href="edit-items.php">Edit</a> -->
			        				</div>

					       			<table class="table table-bordered invoiceTable">
					       				<tbody>
					       					<tr>
					       						<td>Invoice No</td>
					       						<input id="invoice_number" type="hidden" value="1670936890">
					       						<td id="invoice_num">INV-000<?=$getRecord['id']?></td>
					       					</tr>
					       					<tr>
					       						<td>Date</td>
												<?php $newDate = date("d-m-Y", strtotime($getRecord['created_at'])); ?>
					       						<td><?=$newDate?></td>
					       					</tr>
					       				
					       				</tbody>
					       			</table>
					       		</div>
					       	</div>

				       		<div class="col-sm-7" bis_skin_checked="1">
				       			<table class="table table-bordered attentionTable">
				       				<tbody>
				       					<tr>
				       						<td>Attention</td>
				       						<td>
				       							<input id="customer_name" type="hidden" value="test">
				       							<p>
												   Name: <?=$getUser['fname'] . " " . $getUser['lname']?></p>
				       							<p>
												   Address: <?=$getUser['address']?></p>
				       							<p>
				       								Phone: <?=$getUser['number']?> 
				       							</p>
				       							<p>
				       								Email: <?=$getUser['email']?> 
				       							</p>
				       							<!-- <p>
				       								Note: COTIZACIONES SUJETAS A CAMBIOS DE PRECIOS O MODELOS  SIN PREVIO AVISOCOTIZACIONES SUJETAS A CAMBIO DE PRECIOS POR PARIDAD DE LA MONEDA  Y A MODELOS DESCONTINUADOS O NO DISPONIBLES EN LAS FABRICAS 
				       							</p> -->
				       						</td>
				       					</tr>
				       				</tbody>
				       			</table>
				       		</div>

				       		<div class="col-sm-12" bis_skin_checked="1">
				       			<table class="table table-bordered invoiceItemeTable" style="border: 2px">
				       				<thead>
				       					<tr>
				       						<th>Sr. #</th>
											<th>Item Name</th>
											<th>Unit Price</th>
											<th>Quantity</th>
											<th>Amount</th>
											<th>Total Price</th>
				       					</tr>
				       				</thead>
				       				<tbody>
										<tr>
											<td class="text-center">1</td>
											<td class="text-center">PII</td>
											<td class="text-center"><?=$getRecord['unit_price']?></td>
											<td class="text-center"><?=$getRecord['quantity']?></td>
											<td class="text-center"><?=$getRecord['total_price']?></td>
											<td class="text-center"><?=$getRecord['total_price']?></td>
				       					</tr>
									</tbody>
								</table>
							</div>

							<div class="d-flex justify-content-end align-items-center">
								<table class="table w-25" style="font-weight: 600;">
									<tbody>	
											<tr class="totalCal">
												<td colspan="12"></td>
												<td> Sub Total</td>
												<td><span id="subtotal_sign">SAR </span><span id="sub_total"><?=$getRecord['total_price']?></span><input type="hidden" id="sub_total_hidden" value="" name="sub_total"></td>
											</tr>
											<tr class="totalCal">
												<td colspan="12"></td>
												<td>VAT(<?=$vat?>%)</td>
												<td>
													<span id="sub_total"><?= $vatamount?></span><input type="hidden" id="vat" value="" name="vat">
												</td>
											</tr>
											<tr class="totalCal">
												<td colspan="12"></td>
												<td>Commission(<?=$commission?>%)</td>
												<td>
													<span id="sub_total"><?= $commission_amount?></span><input type="hidden" id="vat" value="" name="vat">
												</td>
											</tr>
											
											<tr class="totalCal">
												<td colspan="12"></td>
												<td>Grand Total</td>
												<td>
													<span id="alltotal_sign">SAR</span>
													<span id="all_total"><?=$grandtotal?></span>
												</td>
											</tr>
									</tbody>
								</table>
							</div>
		        		</form>
	    			</div>
	    		</div>
	    	</div>
    	</div>
    </section>

    
</main>

<?php include'includes/footer.php'?>