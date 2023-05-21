

<?php include 'assets/common/config.php';
// // Include the file
// require 'Token.php';

// // Define a key
// const KEY = 'thisisademokey';

// // Generate token
// $token = Token::Sign(['id' => 'demoid'], KEY, 1*5);

// echo $token;
// // Vefity token
// $payload = Token::Verify($token, KEY);

if(!isset($_COOKIE["tokenCookie"])) {
  header('Location: https://fisdemoprojects.com/ezpay');
} 
session_start();

if(!isset($_SESSION['userid'])){
  header('Location: https://fisdemoprojects.com/ezpay');

   
    exit;
} 
?>



<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/BG.png" alt="">
        <!-- <span class="d-none d-lg-block">KITAB HOUSE</span> -->
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> -->


    <nav class="header-nav ms-auto d-flex justify-content-between">

      <div class="my-auto">
         <a class="nav-link createadds" href="create_billing.php">
          <!-- <i class="bi bi-menu-button-wide"></i> -->
          <span>Create Invoice</span>
        </a>
      </div>

      <div class="my-auto">
        <a class="nav-link createadds" href="add-items.php">
          <!-- <i class="bi bi-menu-button-wide"></i> -->
          <span>Create Item</span>
         
        </a>
      </div>


      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

   

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2 profpicname">Ahmed</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header profpicname">
              <h6 class="profpicnames">Ahmed</h6>
              <!-- <span>Web Designer</span> -->
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="student_profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
          <li>
              <hr class="dropdown-divider">
            </li> -->

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users_profile.php">
                <i class="bi bi-question-circle"></i>
                <span>My Profile </span>
              </a>
            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php" >
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
      
     
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <?php 
//   } }


  
//   else if ($payload == false){
// // echo "hello";
// header('Location: login.php');
//   }
  ?>