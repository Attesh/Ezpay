<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php' ?>
<?php include 'assets/common/config.php' ?>


<main id="main" class="main">
   <div class="pagetitle">
      <h1>Invoice History</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Invoices</li>
        </ol>
      </nav>
   </div>
   <section class="section manageusers">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between">
                     <h4 class="card-title">Manage Invoice History</h4>
                     <!-- <h5 class="card-title"> <a href="add-orders.php" class="btn btn-primary btn-sm me-2">Add Order</a></h5> -->
                     <h5 class="card-title"><a class="btn btn-primary btn-sm me-2" href="create_billing.php" type="button" class="btn btn-primary">Create Invoice</a></h5>
                  </div>
                  <table class="table datatable" id="example" style="width: 100%;">
                     <thead>
                        <tr>
                           <th scope="col">Invoice No</th>
                           <th scope="col">Name</th>
                           <th scope="col">Date</th>
                           <th scope="col">Price</th>
                           <th scope="col">Payment Method</th>
                           <th scope="col">Status</th>
                           <th scope="col">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php 
                     $user_id= $_SESSION['userid'];
                     $checkLogin = $db->select(array("*"),PREFIX."invoices","user_id='$user_id'","","id DESC");


                     foreach($checkLogin as $invocies){
                     ?>
                        <tr>
                           <td><?php echo $invocies->invoice_no?></td>
                           <td><?php echo $invocies->name?></td>
                           <td><?php echo $invocies->created_at?></td>
                           <td><?php echo $invocies->total_price?></td>
                           <td class="text-center">MADA</td>
                           <td>
                              <div class="text-center">
                                 <?php if($invocies->status == '1') {?>
                                 <a href="#" class="btn btn-xs btn-success"><span class="">Paid</span></a>
                              <?php } ?>
                              <a href="#" class="btn btn-xs btn-success"><span class="">UnPaid</span></a>
                              </div>
                           </td>
                           <td class="text-center">
                              <a href="view-invoice.php?id=<?= base64_encode($invocies->id);?>" class="me-2"><i class="bi bi-eye"></i></a>        	
                           </td>
                        </tr>
<?php }?>
                         <!-- <tr>
                           <td>460184</td>
                           <td>ahmed</td>
                           <td>ahmed@gmail</td>
                            <td>77782022</td> 
                           <td>7 July 2022</td>
                            <td>3</td> 
                           <td>348.60</td>
                           <td class="text-center">MADA</td>
                           <td>
                              <div class="text-center">
                                 <a href="#" class="btn btn-xs btn-danger"><span class="">Unpaid</span></a>
                              </div>
                           </td>
                           <td class="text-center">
                              <a href="view-invoice.php" class="me-2"><i class="bi bi-eye"></i></a>         
                           </td>
                        </tr> -->

                  
                    
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>

<script>
   $(document).ready(function () {
       $('#example').DataTable();
   });
</script>
<?php include'includes/footer.php' ?>