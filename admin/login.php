<?php include'common/config.php';
  if($_SESSION['adminid']!=''){?>

  <script language='javascript'>window.location='index.php';</script>
  <?php 
  }
                  
if($_POST)
{
extract($_POST);

$checkLogin = $db->selectSRow(array("*"),PREFIX."users","email='$username' AND password='$password'");
// echo ($checkLogin['type']);
// die();
 if($checkLogin){       
  $userid = $checkLogin['id'];  

                        if($checkLogin['type']==0){
                        $_SESSION['adminid']=$userid;
                        header('location:index.php'); 
                         }
                         else{
                          $noAccess="You have no access to Login";
                         }
                      }
                      else
                      {
                          $msg ="Login failed";
                      }
                   }
               
                  ?>
<!DOCTYPE html>
<html lang="en">

 <head>
   <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EZ Pay</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


<link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-icon.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.ico">


  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">


</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body hideOnLogin">
                  <div class="d-flex justify-content-center pt-4">
                    <a href="index.php" class=" d-flex align-items-center w-50">
                      <img src="assets/img/EZ--logo.png" alt="" class="img-fluid">
                    </a>
                  </div>

                  <div class="pb-2">

                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                  </div>

                  <form method="post" class="row g-3 needs-validation"  >
                    
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <input type="text" name="username" class="form-control" id="yourUsername" required>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                          <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                       
                      </div>
                    </div>
                    <div class="col-12">
                      <button id="loginbtn" class="btn btn-primary loginBtn w-100"  type="submit" name="login"> Login</button>
                    </div>
                    <div class="col-12">
                      <!-- <p class="small mb-0">Already have an account? <a href="signup.php">Signup</a></p> -->
                    </div>
                    
                  </form>





                </div>
              
           <!--  <div class="card-body showOnLogin pt-5 pb-5">
               
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Select Event</h5>
                  </div>
                    <div class="col-12">
                      <a href="add-event.php" class="btn btn-primary loginBtn w-100 mt-3 mb-2" type="submit">Add a New Event</a>
                      <a href="edit-event.php" class="btn btn-primary loginBtn w-100" type="submit">Edit an New Event</a>
                    </div>
                </div>
              </div>

            </div>-->
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/js/jquery.min.js"></script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->

  
  <script src="assets/js/main.js"></script>
 <!-- <script type="text/javascript">
    $('document').ready(function(){
      $('.loginBtn').click(function(){
        $('.hideOnLogin').hide('medium');
        $('.showOnLogin').show('medium');
      });
    });
  </script>
  
  -->

</body>

</html>