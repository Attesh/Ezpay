<?php include'includes/head.php' ?>
<?php include'includes/header.php' ?>
<?php include'includes/sidebar.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"
        integrity="sha256-c9vxcXyAG4paArQG3xk6DjyW/9aHxai2ef9RpMWO44A=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
/*biord*/
	  #header {
                display: none !important;
            }

            .iframe-high {
                height: 500px !important;
            }

            #footer {
                display: none !important;
            }

            .deznav {
                display: none !important;
            }

            .content-body {
                margin-left: 10px;
                font-size: 20pt !important;
            }

            h4 {
                font-size: 20pt !important;
            }

            @page {
                size: A4;
            }

            .btn {
                display: none !important;
            }

            li {
                display: none !important;
            }

            .footer {
                display: none !important;
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
		        					<div class="col-sm-8" bis_skin_checked="1">
			       						<div class="topContent" bis_skin_checked="1">
			       							<img class="img-fluid" src="assets/img/BG.png">
			       							<p>KITAB HOUSE</p>
			       							<p>Calle 3 Liebre No. 20 SM 20 M.7. Lote 18</p>
			       							<p>Cancún 3, Q. Roo, México C.P. 77500</p>
			       							<p>Tel:	+52 (998) 887 6552</p>
			       						</div>
			       					</div>
		        					
		        					<div class="col-sm-4" bis_skin_checked="1">
		        						<div class="d-flex justify-content-end mb-4">
											<button class="btn btn-primary btn-sm me-2 ps-3 pe-3" onclick="window.print();">Print</button>
											<a class="btn btn-primary btn-sm me-2 ps-3 pe-3" href="edit-items.php">Edit</a>
				        				</div>

						       			<table class="table table-bordered invoiceTable">
						       				<tbody>
						       					<tr>
						       						<td>Invoice No</td>
						       						<input id="invoice_number" type="hidden" value="1670936890">
						       						<td id="invoice_num">1670936890</td>
						       					</tr>
						       					<tr>
						       						<td>Date</td>
						       						<td>13-12-2022</td>
						       					</tr>
						       				
						       				</tbody>
						       			</table>
						       		</div>

						       	</div>

						       		<!-- div class="col-sm-12" bis_skin_checked="1">
						       			<table class="table table-bordered invoiceItemeTable" style="border: 2px">
						       				<thead>
						       					<tr>
						       						<th>Sr. #</th>
													<th>Item Name</th>
													<th>Category</th>
													<th>Quantity</th>
													<th>Sale price</th>
													<th>List price</th>
													<th>Description</th>
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
													<td class="text-center">1klek0</td>
						       					</tr>
											</tbody>
										</table>
									</div> -->

									<table class="table mt-3">
									    <thead>
									        <tr>
									          <th colspan="4" class="text-center table-active">Item Detail</th>
									        </tr>
									    </thead>
									    <tbody>
									        <tr>
									          <th class="font14">SKU</th>
									          <td>23</td>
									          <th class="font14">Item Name</th>
									          <td>book</td>
									        </tr>
									        <tr>
									          <th class="font14" >ISBN</th>
									          <td>23453</td>
									          <th class="font14">Language </th>
									          <td>punjabi</td>
									        </tr>
									        <tr>
									          <th class="font14">Publisher</th>
									          <td>reatme</td>
									          <th class="font14">Country</th>
									          <td>ningimage</td>
									        </tr>
									        <tr>
									          <th class="font14">Author</th>
									          <td>reatme</td>
									          <th class="font14">Sale Prize</th>
									          <td>ningimage</td>
									        </tr>
									        <tr>
									          <th class="font14">List Prize</th>
									          <td>reatme</td>
									          <th class="font14">Cost Origin</th>
									          <td>ningimage</td>
									        </tr>
 											<tr>
									          <th class="font14">Cost prize</th>
									          <td>ningimage</td>
									          <th class="font14"></th>
									          <td></td>
									        </tr>
									    </tbody>
									</table>

		        		</form>
	    	</div>
	    	</div>
	    	</div>
    	</div>
    </section>
</main>

<?php include'includes/footer.php'?>