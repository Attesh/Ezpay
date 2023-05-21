  <!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <!-- <h3>EZ Pay</h3> -->
              <?php $GeneralSettings=DB::table('general_settings')->first(); ?>
              <a href="{{url('/')}}"><img src="{{asset('Frontend/img/'.$GeneralSettings->logo)}}" alt="" style="height: 75px;" class="img-fluid"></a>
              <p>{{$GeneralSettings->location}}<br>
                <strong>Phone:</strong> {{$GeneralSettings->phone}}<br>
                <strong>Email:</strong> {{$GeneralSettings->email}}<br>
              </p>
              <div class="social-links mt-3">
                <a href="{{$GeneralSettings->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="{{$GeneralSettings->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{$GeneralSettings->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="{{$GeneralSettings->skype}}" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="{{$GeneralSettings->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services1">Features</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services1">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services1">Privacy policy</a></li>
            </ul>
          </div>

         <!--  <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Payment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-5 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid" style="background: #f8b835cf !important; padding: 0 0 30px 0;">
      <div class="copyright">
        &copy; Copyright <strong><span>EZ Pay</span></strong>. All Rights Reserved
      </div>
    </div>
</footer><!-- End Footer -->


  <!-- Sign in / Register Modal -->
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="logodiv text-center">
                    <a href="/" class="logoimg">
                    <img src="{{asset('Frontend/img/EZogo.png')}}" alt="logo-image" style="height: 75px !important; "></a>
                </div>
                <h4 class="mb-3 mt-3" style=" text-align: center;"><strong>Login to your Account</strong></h4>
                <form >
                <input type="hidden" id="login-token" name="_token" value="{{csrf_token()}}">

                    <div class="form-group mt-3">
                        <label for="singin-email">Email</label>
                        <input type="text" class="form-control" id="singin-email" name="username" required>
                    </div><!-- End .form-group -->

                    <div class="form-group mt-3">
                        <label for="singin-password">Password</label>
                        <input type="password" class="form-control" id="singin-password" name="password" required>
                    </div><!-- End .form-group -->

                    <div class="form-footer mt-3 mb-2">
                        <button id="tag_form"  class="btn btn-lg btn-block loginbutn w-100">LOG IN</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                    
                <h4 class="mb-3" style=" text-align: center;"><strong>Sign Up to your Account</strong></h4>
                <!-- <form id="" action="{{route('cutomer.signup')}}" method="post"> -->
                <!-- <form id="" action="" method="post"> -->
                <!-- <div><span class="text-danger">{{session()->get('Error') }}</span></div> -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="mb-1" for="form2Example18">Company Name</label>
                                <input type="text" id="form2Example18" name="company_name" class="form-control" required/>
                            </div>
                        </div> 
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-1" for="form2Example28">Contact Person</label>
                                <input type="text" id="form2Example28" name="customer_name" class="form-control" required/>
                            </div>
                        </div>
                           <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-1" for="form2Example48">Phone Number</label>
                                <input type="tel" id="form2Example48" name="phone"
                                    class="form-control" required/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="mb-1" for="form2Example38">Email</label>
                        <input type="email" id="" name="email" class="form-control" required/>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" required type="checkbox" value="" id="">
                        <label class="form-check-label" for="flexCheckDefault">
                            I agree to accept terms of use and <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#privacypolicy"> privacy policy</a>
                        </label>
                    </div>

                    <div class="pt-1 mb-2 mt-2">
                        <button class="btn btn-lg btn-block loginbutn w-100" type="submit">Sign Up</button>
                    </div>
                    
                </form>

            </div>
      </div>
        </div>
    </div>
</div>

  <!-- Register Modal -->
{{-- <div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="registermodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="logodiv text-center">
            <a href="/" class="logoimg">
                <img src="{{asset('Frontend/img/EZogo.png')}}" alt="logo-image" style="height: 75px !important; ">
                </a>
                </div>
                <h4 class="mb-3" style=" text-align: center;"><strong>Sign Up to your Account</strong></h4>
                <form action="{{route('cutomer.signup')}}" method="post">
                   @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="mb-1" for="form2Example18">Company Name</label>
                                <input type="text" id="form2Example18" name="company_name" class="form-control" required/>
                            </div>
                        </div> 
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-1" for="form2Example28">Contact Person</label>
                                <input type="text" id="form2Example28" name="customer_name" class="form-control" required/>
                            </div>
                        </div>
                           <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-1" for="form2Example48">Phone Number</label>
                                <input type="tel" id="form2Example48" name="phone"
                                    class="form-control" required/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="mb-1" for="form2Example38">Email</label>
                        <input type="email" id="form2Example38" name="email" class="form-control" required/>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" required type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            I agree to accept terms of use and <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#privacypolicy"> privacy policy</a>
                        </label>
                    </div>

                    <div class="pt-1 mb-2 mt-2">
                        <button class="btn btn-lg btn-block loginbutn w-100" type="submit">Sign Up</button>
                    </div>
                    
                </form>

            </div>
      </div>
    </div>
  </div>
</div> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>

$('#tag_form').click(function(e) {
                e.preventDefault();

                var formdata = {
                    email: jQuery('#singin-email').val(),
                    password: jQuery('#singin-password').val(),


                };
                // console.log(formdata);



                $.ajax({
                    url: 'https://fisdemoprojects.com/ezpay/member/login.php',
                    data: formdata,
                    type: "POST",
                    success: function(data) {
                        
                        
                    //   console.log(data);
                            if(data == 1){
                            
                            
                                location.replace("https://fisdemoprojects.com/ezpay/member/index.php");
                            }
                            else{
                                alert(data);
                            }
                              
                       

                    

                    },
                    error: function(data) {

                      
// console.log(data)
                        // console.log(data.responseJSON.errors.phone)

                      

                    }
                });


            })
  </script>


