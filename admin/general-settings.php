<?php include 'common/config.php' ?>
<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php' ?>
<?php 
$getPayment=$db->selectSRow(array("*"),PREFIX."payment_gateway");
$gateway_id=$getPayment['id'];
$id = base64_decode($_REQUEST['id']);

if (isset($_POST['submit'])) {
		$filename=$_FILES["website_logo"]["name"];
		$tempname=$_FILES["website_logo"]["tmp_name"];
		$folder="uploads/".$filename;
		move_uploaded_file($tempname,$folder);

		$filename1=$_FILES["fav_icon"]["name"];
		$tempname1=$_FILES["fav_icon"]["tmp_name"];
		$folder1="uploads/".$filename1;
		move_uploaded_file($tempname1,$folder1);

		$filename2=$_FILES["footer_logo"]["name"];
		$tempname2=$_FILES["footer_logo"]["tmp_name"];
		$folder2="uploads/".$filename2;
		move_uploaded_file($tempname2,$folder2);
		extract($_POST);
	if($filename){
		$arr = array("company_name" => $company_name,"email" => $email,"phone"=>$phone,"location"=>$location,"vat"=>$vat,"pakage_price"=>$pakage_price,"monthly_price"=>$monthly_price,"yearly_price"=>$yearly_price,"pakage_name"=>$pakage_name,"ezpay_commission"=>$ezpay_commission,"website_logo"=>$filename);
		$abc=$db->updateCondition($arr,PREFIX."general_settings","id='$id'");
	}
	else if($filename1){
		
		$arr = array("company_name" => $company_name,"email" => $email,"phone"=>$phone,"location"=>$location,"vat"=>$vat,"pakage_price"=>$pakage_price,"monthly_price"=>$monthly_price,"yearly_price"=>$yearly_price,"pakage_name"=>$pakage_name,"ezpay_commission"=>$ezpay_commission,"fav_icon"=>$filename1);
		$abc=$db->updateCondition($arr,PREFIX."general_settings","id='$id'");
	}
	else if($filename2){
		$arr = array("company_name" => $company_name,"email" => $email,"phone"=>$phone,"location"=>$location,"vat"=>$vat,"pakage_price"=>$pakage_price,"monthly_price"=>$monthly_price,"yearly_price"=>$yearly_price,"pakage_name"=>$pakage_name,"ezpay_commission"=>$ezpay_commission,"footer_logo"=>$filename2);
		$abc=$db->updateCondition($arr,PREFIX."general_settings","id='$id'");
	}
	if($filename && $filename1){
		$arr = array("company_name" => $company_name,"email" => $email,"phone"=>$phone,"location"=>$location,"vat"=>$vat,"pakage_price"=>$pakage_price,"monthly_price"=>$monthly_price,"yearly_price"=>$yearly_price,"pakage_name"=>$pakage_name,"ezpay_commission"=>$ezpay_commission,"website_logo"=>$filename,"fav_icon"=>$filename1);
		$abc=$db->updateCondition($arr,PREFIX."general_settings","id='$id'");
	}
	if($filename && $filename2){
		$arr = array("company_name" => $company_name,"email" => $email,"phone"=>$phone,"location"=>$location,"vat"=>$vat,"pakage_price"=>$pakage_price,"monthly_price"=>$monthly_price,"yearly_price"=>$yearly_price,"pakage_name"=>$pakage_name,"ezpay_commission"=>$ezpay_commission,"website_logo"=>$filename,"footer_logo"=>$filename2);
		$abc=$db->updateCondition($arr,PREFIX."general_settings","id='$id'");
	}
	if($filename1 && $filename2){
		$arr = array("company_name" => $company_name,"email" => $email,"phone"=>$phone,"location"=>$location,"vat"=>$vat,"pakage_price"=>$pakage_price,"monthly_price"=>$monthly_price,"yearly_price"=>$yearly_price,"pakage_name"=>$pakage_name,"ezpay_commission"=>$ezpay_commission,"fav_icon"=>$filename1,"footer_logo"=>$filename2);
		$abc=$db->updateCondition($arr,PREFIX."general_settings","id='$id'");
	}
	if($filename && $filename1 && $filename2){
		$arr = array("company_name" => $company_name,"email" => $email,"phone"=>$phone,"location"=>$location,"vat"=>$vat,"pakage_price"=>$pakage_price,"monthly_price"=>$monthly_price,"yearly_price"=>$yearly_price,"pakage_name"=>$pakage_name,"ezpay_commission"=>$ezpay_commission,"website_logo"=>$filename,"fav_icon"=>$filename1,"footer_logo"=>$filename2);
		$abc=$db->updateCondition($arr,PREFIX."general_settings","id='$id'");
	}
	else{
		$arr = array("company_name" => $company_name,"email" => $email,"phone"=>$phone,"location"=>$location,"vat"=>$vat,"pakage_price"=>$pakage_price,"monthly_price"=>$monthly_price,"yearly_price"=>$yearly_price,"pakage_name"=>$pakage_name,"ezpay_commission"=>$ezpay_commission);
		$abc=$db->updateCondition($arr,PREFIX."general_settings","id='$id'");
	}
	
	

	$arr1=array("private_key"=>$private_key,"public_key"=>$public_key,"gateway_commission"=>$gateway_commission,"mayosar_private_key"=>$mayosar_private_key,"mayosar_public_key"=>$mayosar_public_key,"mayosar_commission"=>$mayosar_commission);
	$gateway=$db->updateCondition($arr1,PREFIX."payment_gateway","id='$gateway_id'");
	
	//  echo $db->sql;
	//  echo 'abc';
	
 	$_SESSION['message'] = "General settings has been updated.";

?>
<script language="javascript">window.location='general-settings.php?id=<?php echo $_REQUEST['id']; ?>';
</script>

<?php } ?>



