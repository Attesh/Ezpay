<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php' ?>
<?php include 'assets/common/config.php' ?>


<style type="text/css">
   .btn-primary1{
	color: #ccc;
   background-color: #ffffff;
   border-color: #ffffff;
   }
   @media print {
   .btn, li, footer,
   .deznav, .harry,.harry1, #footer,.btn-primary,
   .header a, .header i, .header img,
   .pagetitle {
   display: none !important;
   }
   .header-nav {
   display: none;
   box-shadow: none;
   }
   .sidebar,
   .header {
   box-shadow: none;
   }
  
   .eventDetailCard {
   display: block;
   background: #f6f9ff !important;
   box-shadow: none;
   }
   .card {
   background: #f6f9ff !important;
   box-shadow: none;
   }

   .logoimmage img {
   display: block;
   }
   body {
   margin-top: 0 !important;
   margin-bottom: 0 !important;
   }

   .iframe-high {
   height: 500px !important;
   }
   .content-body {
   margin-left: 10px;
   font-size: 20pt !important;
   }
   h4 {
   font-size: 20pt !important;
   }
   @page {
   size: A4;
   }
   .d-n-p{
      display: none !important;
   }
   #main, #footer {
       margin-left: 0px!important;
   }
 
}

</style>

<main id="main" class="main">
   <section class="section addEvent">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                  <form action="#" id="billingForm" method="post">
                     <!-- <h3 class="title mt-2">Add Match</h3> -->
                     <div class="row d-n-p">
                        <div class="col-md-12">
                           <h6 class="submitSuccess p-0 mb-0 pt-3" style="display: none;">Your form has been submitted successfully!</h6>
                        </div>
                        <div class="col-lg-6">
                           <h5 class="title mt-3">Customer Detail</h5>
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="form-group search-box">
                                    <!-- <label for="Quotation_customer_name">Customer Name</label> -->
                                    <input placeholder="Customer Name" class="form-control" name="custname" id="custname" type="text" onfocusout="set_cus_list()">
                                    <input type="hidden" name="selectedcus" id="selectedcus" class="">
                                    <ul class="list-unstyled" id="searchcus"></ul>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email address"  name="custemail" id="custemail">

                                 </div>
                              </div>
                           </div>
                           <div class="row mt-2">
                              
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address" id="custAddress" name="custAddress">
                                 </div>
                              </div>
                            <!--   <div class="col-md-2">
                                 <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Country" value="SA" readonly id="custCountry" name="set_contry">
                                   
                                     
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Zipcode" value=""  id="custZipcode" name="custZipcode">
                                   
                                     
                                 </div>
                              </div> -->
                              
                           </div>
                           <div class="row mt-2">
                              
                              <div class="col-md-6">
                                 <div class="form-group" id="city_div">
                                    <input type="text" class="form-control" placeholder="City" id="custCity" name="custCity">          
                                 </div>
                              </div>
                              
                              <div class="col-lg-6">
                                 <div class="form-group search-box">
                                    <input placeholder="Phone number" class="form-control" name="phoneNo" id="phoneNo" type="tel">
                                 </div>
                              </div>
                            
                           </div>
                            <input type="checkbox" name="save_cus" id="save_cus"> Add Customer
                        </div>

                        <div class="col-lg-6">
                           <h5 class="title mt-3">Invoice Detail</h5>
                           
                           <div class="row mt-2">
                              <div class="col-md-6">
                                 <div class="form-group search-box">
                                    <!-- <label for="Quotation_customer_name">Invoice #</label> -->
                                    <input value="<?php echo $_GET['inv'];?>" class="form-control" name="invNo" id="invNo" type="text" readonly>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <!-- <label for="exampleInputEmail12">Date</label> -->
                                    <input type="date" class="form-control" value="<?php echo date('Y-m-d');?>" id="exampleInputEmail12" aria-describedby="emailHelp" placeholder="">
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="mt-2">
                                    <textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="Remarks" aria-describedby="emailHelp" rows="3"></textarea>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row mt-2">
                        <div class="col-md-12">
                           <table id="server_data_table" class="table nowrap mb-0 text-center mt-4">
                              <thead>
                                 <tr class="" style="background-color: #94ceec;border-color: #94ceec;">
                                    <th scope="col">Barcode</th>
                                    <th scope="col" width="30%">Item Name</th>
                                    <th scope="col">Unit Price</th>
                                    <!-- <th scope="col" width="5%">Sale Price</th> -->
                                    <th scope="col" width="3%">Quantity</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Action</th>
                                 </tr>
                                 <tr>
                                    <form id="itemRow">
                                       
                                    
                                 	<th><input type="text" name="isbn" id="isbn_no" class="form-control"></th>
                                 	<th>
                                 		<div style="width: 100%;overflow: hidden;">
                                 			<input type="text" name="itemName" class="form-control" id="itemName">
	                                       <input type="hidden" name="selectedItem" id="selectedItem" class="">
	                                       <ul class="list-unstyled" id="searchItem"></ul>
                                 		</div>
                                 		
                                    </th>
                                    <!-- <th><input type="text" name="publisher" id="publisher_val" class="form-control" readonly style="width:160px;"></th> -->
                                    <th><input type="text" name="listPrice" id="list_price" class="form-control"readonly></th>
                                    <!-- <th><input type="text" name="salePrice" id="sale_price" class="form-control"readonly></th> -->
                                    <th><input type="text" name="quantity" id="qty" value="1" class="form-control"></th>
                                    <th><input type="text" name="totalPrice" id="total_price" class="form-control"readonly></th>
                                 	<th>
                                 		<button type="button" class="btn btn-primary" id="add_btn">Add</button>	
                                 	</th>
                                 </form>
                                 </tr>
                              </thead>
                              <tbody id="t_body">
                                 
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="d-flex justify-content-end">

                     	<!-- <div class="col-md-2">
                     		<div class="mt-2">
                     			<div class="d-flex flex-column justify-content-start">
                     				<div class="mb-2">
                     					<label>Total Item</label>
                     					<input style="text-align:right" type="text" name="totalItem" id="total_item" class="form-control" readonly>
                     				</div>
                     				<div>
                     					<label>Total Quantity</label>
                     					<input style="text-align:right" type="text" name="totalItem" id="total_quantity" class="form-control" readonly>
                     				</div>
                     			</div>
                     			<div class="justify-content-start align-items-center d-flex mt-2">
                     				<a class="btn btn-primary1 addDisPer mx-1">%</a>
                     				<a class="btn btn-primary1 addDisDollar">SAR</a>
                     			</div>
                     		</div>
                     	</div> -->

                     	<div class="col-md-10 mt-3 mb-3">
                           <div class="d-flex justify-content-end align-items-end">
                              <table class="table w-auto" style="font-weight: 600;">
                                 <tbody>
                                    <tr class="totalCal">
                                       <td colspan="3"></td>
                                       <td>Sub Total</td>
                                       <td>
                                          <div class="d-flex justify-content-end align-items-center">
                                             <span>SAR &nbsp;</span>
                                             <input style="text-align:right" type="text" id="sub_total_hidden" class=" form-control w-50" name="sub_total" value="" readonly>
                                             <input type="hidden" id="orignal_total_price" style="text-align:right" class=" form-control w-50" name="org_total" value="" readonly>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr class="totalCal">
                                       <td colspan="3"></td>
                                       <td>VAT&nbsp;(10%)</td>
                                       <td>
                                          <div class="d-flex justify-content-end align-items-center">
                                             <span>SAR &nbsp;</span>
                                             <input style="text-align:right" type="text" id="totalvat" class=" form-control w-50" name="sub_total" value=""readonly>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr class="totalCal">
                                       <td colspan="3"></td>
                                       <td>Discount</td>
                                       <td>
                                          <div class="d-flex justify-content-end align-items-center">
                                             <span>SAR &nbsp;</span>
                                             <input style="text-align:right" type="text" id="totalDis" placeholder="0.00" class=" form-control w-50" name="sub_total" value="" onkeyup="get_newtotal()">
                                          </div>
                                       </td>
                                    </tr>
                                    <tr class="totalCal">
                                       <td colspan="3"></td>
                                       <td>Grand Total</td>
                                       <td>
                                          <div class="d-flex justify-content-end align-items-center">
                                             <span>SAR &nbsp;</span>
                                             <input style="text-align:right" type="text" id="discounted_Total" class=" form-control w-50" name="discountedTotal" value=""readonly>
                                             <input type="hidden" style="text-align:right" id="orignal_discounted_Total" class=" form-control w-50" name="org_disc" value=""readonly>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr class="showDollar" style="display: none;">
                                       <td colspan="3"></td>
                                       <td>Additional Discount
                                       </td>
                                       <td>
                                          <div class="d-flex justify-content-end align-items-center">
                                             <p class="mb-0">

                                                <span>$</span>
                                             </p>
                                             <input style="text-align:right" type="text" id="additional_dis" class=" form-control w-50" name="discountedTotal" value="" onkeydown="return (event.keyCode!=13);">
                                          </div>
                                       </td>
                                    </tr>
                                      <tr class="showPer" style="display: none;">
                                       <td colspan="3"></td>
                                       <td>Additional Discount</td>
                                       <td>
                                          <div class="d-flex justify-content-end align-items-center">
                                             <p class="mb-0">
                                                <span>%</span>
                                             </p>
                                             <input type="text" id="discount_add" style="text-align:right" class=" form-control w-50" name="discountedTotal" value="" onkeydown="return (event.keyCode!=13);">
                                          </div>
                                       </td>
                                    </tr>
                                      <!-- <tr>
                                       <td colspan="3"></td>
                                       <td>Total Amount</td>
                                       <td>
                                          <div class="d-flex justify-content-end align-items-center">
                                             <p class="mb-0">

                                                <span>SAR &nbsp;</span>
                                             </p>
                                             <input style="text-align:right" type="text" id="shippingCost" class=" form-control w-50" name="shippingCost" value="" onkeydown="return (event.keyCode!=13);">
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td colspan="3"></td>
                                       <td>Grand Total</td>
                                       <td>
                                          <div class="d-flex justify-content-end align-items-center">
                                             <p class="mb-0">
                                                <span>SAR &nbsp;</span>
                                             </p>
                                             <input style="text-align:right" type="text" id="grand_total" class=" form-control w-50" name="discountedTotal" value="" readonly>
                                          </div>
                                       </td>
                                    </tr> -->
                                    
                                     
                                 </tbody>
                              </table>
                           </div>
                        </div>

                     </div>

                     <div class="row">
                        <div class="col-lg-12">
                           <div class="d-flex justify-content-end align-items-end">
                              <!-- <a href="manage-items.php" class="btn btn-secondary me-2 backbtnn">Complete Order</a> -->
                              <button  class="btn btn-primary me-2 completeOrder">Complete Order</button>
                              <!-- <button type="submit"  name="save" class="btn btn-primary me-2 completeShip">Ship Later</button> -->
                              <!-- <button type="submit"  name="save" class="btn btn-primary me-2" onclick="window.print();">Print</button> -->
                              <!-- <input type="submit" name="save" class="btn btn-primary m-1 buttnvieww" value="Save"> -->
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
</main>

