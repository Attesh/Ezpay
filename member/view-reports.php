<?php include'includes/head.php' ?>
<?php include'includes/header.php' ?>
<?php include'includes/sidebar.php' ?>

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
      <h1>View Report</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="manage-invioces.php">Reports</a></li>
          <li class="breadcrumb-item active">View Report</li>
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
	        					<!-- <h3>Report</h3> -->
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
					       		</div>
					       	</div>

				       		<div class="col-sm-6" bis_skin_checked="1">
				       			<table class="table table-bordered ">
				       				<tbody>
				       					<tr>
				       						<!-- <td>Attention</td> -->
				       						<td>
				       							<p>
												   Name: test	</p>
				       							<p>
				       								Email: test@gmail.com </p>
				       							<p>
				       								Phone: 92335466 </p>
				       							<p>
												   Address: gsytty	</p>
				       							
				       						</td>
				       					</tr>
				       				</tbody>
				       			</table>
				       		</div>

				       		<div class="col-sm-12" bis_skin_checked="1">
				       			<table class="table table-bordered invoiceItemeTable" style="border: 2px">
				       				<thead>
				       					<tr>
											<th>Item Name</th>
				       						<th>Customer Name</th>
											<th>Order No.</th>
											<th>Price</th>
											<th>Quantity</th>
											<th>Total</th>
				       					</tr>
				       				</thead>
				       				<tbody>
										<tr>
											<td class="text-center">PZ</td>
											<td class="text-center">PI</td>
											<td class="text-center">XD</td>
											<td class="text-center">Sis</td>
											<td class="text-center">dff</td>
											<td class="text-center">10</td>
				       					</tr>
									</tbody>
								</table>
							</div>

							<div class="d-flex justify-content-end align-items-center">
								<table class="table w-auto" style="font-weight: 600;">
									<tbody>	
										<tr class="totalCal">
											<td colspan="12"></td>
											<td> Due Payment</td>
											<td><span id="subtotal_sign">SAR &nbsp;</span><span id="sub_total">0.01</span><input type="hidden" id="sub_total_hidden" value="" name="sub_total"></td>
										</tr>
										<!-- <tr class="totalCal">
											<td colspan="12"></td>
											<td>Dis%</td>
											<td>
												<input oninput="order_discount()" type="number" id="discPerc" name="discPerc" class="form-control apply_discount">
											</td>
										</tr> -->
										<tr class="totalCal">
											<td colspan="12"></td>
											<td>Pending Payment</td>
											<td>
												<span id="vatInpt">0.00</span>
												<input type="hidden" id="vat" value="16" name="sub_total">
											</td>
										</tr>
										<tr class="totalCal">
											<td colspan="12"></td>
											<td>Total Income</td>
											<td>
												<span id="vatInpt">0.00</span>
												<input type="hidden" id="vat" value="16" name="sub_total">
											</td>
										</tr>
										
										<tr class="totalCal">
											<td colspan="12"></td>
											<td>Total Amount</td>
											<td><span id="alltotal_sign">SAR &nbsp;</span><span id="all_total">0.01</span></td>
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