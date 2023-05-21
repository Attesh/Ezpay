<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'assets/common/config.php' ?>

<?php include 'includes/sidebar.php' ;

$userid = $_SESSION['userid'];
// $userid = $_SESSION['userid'];

$check_order = $db->selectSRow(array("*"),"users","id = '$userid'");

if($check_order['active_pakage'] != 'commission'){
   ?>
    <script>
         location.replace("https://fisdemoprojects.com/ezpay/member/manage-subscription.php");
         </script>
   <?php 
}
?>
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<main id="main" class="main">
   <div class="pagetitle">
      <h1>Reports</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Reports</li>
        </ol>
      </nav>
   </div>
   <section class="section manageusers">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between">
                     <h4 class="card-title">Manage Reports</h4>
                     <!-- <h5 class="card-title"> <a href="add-orders.php" class="btn btn-primary btn-sm me-2">Add Order</a></h5> -->
                     <!-- <h5 class="card-title"><a class="btn btn-primary btn-sm me-2" type="button" class="btn btn-primary" href="add-transaction.php">Add Report</a></h5> -->
                  </div>
                  <table class="table datatable" id="example">
                     <thead>
                        <tr>
                           <!-- <th><input type="checkbox" name=""></th>-->
                           <th scope="col">Customer Name</th>
                           <th scope="col">Order No.</th>
                           <th scope="col">Item Name</th>
                           <th scope="col">Date</th>
                           <th scope="col">Prize</th>
                           <th scope="col">Quatity</th>
                           <th scope="col">Status</th>
                           <th scope="col">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>ali</td>
                           <td>322240</td>
                           <td>pass</td>
                           <td>7-3-23</td>
                           <td>370</td>
                           <td>8</td>

                            <td>
                              <div class="text-center">
                                 <a href="#" class="btn btn-xs btn-warning"><span class="">Active</span></a>
                              </div>
                           </td>

                           <td>
                              <a href="view-reports.php" class="me-2"><i class="bi bi-eye"></i></a>         	
                           </td>
                        </tr>
                        <tr>
                           <td>ali</td>
                           <td>322240</td>
                           <td>pass</td>
                           <td>7-3-23</td>
                           <td>370</td>
                           <td>8</td>
                           <td>
                            <div class="text-center">
                              <a href="#" class="btn btn-xs btn-danger"><span class=""> Deactive</span></a>
                            </div>
                           </td>
                           <td>
                              <a href="view-reports.php" class="me-2"><i class="bi bi-eye"></i></a>      	
                           </td>
                        </tr>
                        <tr>
                           <td>ali</td>
                           <td>322240</td>
                           <td>pass</td>
                           <td>7-3-23</td>
                           <td>370</td>
                           <td>8</td>
                           <td>
                              <div class="text-center">
                                 <a href="#" class="btn btn-xs btn-warning"><span class="">Active</span></a>
                              </div>
                           </td>
                           <td>
                              <a href="view-reports.php" class="me-2"><i class="bi bi-eye"></i></a>        	
                           </td>
                        </tr>
                     </tbody>
                  </table>

                  <!-- <div class="d-flex justify-content-end">
                     <div class="col-md-10">
                        <div class="d-flex justify-content-end align-items-end">
                           <table class="table w-auto" style="font-weight: 600;">
                              <tbody>
                                 <tr class="totalCal">
                                    <td colspan="3"></td>
                                    <td> Due Payment</td>
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
                                    <td>Pending Payment</td>
                                    <td>
                                       <div class="d-flex justify-content-end align-items-center">
                                          <span>SAR &nbsp;</span>
                                          <input style="text-align:right" type="text" id="totalDis" class=" form-control w-50" name="sub_total" value=""readonly>
                                       </div>
                                    </td>
                                 </tr>

                                 <tr>
                                    <td colspan="3"></td>
                                    <td>Total Income</td>
                                    <td>
                                       <div class="d-flex justify-content-end align-items-center">
                                          <p class="mb-0">
                                             <span>SAR &nbsp;</span>
                                          </p>
                                          <input style="text-align:right" type="text" id="grand_total" class=" form-control w-50" name="discountedTotal" value="" readonly>
                                       </div>
                                    </td>
                                 </tr> 
                                 
                                 <tr class="totalCal">
                                    <td colspan="3"></td>
                                    <td>Total Amount</td>
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

                                             <span>SAR &nbsp;</span>
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

                                  <tr>
                                    <td colspan="3"></td>
                                    <td>Shipping cost
                                    </td>
                                    <td>
                                       <div class="d-flex justify-content-end align-items-center">
                                          <p class="mb-0">

                                             <span>$</span>
                                          </p>
                                          <input style="text-align:right" type="text" id="shippingCost" class=" form-control w-50" name="shippingCost" value="" onkeydown="return (event.keyCode!=13);">
                                       </div>
                                    </td>
                                 </tr>
                                 
                                 
                                  
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div> -->

               </div>
            </div>
         </div>
      </div>
   </section>
</main>

<?php include'includes/datatable.php' ?>
<script>
   $(document).ready(function () {
       $('#example').DataTable();
   });
</script>
<?php include'includes/footer.php' ?>