<div class="modal fade" id="editBilling" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="userPassModal" aria-hidden="true">
  <div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header managemodal">
           <h5 class="modal-title" id="staticBackdropLabel">Edit</h5>
           <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="validatePasscode" method="post">
         <div class="modal-body py-3">
            <div class="row">
                  <div class="col-md-12">
                     <div class="mb-3">
                        <input type="text" name="itemName" id="edit_name" class="form-control" placeholder="Item Name" readonly>
                         <input type="hidden" name="row" id="edit_item" class="form-control" readonly>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-3">
                        <input type="text" name="isbn" id="edit_isbn" class="form-control" placeholder="ISBN" readonly>
                     </div>
                  </div>
                 <!--  <div class="col-md-6">
                     <div class="mb-3">
                        <input type="text" name="publisher" id="edit_publisher" class="form-control" readonly placeholder="Publisher">
                     </div>
                  </div> -->
                  <div class="col-md-6">
                     <div class="mb-3">
                        <input type="text" name="listPrice" id="edit_list_price" class="form-control" placeholder="List Price" readonly>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="mb-3">
                        <input type="text" name="salePrice" id="edit_sale_price" class="form-control" placeholder="Sale Price" readonly>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-3">
                        <input type="text" name="quantity" id="edit_qty" class="form-control" placeholder="Quantity">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-3">
                        <input type="text" name="totalPrice" id="edit_total" class="form-control" placeholder="Total Price" readonly>
                     </div>
                  </div>
                
            </div>
         </div>
         <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <!--  <a href="manage-items.php" type="submit" class="btn btn-primary submitPassCode">Update</a> -->
             <button type="button" onclick="upd_row()" class="btn btn-primary " >Update</button>


         </div>
       </form>
     </div>
  </div>
