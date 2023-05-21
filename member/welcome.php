<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php' ?>
<?php include 'assets/common/config.php' ?>

<style type="text/css">

.welcome .heading {
	font-weight: 600;
   font-size: 28px;
}

.welcome .section-title {
	padding-bottom: 10px;
}

.welcome .section-title p {
   color: #4689ac;

}

.welcome .backdiv .back{
	width: 18%;
   padding: 9px 25px;
   font-weight: 600;
   font-size: 19px;
   border-radius: 50px;
   background: #ffb92c;
   border: 2px solid #ffb92c;
   color: black;
 }

.welcome .section-title {
   padding-bottom: 40px;
}

.welcome .section-title h2 {
  font-size: 14px;
  font-weight: 500;
  padding: 0;
  line-height: 1px;
  margin: 0 0 5px 0;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: #aaaaaa;
  font-family: "Poppins", sans-serif;
}

.welcome .section-title h2::after {
  content: "";
  width: 120px;
  height: 1px;
  display: inline-block;
  background: #ffb92c;
  margin: 4px 10px;
}

.welcome .section-title p {
  margin: 0;
  margin: 0;
  font-size: 36px;
  font-weight: 700;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
  color: #2a2c39;
}

</style>
<main id="main" class="main">
   <section class="section manageusers">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                 <div class="welcome">
                <!--     <div class="section-title text-center" data-aos="zoom-out">
				          	<p>Thank You !</p>
				        	</div> -->
							<div class="row d-flex justify-content-center" data-aos="zoom-in">
								<div class="col-md-8">
									<div class="text-center">
										<img src="assets/img/review.png" style="width: 140px;" class="img-fluid">
										<h1 class="text-center heading pt-2 p-3">Thank you for the Subscription. you can now authorized to access the portal.</h1>
									</div>
								</div>
								<div class="backdiv d-flex justify-content-center" data-aos="zoom-out">
									<a class="btn btn-primary back" href="index.php">Proceed</a>
								</div>
							</div>
						</div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>


<?php include'includes/footer.php' ?>