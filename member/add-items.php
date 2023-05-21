<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php' ?>

<?php include 'assets/common/config.php' ;


?>
<?php
$country_list = array(
		"Afghanistan",
		"Albania",
		"Algeria",
		"Andorra",
		"Angola",
		"Antigua and Barbuda",
		"Argentina",
		"Armenia",
		"Australia",
		"Austria",
		"Azerbaijan",
		"Bahamas",
		"Bahrain",
		"Bangladesh",
		"Barbados",
		"Belarus",
		"Belgium",
		"Belize",
		"Benin",
		"Bhutan",
		"Bolivia",
		"Bosnia and Herzegovina",
		"Botswana",
		"Brazil",
		"Brunei",
		"Bulgaria",
		"Burkina Faso",
		"Burundi",
		"Cambodia",
		"Cameroon",
		"Canada",
		"Cape Verde",
		"Central African Republic",
		"Chad",
		"Chile",
		"China",
		"Colombi",
		"Comoros",
		"Congo (Brazzaville)",
		"Congo",
		"Costa Rica",
		"Cote d'Ivoire",
		"Croatia",
		"Cuba",
		"Cyprus",
		"Czech Republic",
		"Denmark",
		"Djibouti",
		"Dominica",
		"Dominican Republic",
		"East Timor (Timor Timur)",
		"Ecuador",
		"Egypt",
		"El Salvador",
		"Equatorial Guinea",
		"Eritrea",
		"Estonia",
		"Ethiopia",
		"Fiji",
		"Finland",
		"France",
		"Gabon",
		"Gambia, The",
		"Georgia",
		"Germany",
		"Ghana",
		"Greece",
		"Grenada",
		"Guatemala",
		"Guinea",
		"Guinea-Bissau",
		"Guyana",
		"Haiti",
		"Honduras",
		"Hungary",
		"Iceland",
		"India",
		"Indonesia",
		"Iran",
		"Iraq",
		"Ireland",
		"Israel",
		"Italy",
		"Jamaica",
		"Japan",
		"Jordan",
		"Kazakhstan",
		"Kenya",
		"Kiribati",
		"Korea, North",
		"Korea, South",
		"Kuwait",
		"Kyrgyzstan",
		"Laos",
		"Latvia",
		"Lebanon",
		"Lesotho",
		"Liberia",
		"Libya",
		"Liechtenstein",
		"Lithuania",
		"Luxembourg",
		"Macedonia",
		"Madagascar",
		"Malawi",
		"Malaysia",
		"Maldives",
		"Mali",
		"Malta",
		"Marshall Islands",
		"Mauritania",
		"Mauritius",
		"Mexico",
		"Micronesia",
		"Moldova",
		"Monaco",
		"Mongolia",
		"Morocco",
		"Mozambique",
		"Myanmar",
		"Namibia",
		"Nauru",
		"Nepal",
		"Netherlands",
		"New Zealand",
		"Nicaragua",
		"Niger",
		"Nigeria",
		"Norway",
		"Oman",
		"Pakistan",
		"Palau",
		"Panama",
		"Papua New Guinea",
		"Paraguay",
		"Peru",
		"Philippines",
		"Poland",
		"Portugal",
		"Qatar",
		"Romania",
		"Russia",
		"Rwanda",
		"Saint Kitts and Nevis",
		"Saint Lucia",
		"Saint Vincent",
		"Samoa",
		"San Marino",
		"Sao Tome and Principe",
		"Saudi Arabia",
		"Senegal",
		"Serbia and Montenegro",
		"Seychelles",
		"Sierra Leone",
		"Singapore",
		"Slovakia",
		"Slovenia",
		"Solomon Islands",
		"Somalia",
		"South Africa",
		"Spain",
		"Sri Lanka",
		"Sudan",
		"Suriname",
		"Swaziland",
		"Sweden",
		"Switzerland",
		"Syria",
		"Taiwan",
		"Tajikistan",
		"Tanzania",
		"Thailand",
		"Togo",
		"Tonga",
		"Trinidad and Tobago",
		"Tunisia",
		"Turkey",
		"Turkmenistan",
		"Tuvalu",
		"Uganda",
		"Ukraine",
		"United Arab Emirates",
		"United Kingdom",
		"United States",
		"Uruguay",
		"Uzbekistan",
		"Vanuatu",
		"Vatican City",
		"Venezuela",
		"Vietnam",
		"Yemen",
		"Zambia",
		"Zimbabwe"
	); 
	

	$user_id = $_SESSION['userid'];

	if ($_POST) {
		
			extract($_POST);
		
			$arr = array("sku" => $sku,"user_id" => $user_id, "item" => $item, "isbn" => $isbn, "lang" => $lang,"publisher" => $publisher,"country" => $country,"author" => $author,"sale_price" => $sale_price,"list_price" => $list_price, "cost_origin" => $cost_origin, "cost_price" => $cost_price);
			
			$result = $db->insert($arr, PREFIX. "items");	
		?>
	<script language="javascript">
	window.location = 'manage-items.php';
	</script>
	<?php
		
	 }
	?>
