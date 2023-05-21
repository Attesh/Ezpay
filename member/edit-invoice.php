<?php include'includes/head.php' ?>
<?php include'includes/header.php' ?>
<?php include'includes/sidebar.php' ?>

<main id="main" class="main">

    <!-- <div class="pagetitle">
      <h1>Edit Item</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Edit Item</li>
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
														<label for="Quotation_customer_names">Customer Name</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_names" type="text">
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
													    <label for="exampleInput81">Address</label>
													    <input type="text" class="form-control" id="exampleInput81" aria-describedby="emailHelp">
													    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
													  </div>
				        				</div>
		        					</div>
		        					<div class="col-lg-12 mt-2">
				        					  <div class="form-group">
													    <label for="exampleInput1">Remarks</label>
													    <input type="text" class="form-control" id="exampleInput1" aria-describedby="emailHelp">
													    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
													  </div>
				        				</div>
		        			</div>

		        				<div class="col-lg-6">
		        					<h4 class="title mt-3">Invoice Detail</h4><hr>
		        					<div class="form-group">
										    <label for="exampleFormControlSelect1e">Company</label>
									  		<select class="form-select" aria-label="Default select example">
												  <option selected>select Company</option>
												  <option value="1">One</option>
												  <option value="2">Two</option>
												  <option value="3">Three</option>
												</select>
											</div>
										  <div class="row mt-2">
										  	<div class="col-md-4">
										  		<div class="form-group search-box">
														<label for="Quotation_customer_name">Invoice #</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_name" type="text">
													</div>	
										  	</div>

										  	<div class="col-md-4">
										  		<div class="form-group">
												    <label for="exampleInputEmail12">Date</label>
												    <input type="date" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp" placeholder="">
												    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
												  </div>
										  	</div>

										  	<div class="col-md-4">
										  		<div class="form-group">
												    <label for="exampleFormControlSelect21">Status</label>
											  		<select class="form-select" aria-label="Default select example">
														  <option selected>select Status</option>
														  <option value="1">One</option>
														  <option value="2">Two</option>
														</select>
													</div>
										  	</div>

											  </div> 

		        				</div>
	        				</div>


	        				<div class="row mt-4">
		        				<div class="col-lg-12">
		        					<h4 class="title mt-2">Item Detail</h4><hr>
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
														<label for="Quotation_customer_name">Cost prize</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_name" type="text">
													</div>	
										  	</div>

	        						<!-- <div class="col-md-1">
									  		<div class="form-group">
											    <label for="exampleFormControlSelect21">Name</label>
										  		<select class="form-select" aria-label="Default select example">
													  <option selected>select Vendor</option>
													  <option value="1">One</option>
													  <option value="2">Two</option>
													</select>
												</div>
									  	</div> -->

									  	<div class="col-md-2">
									  		<div class="form-group search-box">
													<label for="Quotation_customer_name1">Sale prize</label>															
													<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_name1" type="text">
												</div>	
									  	</div>
									  	<div class="col-md-2">
									  		<div class="form-group search-box">
													<label for="Quotation_customer_name1">List prize</label>															
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
	      
	        				<div class="col-lg-12 mt-4">
		        				<table id="server_data_table" class="table nowrap mb-0 text-center">
											<thead>
												<tr>
													<th>Sr. #</th>
													<th>Product Name</th>

													<th>Sale Prize</th>
													<th>Cost Prize</th>
													<th>List prize</th>
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
										<!-- 				<button class="btn" type="button">
															<i class="bi bi-pencil-fill"></i>
														</button> -->
														<button class="btn" type="button">
															<i class="bi bi-trash" style="color:red;"></i>
														</button></td>

												</tr>	

												 <tr>
													<td class="text-center">PZ</td>
													<td class="text-center">3</td>
													<td class="text-center">PI</td>
													<td class="text-center">Sis</td>
													<td class="text-center">XD</td>
													<td class="text-center">1</td>

													<td>
													<!-- 	<button class="btn" type="button">
															<i class="bi bi-pencil-fill"></i>
														</button> -->
														<button class="btn" type="button">
															<i class="bi bi-trash" style="color:red;"></i>
														</button></td>


												</tr> 
												<tr>
						
													<td class="text-center">XD</td>
													<td class="text-center">Sis</td>
													<td class="text-center">3</td>
													<td class="text-center">dff</td>
													<td class="text-center">10</td>
													<td class="text-center">PI</td>

													<td>
														<!-- <button class="btn" type="button">
															<i class="bi bi-pencil-fill"></i>
														</button> -->
														<button class="btn" type="button">
															<i class="bi bi-trash" style="color:red;"></i>
														</button></td>

												</tr>
											</tbody>
										</table>
								

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
							</div>
				

							
											<div class="col-lg-12">
			        					<div class="d-flex justify-content-end align-items-end">
			        						<a href="manage-items.php" class="btn btn-secondary me-2 backbtnn">Back</a>
					        				<button type="submit"  name="save" class="btn btn-primary">Update</button>
					        				<!-- <input type="submit" name="save" class="btn btn-primary m-1 buttnvieww" value="Save"> -->
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