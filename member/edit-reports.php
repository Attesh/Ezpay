<?php include'common/config.php' ?>
<?php include'includes/head.php' ?>
<?php include'includes/header.php' ?>
<?php include'includes/sidebar.php' ?>


<main id="main" class="main">
	   <div class="pagetitle">
      <h1>Edit Report</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="manage-transaction.php">Reports</a></li>
          <li class="breadcrumb-item active">Edit Report</li>
        </ol>
      </nav>
   </div>

    <section class="section addEvent">
        <div class="row">
	        <div class="col-lg-12">
	        	<div class="card">
	        		<div class="card-body">
	        			<form action="#" method="post">
	        			<!-- <h3 class="title mt-2">Add Match</h3> -->
		        					<h4 class="card-title">Edit Report</h4>
		        					<div class="row">
				        				<div class="col-lg-4">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n5">Type</label>
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="isbn" value="<?php echo $getRecord['isbn'];?>" id="Quotation_cust_n5" type="text">
													</div>
				        				</div>
				        				<div class="col-lg-4">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n5">Transaction ID</label>
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="isbn" value="<?php echo $getRecord['isbn'];?>" id="Quotation_cust_n5" type="text">
													</div>
				        				</div>
				        				<div class="col-lg-4">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n6">Customer Name</label>														
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="customer_name" value="<?php echo $getRecord['customer_name'];?>" id="Quotation_cust_n6" type="text">
													</div>		      
				        				</div>
				        				<div class="col-lg-4">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n6">Account No</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="phone" value="<?php echo $getRecord['phone'];?>" id="Quotation_cust_n6" type="text">
													</div>
				        				</div>
				        		
				        				<div class="col-lg-4">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n6">CVV</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="phone" value="<?php echo $getRecord['phone'];?>" id="Quotation_cust_n6" type="text">
													</div>
				        				</div>

				        				<div class="col-lg-4">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n4">Balance</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="email" value="<?php echo $getRecord['email'];?>" id="Quotation_cust_n4" type="tel">
													</div>
												</div>

				        				<div class="col-lg-4">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n5">Type</label>
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="isbn" value="<?php echo $getRecord['isbn'];?>" id="Quotation_cust_n5" type="text">
													</div>
				        				</div>

				        				<div class="col-lg-8">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n1">Address</label>
														<input class="form-control" id="exampleFormControlTextarea1" name="address"><?php echo $getRecord['address'];?></input>
													</div>
												</div>
				        			</div>

												

												<div class="col-lg-12 mt-3">
				        					<div class="d-flex justify-content-end align-items-end">
				        						<a href="manage-transaction.php" class="btn btn-secondary me-2">Back</a>
						        				<button type="submit"  name="update" class="btn btn-primary">Update</button>
						        			</div>
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
