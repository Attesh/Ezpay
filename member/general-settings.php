<?php include'common/config.php' ?>
<?php include'includes/head.php' ?>
<?php include'includes/header.php' ?>
<?php include'includes/sidebar.php' ?>



<main id="main" class="main">

    <div class="pagetitle">
      <h1>General Setting</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">General Setting</li>
        </ol>
      </nav>
    </div>

    <section class="section addEvent">
      <div class="row">
        <div class="col-lg-12">
        	<div class="card">
        		<div class="card-body">
        			<h4 class="card-title">Edit Member</h4><hr>
        			<form method="post" action="" enctype="">
	        			<input type="hidden" name="_token" value="">
	        			<input type="hidden" name="id" value="1">

	        			<div class="row">
	        					        				<div class="col-lg-4">
	        					<div class="mb-3">
	        						<label for="class">Package Price</label> 
											<input type="text" name="package_price" value="25" class="form-control">
	        					</div>
	        				</div>

	        				<div class="col-lg-4">
	        					<div class="mb-3">
	        						<label for="class">Duration (days)</label> 
											<input type="number" name="duration" value="1" class="form-control">
	        					</div>
	        				</div>

	        				<div class="col-lg-4">
	        					<div class="mb-3">
	        						<label for="class">Tax%</label> 
											<input type="number" name="tax" value="15" class="form-control">
	        					</div>
	        				</div>

	        				<div class="col-lg-4">
	        					<div class="mb-3">
	        						<label>Email</label>
	        						<input type="text" name="email" value="manager@livedeal.co" class="form-control">
	        					</div>
	        				</div>

	        				<div class="col-lg-4">
	        					<div class="mb-3">
	        						<label>Phone</label>
	        						<input type="text" name="phone" value="+41 0441 413 8830" class="form-control">
	        					</div>
	        				</div>
	        			</div>  
	        			

	        			<div class="row">
	        				<div class="col-lg-6">
	        					<div class="mb-3">
	        						<label>Location</label>
	        						<input type="text" name="location" value="Livedeal Ltd 85 Great Portland Street London W1w 7lt United Kingdom" class="form-control">
	        					</div>
	        				</div>
	        				<div class="col-lg-6">
	        					<div class="mb-3">
	        						<label for="class">Video</label> 
	        						<input type="hidden" value="1757288854382775.mp4" name="old_video">
											<input type="file" name="video" class="form-control">
											<iframe src="https://fisdemoprojects.com/livedeal/public/Backend/images/1757288854382775.mp4"></iframe>
	        					</div>
	        			</div>


	        				

	        			</div>

	        		
	        			<div class="col-lg-12">
	        					<div class="d-flex justify-content-end">
	        						<!-- <a href="#" class="btn btn-secondary m-1">Back</a> -->
			        				<button type="submit" class="btn btn-primary m-1">Submit</button>
			        			</div>
		        			</div>
		        		</form>

    				</div>
    			</div>
    		</div>
  		</div>
    </section>
</main>

<?php include'includes/footer.php'?>