<?php include'includes/head.php' ?>
<?php include'includes/header.php' ?>
<?php include'includes/sidebar.php' ?>
<style type="text/css">
   @media print {
   .pagetitle {
   display: none;
   }
   .header-nav {
   display: none;
   box-shadow: none;
   }
   .header {
   box-shadow: none;
   }
   .header a, .header i, .header img {
   display: none;
   }
   .harry {
   display: none;
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
   .sidebar {
   box-shadow: none;
   }
   .harry1 {
   display: none;
   }
   .logoimmage img {
   display: block;
   }
   #footer {
   display: none;
   }
   .btn-primary {
   display: none;
   }
   body {
   margin-top: 0 !important;
   margin-bottom: 0 !important;
   }
   /*biord*/
   #header {
   display: none !important;
   }
   .iframe-high {
   height: 500px !important;
   }
   #footer {
   display: none !important;
   }
   .deznav {
   display: none !important;
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
   .btn {
   display: none !important;
   }
   li {
   display: none !important;
   }
   .footer {
   display: none !important;
   }
   }
</style>
<main id="main" class="main">
   <section class="section addEvent">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                  <form action="#" method="post">
                     <!-- <h3 class="title mt-2">Add Match</h3> -->
                     <div class="row">
                        <div class="col-lg-6">
                           <h5 class="title mt-3">Customer Detail</h5>
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="form-group search-box">
                                    <!-- <label for="Quotation_customer_name">Customer Name</label>															 -->
                                    <input size="60" maxlength="255" autocomplete="nope" placeholder="Customer Name" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_name" type="text">
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">Email address</label> -->
                                    <input type="email" class="form-control" placeholder="Email address" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
                                 </div>
                              </div>
                           </div>
                           <div class="row mt-2">
                              <div class="col-lg-6">
                                 <div class="form-group search-box">
                                    <!-- <label for="Quotation_customer_name">Phone number</label>															 -->
                                    <input size="60" maxlength="255" autocomplete="nope" placeholder="Phone number" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_name" type="tel">
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">Address</label> -->
                                    <input type="text" class="form-control" placeholder="Address" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
                                 </div>
                              </div>
                           </div>
                           <div class="row mt-2">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <!-- <label for="exampleFormControlSelect21">Country</label> -->
                                    <select class="form-select" aria-label="Default select example">
                                       <option selected>Country</option>
                                       <option value="1">Argentina</option>
                                       <option value="2">France</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <!-- <label for="exampleFormContlect21">State</label> -->
                                    <select class="form-select" aria-label="Default select example">
                                       <option selected>State</option>
                                       <option value="1">sindh</option>
                                       <option value="2">kpk</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <!-- <label for="exampleFormContlect21">City</label> -->
                                    <select class="form-select " aria-label="Default select example">
                                       <option selected>City</option>
                                       <option value="1">isb</option>
                                       <option value="2">rwp</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <h5 class="title mt-3">Invoice Detail</h5>
                           
                           <div class="row mt-2">
                              <div class="col-md-6">
                                 <div class="form-group search-box">
                                    <!-- <label for="Quotation_customer_name">Invoice #</label>															 -->
                                    <input size="60" maxlength="255" autocomplete="nope" placeholder="Invoice #" class="form-control" name="Quotation[cust_name]" id="Quotation_cust_name" type="text">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <!-- <label for="exampleInputEmail12">Date</label> -->
                                    <input type="date" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp" placeholder="">
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
                           <table id="server_data_table" class="table nowrap mb-0 text-center">
                              <thead>
                                 <tr>
                                    <!-- <th><input type="checkbox" name=""></th>-->
                                    <th scope="col">ISBN</th>
                                    <th scope="col">Item Name</th>
                                    <th scope="col">Publisher</th>
                                    <th scope="col">List Price</th>
                                    <th scope="col">Sale Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Action</th>
                                 </tr>
                                 <tr>
                                 	<th><input type="text" name="isbn" class="form-control"></th>
                                 	<th><input type="text" name="itemName" class="form-control"></th>
                                 	<th><input type="text" name="publisher" class="form-control" readonly=""></th>
                                 	<th><input type="text" name="listPrice" class="form-control"></th>
                                 	<th><input type="text" name="salePrice" class="form-control"></th>
                                 	<th><input type="text" name="quantity" class="form-control"></th>
                                 	<th><input type="text" name="totalPrice" class="form-control"></th>
                                 	<td>
                                 		<button type="button" class="btn btn-primary">Add</button>	
                                 		
                                 	</td>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>12</td>
                                    <td>32.40</td>
                                    <td>78.23</td>
                                    <td>78.23</td>
                                    <td>348</td>
                                    <td>38</td>
                                    <td>3,748</td>
                                    <td>        	
                                       <a href="#" class="me-2"><i class="bi bi-pencil-square" style="color:blue;"></i></a>
                                       <a onclick="return confirm('Are you sure you want to delete?');" href="#"> <i class="bi bi-trash" style="color:red;"></i></a>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="d-flex justify-content-between align-items-start">
                     	<div class="col-md-5">
                     		<div class="mt-2">
                     			<div class="d-flex justify-content-start">
                     				<div class="w-25">
                     					<label>Total Item</label>
                     					<input type="text" name="totalItem" class="form-control">
                     				</div>
                     				<div class="w-25">
                     					<label>Total Item</label>
                     					<input type="text" name="totalItem" class="form-control">
                     				</div>
                     			</div>
                     			<div class="justify-content-start align-items-center d-flex mt-2">
                     				<button class="btn btn-primary btn-sm addDisPer mx-1">%</button>
                     				<button class="btn btn-primary btn-sm addDisDollar">$</button>
                     			</div>
                     		</div>
                     	</div>
                     	<div class="col-md-6">
                     		<div class="d-flex justify-content-end align-items-end">
	                     		<table class="table w-auto" style="font-weight: 600;">
		                           <tbody>
		                              <tr class="totalCal">
		                                 <td colspan="3"></td>
		                                 <td> Total Price</td>
		                                 <td><span id="subtotal_sign">$</span><span id="sub_total">0.01</span><input type="hidden" id="sub_total_hidden" value="" name="sub_total"></td>
		                              </tr>
		                              <tr class="totalCal">
		                                 <td colspan="3"></td>
		                                 <td>Total Discount</td>
		                                 <td>
		                                    <span id="vatInpt">0.00</span>
		                                    <input type="hidden" id="vat" value="16" name="sub_total">
		                                 </td>
		                              </tr>
		                              <tr class="totalCal">
		                                 <td colspan="3"></td>
		                                 <td>Discounted Total</td>
		                                 <td><span id="alltotal_sign">$</span><span id="all_total">0.01</span></td>
		                              </tr>
		                              <tr class="totalCal">
		                                 <td colspan="3"></td>
		                                 <td>Additional Discount</td>
		                                 <td>
		                                    <span class="percentageIcon">%</span>
		                                    <span class="dollarIcon">$</span>
		                                 </td>
		                              </tr>
		                           </tbody>
		                        </table>
                     		</div>
                     	</div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="d-flex justify-content-end align-items-end">
                              <!-- <a href="manage-items.php" class="btn btn-secondary me-2 backbtnn">Complete Order</a> -->
                              <button type="submit"  name="save" class="btn btn-primary me-2">Complete Order</button>
                              <button type="submit"  name="save" class="btn btn-primary me-2">Complete to Ship</button>
                              <!-- <button type="submit"  name="save" class="btn btn-primary me-2" onclick="window.print();">Print</button> -->
                              <!-- <input type="submit" name="save" class="btn btn-primary m-1 buttnvieww" value="Save"> -->
                           </div>
                        </div>
                     </div>
               </div>
            </div>
         </div>
         </form>
      </div>
      </div>
   </section>
</main>
<?php include'includes/footer.php'?>
<script type="text/javascript">
   $(document).ready(function() {
       $('.select2').select2();
   });
</script>