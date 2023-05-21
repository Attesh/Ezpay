<?php include'common/config.php' ?>
<?php include'includes/head.php' ?>
<?php include'includes/header.php' ?>
<?php include'includes/sidebar.php' ?>

<main id="main" class="main">
	<div class="pagetitle">
      	<h1>Members</h1>
      	<nav>
        	<ol class="breadcrumb">
            	<li class="breadcrumb-item "><a href="manage-member.php">Members</a></li>
            	<li class="breadcrumb-item active">Add Member</li>
         	</ol>
      	</nav>
   	</div>
    <section class="section addEvent">
        <div class="row">
	        <div class="col-lg-12">
	        	<div class="card">
	        		<div class="card-body">
	        			<!-- <h3 class="title mt-2">Add Match</h3> -->
					<h4 class="card-title">Add Member</h4>
					<hr>
								

		        					<div class="row">
				        				<!-- <div class="col-lg-4">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n5">ISBN</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="isbn" placeholder="Please Enter Your ISBN Here!..." id="Quotation_cust_n5" type="text">
													</div>		      
				        				</div> -->
				        				<div class="col-lg-4 mb-2">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n6">Company Name</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="company_name" placeholder="Enter Name" id="Quotation_cust_n2" type="text">
											</div>		      
				        				</div>
				        				<div class="col-lg-4">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n6">Registration Number</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="registration_number" placeholder="Enter Registration Number" id="Quotation_cust_n1" type="text">
											</div>	      
				        				</div>
				        				<div class="col-lg-4">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n6">Contact Person</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="customer_name" placeholder="Enter Name" id="Quotation_cust_n3" type="text">
											</div>		      
				        				</div>
				        				<div class="col-lg-4">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n6">Phone</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="phone" placeholder="Enter Phone Number" id="Quotation_cust_n6" type="text">
													</div>		      
				        				</div>

										<div class="col-lg-4">
				        					<div class="form-group search-box">
												<label for="Quotation_customer_n4">Email</label>															
												<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="email" placeholder="Please Enter Email Here!..." id="Quotation_cust_n4" type="tel">
											</div>
										</div>
				        			</div>

					        		<div class="row">
												<div class="col-lg-8 mt-2">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n1">Address</label>															
														<textarea class="form-control" name="address" placeholder="Please Enter Address Here!..." id="exampleFormControlTextarea1" rows="2"></textarea>
													</div>
												</div>
					        		</div>
									<div class="col-lg-12 mt-3">
			        					<div class="d-flex justify-content-end align-items-end">
			        						<a href="manage-member.php" class="btn btn-secondary me-2">Back</a>
					        				<button type="button" id="submit"  name="save" class="btn btn-primary">Save</button>
					        				<!-- <input type="submit" name="save" class="btn btn-primary m-1 buttnvieww" value="Save"> -->
					        			</div>
				        			</div>

	        				</div>
	        			</div>	
	        		</div>	
	    	</div>
    	</div>
    </section>
</main>


<!--Ajax for Data Insert-->
<script>
$(document).ready(function(){
$('#submit').on('click', function() {
	// var isbn = $('#Quotation_cust_n5').val();
	var company_name = $('#Quotation_cust_n2').val();
	var customer_name = $('#Quotation_cust_n3').val();
	var registration_number = $('#Quotation_cust_n1').val();
	var phone = $('#Quotation_cust_n6').val();
	// var gender = $('#exampleFormControlSelect1').val();
	var email = $('#Quotation_cust_n4').val();
	var address = $('#exampleFormControlTextarea1').val();  
	$.ajax({
                url:"ajax.php",
                method:"post",
                dataType:'json',
                data:{'registration_number':registration_number,'company_name':company_name,'customer_name':customer_name,'phone':phone, 'email':email,'address':address,'call':'Add'},
                success:function(data){
                    
                	if(data.status==1){
                			
	               window.location = 'manage-member.php';
                	}
                }
    })
});
});
</script>

<?php include'includes/footer.php'?>
