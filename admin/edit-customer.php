<?php include'common/config.php' ?>
<?php include'includes/head.php' ?>
<?php include'includes/header.php' ?>
<?php include'includes/sidebar.php' ?>


<?php 

$id = base64_decode($_GET['id']);
	if (isset($_POST['update'])) {
	extract($_POST);
	$arr = array("isbn" => $isbn, "customer_name" => $customer_name, "phone" => $phone, "gender" => $gender, "email" => $email,"address" => $address);
		$result = $db->updateCondition($arr,PREFIX."customers","id=$id");
 		$_SESSION['message'] = "Customer Updated Successfully.";
		?>
<script language="javascript">
	window.location = 'manage-customer.php';
</script>
		<?php
	}
	?>
<?php $getRecord = $db->selectSRow(array("*"),PREFIX."customers","id=$id");?>

<div class="modal" id="addMatchPlayer" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Players</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <main id="main" class="main">
			    <section class="section addEvent">
			        <div class="row">
				        <div class="col-lg-12">
				        	<div class="card">
				        		<div class="card-body">
				        			<form action="#" method="post">
				        			<!-- <h3 class="title mt-2">Add Match</h3> -->
					        					<h4 class="title mt-3">Edit Customer</h4><hr>
					        					<div class="row">
							        				<div class="col-lg-4">
							        					<div class="form-group search-box">
																	<label for="Quotation_customer_n5">ISBN</label>
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
																	<label for="Quotation_customer_n6">Phone</label>															
																	<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="phone" value="<?php echo $getRecord['phone'];?>" id="Quotation_cust_n6" type="text">
																</div>
							        				</div>
							        			</div>

							        			<div class="row">
							        				<div class="col-lg-6 mt-2">
																<div class="form-group">
															    <label for="exampleFormControlSelect1">Gender</label>
																	<select class="form-control form-select" id="exampleFormControlSelect1">
															      <option>Select Gender</option>
															      <?php if ( $getRecord['gender'] == 'Male'){
															      ?>
															      <option selected>Male</option>
															      <option >Female</option>
															      <option >Others</option>
															    	<?php } elseif( $getRecord['gender'] == 'Female') { ?>
															      <option selected>Female</option>
															      <option >Male</option>
															      <option >Others</option>
																    <?php }  elseif( $getRecord['gender'] == 'Others') { ?>
															      <option selected>Others</option>
															      <option >Female</option>
															      <option >Male</option>
																    <?php } ?>
															    </select>
															  </div>
															</div>

															<div class="col-lg-6 mt-2">
							        					<div class="form-group search-box">
																	<label for="Quotation_customer_n4">Email</label>															
																	<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="email" value="<?php echo $getRecord['email'];?>" id="Quotation_cust_n4" type="tel">
																</div>
															</div>
							        			</div>

								        		<div class="row">
															<div class="col-lg-6 mt-2">
							        					<div class="form-group search-box">
																	<label for="Quotation_customer_n1">Address</label>
																	<textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="2"><?php echo $getRecord['address'];?></textarea>
																</div>
															</div>
								        		</div>
															<div class="col-lg-12 mt-3">
							        					<div class="d-flex justify-content-end align-items-end">
							        						<a href="manage-customer.php" class="btn btn-secondary me-2">Back</a>
									        				<button type="submit"  name="update" class="btn btn-primary">Updated</button>
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
      </div>
    </div>
  </div>
</div>


<?php include'includes/footer.php'?>

