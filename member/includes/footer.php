<!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>EZ Pay</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div class="modal fade" id="userPassModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="userPassModal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header managemodal">
            <h5 class="modal-title" id="staticBackdropLabel">Authentication</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body py-3">
            <form>
               <div class="mb-2">
                  <!-- <label for="passcode" class="form-label">Enter Password</label> -->
                  <input type="password" required="" class="form-control" id="passcode" placeholder="Enter Passcode">
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary backbtnn" data-bs-dismiss="modal">Close</button> -->
            <a href="manage-items.php" type="button" class="btn btn-primary">Submit</a>
         </div>
      </div>
   </div>
</div>
<!--  -->
<!-- Modal -->

<!--  -->

<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <!-- <script src="assets/vendor/simple-datatables/simple-datatables.js"></script> -->
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/moment.min.js"></script>
  <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        $('#authUserModal').click(function(){
          $('#userPassModal').modal('show');
        });
    });
    $(function () {
      $("#datepicker").datepicker({ 
            autoclose: true, 
            todayHighlight: true
      }).datepicker('update', new Date());
    });
    $(function () {
      $("#datepicker1").datepicker({ 
            autoclose: true, 
            todayHighlight: true
      }).datepicker('update', new Date());
    });

    $('#timePicker').datetimepicker({
      useCurrent: false,
      format: "hh:mm A"
    }).on('dp.show', function() {
      if(firstOpen) {
        time = moment().startOf('day');
        firstOpen = false;
      }
      
      $(this).data('DateTimePicker').date(time);
    });
    $('#timePicker1').datetimepicker({
      useCurrent: false,
      format: "hh:mm A"
    }).on('dp.show', function() {
      if(firstOpen) {
        time = moment().startOf('day');
        firstOpen = false;
      }
      
      $(this).data('DateTimePicker').date(time);
    });
  </script>
  <script type="text/javascript">
    $('#select_all').on('click',function(){
      if(this.checked){
        $('.checkbox').each(function(){
          this.checked = true;
          $(this).attr("checked");
        });
      }else{
        $('.checkbox').each(function(){
          this.checked = false;
          $(this).attr("checked");
        });
      }
    });
  
    $('.checkbox').on('click',function(){
      if($('.checkbox:checked').length == $('.checkbox').length){
        $('#select_all').prop('checked',true);
      }else{
        $('#select_all').prop('checked',false);
      }
    }); 
  </script>
  <script type="text/javascript">



    var ddmenuitem = 0;
    function jsddm_open()
    {  jsddm_close();
       ddmenuitem = $(this).find('ul.nav-content').css('display', 'block');
    }
    function jsddm_close()
    {  
      if(ddmenuitem) ddmenuitem.css('display', 'none');
    }
    $(document).ready(function()
    {  
       $('ul.nav-content > li').bind('click', jsddm_open)
       $('ul.nav-content a').click(function(e){
         if ($(this).attr('class') != 'active'){
           $('ul.nav-content a').removeClass('active');
           $(this).addClass('active');
         }
       });
         $("ul.nav-content > li > a").each(function () {
             var currentURL = document.location.href;
             var thisURL = $(this).attr("href");
             if (currentURL.indexOf(thisURL) != -1) {
               $(this).parents("ul.nav-content").css('display', 'block');
             }
           });
         $('a').each(function () {
        var currentURL = document.location.href;
        var thisURL = $(this).attr('href');
        if (currentURL.indexOf(thisURL) != 1) {
          $(this).find('ul.nav-content').css('display', 'block'); 
        }
         });
    });
  </script>
   <script type="text/javascript">
  $(document).ready(function(){
    $('.searchBtnn').click(function(){
      $('.advancedSea').toggle('medium');
    });
  });  

</script>
<script type="text/javascript">
    $(document).ready(function(){
    $('.searchBtnn223').click(function(){
      $('.advancedSea232').toggle('medium');

    });
  });
</script>
<!--  -->



<script>
  // $(document).ready(function() {
  
  //   $('#price_get').click(function(){
  //     // pakage_c_name
  //     // pak_c_name
  //     // console.log($('#price_pak').val());price_charge
  //    $('#pay_total').text('Paynow ('+ $('#price_pak').val() + ')');
  //    $('#price_charge').val($('#price_pak').val());
  //    $('#pakage_c_name').val($('#pak_c_name').val());
        
  //   });
  // })
 
  </script>

