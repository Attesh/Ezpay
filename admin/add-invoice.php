<?php include'includes/head.php' ?>
<?php include'includes/header.php' ?>
<?php include'includes/sidebar.php' ?>

<main id="main" class="main">

    <!-- <div class="pagetitle">
      <h1>Add Item</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Add Item</li>
        </ol>
      </nav>
    </div> -->

    <section class="section addEvent">
        <div class="row">
	        <div class="col-lg-12">
	        	<div class="card">
	        		<div class="card-body">
	        			<form action="#" method="post">
	        			<!-- <h3 class="title mt-2">Add Match</h3> -->
									<div class="row">

		        				<div class="col-lg-6">
		        					<h4 class="title mt-3">Customer Detail</h4><hr>

		        					<div class="row">
				        				<div class="col-lg-6">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_name">Customer Name</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_name" type="text">
													</div>		
											             
				        				</div>
				        				<div class="col-lg-6">
				        					  <div class="form-group">
													    <label for="exampleInputEmail1">Email address</label>
													    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
													    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
													  </div>
				        				</div>
		        					</div>
		        				

		        					<div class="row mt-2">
				        				<div class="col-lg-6">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_name">Phone number</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_name" type="tel">
													</div>		
											             
				        				</div>
				        				<div class="col-lg-6">
				        					  <div class="form-group">
													    <label for="exampleInputEmail1">Address</label>
													    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
													    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
													  </div>
				        				</div>
		        					</div>

		        					<div class="row mt-2">
		        						<div class="col-md-4">
											  	<div class="form-group">
													   <label for="exampleFormControlSelect21">Country</label>
												  	<select class="form-select" aria-label="Default select example">
															<option selected>Select Country</option>
															<option value="1">Argentina</option>
															<option value="2">France</option>
														</select>
													</div>
											  </div>

		        						<div class="col-md-4">
		        							<div class="form-group">
												    <label for="exampleInputd1">State</label>
												    <input type="text" class="form-control" id="exampleInputd1" aria-describedby="emailHelp">
												    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
												  </div>
		        						</div>

		        						<div class="col-md-4">
		        							<div class="form-group">
												    <label for="exampleInputo1">City</label>
												    <input type="text" class="form-control" id="exampleInputo1" aria-describedby="emailHelp">
												    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
												  </div>
		        						</div>
		        					</div>


		        					<div class="col-lg-12 mt-2">
				        					  <div class="form-group">
													    <label for="exampleInputEmail1">Remarks</label>
													    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
													    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
													  </div>
				        				</div>
		        			</div>

		        				<div class="col-lg-6">
		        					<h4 class="title mt-3">Invoice Detail</h4><hr>
		        					<div class="form-group">
										    <label for="exampleFormControlSelect1e">Company</label>
									  		<select class="form-select" aria-label="Default select example">
												  <option selected>Select Company</option>
												  <option value="1">Shaheen Book</option>
												  <option value="2">Jinnah Book</option>
												</select>
											</div>
											  <div class="row mt-2">
											  	<div class="col-md-4">
											  		<div class="form-group search-box">
															<label for="Quotation_customer_name">Invoice #</label>															
															<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_name" type="text">
														</div>	
											  	</div>

											  	<!-- <div class="col-md-3">
											  		<div class="form-group">
													    <label for="exampleFormControlSelect21">warranty</label>
												  		<select class="form-select" aria-label="Default select example">
															  <option selected>select menu</option>
															  <option value="1">One</option>
															  <option value="2">Two</option>
															  <option value="3">Three</option>
															</select>
														</div>
											  	</div> -->

											  	<div class="col-md-4">
											  		<div class="form-group">
													    <label for="exampleInputEmail12">Date</label>
													    <input type="date" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp" placeholder="">
													    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
													  </div>
											  	</div>
											  	
											  </div> 

		        				</div>
	        				</div>


	        				<div class="row mt-4">
		        				<div class="col-md-12">
		        					<h4 class="title mt-2">Order Detail</h4><hr>
	        						<div class="row">
	        							<div class="col-md-1">
										  		<div class="form-group search-box">
														<label for="Quotation_customer_name">ISBN</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_name" type="text">
													</div>	
										  	</div>

										  	<div class="col-md-3">
										  		<div class="form-group search-box">
														<label for="Quotation_customer_name">Product Name</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_name" type="text">
													</div>	
										  	</div>

										  	<div class="col-md-2">
										  		<div class="form-group search-box">
														<label for="Quotation_customer_name">Cost price</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_name" type="text">
													</div>	
										  	</div>

										  	<div class="col-md-2">
										  		<div class="form-group search-box">
														<label for="Quotation_customer_name1">Sale price</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_name1" type="text">
													</div>	
										  	</div>

										  	<div class="col-md-2">
										  		<div class="form-group search-box">
														<label for="Quotation_customer_name1">List price</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_name1" type="text">
													</div>	
										  	</div>
									 
										  	<div class="col-md-1">
										  		<div class="form-group search-box">
														<label for="Quotation_customer_name1">Total</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_name1" type="text">
													</div>	
										  	</div>

										  	<div class="col-md-1">
										  		<button type="button" style="margin-top: 29px;" class="btn btn-primary ps-2 pe-2">ADD</button>	
										  	</div>
		        					</div>
		        				</div>
		        			</div>

	        		<div class="row mt-4">
	        			<div class="col-md-12">
		        			<table id="server_data_table" class="table nowrap mt-3 mb-0 text-center">
										<thead>
											<tr>
												<th>Sr. #</th>
												<th>Product Name</th>

												<th>Sale Price</th>
												<th>Cost Price</th>
												<th>List price</th>
												<th>Total</th>
												<th>Action</th>

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
												<td>
													<button class="btn" type="button">
														<i class="bi bi-pencil-square"></i>
													</button>
													<button class="btn" type="button">
														<i class="bi bi-trash" style="color:red;"></i>
													</button>
												</td>
											</tr>	

											<tr>
												<td class="text-center">PZ</td>
												<td class="text-center">3</td>
												<td class="text-center">PI</td>
												<td class="text-center">Sis</td>
												<td class="text-center">XD</td>
												<td class="text-center">1</td>
												<td>
													<button class="btn" type="button">
															<i class="bi bi-pencil-square"></i>
													</button>
													<button class="btn" type="button">
														<i class="bi bi-trash" style="color:red;"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td class="text-center">XD</td>
												<td class="text-center">Sis</td>
												<td class="text-center">3</td>
												<td class="text-center">dff</td>
												<td class="text-center">10</td>
												<td class="text-center">PI</td>
												<td>
													<button class="btn" type="button">
															<i class="bi bi-pencil-square"></i>
													</button>
													<button class="btn" type="button">
														<i class="bi bi-trash" style="color:red;"></i>
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

										<div class="d-flex justify-content-end align-items-center">
											<table class="table w-25" style="font-weight: 600;">
												<tbody>	
														<tr class="totalCal">
															<td colspan="12"></td>
															<td> Total Price</td>
															<td><span id="subtotal_sign">$</span><span id="sub_total">0.01</span><input type="hidden" id="sub_total_hidden" value="" name="sub_total"></td>
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
															<td>Total Discount</td>
															<td>
																<span id="vatInpt">0.00</span>
																<input type="hidden" id="vat" value="16" name="sub_total">
															</td>
														</tr>
														
														<tr class="totalCal">
															<td colspan="12"></td>
															<td>Discounted Total</td>
															<td><span id="alltotal_sign">$</span><span id="all_total">0.01</span></td>
														</tr>
												</tbody>
											</table>
										</div>

										<div class="row">
											<div class="col-lg-12">
			        					<div class="d-flex justify-content-end align-items-end">
			        						<a href="manage-items.php" class="btn btn-secondary me-2 backbtnn">Complete Order</a>
					        				<button type="submit"  name="save" class="btn btn-primary">Complete to Ship</button>
					        				<!-- <input type="submit" name="save" class="btn btn-primary m-1 buttnvieww" value="Save"> -->
					        			</div>
				        			</div>
	        					</div>	

	        				</div>	
	        			</div>	
	        		</div>			
		        </form>
	    	</div>
    	</div>
    </section>
</main>

<?php include'includes/footer.php'?>