
@include('frontend.includes.head')

<style>
.loginCard {
  margin: 60px auto;
  padding: 25px 50px;
  box-shadow: rgb(67 71 85 / 27%) 0px 0px 0.25em, rgb(90 125 188 / 5%) 0px 0.25em 1em;
  border-radius: 5px;
  background: #00579f !important;
}
.logodiv {
  margin: 15px auto;
}
.form-control {
  height: 41px;
  margin-bottom: 10px;
}
.form-control {
  height: 41px;
  margin-bottom: 10px;
}
@media only screen and (max-width: 768px) {
  form {
      width: 100% !important;
  }
  .logodiv {
      display: flex;
      justify-content: center;
  }
}
.closemodel {
  background-color: transparent;
  border: 0;
  -webkit-appearance: none;
  padding: 1rem;
  margin: -1rem -1rem -1rem auto;
}
.s1 {
    margin-left: -104px;
    margin-right: 8px;
    margin-top: 8px;
}
.s2 ,  .s3 {
    margin-right: 8px;
    margin-top: 8px;
}
.btn-primary:hover {
  color: black;
    background: #ffb92c;
      border: 2px solid #ffb92c;
}
.btn-primary {
  color: black;
  transition: 0.4s;
  border-radius: 50px;
  border: 2px solid #ffb92c;
  background: #ffb92c;
  padding: 5px 15px !important;
}
.nav-tabs {
  border-bottom: 2px solid #00579f;
}
.nav-tabs-bordered .nav-link.active {
  border: 2px solid #00579f;
  background: #94ceec;
  box-shadow: rgb(100 111 109 / 45%) 1px 8px 12px 1px;
}
.nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
  border: 2px solid #00579f;
}
.payheading {
  text-align: center;
  padding: 0 0px 20px 0;
  font-weight: 700;
  text-decoration: underline;
  color: #00579f;
  font-size: 32px;
}
.about-repay {
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    width: 100%;
/*    height: 75.5vh;*/
}
.about-repay .card{
    background: #00579f;
    border: none;
    color: white;
}
.about-repay .card .card-top h1{
    font-weight: 700;
    font-size: 35px;
}
.about-repay .card .card-top p {

}









.inv-header {
  margin: 5px 5px;
  color: #aaa;
  vertical-align: top
}

.inv-header div {
  display: inline-block;
  width: 45%
}

.inv-date {
  margin-right: 5%
}

.inv-date span {
  display: block;
  margin-bottom: 8px
}

.inv-date span b {
  display: inline-block;
  min-width: 120px
}

.inv-table {
  width: 100%;
  border-spacing: 0;
  border-collapse: collapse;
}

.inv-table thead {
  background-color: #ffb92c;

}

.inv-table th, td {
  padding: 5px
}

.inv-table tfoot td {
  text-align: right
}

.inv-table td.total {
  border-top: 1px solid #eee
}


.u-left {
  text-align: left
}

.u-mid {
  text-align: center
}

.u-right {
  text-align: right
}


   @media print {

      main {
         visibility: hidden;
         display: none;
      }

      .modal-dialog {
         width: 100vw;
         max-width: none;
         margin: 0;
      }

      .modal-footer {
        display: none !important;
      }
      .modal-body {
         overflow-y: visible;
      }
      .modal-backdrop {
         visibility: hidden;
         display: none;
      }

      [data-sidebar-style='compact'] .content-body {
         margin-left: 0 !important;
      }
      [data-header-position='fixed'] .content-body {
         padding-top: 0 !important;
      }


      .hdr-div {
         display: none;
      }
      .pagetitle {
         display: none;
      }
      .header-nav {
         display: none;
         box-shadow: none;
      }
      .header-nav .nav-profile span{
         display: none !important;
      }
      .deznav {
         display: none;
      }
      .page-titles {
         display: none;
      }
      .nav-header {
         display: none;
      }
      .header {
         display: none !important;
         box-shadow: none;
         background-color: #f6f9ff;

      }
      .modal-header{
         display: none;
      }
      .header a, .header i, .header img {
         display: none;
      }
      .table thead th {
         color: black;
      }
      .harry {
         display: none;
      }
      .eventDetailCard {
         display: block;
         background: #F6F9FF !important;
         box-shadow: none;
      }
      .card {
         background: #F6F9FF !important;
         box-shadow: none;
      }
      .sidebar {
         box-shadow: none;
      }
      .harry1 {
         display: none;
      }
      .logo {
         display: block;
      }
      .footer {
         display: none;
      }
      .btn-primary {
         display: none;
      }
      body {
         margin-top: 0 !important;
         margin-bottom: 0 !important;
      }
   }