</div>


<?php include'includes/footer.php'?>


 <script type="text/javascript">
//    function randomNumber() {
//     var min = 1;
//     var max = 999999;
//    return (Math.floor(Math.random() * (max - min + 1)) + min);

//    // console.log((Math.random() * (max - min + 1)) + min);


// }

// // document.getElementById('invNo').value = randomNumber() + new Date().getTime();
// console.log(new Date().getTime());
// document.getElementById('invNo').value = randomNumber();

</script> 


<script type="text/javascript">
   $(window).on("load", function () {

      var inv = <?php echo $_GET['inv']; ?> ;
          $.ajax({
              method: "POST",
              url: "ajaxfiles/get_order_detail.php",
              data: { inv:inv }
            })
              .done(function( result ) {
                
                //alert( "Data Saved: " + arr.isbn );
                $("#t_body").html('');
               $("#t_body").html(result);
               get_total_values() ;
			   
                 $("#isbn_no").focus();
              });
      
});
</script>
<script type="text/javascript">



   $(document).ready(function() {
      $('.addDisPer').click(function(){
         $('.showPer').toggle();
         $('#discount_add').val('');
		 $('#discount_add').focus();
         $('.showDollar').hide();
         $('#additional_dis').val('');
		 get_total_values();

       });
       $('.addDisDollar').click(function(){
         $('.showDollar').toggle();
         $('#additional_dis').val('');
		  $('#additional_dis').focus();
         $('.showPer').hide();
         $('#discount_add').val('');
		 get_total_values();
       });
   });

   