<?php $getRecord = $db->selectSRow(array("*"),PREFIX."general_settings", "id=$id");
?>

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
        			
        			<form method="post" action="" enctype="multipart/form-data">
	        			<!-- <input type="hidden" name="_token" value="">
	        			<input type="hidden" name="id" value="1"> -->
								<h5 class="genralheading"><strong>Company Settings</strong></h5><hr>
	        			<div class="row">
	        				<div class="col-lg-6">
	        					<div class="mb-3">
	        						<label>Company Name</label>
	        						<input type="text" name="company_name" class="form-control" value="<?=$getRecord['company_name']?>">
	        					</div>
	        				</div>	        				
									<div class="col-lg-6">
	        					<div class="mb-3">
	        						<label>Email</label>
	        						<input type="email" name="email" value="<?=$getRecord['email']?>" class="form-control">
	        					</div>
	        				</div>

	        				<div class="col-lg-6">
	        					<div class="mb-3">
	        						<label>Phone</label>
	        						<input type="text" name="phone" value="<?=$getRecord['phone']?>" class="form-control">
	        					</div>
	        				</div>
	        				<div class="col-lg-6">
	        					<div class="mb-3">
	        						<label>Address</label>
	        						<input type="text" name="location" value="<?=$getRecord['location']?>" class="form-control">
	        					</div>
	        				</div>

	        				<!-- <div class="col-lg-4">
	        					<div class="mb-3">
	        						<label for="class">EZpay Commission%</label> 
											<input type="number" name="ezpay_commission" value="<?=$getRecord['ezpay_commission']?>" class="form-control">
	        					</div>
	        				</div>
	        				<div class="col-lg-4">
	        					<div class="mb-3">
	        						<label for="class">VAT%</label> 
											<input type="number" name="vat" value="<?=$getRecord['vat']?>" class="form-control">
	        					</div>
	        				</div> 

									<div class="col-lg-4">
	        					<div class="mb-3">
	        						<label for="class">Package Name</label> 
									<input type="text" name="pakage_name" value="<?=$getRecord['pakage_name']?>" class="form-control">
	        					</div>
	        				</div>
									<div class="col-lg-4">
	        					<div class="mb-3">
	        						<label for="class">Package Price</label> 
											<input type="number" name="pakage_price" value="<?=$getRecord['pakage_price']?>" class="form-control">
	        					</div>
	        				</div> -->

	        			</div>  
								<h5 class="genralheading"><strong>Website Settings</strong></h5><hr>
								<div class="row">
	        				<div class="col-lg-4">
	        					<div class="mb-3">
	        						<label for="class">Website Logo</label> 
											<input type="file" name="website_logo" class="form-control" accept="image/*" onchange="loadFile(event)"/>
	                    <?php echo "
	                   <img id='output' class='mt-3' src='uploads/".$getRecord['website_logo']."' height= '100' width= '150';/>"
	                    ;?>
	        					</div>
	        				</div>
	        				<div class="col-lg-4">
	        					<div class="mb-3">
	        						<label for="class">fav Icon</label> 
											<input type="file" name="fav_icon" class="form-control" accept="image/*" onchange="loadFile1(event)"/>
											<?php echo "
                      <img id='output1' class='mt-3' src='uploads/".$getRecord['fav_icon']."' height= '130' width= '150';/>"
                        ;?>
	        					</div>
	        				</div>
	        				<div class="col-lg-4">
	        					<div class="mb-3">
	        						<label for="class">Footer logo</label> 
											<input type="file" name="footer_logo"  class="form-control" accept="image/*" onchange="loadFile2(event)"/>
											<?php echo "
                      <img id='output2' class='mt-3' src='uploads/".$getRecord['footer_logo']."' height= '130' width= '150';/>"
                        ;?>
	        					</div>
	        				</div>		
	        			</div>

								<h5 class="genralheading"><strong>Payment Settings</strong></h5><hr>
	        			<div class="row">
	        				<!-- <div class="col-lg-4">
	        					<div class="mb-3">
	        						<label for="class">Package Name</label> 
											<input type="text" name="pakage_name" value="<?=$getRecord['pakage_name']?>" class="form-control">
	        					</div>
	        				</div> -->
	        				<div class="col-lg-4">
	        					<div class="mb-3">
	        						<label for="class">Monthly Price</label> 
											<input type="number" name="monthly_price" value="<?=$getRecord['monthly_price']?>" class="form-control">
	        					</div>
	        				</div>

									<div class="col-lg-4">
	        					<div class="mb-3">
	        						<label for="class">Yearly Price</label> 
											<input type="number" name="yearly_price" value="<?=$getRecord['yearly_price']?>" class="form-control">
	        					</div>
	        				</div>

	        				<div class="col-lg-4">
	        					<div class="mb-3">
	        						<label for="class">EZpay%</label> 
											<input type="number" name="ezpay_commission" value="<?=$getRecord['ezpay_commission']?>" class="form-control">
	        					</div>
	        				</div>

	        				<!-- <div class="col-lg-4">
	        					<div class="mb-3">
	        						<label>Commission %</label>
	        						<input type="number" name="gateway_commission" value="<?=$getPayment['gateway_commission']?>" class="form-control">
	        					</div>
	        				</div> -->

	        				<div class="col-lg-4">
	        					<div class="mb-3">
	        						<label for="class">VAT%</label> 
											<input type="number" name="vat" value="<?=$getRecord['vat']?>" class="form-control">
	        					</div>
	        				</div>

	        				<!-- <div class="col-lg-4">
	        					<div class="mb-3">
	        						<label>Public Key</label>
	        						<input type="text" name="public_key" class="form-control" value="<?=$getPayment['public_key']?>">
	        					</div>
	        				</div>	        				
									<div class="col-lg-4">
	        					<div class="mb-3">
	        						<label>Private Key</label>
	        						<input type="text" name="private_key" value="<?=$getPayment['private_key']?>" class="form-control">
	        					</div>
	        				</div> -->
	        			
		        		</div>

		        		<h5 class="genralheading"><strong>Gateway Setting</strong></h5><hr>
									<h6>Stripe</h6>
									<div class="row">
										<div class="col-lg-4">
			        				<div class="mb-3">
			        						<label>Public Key</label>
			        						<input type="text" name="public_key" class="form-control" value="<?=$getPayment['public_key']?>">
			        					</div>
			        			</div>	

										<div class="col-lg-4">
			        					<div class="mb-3">
			        						<label>Private Key</label>
			        						<input type="text" name="private_key" value="<?=$getPayment['private_key']?>" class="form-control">
			        					</div>
			        			</div>

			        			<div class="col-lg-4">
			        					<div class="mb-3">
			        						<label>Commission %</label>
			        						<input type="number" name="gateway_commission" value="<?=$getPayment['gateway_commission']?>" class="form-control">
			        					</div>
			        			</div>
									</div>

									<h6>Mayosar</h6>
									<div class="row">
										<div class="col-lg-4">
			        				<div class="mb-3">
			        						<label>Public Key</label>
			        						<input type="text" name="mayosar_public_key" class="form-control" value="<?=$getPayment['mayosar_public_key']?>">
			        					</div>
			        			</div>	

										<div class="col-lg-4">
		        					<div class="mb-3">
		        						<label>Private Key</label>
		        						<input type="text" name="mayosar_private_key" value="<?=$getPayment['mayosar_private_key']?>" class="form-control">
		        					</div>
			        			</div>

			        			<div class="col-lg-4">
		        					<div class="mb-3">
		        						<label>Commission %</label>
		        						<input type="number" name="mayosar_commission" value="<?=$getPayment['mayosar_commission']?>" class="form-control">
		        					</div>
			        			</div>

			        			<div class="col-lg-12">
		        					<div class="d-flex justify-content-end">
		        						<!-- <a href="#" class="btn btn-secondary m-1">Back</a> -->
				        				<button type="submit" name="submit" class="btn btn-primary m-1">Submit</button>
				        			</div>
			        			</div>

									</div>

		        	</form>

    				</div>
    			</div>
    		</div>
  		</div>
    </section>
</main>
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>

<script>
  var loadFile1 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output1 = document.getElementById('output1');
      output1.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>

<script>
  var loadFile2 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output2 = document.getElementById('output2');
      output2.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
<?php include'includes/footer.php'?>