</style>

<body>

  <header id="header" class="fixed-top d-flex align-items-center header-transparent " style="margin-top: 0 !important;height: 78px; background: #00579f;">
    <div class="container d-flex align-items-center justify-content-center">
      <div class="logo">
         <a href="index.php"><img src="assets/img/BG.png" style="max-height: 140px;" alt="" class="img-fluid"></a>
      </div>
    </div>
  </header>

<main id="main">
    <div class="ticker-wrapper-h">
        <div class="heading">Trending Now</div>
        <ul class="news-ticker-h">
            <li><a href="">Use the Payment Invoice to securely collect payment from your customers.</a></li>
        </ul>
    </div>

<section class="" style="background: linear-gradient(to bottom, rgb(128 143 90 / 63%), rgb(31 63 80 / 73%)),url('assets/img/esaa1.jpg'); background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;padding-top: 0;" >

  <section class="about-repay inner-page" style="height: 85vh;" id="invoiceform">
      <div class="container">
          <div class="row d-flex justify-content-center align-items-center">
              <div class="col-md-6">
                  <div class="loginCard border">
                      <div class="logodiv">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                              <div class="card p-3">
                                  <div class="d-flex justify-content-between"> 
                                      <div class="card-top">
                                          <h1>SAR {{@$getInvoice->total_price}}</h1>
                                          <p>Due {{date("M d, Y")}}</p>
                                      </div>

                                      <div>
                                          <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">View Invoice</button>
                                      </div>
                                  </div>
                                  <div class="card-body p-0">
                                      <table>
                                  
                                          <tbody>

                                              <tr>
                                                  <td style="width: 22%;">To </td>
                                                  <td>{{@$getInvoice->name}}</td>

                                                </tr>


@php
@$userid=$getInvoice->user_id;
$user=DB::table('users')->where('id',$userid)->first();
@$user=$user->company_name;
@$invoiceid=$getInvoice->invoice_no;
$order_id=DB::table('orders')->where('invoice',$invoiceid)->first();
@$order_id=$order_id->id;
$getItem=DB::table('order_detail')->where('order_id',$order_id)->first();
@$getItem=$getItem->name;
$getVAT=DB::table('general_settings')->first();
@$getVAT=$getVAT->vat;
@$vatamount=$getInvoice->total_price*$getVAT/100;
@$grandtotal=$getInvoice->total_price+$vatamount;
@endphp
                            
