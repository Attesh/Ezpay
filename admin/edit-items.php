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
								
		        					<h4 class="title mt-3">Item info</h4><hr>

		        					<div class="row">
				        				<div class="col-lg-3">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_names">SKU</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_names" type="text">
													</div>		      
				        				</div>

				        				<div class="col-lg-6">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n6">Item Name</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_n6" type="text">
													</div>		      
				        				</div>

				        				<div class="col-lg-3">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n5">ISBN</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_n5" type="text">
													</div>		      
				        				</div>

				        			</div>

				        			<div class="row">
				        				<div class="col-lg-3 mt-2">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n4">Language</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_n4" type="tel">
													</div>
												</div>

												<div class="col-lg-3 mt-2">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n3">Publisher</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_n3" type="tel">
													</div>
												</div>

												<div class="col-lg-3 mt-2">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n1">Country</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_customer_n1" type="tel">
													</div>
												</div>

												<div class="col-lg-3 mt-2">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n2">Author</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="Quotation[cust_name]" id="Quotation_customer_n2" type="tel">
													</div>
												</div>	
											             
				        				
					        		</div>

					        		<div class="row">

					        			<div class="col-lg-3 mt-2">
			        					  <div class="form-group">
												    <label for="example4">Sale Prize</label>
												    <input type="text" class="form-control" id="example4" aria-describedby="emailHelp">
												    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
												  </div>
				        				</div>

			        					<div class="col-lg-3 mt-2">
			        					  <div class="form-group">
												    <label for="example3">List Prize</label>
												    <input type="text" class="form-control" id="example3" aria-describedby="emailHelp">
												    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
												  </div>
					        			</div>


					        			<div class="col-lg-3 mt-2">
			        					  <div class="form-group">
												    <label for="example2">Cost Origin</label>
												    <input type="text" class="form-control" id="example2" aria-describedby="emailHelp">
												    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
												  </div>
			        					</div>

			        					<div class="col-lg-3 mt-2">
			        					  <div class="form-group">
												    <label for="example1">Cost Prize</label>
												    <input type="text" class="form-control" id="example1" aria-describedby="emailHelp">
												    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
												  </div>
			        					</div>
			        				</div>

												<div class="col-lg-12 mt-3">
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