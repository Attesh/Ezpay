<?php include 'assets/common/config.php' ?>
<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php' ;


?>


<main id="main" class="main">

   <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
         <ol class="breadcrumb">
            <li class="breadcrumb-item ">Customers</li>
            <li class="breadcrumb-item active">Manage Customers</li>
 
         </ol>
      </nav>
   </div>

      <section class="section manageusers">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-body">
                     <div class="d-flex justify-content-between">
                        <h4 class="card-title ">Manage Customers</h4>
                       
                        <h5 class="card-title"><a href="add-cutomers.php" class="btn btn-primary btn-sm me-2">Add Customer</a></h5>
                     </div>
                     <table class="table datatable" id="example">
                        <thead>
                           <tr>
                              <th scope="col">Name</th>
                              <!-- <th scope="col">Registration No.</th> -->
                              <!-- <th scope="col">Company Name</th> -->
                              <th scope="col">Email</th>
                              <th scope="col">Phone</th>
                              <!-- <th scope="col">No. of Invoices</th> -->
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                              <?php
                              $user_id = $_SESSION['userid'];
                              $getCustomer = $db->select(array("*"),PREFIX."customers","user_id= $user_id");
                             // echo $db->sql;
                           if($getCustomer){
                           foreach ($getCustomer as $c) {
                              ?>
                           <tr>

                              <td><?php echo $c->customer_name?></td>
                        
                              <!-- <td>Al safa</td> -->
                              <td><?php echo $c->email?></td>
                           
                              <td><?php echo $c->phone?></td>
                              <!-- <td>100</td> -->
                              <td>
                                 <div class="text-center">
                                    <a href="#" class="btn btn-xs btn-warning"><span class="">Active</span></a>
                                 </div>
                              </td>
                              <td>
                                 <a href="view-customers.php?vpid=<?php echo $c->id ?>" class="me-2 text-success"><i class="bi bi-eye"></i></a>  
                                 <a href="edit-cutomers.php?id=<?= base64_encode($c->id);?>" class="me-2"><i class="bi bi-pencil-square" style="color:blue;"></i></a>        
                                 <a onclick="return confirm('Are you sure you want to delete?');" href="delete-customer.php?id=<?= base64_encode($c->id);?>"> <i class="bi bi-trash" style="color:red;"></i></a>

                              </td>
                           </tr>
                            <?php }
                              }
                              ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </section>
</main>

{{--
<!--Section 2 For Model Starting From Here-->
<div class="modal" id="editMatch" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-body">
    <main id="main" class="main">
    <section class="section addEvent">
        <div class="row">
           <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                  <form action="#" method="post">
                  <!-- <h3 class="title mt-2">Add Match</h3> -->
                           <h4 class="title mt-3">Edit Customer</h4><hr>
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="form-group search-box">
                                          <label for="Quotation_customer_n5">ISBN</label>
                                          <input size="60" maxlength="255" autocomplete="nope" class="form-control" name="isbn" value="<?php echo $getRecord['isbn'];?>" id="Quotation_cust_n5" type="text">
                                       </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="form-group search-box">
                                          <label for="Quotation_customer_n6">Customer Name</label>                                        
                                          <input size="60" maxlength="255" autocomplete="nope" class="form-control" name="customer_name" value="<?php echo $getRecord['customer_name'];?>" id="Quotation_cust_n6" type="text">
                                       </div>            
                              </div>
                              <div class="col-lg-4">
                                 <div class="form-group search-box">
                                          <label for="Quotation_customer_n6">Phone</label>                                             
                                          <input size="60" maxlength="255" autocomplete="nope" class="form-control" name="phone" value="<?php echo $getRecord['phone'];?>" id="Quotation_cust_n6" type="text">
                                       </div>
                              </div>
                           </div>

                           <div class="row">
                              <div class="col-lg-6 mt-2">
                                       <div class="form-group">
                                        <label for="exampleFormControlSelect1">Gender</label>
                                          <select class="form-control form-select" id="exampleFormControlSelect1">
                                          <option>Select Gender</option>
                                          <?php if ( $getRecord['gender'] == 'Male'){
                                          ?>
                                          <option selected>Male</option>
                                          <option >Female</option>
                                          <option >Others</option>
                                          <?php } elseif( $getRecord['gender'] == 'Female') { ?>
                                          <option selected>Female</option>
                                          <option >Male</option>
                                          <option >Others</option>
                                           <?php }  elseif( $getRecord['gender'] == 'Others') { ?>
                                          <option selected>Others</option>
                                          <option >Female</option>
                                          <option >Male</option>
                                           <?php } ?>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="col-lg-6 mt-2">
                                 <div class="form-group search-box">
                                          <label for="Quotation_customer_n4">Email</label>                                             
                                          <input size="60" maxlength="255" autocomplete="nope" class="form-control" name="email" value="<?php echo $getRecord['email'];?>" id="Quotation_cust_n4" type="tel">
                                       </div>
                                    </div>
                           </div>

                           <div class="row">
                                    <div class="col-lg-6 mt-2">
                                 <div class="form-group search-box">
                                          <label for="Quotation_customer_n1">Address</label>
                                          <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="2"><?php echo $getRecord['address'];?></textarea>
                                       </div>
                                    </div>
                           </div>
                                    <div class="col-lg-12 mt-3">
                                 <div class="d-flex justify-content-end align-items-end">
                                    <a href="manage-customer.php" class="btn btn-secondary me-2">Back</a>
                                    <button type="submit"  name="update" class="btn btn-primary">Updated</button>
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
    </div>
    </div>
  </div>
</div>--}}

<?php include'includes/datatable.php' ?>
<script>
   $(document).ready(function () {
       $('#example').DataTable();
   });
</script>



<!--Ajax for Add More-->
<script>
$(document).ready(function(){
$("#editCustomer").change(function(){
   alert('editCustomer');
});
});
</script>

<?php include'includes/footer.php' ?>