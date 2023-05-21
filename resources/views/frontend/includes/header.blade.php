<style type="text/css">

  #topbar {
    background: #94ceec;
    color: black;
    height: 50px;
    font-weight: 500;
    z-index: 996;
    transition: all 0.5s;
}

.loginbtn:hover {
    border: 2px solid white;
    background: white;
    color: black;
}

.loginbtn {
    font-family: "Raleway", sans-serif;
    font-weight: 600;
    font-size: 14px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 5px 20px;
    border-radius: 50px;
    transition: 0.5s;
    margin: 10px;
    border: 2px solid #ffb92c;
    background: #ffb92c;   
    color: black;
    cursor: pointer;
}
.registerbtn:hover {
    background: linear-gradient(to right, #94ceeca8, #ffb92cb5);
/*    border: 1px solid #fff1d5;*/
}
.registerbtn {
    font-family: "Raleway", sans-serif;
    letter-spacing: 1px;
    border-radius: 50px;
    border: 1px solid #6dcdff;
    text-decoration: none !important;
    transition: 0.5s !important;
}

</style>
<body>

    <!-- ======= Top Bar ======= -->
  <div class="row">
    <div class="col-md-12">
      <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-center justify-content-lg-end">
            <!-- <a class="btn-primary loginbtn" href="{{url('/login')}}">Member Login</a> -->
            <a class="btn-primary loginbtn" data-bs-toggle="modal" data-bs-target="#signin-modal">Member Login</a>
         <!--  <div class="align-items-center d-none d-lg-flex questions">
            Have any question?
          </div>
          <div class="align-items-center d-none d-lg-flex">
            <a class="text-light" href="tel:0161 413 8330"><i class="bi bi-phone"></i>+0161 413 8330</a>
          </div>
          <div class="align-items-center d-none d-lg-flex">
            <a class="text-light" href="mailto:manager@BIORD.co.uk"><i class="bi bi-envelope"></i>info@VolMan.co.uk</a>
          </div>
          <div class="followus">
            Follow Us:
            <i class="bi bi-facebook"></i>
            <i class="bi bi-instagram"></i>
            <i class="bi bi-twitter"></i>
            <i class="bx bxl-skype"></i>
            <i class="bi bi-linkedin"></i>
          </div> -->

        </div>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <h1><a href="index.html">Selecao</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
          <?php $GeneralSettings=DB::table('general_settings')->first(); ?>
         <!-- <a href="{{url('/')}}"><img src="{{asset('Frontend/img/'.$GeneralSettings->logo)}}" alt="" class="img-fluid"></a> -->
         <a href="{{url('/')}}"><img src="{{asset('Frontend/img/EZogo.png')}}" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services1">Features</a></li>
          <!-- <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#faq">Faqs</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <!-- <li><a class="nav-link" href="payment.php" target="_blank">Payment</a></li> -->
          <a class="btn-primary registerbtn" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#registermodal">Request To Register</a>
          
          <!-- <li><a class="nav-link" href="signup.php">Sign Up</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- Register Modal -->
<div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="registermodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="d-flex justify-content-end align-items-center">
        <button type="button" class="btn-close me-2 mt-2" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="logodiv text-center">
          <a href="/" class="logoimg">
          <img src="{{asset('Frontend/img/EZogo.png')}}" alt="logo-image" style="height: 75px !important; ">
          </a>
        </div>
         @if(session()->has('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}
        </div>
        @elseif(session()->has('error'))
        <div class="alert alert-warning">
        {{ session()->get('error') }}
        </div>
        @endif
        <h4 class="mb-3" style=" text-align: center;"><strong>Company Information</strong></h4>
        <form action="{{route('cutomer.signup')}}" method="post">
                <!-- <div><span class="text-danger">{{session()->get('Error') }}</span></div> -->
         @csrf
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group mb-2">
                      <label class="mb-1" for="form2Example18">Company Name</label>
                      <input type="text" id="form2Example18" name="company_name" class="form-control" required/>
                  </div>
              </div> 
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group mb-2">
                      <label class="mb-1" for="form2Example28">Contact Person</label>
                      <input type="text" id="form2Example28" name="customer_name" class="form-control" required/>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group mb-2">
                      <label class="mb-1" for="form2Example48">Phone Number</label>
                      <input type="tel" id="form2Example48" name="phone"
                          class="form-control" required/>
                  </div>
              </div>
          </div>

            <div class="form-group mb-2">
                <label class="mb-1" for="form2Example38">Email</label>
                <input type="email" id="form2Example38" name="email" class="form-control" required/>
            </div>

            <div class="form-check mb-2">
                <input class="form-check-input" required type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    I agree to accept your <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#privacypolicy"> privacy policy</a>
                </label>
            </div>

            <div class="pt-1 mb-2 mt-2">
                 <button class="btn btn-lg btn-block loginbutn w-100" type="submit">Request To Register</button>
                <!-- <a class="btn btn-lg btn-block loginbutn w-100" type="submit" href="{{url('/welcome')}}" type="submit">Request To Register</a> -->
            </div>
            
        </form>
      </div>
      </div>
    </div>
  </div>
</div>


<!-- Privacy policy Modal -->
<div class="modal fade" id="privacypolicy" tabindex="-1" aria-labelledby="privacypolicyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background: #ffb92c;">
        <h1 class="modal-title text-dark fs-5" id="privacypolicyModalLabel">Privacy Policy</h1>
        <button type="button" class="btn-close" data-bs-toggle="modal" data-bs-target="#registermodal"></button>
      </div>
      <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <p>Third party vendors like Google, Facebook, and Amazon require their users (website and app owners) to explicitly inform their users if they're using advertising features, cookies, or tracking services on their websites/apps in order to deliver better user experiences based on prior browsing behavior.</p>
                    <p>Here's how Ookla - a fixed broadband and mobile network testing company - informs its users in its Privacy Policy agreement that it uses cookies, log files, flash cookies, local storage, etc., in its website-based and mobile applications in order to (1) improve performance, (2) to better understand how Ookla's software functions, and (3) to give the user a personalized experience.</p>
                    
                    <p><strong>Analysis</strong></p>
                    <ul>
                        <li>Require to Run the Website</li>
                    </ul>
                    <p><strong>Personalization</strong></p>
                    <ul>
                        <li>Monitoring website usage and optimizing the user experience</li>
                        <li>Evaluation of marketing actions</li>
                    </ul>
                    <p><strong>Legal Notice</strong></p>
                    <ul>
                        <li>Storage of your preferences from previous visits</li>
                        <li>Collecting user feedback to improve our website</li>
                        <li>Recording of your interests in order to provide customised content and offers</li>
                    </ul>

                </div>
            </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary closebtn" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary chnagebtn">Save changes</button>
      </div> -->
    </div>
  </div>
</div>