
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
            <div class="row justify-content-center">
                <div class="col-md-6 text-black ">
                    <div class="loginCard border">

                        <div class="logodiv text-center">
                            <a href="/" class="logoimg">
                                <img src="Frontend/img/EZogo.png" alt="logo-image"
                                    style="height: 75px !important; ">
                            </a>
                        </div>
                        <h4 class="mb-3" style=" text-align: center;"><strong>Login to your Account</strong></h4>
                        <form action="index.php" method="post">
                            <div>
                                   </div>

                            <div class="form-group">
                                <label class="mb-1" for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" />
                            
                            </div>


                            <div class="form-group">
                                <label class="mb-1" for="password">Password</label>
                                <input type="password" id="password" name="password"class="form-control" />
                            </div>

                            <div class="pt-1 mb-2 mt-4">
                                <a href="https://assanhissab.com/EZpay/member/" class="btn btn-lg btn-block loginbutn w-100" type="submit">Login</a>
                            </div>

                            <!-- <p class="small pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p> -->
                            <!-- <div class="row d-flex justify-content-around">
                                <p class="belowtext">Don't have an account?
                                    <a href="signup.php" class="">Sign up</a>
                                    <a href="forgotpassword.php" class=" float-end">Forgot
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
   
@include('frontend.includes.footer')
@include('frontend.includes.script')