<!-- Renew sub Model -->
<!-- Modal -->
<div class="modal fade" id="Pakageselectedmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #00579f;">
        <h5 class="modal-title text-white" id="staticBackdropLabel">Subscription</h5>
      </div>
      <div class="modal-body">
      <?php 
 $user_id = $_SESSION['userid'];
              $getCustomer = $db->selectSRow(array("*"),PREFIX."general_settings");

              $pakage_name = $getCustomer['monthly_price'];
              // $pakage_price = $getCustomer['pakage_price'];
              // echo $userISBN;
              // $getsubscriptions = $db->select(array("*"),PREFIX."transactions", "isbn= '$userISBN'");
              // print_r ($getsubscriptions);
              $userid = $_SESSION['userid'];
              $check_order = $db->selectSRow(array("*"),"subscription","user_id = '$userid'");

              ?>
        <div class="row d-flex justify-content-center">
          <div class="col-md-10">
              <p class="mb-2 text-center"><strong>You need to subscribe  in order to operate the portal.</strong></p>
              <!-- <h4 class="card-title text-center m-0 p-0">Packages</h4> -->
              <div class="mb-1 form-switch d-flex justify-content-center">
                <input class="form-check-input" type="checkbox" id="changepakage" >
                <label class="form-check-label mt-1 ms-2" for="flexSwitchCheckChecked">Change the Package</label>

              </div>
              <div class="pricing-table">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <div class="heading">
                      <h3 id="pakage_name" class="text-white">
                      <?php if ($check_order['pakage_type']){ 
                                      echo $check_order['pakage_type'];
                                 }else
                                 {
                                  echo "Monthly";
                                 }?>

                      </h3>
                    </div>
                    <div class="item">    
                      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>  -->
                      <div class="features d-flex justify-content-between">
                        <h4 ><span class="feature">Start Date</h4>
                        <?php if ($check_order['pakage_type']){ ?>
                          <h4 ><span class="feature"><?php  echo $check_order['end_date']; ?></h4> 
                          <input type= "text" value="<?php  echo $check_order['end_date']; ?>" id="renew_start_date" hidden>
                                 <?php }
                                 else{?>
                                  <h4 ><span class="feature"><?php echo date('Y-m-d') ?></h4> 
                                  
                                 <?php }?>
                      </div>  <hr class="m-0">
              
                      <div class="price">
                        <input type="text" id="price_pak" value="<?php  echo $getCustomer['monthly_price'];?>" hidden>
                     
                          <h4 class="mb-0" id="pakage_price_text"><span class="sar" >SAR</span>
                          <?php if ($check_order['pakage_type']){ 
                                      echo $check_order['price'];
                                 }
                                 else{
                                  echo $getCustomer['monthly_price'];
                                  
                                 }?>
                          
                         </h4>
                      </div>
                      <hr>
                      <a class="btn btn-block btn-outline-primary w-100" id="price_get" role="button">Subscribe Now</a>

                    <!-- <button class="btn btn-block btn-outline-primary w-100" type="submit">Subscribe Now</button> -->
                    </div>
                  </div>  
                </div>
              </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style type="text/css"></style>
<!-- Modal -->

