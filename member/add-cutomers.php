<?php include 'assets/common/config.php'?>
<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php' ?>
<?php 
if ($_POST) {
		
		extract($_POST);
		$arr = array("user_id" => $member_id, "company_name" => $company_name, "customer_name" => $customer_name, "registration_number" => $isbn, "email" => $email,"phone" => $phone);
		
		$result = $db->insert($arr, PREFIX. "customers");	
	?>
<script language="javascript">
window.location = 'manage-cutomers.php';
</script>
<?php
	
 }
?>
<main id="main" class="main">
	   <div class="pagetitle">
      <h1>Add Customer</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="manage-transaction.php">Customers</a></li>
          <li class="breadcrumb-item active">Add Customer</li>
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
		        					<h4 class="card-title">Add Customer</h4>
		        					<div class="row">
<?php $user_id = $_SESSION['userid']; ?>
				        				<div class="col-lg-6">
				        					<div class="form-group search-box mb-2">
														<label for="Quotation_customer_n6">Name</label>	
														<input  class="form-control" name="member_id" value="<?php echo $user_id;?>" id="Quotation_cust_n6" type="text" hidden>

														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="customer_name" value="<?php echo $getRecord['customer_name'];?>" id="Quotation_cust_n6" type="text">
													</div>		      
				        				</div>

				        				<div class="col-lg-6">
				        					<div class="form-group search-box mb-2">
														<label for="Quotation_customer_n5">Registration No.</label>
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="isbn" value="<?php echo $getRecord['isbn'];?>" id="Quotation_cust_n5" type="text">
													</div>
				        				</div>

				        				<div class="col-lg-6">
				        					<div class="form-group search-box mb-2">
														<label for="Quotation_customer_n6">Company Name</label>														
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="company_name" value="<?php echo $getRecord['customer_name'];?>" id="Quotation_cust_n6" type="text">
													</div>		      
				        				</div>

				        				

				        				<div class="col-lg-6">
				        					<div class="form-group search-box mb-2">
														<label for="Quotation_customer_n6">Email</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="email" value="<?php echo $getRecord['phone'];?>" id="Quotation_cust_n6" type="text">
													</div>
				        				</div>

				        				<div class="col-lg-6">
				        					<div class="form-group search-box mb-2">
														<label for="Quotation_customer_n6">Phone</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="phone" value="<?php echo $getRecord['phone'];?>" id="Quotation_cust_n6" type="text">
													</div>
				        				</div>
				        		

				        				<!-- <div class="col-lg-6">
				        					<div class="form-group search-box mb-2">
														<label for="Quotation_customer_n1">No. of Invoices</label>
														<input class="form-control" id="exampleFormControlTextarea1" name="address"><?php echo $getRecord['address'];?></input>
													</div>
												</div> -->
				        			</div>

												

												<div class="col-lg-12 mt-3">
				        					<div class="d-flex justify-content-end align-items-end">
				        						<a href="manage-cutomers.php" class="btn btn-secondary me-2">Back</a>
						        				<button type="submit"  name="update" class="btn btn-primary">Submit</button>
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

<?php include 'includes/footer.php'?>
