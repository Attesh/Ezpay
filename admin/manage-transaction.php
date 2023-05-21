<?php include'includes/head.php' ?>
<?php include'includes/header.php' ?>
<?php include'includes/sidebar.php' ?>
<?php include'common/config.php' ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<main id="main" class="main">
   <div class="pagetitle">
      <h1>Transactions</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"> Transactions</li>
        </ol>
      </nav>
   </div>
<?php 
$getTransactions = $db->select(array("*"),PREFIX."transactions");
?>
   <section class="section manageusers">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between">
                     <h4 class="card-title">Manage Transactions</h4>
                     <!-- <h5 class="card-title"> <a href="add-orders.php" class="btn btn-primary btn-sm me-2">Add Order</a></h5> -->
                     <!-- <h5 class="card-title"><a class="btn btn-primary btn-sm me-2" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Item</a></h5> -->
                  </div>
                  <table class="table datatable" id="example">
                     <thead>
                        <tr>
                           <!-- <th><input type="checkbox" name=""></th>-->
                           <th scope="col">ISBN</th>
                           <th scope="col">Type</th>
                           <th scope="col">Transaction ID</th>
                           <th scope="col">Acc No</th>
                           <th scope="col">CVV</th>
                           <th scope="col">Balance</th>
                           <th scope="col">Last Transfer</th>
                           <th scope="col">Status</th>
                           <th scope="col">Action</th>
                        </tr>
                     </thead>
                     <tbody>

                           <?php
                           if($getTransactions){
                           foreach ($getTransactions as $t) {
                              ?>
                        <tr>
                           <td><?php echo $t->isbn?></td>
                           <td><?php echo $t->type?></td>
                           <td><?php echo $t->transaction_id?></td>
                           <td><?php echo $t->account_number?></td>
                           <td><?php echo $t->cvv?></td>
                           <td><?php echo $t->balance?></td>
                           <td><?php echo $t->last_transfer?></td>
                            <td>
                              <div class="text-center">
                                 <a href="#" class="btn btn-xs btn-warning"><span class="">Active</span></a>
                              </div>
                           </td>

                           <td>
                              <a href="#" class="me-2"><i class="bi bi-eye"></i></a>
                              <a href="edit-transaction.php" class="me-2 text-primary"><i class="bi bi-pencil"></i></a>          
                              <a href="#" class="me-2 text-danger"><i class="bi bi-trash"></i></a>          	
                           </td>
                        </tr>
                        <?php 
                           }
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

<?php include'includes/datatable.php' ?>
<script>
   $(document).ready(function () {
       $('#example').DataTable();
   });
</script>
<?php include'includes/footer.php' ?>