</script>
<script type="text/javascript">

   $("#add_btn").click(function(){
      // alert('hi');
         
         
             var item_isban = $("#isbn_no").val();  
             var itemName = $("#itemName").val();  
             var item_sale =    $("#sale_price").val();
             var item_qty =   $("#qty").val();
             var total_val =    $("#total_price").val();
             var inv = <?php echo $_GET['inv']; ?> ;
             var item_isban = $("#isbn_no").val(); 
             var custname = $("#custname").val();  
             var custemail = $("#custemail").val(); 
             var phoneNo = $("#phoneNo").val();  
             var city = $("#custCity").val();
             var custAddress = $("#custAddress").val(); 
             var selectedItem = $('#selectedItem').val();
             var list_price = $("#list_price").val();  

             //if(item_isban==''){return false;}
             $.ajax({
              method: "POST",
              url: "ajaxfiles/add_item.php",
              data: { item_sale: item_sale, item_qty:item_qty, total_val:total_val, item_isban:item_isban, inv:inv, custname:custname,custemail:custemail,phoneNo:phoneNo,custAddress:custAddress,list_price:list_price,selectedItem:selectedItem,city:city,itemName:itemName  }
            })
              .done(function( result ) {
                $("#t_body").html('');
               $("#t_body").html(result);
               get_total_values() ;
               $("#isbn_no").val('');  
               $("#sale_price").val('');
               $("#qty").val('');
               $("#total_price").val('');
               $('#itemName').val('');
               $('#list_price').val('');
			   $("#isbn_no").focus();
            get_newtotal();
              });
}); 


   var input = document.getElementById("qty");

   input.addEventListener("keypress", function(event) {
     if (event.key === "Enter") {
       event.preventDefault();
       document.getElementById("add_btn").click();
     }
   });

   var isbn = document.getElementById("isbn_no");

   isbn.addEventListener("keypress", function(event) {
     if (event.key === "Enter") {
       event.preventDefault();
       document.getElementById("add_btn").click();
     }
   });


   $(document).ready(function(){
      $('#searchItem').hide();

      var searchRequest = null;

      $(function () {
          var minlength = 3;

          $("#itemName").keyup(function () {
              var that = this,
              value = $(this).val();
               $('#selectedItem').val('0'); 
                $('#isbn_no').val('');
                $('#qty').val('1'); 
                 $('#list_price').val('');
                  $('#total_price').val('');
              if (value.length >= minlength ) {
                  if (searchRequest != null) 
                      searchRequest.abort();
                  searchRequest = $.ajax({
                      type: "GET",
                      url: "ajaxfiles/billing.php",
                      data: {
                          'search_keyword' : value
                      },
                      dataType: "text",
                      success: function(msg){
                        console.log(msg);
                          $('ul#searchItem').show();
                          $('#searchItem').html(msg);

                          if(msg ='<span>No Record Found.</span>'){

                           $('#list_price').removeAttr('readonly'); 
                          }else{
                           $('#list_price').attr('readonly', 'readonly');
                          }
                      }
                  });
              }
          });
      });

      var searchIsbn = null;

      $(function () {

          $("#isbn_no").keyup(function () {

              var that = this,
              value = $(this).val();
console.log(value);
              if (value) {
                  if (searchRequest != null) 
                      searchRequest.abort();
                  searchRequest = $.ajax({
                      type: "GET",
                      url: "ajaxfiles/searchIsbn.php",
                      data: {
                          'search_isbn' : value
                      },
                      dataType: "text",
                      success: function(result){
                        
                      var obj = jQuery.parseJSON(result);
                        $("#sale_price").val(obj.sale_price);
                        $("#qty").val(1);
                        $('#itemName').val(obj.item);
                        $('#list_price').val(obj.list_price);
                        $("#total_price").val(obj.sale_price*1);
                      }
                  });
              }
          });
      });
         
        }); 
   $(document).ready(function(){  

      $('#searchcus').hide();

      var searchRequest = null;

      $(function () {
          var minlength = 3;

          $("#custname").keyup(function () {
              var that = this,
              value = $(this).val();
              $("#selectedcus").val(0);
              if (value.length >= minlength ) {
                  if (searchRequest != null) 
                      searchRequest.abort();
                  searchRequest = $.ajax({
                      type: "GET",
                      url: "ajaxfiles/search_customer.php",
                      data: {
                          'search_keyword' : value
                      },
                      dataType: "text",
                      success: function(msg){
                        console.log(msg);
                          $('ul#searchcus').show();
                          $('#searchcus').html(msg);
                      }
                  });
              }else{ $('#searchcus').hide();}
          });
      });

   });
   $(document).ready(function() {
     $("#searchItem").on("click", "li", function() {
       $('#itemName').val($(this).html());
       $("#qty").focus();
       $('ul#searchItem').hide();
	   /*if ($("#qty").is(":focus")) {
	   $("#add_btn").trigger('click');
	   $("#isbn_no").focus();
	   }*/
     });
   });
   
  
 


   //To select a country name
   function selectCountry(val) {
      $("#search-box").val(val);
      $("#suggesstion-box").hide();
   }
   

   $('.completeShip').on('click', function() {
      var $form = $("form"),
      $successMsg = $(".submitSuccess");
      $.validator.addMethod("letters", function(value, element) {
        return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
      });
      $form.validate({
        rules: {
          custname: {
            required: true,
          },
          phoneNo: {
            required: true,
          },
          custAddress: {
            required: true,
          },
          custCountry: {
            required: true,
          },
          custState: {
            required: true,
          },
          custCity: {
            required: true,
          },
		  shippingCost: {
            required: true,
          },
          custemail: {
            required: true,
            email: true
          }
        },
        messages: {
          custname: "This field is required",
          custemail: "This field is required",
          custAddress: "This field is required",
          phoneNo: "This field is required",
          custCountry: "This field is required",
          custState: "This field is required",
          custCity: "This field is required",
        },
        submitHandler: function() {

         // add record in order 
         var name = $("#custname").val();
         var email = $("#custemail").val();
         var p_no = $("#phoneNo").val();
         var address = $("#custAddress").val();

         var inv_date = $("#exampleInputEmail12").val();
         var remarks = $("#exampleInputEmail1").val();
         var inv_no = $("#invNo").val();

         var country_val = $('#custCountry').val();
         var state_val = $('#custState').find(":selected").val();
         var city_val = $('#custCity').val();

         var total_price = $("#sub_total_hidden").val();
         var total_dis = $("#totalDis").val();
         var discon_total = $("#discounted_Total").val();
         var discon_per = $("#discount_add").val();
         var disc_amount = $("#additional_dis").val();
         var amount_total = $("#grand_total").val();
		 var shippingCost = $("#shippingCost").val();
		  var custZipcode = $("#custZipcode").val();
        var selectedcus = $("#selectedcus").val();  
        var vat_total = $("#totalvat").val();  
         
         $.ajax({
              method: "POST",
              url: "ajaxfiles/insert_order.php",
              data: { name:name, email:email, p_no:p_no, address:address, inv_date:inv_date, remarks:remarks, inv_no:inv_no, country:country_val, state:state_val,custZipcode:custZipcode, city:city_val, total_price:total_price, total_dis:total_dis, discon_total:discon_total, discon_per:discon_per,  disc_amount:disc_amount, shippingCost:shippingCost,amount_total:amount_total, ship:1,selectedcus:selectedcus,vat_total:vat_total }
            })
 
              .done(function( result ) {window.location.href = "create_billing.php";
			  /*
                
               $successMsg.show().delay(2000).fadeOut('slow');
          var confirmPrint = confirm("Do you want to print?");

          if (confirmPrint) {
            var orderId = $('#orderId').val();
             
              $.get("view-orders.php?id="+result, function(data, status){
                   //alert("Data: " + data + "\nStatus: " + status);
                        window.location.href = "view-orders.php?id="+result+" ";

                   });

           }else{
                      window.location.href = "create_billing.php";
           }
                
              */});
              //

          
        }
      });

      
   });
     $('.completeOrder').click(function(event) {

        
               event.preventDefault();
                  // add record in order 
           var name = $("#custname").val();
		  if(name==''){
			 name = "Walking Customer"; 
		  }
         var email = $("#custemail").val();
         var p_no = $("#phoneNo").val();
         var address = $("#custAddress").val();

         var inv_date = $("#exampleInputEmail12").val();
         var remarks = $("#exampleInputEmail1").val();
         var inv_no = $("#invNo").val();

         var country_val = $('#custCountry').val();
         var state_val = $('#custState').find(":selected").val();
         var city_val = $('#custCity').val();

         var total_price = $("#sub_total_hidden").val();
         var total_dis = $("#totalDis").val();
         var discon_total = $("#discounted_Total").val();
         var discon_per = $("#discount_add").val();
         var disc_amount = $("#additional_dis").val();
         var amount_total = $("#grand_total").val();
		 var shippingCost = $("#shippingCost").val();
		  var custZipcode = $("#custZipcode").val();
         var selectedcus = $("#selectedcus").val();  
         var cust_save = $('#save_cus').is(':checked');
         var vat_total = $("#totalvat").val();  
         
         $.ajax({
              method: "POST",
              url: "ajaxfiles/insert_order.php",
              data: { name:name, email:email, p_no:p_no, address:address, inv_date:inv_date, remarks:remarks, inv_no:inv_no, country:country_val, state:state_val,custZipcode:custZipcode, city:city_val, total_price:total_price, total_dis:total_dis, discon_total:discon_total, discon_per:discon_per,  disc_amount:disc_amount, shippingCost:shippingCost,amount_total:amount_total, ship:1,selectedcus:selectedcus,cust_save:cust_save,vat_total:vat_total }
            })

              .done(function( result ) {
               var confirmPrint = confirm("Do you want to print?");
                  if (confirmPrint) {
            var orderId = $('#orderId').val();
            //alert(orderId);
             window.location.href = "view-orders.php?id="+result+" ";
           }else{
                      window.location.href = "create_billing.php";
           }
                
              });
         /*var confirmPrint = confirm("Do you want to print?");
                  if (confirmPrint) {
            var orderId = $('#orderId').val();
            //alert(orderId);
             window.location.href = "view-orders.php?id="+orderId+" ";
           }*/
          
      }); 

