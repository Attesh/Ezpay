<?php include'includes/head.php' ?>
<?php include'includes/header.php' ?>

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
                            <a href="forgotpassword.php" class="logoimg">
                                <img src="assets/img/EZogo.png" alt="logo-image"
                                    style="height: 75px !important; ">
                            </a>
                        </div>
                        <h4 class="mb-3 text-center"><strong>Forgot Password</strong></h4>
                        <form name="resetPassword" action="#" method="POST">
                            <div class="form-group">
                                <label class="mb-1" for="form2Example18">Email</label>
                                <input type="email" id="form2Example18" class="form-control" />
                            </div>
                            <div class="pt-1 mb-2 mt-4">
                                <button class="btn btn-info btn-lg btn-block loginbutn w-100" type="submit">Reset
                                    Password</button>
                            </div>
                            <div class="row d-flex justify-content-around">
                                <p class="belowtext">
                                <a href="signup.php" class="float-end">Sign up</a>
                                </p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/vendor/bootstrap/js/mdb.min.js"></script>
<?php include'includes/footer.php' ?>
<?php include'includes/script.php' ?>