<!-- Voluntrer -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Volman</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo/favicon-32x32.png" rel="icon">
  <link href="assets/img/logo/apple-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.compat.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  <link href="assets/vendor/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/owl-carousel/css/owl.theme.default.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    <style>
        .bg-image-vertical {
            position: relative;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: right center;
            background-size: auto 100%;
        }

        .loginbutn {
            background: #1C1A4B;
            color: White;
            /* background: linear-gradient(to right, #3D9B8F, #1C1A4B);   */
        }

        .loginbutn:hover {
            background: #1c1887;
            color: White;
        }

        .textside {
            background: linear-gradient(to right, #3D9B8F, #1C1A4B);  
        }

        .belowtext {
            font-size: 14px;
        }

        .loginCard {
            margin: 60px auto;
            padding: 25px 50px;
            background: #fff;
            box-shadow: 0 0 35px 0 rgb(154 161 171 / 15%);
            border-radius: 5px;
        }

        .textside .logodiv {
            margin: 15px auto;
        }

        .form-control {
            height: 41px;
            margin-bottom: 10px;
        }

        @media only screen and (max-width: 768px) {
            .haveee img {
                display: none;
            }
            /*form {
                width: 35rem !important;
            }*/
            .loginbutn {
                background: #1C1A4B !important;
                color: White;
            }
            .loginbutn:hover {
                background: #1c1887 !important;
                color: White;
            }
        }
    </style>
</head>

<body class="h-100 textside">
    <section class="h-100">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-6 text-black ">
                    <div class="loginCard border">

                        <div class="logodiv text-center">
                            <a href="resetpassword.php" class="logoimg">
                                <img src="assets/img/logo/logo-png.png" alt="logo-image"
                                    style="height: 75px !important; ">
                            </a>
                        </div>
                        <h4 class="mb-3 text-center"><strong>Reset Password</strong></h4>
                        <form name="resetPassword" action="#" method="POST">
                            <div class="form-group">
                                <label class="mb-1" for="form2Example18">New Password</label>
                                <input type="Password" id="form2Example18" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="mb-1" for="form2Example18">Confirm New Password</label>
                                <input type="Password" id="form2Example18" class="form-control" />
                            </div>
                            <div class="pt-1 mb-2 mt-4">
                                <button class="btn btn-info btn-lg btn-block loginbutn w-100" type="submit">Reset
                                    Password</button>
                            </div>
                        </form>

                    </div>
                </div>
              
            </div>
        </div>
    </section>
    <script src="assets/vendor/bootstrap/js/mdb.min.js"></script>
</body>
</html>