</script>
<script type="text/javascript">
   function get_detail(a){
   
      var item = a ;
      $.ajax({
              method: "POST",
              url: "ajaxfiles/item_detail.php",
              data: { item_id: item }
            })
              .done(function( result ) {
                
                var arr = $.parseJSON(result);
                //alert( "Data Saved: " + arr.isbn );
                $("#isbn_no").val(arr.isbn);
                //$("#sale_price").val(arr.sale_price);
                $("#sale_price").val(arr.list_price);
                $("#list_price").val(arr.list_price);
                $("#qty").val('1');
                //$("#total_price").val(arr.sale_price*1);
                $("#total_price").val(arr.list_price*1);
                $("#selectedItem").val(item);
              });
   }
   function get_customer(a){
   
      var cus_id = a ;
      $.ajax({
              method: "POST",
              url: "ajaxfiles/get_customer.php",
              data: { item_id: cus_id }
            })
              .done(function( result ) {
                
                var arr = $.parseJSON(result);
                //alert( "Data Saved: " + arr.isbn ); 
                $("#custname").val(arr.name);
                $("#custemail").val(arr.email);
                $("#custAddress").val(arr.address);
                $("#custCity").val(arr.city);
                $("#phoneNo").val(arr.phone);
                $("#selectedcus").val(cus_id);
                $("#searchcus").hide();
              });
   }
   $("#qty").keyup(function(){

               var qty_val = $('#qty').val();
               var sale_p = $("#list_price").val();
               if(qty_val!='' && $.isNumeric(qty_val)){

                   $("#total_price").val(qty_val*sale_p);

               }
      }); 
   $("#edit_qty").keyup(function(){

               var qty_val1 = $('#edit_qty').val();
 			   var sale_p1 = $("#edit_sale_price").val();
               if(qty_val1!='' && $.isNumeric(qty_val1)){

                   $("#edit_total").val(qty_val1*sale_p1);

               }
      }); 
   
         function edit_row(row_id){
                  //alert(row_id);
                  $.ajax({
              method: "POST",
              url: "ajaxfiles/get_detail.php",
              data: { row: row_id }
            })
              .done(function( result ) {
                
                var arr = $.parseJSON(result);
                //alert( "Data Saved: " + arr.isbn );
                $("#edit_isbn").val(arr.isbn);
                $("#edit_name").val(arr.name);
                $("#edit_sale_price").val(arr.sale_price);
                $("#edit_list_price").val(arr.list_price);
                $("#edit_qty").val(arr.item_qty);
                $("#edit_total").val(arr.item_total);
                $("#edit_item").val(arr.row_id);

              });
         }

            function upd_row(){

                     
               upd_row_id = $("#edit_item").val();
               upd_qty = $("#edit_qty").val();
               upd_total = $("#edit_total").val();
                  $.ajax({
              method: "POST",
              url: "ajaxfiles/update_detail.php",
              data: { row: upd_row_id, upd_qty:upd_qty, upd_total:upd_total }
            })
              .done(function( result ) {
                //alert( "Data Saved: " + arr.isbn );
                $("#t_body").html('');
               $("#t_body").html(result);
               
                //$('#editBilling').modal('toggle');
               get_newtotal();
              get_total_values() ;
              //$('#editBilling').modal('hide');
             $('.modal-backdrop.show').css('opacity', '0');

              });
              
            }