<tr>
                                                  <td style="width: 22%;">From </td>
                                                  <td colspan="10">{{@$user}}</td>
                                              </tr>

                                              <tr>
                                                  <td style="width: 22%;">Memo </td>
                                                  <!-- <td colspan="10">Please review this closely, i think i may have overchanged you</td> -->
                                                  <td colspan="10">EZpay Invoice Number {{@$getInvoice->invoice_no}}</td>
                                              </tr>

                                          </tbody>
                                      </table>
                                      <hr>

                           <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-2">

                              <!-- <div class="form-check mb-5">
                                <input class="form-check-input mt-2 me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                                <label class="form-check-label" for="flexRadioDefault2">
                                      <img style="width: 100px; padding: 5px; background: #c0e2f4;border-radius: 26px;" class="img-fluid" src="assets/img/mada-w.png">
                                </label>
                              </div>

                              <div class="form-check mb-5">
                                <input class="form-check-input mt-2 me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault3" >
                                <label class="form-check-label" for="flexRadioDefault3">

                                  <img style="width: 100px;background: #c0e2f4;border-radius: 26px; padding: 5px;" class="img-fluid" src="assets/img/stc-pay-w.png">

                                </label>
                              </div> -->
                               <div class="card-top payNow">
                                  <h1>Pay Now</h1>
                                </div>

                          </div>

                                      <div class="d-flex justify-content-end hammad">
                                        <a class="madaPay">
                                          <img style="width: 100px;background: #c0e2f4;border-radius: 26px; padding: 5px; margin-right: 5px;" class="img-fluid" src="{{asset('Frontend/img/mada-w.png')}}">
                                        </a>
                                        <a class="moyasarPay">
                                          <img style="width: 100px;background: #c0e2f4;border-radius: 26px; padding: 5px;" class="img-fluid" src="{{asset('Frontend/img/moyasar.png')}}">
                                        </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- 
  <div class="about-repay inner-page p-0" id="selectpayment" style=" display: none;">
      <div class="container">
          <div class="row d-flex justify-content-center align-items-center">
              <div class="col-md-6">
                  <div class="loginCard border">
                      <div class="logodiv">
                              <h3>Please Select a Payment Method</h3>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-around mt-5">

                              <div class="form-check mb-5">
                                <input class="form-check-input mt-2" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                                <label class="form-check-label" for="flexRadioDefault2">
                                      <img style="width: 100px;" class="img-fluid" src="assets/img/mada-w.png">
                                </label>
                              </div>

                              <div class="form-check mb-5">
                                <input class="form-check-input mt-2" type="radio" name="flexRadioDefault" id="flexRadioDefault3" >
                                <label class="form-check-label" for="flexRadioDefault3">

                                  <img style="width: 100px;" class="img-fluid" src="assets/img/stc-pay-w.png">

                                </label>
                              </div>


                          </div>
                              <hr>
                                      <div class="d-flex justify-content-end">
                                          <a type="button" id="nexi2">Next</a>
                                      </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div> -->

  <section class="inner-page about-repay" id="paymentform1" style=" display: none; height: 85vh;">
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-md-6">
            <div class="loginCard border">
             <div class="logodiv">

                <!-- <div class="natbs d-flex justify-content-around mb-4">
                     <img style="width: 135px; padding: 20px;" class="img-fluid" src="assets/img/visa.png" alt="visa hd transparent logo"> 
                    <img style="width: 135px; padding: 20px; background: #b2dcf2; border-radius: 9px;" class="img-fluid" src="assets/img/mada-w.png">
                    <img style="width: 135px; padding: 20px; background: #b2dcf2; border-radius: 9px; " class="img-fluid" src="assets/img/stc-pay-w.png"> 
                </div> -->


                <form accept-charset="UTF-8" action="" class="text-white require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_test_51LXKccEfM5Y19ny9aQIp3aABMDSpnVQdKeRubUEP0d88qmChtTtGmXYfNjFL1YpQuhPbPM3VfGn9tnYTkLovLBMs00z0UNOaYJ" id="payment-form" method="post">
                          <input type="hidden" name="_token" value="fswqmGGqVyfBPe1l68rn2dQqEt5cX6Dsw1BIpQ9U">
                            <input type="hidden" class="card-amount" name="id" value="1">
                            <input type="hidden" class="card-amount" name="category_id" value="7">
                            <input type="hidden" class="card-amount" name="amount" value="60">
                            <div class="row">       
                            <h3 class="payheading text-white">Payment Process</h3>                                    
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Card Holder Name</label>
                                        <input class="form-control card-name" size="4" required="" name="name" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Card Holder Email</label>
                                        <input class="form-control card-email" size="4" name="email" type="email" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Card Number</label>

                                        <div class="d-flex justify-content-between">
                                        <input autocomplete="off" class="form-control card-number" size="20" type="text" required="" placeholder="Card Number">
                                        <!-- <a title="Visa IncorporatedKUsam at en.wikipedia, Public domain, via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Visa_Inc._logo.svg"><img width="64" alt="Visa Inc. logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Visa_Inc._logo.svg/512px-Visa_Inc._logo.svg.png"></a> -->

                                      <!-- <div class="d-flex justify-content-between">  

         <a class="s1" href="javascript:void(0)">
          <img width="44" alt="Stc pay" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Stc_pay.svg/64px-Stc_pay.svg.png">
        </a>



          <a class="s3"  href="javascript:void(0)"><img width="44" alt="Mada Logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Mada_Logo.svg/512px-Mada_Logo.svg.png"></a></div> -->


                                        </div>

                                        <!-- <input type="email" class="form-control" placeholder="Card Number" id="exampleInputEmail1" aria-describedby="emailHelp"> -->

                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="mb-2">
                                  <label for="exampleInputEmail1" class="form-label">Security code</label>
                                  <input autocomplete="off" required="" class="form-control card-cvc" placeholder="CVV" size="4" type="text">
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="mb-2">
                                  <label for="exampleInputEmail1" class="form-label">Expiration Month</label>
                                  <input class="form-control card-expiry-month" required="" placeholder="MM" size="2" type="text">
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="mb-2">
                                  <label for="exampleInputEmail1" class="form-label">Expiration Year</label>
                                  <input class="form-control card-expiry-year" required="" placeholder="YYYY" size="4" type="text">

                                  <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                              </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="d-flex justify-content-end align-items-end">
                                      <a type="submit" class="btn-primary w-100 text-center mt-2" id="membercat" data-bs-toggle="modal" data-bs-target="#success_alert" >Pay Now</a>
                                  </div>
                                </div>
                            </div>
                        </form>

              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="inner-page about-repay" id="paymentform" style=" display: none; height: 85vh;">
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-md-6">
            <div class="loginCard border">
             <div class="logodiv">

                <!-- <div class="natbs d-flex justify-content-around mb-4">
                     <img style="width: 135px; padding: 20px;" class="img-fluid" src="assets/img/visa.png" alt="visa hd transparent logo"> 
                    <img style="width: 135px; padding: 20px; background: #b2dcf2; border-radius: 9px;" class="img-fluid" src="assets/img/mada-w.png">
                    <img style="width: 135px; padding: 20px; background: #b2dcf2; border-radius: 9px; " class="img-fluid" src="assets/img/stc-pay-w.png"> 
                </div> -->


                <form accept-charset="UTF-8" action="" class="text-white require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_test_51LXKccEfM5Y19ny9aQIp3aABMDSpnVQdKeRubUEP0d88qmChtTtGmXYfNjFL1YpQuhPbPM3VfGn9tnYTkLovLBMs00z0UNOaYJ" id="payment-form" method="post">
                          <input type="hidden" name="_token" value="fswqmGGqVyfBPe1l68rn2dQqEt5cX6Dsw1BIpQ9U">
                            <input type="hidden" class="card-amount" name="id" value="1">
                            <input type="hidden" class="card-amount" name="category_id" value="7">
                            <input type="hidden" class="card-amount" name="amount" value="60">
                            <div class="row">       
                            <h3 class="payheading text-white">Payment Process</h3>                                    
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Card Holder Name</label>
                                        <input class="form-control card-name" size="4" required="" name="name" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Card Holder Email</label>
                                        <input class="form-control card-email" size="4" name="email" type="email" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Card Number</label>

                                        <div class="d-flex justify-content-between">
                                        <input autocomplete="off" class="form-control card-number" size="20" type="text" required="" placeholder="Card Number">
                                        <!-- <a title="Visa IncorporatedKUsam at en.wikipedia, Public domain, via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Visa_Inc._logo.svg"><img width="64" alt="Visa Inc. logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Visa_Inc._logo.svg/512px-Visa_Inc._logo.svg.png"></a> -->

                                      <!-- <div class="d-flex justify-content-between">  


                                     <a class="s1" title="stc, Public domain, via Wikimedia Commons" href="javascript:void(0)"><img width="44" alt="Stc pay" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Stc_pay.svg/64px-Stc_pay.svg.png"></a>


                                      <a class="s3" title="Mada, Public domain, via Wikimedia Commons" href="javascript:void(0)"><img width="44" alt="Mada Logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Mada_Logo.svg/512px-Mada_Logo.svg.png"></a></div> -->



                                        </div>

                                        <!-- <input type="email" class="form-control" placeholder="Card Number" id="exampleInputEmail1" aria-describedby="emailHelp"> -->

                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="mb-2">
                                  <label for="exampleInputEmail1" class="form-label">Security code</label>
                                  <input autocomplete="off" required="" class="form-control card-cvc" placeholder="CVV" size="4" type="text">
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="mb-2">
                                  <label for="exampleInputEmail1" class="form-label">Expiration Month</label>
                                  <input class="form-control card-expiry-month" required="" placeholder="MM" size="2" type="text">
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="mb-2">
                                  <label for="exampleInputEmail1" class="form-label">Expiration Year</label>
                                  <input class="form-control card-expiry-year" required="" placeholder="YYYY" size="4" type="text">

                                  <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                              </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="d-flex justify-content-end align-items-end">
                                    <a type="submit" class="btn-primary w-100 text-center mt-2" id="membercat1" data-bs-toggle="modal" data-bs-target="#success_alert" >Pay Now</a>
                                  </div>
                                </div>
                            </div>
                        </form>

              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="about-repay inner-page"  id="confirm" style=" display: none; height: 85vh;">
      <div class="container">
          <div class="row d-flex justify-content-center align-items-center">
              <div class="col-md-6">
                  <div class="loginCard border">
                      <div class="logodiv">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
                              <div class="flex-column justify-content-center">
                                  <img class="text-center img-fluid" src="assets/img/heee.png" style="height: 150px;margin: 0 auto; display: block;"; >
                                  <h4 style="color: white;text-align: center;margin: 15px auto 5px;font-size: 30px;font-weight: bold">Congratulations!</h4>
                                  <p class="text-center pb-2" style="font-size: 18px;color: white;"> Your payment has been processed successfully.</p>
                              </div>
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

