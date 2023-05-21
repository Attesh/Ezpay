<?php include 'common/config.php' ?>
<?php include 'includes/head.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/sidebar.php' ?>

<main id="main" class="main">
   <div class="pagetitle">
      <h1>Manage Invoices</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Manage Invoices</li>
        </ol>
      </nav>
   </div>
   <section class="section manageusers">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between">
                     <h4 class="card-title">Manage Invoices</h4>
                  </div>
                  <table class="table datatable" id="example">
                     <thead>
                        <tr>
                           <!-- <th><input type="checkbox" name=""></th>-->
                           <th style="display:none;"></th>
                           <th scope="col">Inv. #</th>
                           <th scope="col">Date</th>
                           <th scope="col">Name</th>
                           <!-- <th scope="col">Email</th> -->
                           <th scope="col">Payment Method</th>
                           <th scope="col">Total Price</th>
                           <th scope="col">Status</th>
                           <th scope="col">Action</th>
                        </tr>
                     </thead>
                     <tbody id="tableData">
                        <!--I am Fetching Data Here Through Ajax which is in payment-ajax.php file-->
                        <?php
                        if($_POST){
                           extract($_POST);
                           $id=$_POST['user_id'];
                           $arr=array("status"=>$status);
                           $result=$db->updateCondition($arr,PREFIX."invoices","id='$id'");
                        }
$getPayment = $db->select(array("*"),PREFIX."invoices","","id DESC");
              
                           if($getPayment){

                           foreach ($getPayment as $payment) {
                              ?>

                        <tr>
                        <td style="display:none;"><?php $payment->id; ?> </td>
                           <td>INV-000<?=$payment->id?></td>
                           
                           <td><?= date("d-m-Y", strtotime($payment->created_at));?></td>
                           <td><?php echo $payment->name?></td>
                           <!-- <td><?php echo $payment->email?></td> -->
                           <td><?php echo $payment->payment_method?></td>
                           <!-- <td><?php echo $payment->unit_price?></td>
                           <td><?php echo $payment->quantity?></td> -->
                           <td><?php echo $payment->total_price?></td>
                           <td style="vertical-align: middle;text-align: center;">
                           <?php if($payment->status=='0'){?>
                              <form method = "post" action="">
                                 <input type="hidden" name="status" value="1">
                                 <input type="hidden" name="user_id" value="<?php echo $payment->id;?>">
                                    <a type="submit"><span class="badge bg-warning text-dark">Unpaid</span></a>
                           </form>
                                                   <?php } elseif($payment->status=='1'){ ?>
                                    <a href="#" value="0" class=""><span class="badge bg-success text-white">Paid</span></a>
                                               <?php }?>
                              <!-- <span class="badge bg-warning text-dark">Unpaid</span> -->
                           </td>
                           <td>
                              <a href="view-invoice.php?id=<?php echo base64_encode($payment->id) ?>" class="me-2"><i class="bi bi-eye"></i></a>        	
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



<?php include'includes/footer.php' ?>


<!-- <script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
       'csv', 'pdf', 'print'
        ]
    } );
} );
</script> -->

<script type="text/javascript">
   
   $(document).ready(function(){
      $('#example').DataTable({
      })
   })
</script>
<script>
   $.ajax({
      url: "peyment-ajax.php",
      type: "POST",
      cache: false,
      success: function(data){
         console.log(data);
         $('#tableData').html(data); 
      }
   });
</script>