function del_rec(row_index){
   var del_row = row_index ;
   var inv = <?php echo $_GET['inv']; ?> ;
          $.ajax({
              method: "POST",
              url: "ajaxfiles/delete_detail.php",
              data: { row: del_row , inv:inv }
            })
              .done(function( result ) {
                
                //alert( "Data Saved: " + arr.isbn );
                $("#t_body").html('');
               $("#t_body").html(result);
               get_total_values() ;
                
              });
}
         function get_total_values(){
            var inv = <?php echo $_GET['inv']; ?> ;
            $.ajax({
              method: "POST",
              url: "ajaxfiles/get_total.php",
              data: { inv:inv }
            })

              .done(function( result ) {
                
                   var data = $.parseJSON(result);
                //alert( "Data Saved: " + arr.isbn );
                $("#total_item").val(data.total_item);
                $("#total_quantity").val(data.total_quantity);

                $("#sub_total_hidden").val(data.total_list_price); 
                $("#orignal_total_price").val(data.total_list_price); 
                $("#discounted_Total").val(data.with_vat ); 
                 $("#orignal_discounted_Total").val(data.total_sale_price  ); 
                  $("#totalvat").val(data.vat ); 
                var price_total = data.total_list_price;
                var discon_total = parseFloat(data.total_sale_price);
                var cal_dis =  price_total - discon_total;
 				cal_disText = cal_dis.toFixed(2) ;
				       $("#totalDis").val(cal_disText); 
 				var shippingCost =	 $("#shippingCost").val();
				var additional_dis =	 $("#additional_dis").val();
				if(additional_dis!=''){
					additional_dis = parseFloat(additional_dis);
						discon_total = discon_total - additional_dis;
					
				}
 				var discount_add =	 $("#discount_add").val();
				if(discount_add!=''){
					discount_add = parseFloat(discount_add);
						cal_dis = discon_total - (discon_total *discount_add/100) ;
					
				}
				var grand_total=0;
				if(shippingCost!=''){
					shippingCost = parseFloat(shippingCost);
				 grand_total=discon_total + shippingCost;
				}else{
			     grand_total= discon_total;
					
				}
              
 				
                $("#grand_total").val(grand_total);
				
				
				  $("#isbn_no").val('');  
               $("#sale_price").val('');
               $("#qty").val('');
               $("#total_price").val('');
               $('#itemName').val('');
               $('#list_price').val('');

                
              }); 
         }
         $("#discount_add").keyup(function () { 

            var disc_total = parseFloat($("#discounted_Total").val());
            var discount_per = parseFloat($("#discount_add").val());
			if($("#discount_add").val()==''){discount_per=0;}
			var shippingCost = parseFloat($("#shippingCost").val());
			if($("#shippingCost").val()==''){shippingCost=0;}
            var get_per = (disc_total * discount_per ) / 100 ;
            var curr = (disc_total - get_per)+shippingCost ;
             $("#grand_total").val(curr);
         });
          $("#additional_dis").keyup(function () { 

            var disc_total = parseFloat($("#discounted_Total").val());
             var dis_amount = parseFloat($("#additional_dis").val());
			if($("#additional_dis").val()==''){dis_amount=0;}
			var shippingCost = parseFloat($("#shippingCost").val());
			if($("#shippingCost").val()==''){shippingCost=0;}
            //var get_per = (disc_total * discount_per ) / 100 ;
            var new_curr = (disc_total - dis_amount )+shippingCost;
             $("#grand_total").val(new_curr);
         });
		  $("#shippingCost").keyup(function () { 

            var disc_total = $("#discounted_Total").val();
            var dis_amount = $("#additional_dis").val();
 			if($("#additional_dis").val()==''){dis_amount=0;}
			var discount_per = $("#discount_add").val();
			if($("#discount_add").val()==''){discount_per=0;}
			var shippingCost = parseFloat($("#shippingCost").val());
			if($("#shippingCost").val()==''){shippingCost=0;}
            //var get_per = (disc_total * discount_per ) / 100 ;
            var new_curr = (disc_total - dis_amount - discount_per )+shippingCost;
			new_curr =parseFloat(new_curr).toFixed(2);
             $("#grand_total").val(new_curr);
         });
 $("#phoneNo").keyup(function () { 
 var phoneNo = $("#phoneNo").val();
   let cleaned = ('' + phoneNo).replace(/\D/g, '');
 
  //Check if the input is of correct length
  let match = cleaned.match(/^(\d{3})(\d{3})(\d{4})$/);

  if (match) {
    phoneNo = '(' + match[1] + ') ' + match[2] + '-' + match[3]
  };
  $("#phoneNo").val(phoneNo);
 
 });
         $("#list_price").keyup(function () { 
                     $("#searchItem").hide();
                  var item_qt = $("#qty").val();
                  var list_price = $("#list_price").val();
                  if($.isNumeric(item_qt) && $.isNumeric(list_price) ){
                   var total_pri = $("#total_price").val(item_qt * list_price);
                  }


          }); 
         function set_cus_list(){

                  $("#searchcus").hide();
         }
         function get_newtotal(){
                  var sub_tptal = $("#sub_total_hidden").val();
                  var given_dis =  $("#totalDis").val();
                  var given_vat =  $("#totalvat").val();
                  if($.isNumeric(given_dis) && $.isNumeric(sub_tptal) ){
                     $("#discounted_Total").val(parseFloat(sub_tptal)-parseFloat(given_dis)+parseFloat((given_vat)));
                  }
                     }
                     $(document).keydown(function(event) {
    if (event.which === 13) {
        //alert('Enter key is pressed!');
      event.preventDefault();
    }
});

</script>