<!--End Renew Modal  -->
<!-- Select Payment modal -->
<div class="modal fade" id="paymentselectmodal" data-bs-backdrop="static" data-bs-keyboard="false"  aria-hidden="true" aria-labelledby="exampleModalToggleLabel33" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #00579f;">
          <h5 class="modal-title text-white" id="exampleModalToggleLabel33">Please Choose Payment method</h5>
          <button type="button" class="btn-close" id="paymentchoosemodelclose"></button>
        </div>
        <div class="modal-body">
          <p class="psymentselectt">Please proceed to payment</p>
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6 text-center">
              <img src="assets/img/stripe-logo-2.png" style="height: 65px;" class="img-fluid">
              <a class="btn btn-primary w-100" id="stripemodalopen">Stripe</a>
            </div>

            <div class="col-md-6 text-center">
              <img src="assets/img/moyasar-logo-landscape.png" style="height: 65px;" class="img-fluid">
              <a class="btn btn-primary w-100" id ="moyasarpaymentclick">Moyasar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="moyasarpaymentmodel" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #00579f;">
        <h5 class="modal-title text-white" id="exampleModalLabel">Moyasar Payment</h5>
        <button type="button" class="btn-close" id="moyasarpaymentclosemodal"></button>
      </div>
      <div class="modal-body">
        <!--  -->
        <?php $publishable_key 	= "pk_test_znk9TUDpAtH5QCs5aPZJYL35xoGdNxkpTDieLcs1";?>
        <form accept-charset="UTF-8" action="https://api.moyasar.com/v1/payments.html" method="POST">
  				<input type="hidden" name="callback_url" value="https://fisdemoprojects.com/ezpay/member/manage-subscription.php" />
  				<input type="hidden" name="publishable_api_key" value="<?php echo $publishable_key ?>" />
  				<input type="hidden" name="amount" value="1000" />
  				<input type="hidden" name="source[type]" value="creditcard" />
  				<input type="hidden" name="description" value="Order id 1234 by guest" />
          <div class="form-group">
            <label class="form-label" for="name">Card Holder Name</label>
            <input name="source[name]"  class="form-control" type="text"  required />
          </div>               
                  
          <div class="form-group">
            <label class="form-label mt-2" for="card">Card Number</label>
            <input name="source[number]"  class="form-control" type="text" maxlength="16" required />
          </div>

          <div class="form-group2">
            <label class="form-label mt-2" for="password">Expiry Month / Year & CVV</label>
            <div class="row">
              <div class="col-sm-4">
                <select name="source[month]"  class="form-select" >
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>     
              </div>
              <div class="col-sm-4">
                <select name="source[year]"  class="form-select" >
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
                <option value="24">2024</option>
                <option value="25">2025</option>
                <option value="26">2026</option>
                <option value="27">2027</option>
                <option value="28">2028</option>
                <option value="29">2029</option>
                <option value="30">2030</option>
                </select>
              </div>
              <div class="col-sm-4">
                <input name="source[cvc]"  class="form-control" type="text" placeholder="CVV"  required />
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="payment-errors"></div>
          </div>
          <div class="d-flex justify-content-end align-items-end">
            <button class="button login w-100 submit btn-primary btn mt-3 mb-2" >Paynow ($1.00)</button>
          </div>
        </form>
      
      </div>
    
    </div>
  </div>
</div>

<!-- stripe Model -->
<div class="modal fade" id="stripepaymentmodel" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header" style="background-color: #00579f;">
        <h5 class="modal-title text-white" id="exampleModalLabel2">Stripe Payment</h5>
        <button type="button" class="btn-close" id="stripeclosemodal"></button>
      </div>

      <div class="modal-body">
        <!--  -->
        <form action="process.php" method="post" name="cardpayment" id="payment-form">

          <div class="form-group">
            <label class="form-label" for="name">Card Holder Name</label>
            <input name="name" id="name" class="form-control" type="text"  required />
          </div>   

          <div class="form-group">
            <label class="form-label mt-2" for="card">Card Number</label>
            <input name="cardnumber" id="card" class="form-control" type="text" maxlength="16" data-stripe="number" required />
          </div>

          <div class="form-group2">
            <label class="form-label mt-2" for="password">Expiry Month / Year & CVV</label>
            <div class="row">
              <div class="col-sm-4">
                <select name="month" id="month" class="form-select" data-stripe="exp_month">
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>     
              </div>
              <div class="col-sm-4">
                <select name="year" id="year" class="form-select" data-stripe="exp_year">
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
                <option value="24">2024</option>
                <option value="25">2025</option>
                <option value="26">2026</option>
                <option value="27">2027</option>
                <option value="28">2028</option>
                <option value="29">2029</option>
                <option value="30">2030</option>
                </select>
              </div>
              <div class="col-sm-4">
                <input name="cvv" id="cvv" class="form-control" type="text" placeholder="CVV" data-stripe="cvc" required />
                <input name="price_charge" id="price_charge" value="" hidden/>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="payment-errors"></div>
          </div>

          <div class="d-flex justify-content-end align-items-end">
            <button class="button login w-100 submit btn-primary btn mt-3 mb-2" id="pay_total">Paynow ($1.00)</button>
          </div>

        </form>
      </div>
    </div>

  </div>
</div>
<!--  -->

