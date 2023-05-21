<?php include'common/config.php';?>
<?php include'includes/head.php' ?>
<?php include'includes/header.php' ?>
<?php include'includes/sidebar.php' ?>
<?php $id=$_SESSION['adminid']; 
$getUser=$db->selectSRow(array("*"),PREFIX."users","id=$id");
if(isset($_POST['update_profile'])){
  extract($_POST);
  $arr=array("fname"=>$fname,"phone"=>$phone);
  $result=$db->updateCondition($arr,PREFIX."users","id='$id'");
?>
<script language="javascript">window.location='users_profile.php';
</script>
<?php 
}

if(isset($_POST['update_password'])){
  extract($_POST);
  $arr=array("password"=>$password);
  $result=$db->updateCondition($arr,PREFIX."users","id='$id'");
?>
<script language="javascript">window.location='users_profile.php';
</script>
<?php 
}

?>
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

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>


              </ul>

              <div class="tab-content pt-3">

                <div class="tab-pane fade show active profile-edit pt-2" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form  action="" method="post">
   
                  <!-- <input type="hidden" name="id" value=""> -->
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-2 col-lg-2 col-form-label">Name</label>
                      <div class="col-md-8 col-lg-5">
                        <input name="fname" type="text" class="form-control" id="fullName" value="<?=$getUser['fname'];?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="email" class="col-md-3 col-lg-2 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-5">
                        <input name="email" type="text" class="form-control" id="email" value="<?=$getUser['email'];?>" disabled>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="phoneno" class="col-md-3 col-lg-2 col-form-label">Phone Number</label>
                      <div class="col-md-8 col-lg-5">
                        <input name="phone" type="number" class="form-control" id="phoneno" value="<?=$getUser['phone'];?>">
                      </div>
                    </div>


                  

                    <div class="float-end">
                      <button type="submit" class="btn btn-primary" name="update_profile">Save Changes</button>
                    </div>
                  </form>

                  <!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-2" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="" method="post">
        
                  <!-- <input type="hidden" name="id" value=""> -->

                    <!-- <div class="row mb-3">
                      <label for="password" class="col-md-3 col-lg-2 col-form-label">Old Password</label>
                      <div class="col-md-6 col-lg-5">
                        <input name="password" type="password" class="form-control" id="password"><span class="password-span fa fa-eye " onclick="myFunction()"></span>
                      </div>
                    </div> -->

                    <div class="row mb-3">
                      <label for="password" class="col-md-3 col-lg-2 col-form-label">New Password</label>
                      <div class="col-md-6 col-lg-5">
                        <input name="password" type="password" class="form-control" id="password"><span class="password-span fa fa-eye " onclick="myFunction()"></span>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="confirm_password" class="col-md-3 col-lg-2 col-form-label">Confirm Password</label>
                      <div class="col-md-6 col-lg-5">
                        <input name="confirm_password" type="password" class="form-control" id="password_confirmation"><span class="password-span fa fa-eye " onclick="myFunctionb()"></span><span id='message'></span>
                        <span style="display:none" id="passworderror3" class="text-danger" >
Password do not matched 
    </span>
                        <span style="display:none" id="cpassworderror" class="text-danger" >
Password  is Required
    </span>
                      </div>
                    </div>

                    <div class="float-end">
                      <button class="btn btn-primary" id ="resetsumittButton" type="button" name="update_password">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

                <div class="tab-pane fade pt-2" id="profile-change-Passcode">
                  <form  action="" method="post">
                    <input type="hidden" name="id" value="">
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Current Password">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="email" class="col-md-4 col-lg-3 col-form-label">Current Passcode</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="password" class="form-control" id="exampleInputPassword1e" placeholder="Current Passcode">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="username" class="col-md-4 col-lg-3 col-form-label">New Passcode</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="password" class="form-control" id="exampleInputPassword1eg" placeholder="New Passcode">
                      </div>
                    </div>
                    <div class="float-end">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
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

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script>
         var velidate=1;
    
/////

$("#password_confirmation").on('keyup', function(){
            var cpass = $('#password_confirmation').val();
            var pass = $('#password').val();
            if( cpass ==""){
                $('#cpassworderror').show();
               

            }
            if( (pass != cpass) ){
              $('#passworderror3').show();
              $('#cpassworderror').hide();
         

            }
            
            else {   
                velidate=0;
              $('#cpassworderror').hide();
              $('#passworderror3').hide();

        }
if( cpass ==""){
           
                velidate=1;

            }
            if( (pass != cpass) ){
           
              velidate=1;

            }

console.log(velidate)

        if (velidate == 0){

$('#resetsumittButton').attr('type', 'submit');
$('#nameerrorcheck').hide();

        }
 
 

})
</script>