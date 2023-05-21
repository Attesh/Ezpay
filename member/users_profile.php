<?php include 'assets/common/config.php'; ?>


<?php 
if(isset($_POST['userdetails'])){

  // print_r('hii');
  // die();

  $ids = $_SESSION['userid'];
  extract($_POST);
			$arr = array("fname" => $name, "email" => $email, "company_name" => $company_name, "phone" => $phone);
	// 		print_r('hii');
  // die();
      $set_new = $db->updateCondition($arr,"users","id = '$ids' ");

}
if(isset($_POST['save_button'])){

  // print_r('hii');
  // die();

  $ids = $_SESSION['userid'];
  extract($_POST);
			$arr = array("password" => $password);
	// 		print_r('hii');
  // die();
      $set_new = $db->updateCondition($arr,"users","id = '$ids' ");
		

	

}
if(isset($_POST['bank_account'])){

  // print_r('hii');
  // die();

  $ids = $_SESSION['userid'];
  extract($_POST);
  $arr = array("user_id" => $ids,"account_no" => $account_no,"account_name" => $bank_holder_name);
	// 		print_r('hii');
  // die();
      $set_new = $db->insert($arr,"bank_details");
		
}
?>
<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php' ?>
  <main id="main" class="main">

    <div class="pagetitle"> 
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="#">Profile</a></li>
          <li class="breadcrumb-item">Users</li>
          <!-- <li class="breadcrumb-item ">Profile</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <!-- <div class="col-xl-4">
          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="" alt="Profile" class="rounded-circle">
              <h2>Kevin Anderson</h2>
              <h3>Web Designer</h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div> -->

        <div class="col-md-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <!-- <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li> -->

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <!-- <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li> -->

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-Passcode">Account Information</button>
                </li>

              </ul>
<?php 
  $ids = $_SESSION['userid'];

$checkLogin = $db->selectSRow(array("*"),PREFIX."users","id='$ids'");
$bank_info = $db->selectSRow(array("*"),PREFIX."bank_details","id='$ids'");
// print_r($user);
// die();

?>
              <div class="tab-content pt-3">

                <div class="tab-pane fade show active profile-edit pt-2" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form  action="" method="post">
   
                  <input type="hidden" name="id" value="">
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="name" type="text" class="form-control" id="fullName" value="<?php echo $checkLogin['fname']?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="text" class="form-control" id="email" value="<?php echo $checkLogin['email']?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="username" class="col-md-4 col-lg-3 col-form-label">Company Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="company_name" type="text" class="form-control" id="company_name" value="<?php echo $checkLogin['company_name']?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="username" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="phone" value="<?php echo $checkLogin['phone']?>">
                      </div>
                    </div> 

                    <!-- <div class="row mb-3">
                      <label for="username" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="username" type="text" class="form-control" id="username" value="">
                      </div>
                    </div> -->


                   <!--  <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Preferred Username</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="preferred_username" type="text" class="form-control" id="preferred_username" value="xyz">
                      </div>
                    </div> -->

                    <!-- <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                      </div>
                    </div> -->

                    
                    <!-- <div class="row mb-3">
                      <label for="company_address" class="col-md-4 col-lg-3 col-form-label">Company Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="company_address" type="text" class="form-control" id="company_address" value="Livedeal">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="company_tel" class="col-md-4 col-lg-3 col-form-label">Company Telephone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="company_tel" type="text" class="form-control" id="company_tel" value="Livedeal">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="abc@example.com">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company_type" class="col-md-4 col-lg-3 col-form-label">Company Type</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="company_type" type="text" class="form-control" id="company_type" value="country">
                      </div>
                    </div>


                    <div class="row mb-3">
                      <label for="website" class="col-md-4 col-lg-3 col-form-label">Website</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="website" type="text" class="form-control" id="website" value="https://website.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="A000 Abc Street, city,country">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="(000) 000-0000 ">
                      </div>
                    </div>
 -->
                   <!-- <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                      </div>
                    </div> -->

                    <div class="float-end">
                      <button type="submit" class="btn btn-primary" name="userdetails">Save Changes</button>
                    </div>
                  </form>

                  <!-- End Profile Edit Form -->

                </div>

                <!-- <div class="tab-pane fade pt-3" id="profile-settings">
                  <form>
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Information on new products and services
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="float-end">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div> -->
                <div class="tab-pane fade pt-2" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="" method="post">
        
                  <input type="hidden" name="id" value="">

                    <div class="row mb-3">
                      <label for="password" class="col-md-4 col-lg-3 col-form-label">Old Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="password"><span class="password-span fa fa-eye " onclick="myFunction()"></span>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="password" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="password"><span class="password-span fa fa-eye " onclick="myFunction()"></span>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="confirm_password" class="col-md-4 col-lg-3 col-form-label">Confirm Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="confirm_password" type="password" class="form-control" id="confirm_password"><span class="password-span fa fa-eye " onclick="myFunctionb()"></span><span id='message'></span>
                      </div>
                    </div>

                    <div class="float-end">
                      <button type="submit" class="btn btn-primary" name="save_button">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

                <div class="tab-pane fade pt-2" id="profile-change-Passcode">
                  <form  action="" method="post">
                    <input type="hidden" name="id" value="">
                    <!-- <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Account Holder Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" class="form-control" id="exampleInputPassword1" name="bank_holder_name" value="<?php echo $bank_info['account_name']?>" placeholder="">
                      </div>
                    </div> -->

                    <div class="row">

                      <div class="col-lg-4">
                         <div class="mb-2">
                            <label class="mb-1">Account Holder Name</label>
                            <input type="text" name="private_key" value="" class="form-control">
                         </div>
                      </div>

                      <div class="col-lg-4">
                         <div class="mb-2">
                            <label class="mb-1">Bank Name</label>
                            <input type="text" name="private_key" value="" class="form-control">
                         </div>
                      </div>

                      <div class="col-lg-4">
                         <div class="mb-2">
                            <label class="mb-1">ISBN</label>
                            <input type="text" name="private_key" value="" class="form-control">
                         </div>
                      </div>

                      <div class="col-lg-4">
                         <div class="mb-2">
                            <label class="mb-1">Account No</label>
                            <input type="text" name="private_key" value="" class="form-control">
                         </div>
                      </div>

                    </div>
                    <!-- <div class="row mb-3">
                      <label for="email" class="col-md-4 col-lg-3 col-form-label">Account No</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" class="form-control" name="account_no" id="exampleInputPassword1e"  value="<?php echo $bank_info['account_no']?>" placeholder="">
                      </div>
                    </div> -->

              
                    <div class="float-end">
                      <button type="submit" class="btn btn-primary" name="bank_account">Save Changes</button>
                    </div>
                  </form>


                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
<?php include'includes/footer.php' ?>

<script>
        function myFunction() {
          var x = document.getElementById("password");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        function myFunctionb() {
          var x = document.getElementById("confirm_password");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
    </script>
<script type="text/javascript">
  $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
</script>