<!--  -->
<!-- <script src="js/jquery-3.5.1.min.js"></script> -->
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){

        $("#renew_model_open").click(function(){
            $("#Pakageselectedmodal").modal('show');
            $("#paymentselectmodal").modal('hide');
            $("#stripepaymentmodel").modal('hide');
            $("#moyasarpaymentmodel").modal('hide');
        });

        $("#price_get").click(function(){
   
            $("#Pakageselectedmodal").modal('hide');
            $("#paymentselectmodal").modal('show');
       console.log($('#price_pak').val());price_charge
     $('#pay_total').text('Paynow ('+ $('#price_pak').val() + ')');
     $('#price_charge').val($('#price_pak').val());
     $('#pakage_c_name').val($('#pak_c_name').val());
        });

        $("#moyasarpaymentclick").click(function(){
            $("#Pakageselectedmodal").modal('hide');
            $("#paymentselectmodal").modal('hide');
            $("#stripepaymentmodel").modal('hide');
            $("#moyasarpaymentmodel").modal('show');
        });


        $("#stripemodalopen").click(function(){
            $("#moyasarpaymentmodel").modal('hide');
            $("#paymentselectmodal").modal('hide');
            $("#Pakageselectedmodal").modal('hide');
            $("#stripepaymentmodel").modal('show');
             // $("#moyasarpaymentmodel").attr("style", "display:contents");

        });
        
        $("#paymentchoosemodelclose").click(function(){
            $("#Pakageselectedmodal").modal('show');
            $("#paymentselectmodal").modal('hide');
        });

        $("#stripeclosemodal").click(function(){
            $("#stripepaymentmodel").modal('hide');
            $("#paymentselectmodal").modal('show');

        });

        $("#moyasarpaymentclosemodal").click(function(){
            $("#moyasarpaymentmodel").modal('hide');
            $("#paymentselectmodal").modal('show');
        });

        $("#pakgeselectmodalclose").click(function(){
            $("#moyasarpaymentmodel").modal('hide');
            $("#paymentselectmodal").modal('hide');
            $("#Pakageselectedmodal").modal('hide');

        });

    
    });
</script>
<!--  -->

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
Stripe.setPublishableKey('pk_test_51Kj0IyC7BxmWdrORvRYKlefkpQWt1EkaTfMw6AHWqtF0Mqz5s2xaflibFWXjGiVS6wk51jfQ0xTma9Q62MJ8NO3G003k0t0DA9');
$(function() {
   var $form = $('#payment-form');
   $form.submit(function(event) {
   // Disable the submit button to prevent repeated clicks:
   $form.find('.submit').prop('disabled', true);
    
   // Request a token from Stripe:
   Stripe.card.createToken($form, stripeResponseHandler);
    
   // Prevent the form from being submitted:
   return false;
   });
 });
function stripeResponseHandler(status, response) {
  // Grab the form:
  var $form = $('#payment-form');
    
  if (response.error) { // Problem!
    // Show the errors on the form:
    $form.find('.payment-errors').text(response.error.message);
    $form.find('.submit').prop('disabled', false); // Re-enable submission
  }else { // Token was created!
    // Get the token ID:price_pakprice_pak 
    var token = response.id;
    var renew_date = $('#renew_start_date').val()
   // Insert the token ID into the form so it gets submitted to the server:
    $form.append($('<input type="hidden" name="stripeToken">').val(token));
    $form.append($('<input type="hidden" name="start_renew_data">').val(renew_date));
   // Submit the form:
    $form.get(0).submit();
  }
};
</script>
<script>
$(document).ready(function() {
      $('#changepakage').change(function() { 
         Y_price = '<?php echo  $getCustomer['yearly_price']; ?>'
         if ($(this).is(':checked')) {
            $('#pakage_name').text('Yearly');
            $('#pak_c_name').val('Yearly');
            $('#price_pak').val(Y_price);
            console.log(Y_price);
            $('#pakage_price_text').html('<span class="sar" >SAR</span>' + Y_price);
        }
        else {
          M_price = '<?php echo  $getCustomer['monthly_price']; ?>'
           $('#pakage_name').text('Monthly');
           $('#pak_c_name').val('Monthly');
           $('#price_pak').val(M_price);
           console.log(M_price);

           $('#pakage_price_text').html('<span class="sar" >SAR</span>' + M_price);

        }
    } );
} );
</script>
</body>

</html>