<main id="main" class="main">

		<div class="pagetitle">
      <h1>Add Item</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="manage-items.php">Item Management</a></li>
          <li class="breadcrumb-item active">Add Item</li>
        </ol>
      </nav>
   	</div>

    <section class="section addEvent">
        <div class="row">
	        <div class="col-lg-12">
	        	<div class="card">
	        		<div class="card-body">
	        			<form action="#" method="post">

		        					<h4 class="title mt-3">Add Item</h4><hr>

		        					<!-- <div class="row">
				        				<div class="col-lg-3">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_names">SKU</label>															
														<input required class="form-control" name="sku" id="Quotation_cust_names" type="text">
													</div>		      
				        				</div>
										

				        				


				        			</div> -->

				        			<!-- <div class="row">
				        				<div class="col-lg-3 mt-2">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n4">Language</label>															
														<input required class="form-control" name="lang" id="Quotation_cust_n4" type="tel">
													</div>
												</div>

												<div class="col-lg-3 mt-2">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n3">Publisher</label>															
														<input required class="form-control" name="publisher" id="Quotation_cust_n3" type="tel">
													</div>
												</div>

												<div class="col-lg-3 mt-2">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n1">Country</label>	
														
														<select class="form-select" name="country">
															<option value="" selected disabled>Select Country</option>
															<?php foreach($country_list as $country){?>}
															<option value="<?php echo $country;?>"><?php echo $country;?></option>
															<?php } ?>
														</select>
													</div>
												</div>

												<div class="col-lg-3 mt-2">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n2">Author</label>															
														<input size="60" maxlength="255" autocomplete="nope" class="form-control" name="author" id="Quotation_customer_n2" type="tel">
													</div>
												</div>	

											   <div class="col-lg-3 mt-2" style="display:none">
			        					  <div class="form-group">
												    <label for="example2">Cost Origin</label>
												    <input type="text" class="form-control" id="example2" aria-describedby="emailHelp" name="cost_origin">
												    <small id="emailHelp" class="form-text text-muted"></small> 
												  </div>
			        					</div>

			        					<div class="col-lg-3 mt-2" style="display:none">
			        					  <div class="form-group">
												    <label for="example1">Cost Price</label>
												    <input type="text" class="form-control" id="example1" aria-describedby="emailHelp" name="cost_price">
												    <small id="emailHelp" class="form-text text-muted"></small>
												  </div>
			        					</div>
				        				
					        		</div> -->

					        		<div class="row">

					        			<div class="col-lg-6">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n6">Item Name</label>															
														<input required class="form-control" name="item" id="Quotation_cust_n6" type="text">
													</div>		      
				        				</div>

										<div class="col-lg-3">
				        					<div class="form-group search-box">
														<label for="Quotation_customer_n5">Item Code</label>															
														<input required class="form-control" name="isbn" id="Quotation_cust_n5" type="text">
													</div>		      
				        				</div> 
					        			<!-- <div class="col-lg-3">
			        					  <div class="form-group">
												    <label for="example4">Quatity</label>
												    <input type="text" class="form-control" id="example4" aria-describedby="emailHelp" name="sale_price">
												     <small id="emailHelp" class="form-text text-muted"></small> 
												  </div>
				        				</div> -->

			        					<div class="col-lg-3">
			        					  <div class="form-group">
												    <label for="example3">Price</label>
												    <input type="text" class="form-control" id="example3" aria-describedby="emailHelp" name="list_price">
												    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
												  </div>
					        			</div>

			        				</div>

									
									

												<div class="col-lg-12 mt-3">
				        					<div class="d-flex justify-content-end align-items-end">
				        						<a href="manage-items.php" class="btn btn-secondary me-2">Back</a>
						        				<button type="submit"  name="save" class="btn btn-primary">Save</button>
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

<?php include  'includes/footer.php'?>
