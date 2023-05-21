
@include('frontend.includes.head')
@include('frontend.includes.header') 

    <style>
        .bg-image-vertical {
            position: relative;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: right center;
            background-size: auto 100%;
        }

       .loginbutn {
            background: linear-gradient(to right, #ffb92c, #94ceec) !important;
            color: black;
            border: none;
        }
        .loginbutn:hover {
            background: linear-gradient(to right, #ffb92c, #94ceec) !important;
            color: black;
            border: none;
        }
        .textside {
             background: linear-gradient(to right, #94ceeca8, #ffb92c82) !important;
             margin-top: 120px;
        }
        .belowtext {
            font-size: 14px;
        }
        .loginCard {
            margin: 60px auto;
            padding: 25px 35px;
            background: #fff;
            box-shadow: 0 0 35px 0 rgb(154 161 171 / 15%);
            border-radius: 5px;
        }
        .textside .logodiv {
            margin: 15px auto;
        }
        .form-control {
            height: 38px;
            margin-bottom: 10px;
        }
        @media only screen and (max-width: 768px) {
            .haveee img {
                display: none;
            }
        }
    </style>


    <section class="textside h-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 text-black ">
                    <div class="loginCard border">

                        <div class="logodiv text-center">
                            <a href="/" class="logoimg">
                                <img src="{{asset('Frontend/img/EZogo.png')}}" alt="logo-image"
                                    style="height: 75px !important; ">
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
                        <form action="{{route('cutomer.signup')}}" method="post">
                            <!-- <div><span class="text-danger">{{session()->get('Error') }}</span></div> -->
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
                               <!--  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mb-1" for="form2Example48">Gender</label>
                                        <select class="form-select" style="height: 41px;" name="gender" aria-label=".form-select-sm example" required>
                                            <option value="" selected disabled>Select a gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div> -->
                            </div>

                            <div class="form-group">
                                <label class="mb-1" for="form2Example38">Email</label>
                                <input type="email" id="form2Example38" name="email" class="form-control" required/>
                            </div>
                            <!-- <div class="row mb-3">
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
                    </div> -->
                            <!-- <div class="form-group">
                                <label class="mb-1" for="form2Example38q">Address</label>
                                <input type="address" id="form2Example38q" name="address" class="form-control" required/>
                            </div> -->

                            <!-- <div class="form-group">
                                <label class="mb-1" for="form2Example39">Date of Birth</label>
                                <input type="date" id="form2Example39" name="dob" class="form-control" required/>
                            </div> -->

                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mb-1" for="form2Example40">Password</label>
                                        <input type="password" id="form2Example40" name="password"
                                            class="form-control" required/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mb-1" for="form2Example41">Confirm Password</label>
                                        <input type="password" id="form2Example41" name="confrm_password"
                                            class="form-control" required/>
                                    </div>
                                </div>
                            </div> -->
                            <div class="form-check">
                                <input class="form-check-input" required type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    I agree to accept terms of use and privacy policy
                                </label>
                            </div>

                            <div class="pt-1 mb-2 mt-2">
                                <button class="btn btn-lg btn-block loginbutn w-100" type="submit">Sign Up</button>
                            </div>

                           <!--  <p class="belowtext">Do you have an account?
                                <a href="" class="link-black float-end">Login</a>
                                <a href="login.php">Login</a>
                            </p> -->

                            <!-- <p class="small pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p> -->
                            <!-- <div class="row d-flex justify-content-around">
                                <p class="belowtext">Don't have an account?
                                    <a href="" class="">Sign up</a>
                                    <a href="" class=" float-end">Forgot
                                        Password</a>
                                </p>
                            </div> -->
                        </form>

                    </div>
                </div>
                <!-- <div class="col-md-6 px-0 d-none d-sm-block haveee">
                    <img src="{{ asset('frontend/assets/img/049_n.jpg') }}" alt="Login image" class="w-100"
                        style="border-radius: 0px 20px 20px 0px; height: 110vh; object-fit: cover; object-position: left;filter: brightness(70%);">
                </div> -->
            </div>
        </div>
    </section>
    <script src="Frontend/vendor/bootstrap/js/mdb.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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
    @include('frontend.includes.footer')
@include('frontend.includes.script')