</section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<!--   <footer id="footer">

    <div class="container-fluid" style="background: #f8b835cf !important;   padding: 0 0 30px 0;">
      <div class="copyright">
        &copy; Copyright <strong><span>EZ Pay</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Freiends IT Solutions</a>
      </div>
    </div>
  </footer> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script type="text/javascript">
    
    $('.madaPay').click(function(){
      $('#invoiceform').hide();
      $('#paymentform').hide();
      $('#paymentform1').show();
    }) 
    $('.moyasarPay').click(function(){
      $('#invoiceform').hide();
      $('#paymentform1').hide();
      $('#paymentform').show();
    })

  $('#membercat').click(function(){
      $('#invoiceform').hide();
      $('#paymentform1').hide();
      $('#paymentform').hide();
      $('#confirm').show();
    }); 
  $('#membercat1').click(function(){
      $('#invoiceform').hide();
      $('#paymentform1').hide();
      $('#paymentform').hide();
      $('#confirm').show();
    });
</script>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background: #00579f;">
        <h5 class="modal-title" style="color: white;" id="exampleModalLabel">Invoice</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


          <div class="inv-container">

            <div class="inv-header">
              <div class="inv-date">
                <!-- <span><b>Invoice Date</b>March 5, 2017</span> -->

                <span><b>Invoice Date</b>{{date('M d, Y',strtotime($getInvoice->created_at))}}</span>
                <!-- <span><b>Due Date</b>March 31, 2017</span> -->
              </div>
            </div>
            <table class="inv-table">
              <thead style="border: 1px solid;">
                <tr >
                  <th style="border: 1px solid;" class="u-left">Item</th>
                  <th style="border: 1px solid;" class="u-mid">Quantity</th>
                  <th style="border: 1px solid;" class="u-mid">Rate</th>
                  <th style="border: 1px solid;" class="u-mid">Amount</th>
                </tr>
              </thead>
              <tbody>
                <!-- TODO: generate items with JS -->
                <tr>
                  <td class="u-left">{{@$getItem}}</td>
                  <td class="u-mid">{{@$getInvoice->quantity}}</td>
                  <td class="u-right">12.99</td>
                  <td class="u-right">{{@$getInvoice->unit_price}}</td>
                </tr>
                <!-- <tr>
                  <td class="u-left">Development work (hours)</td>
                  <td class="u-mid">10</td>
                  <td class="u-right">50</td>
                  <td class="u-right">500.00</td>
                </tr> -->
              </tbody>
              <tfoot>
                <tr>
                  <td/>
                  <td colspan="2" class="total"><strong>Subtotal </strong></td>
                  <td class="total">{{@$getInvoice->total_price}}</td>
                </tr>
                <tr>
                  <td/>
                  <td colspan="2"><strong>Tax @ {{@$getVAT}}% </strong></td>
                  <td>{{@$vatamount}}</td>
                </tr>
                <tr>
                  <td/>
                  <td colspan="2" class="total"><strong>Total </strong></td>
                  <td class="total">{{@$grandtotal}}</td>
                </tr>
              </tfoot>
            </table>

          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" style="background: #ffb92c; color: black; border-color: #ffb92c !important;" data-bs-dismiss="modal">Close</button>
        <button type="button" onclick="window.print()" class="btn btn-primary">Print</button>
      </div>
    </div>
  </div>
</div>

@include('frontend.includes.script') 