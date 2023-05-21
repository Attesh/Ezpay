<?php include 'common/config.php' ?>


<?php
$getPayment = $db->select(array("*"),PREFIX."invoices");
              
                           if($getPayment){

                           foreach ($getPayment as $payment) {
                              ?>

                        <tr>
                           <td>INV-<?php echo $payment->invoice_no?></td>
                           <td><?php  echo Date('Y-m-d', $payment->created_at) ?></td>
                           <td><?php echo $payment->name?></td>
                           <!-- <td><?php echo $payment->email?></td> -->
                           <td><?php echo $payment->payment_method?></td>
                           <!-- <td><?php echo $payment->unit_price?></td>
                           <td><?php echo $payment->quantity?></td> -->
                           <td><?php echo $payment->total_price?></td>
                           <td>
                              <span class="badge bg-warning text-dark">Unpaid</span>
                           </td>
                           <td>
                              <a href="view-invoice.php" class="me-2"><i class="bi bi-eye"></i></a>        	
                           </td>
                        </tr>
                        <?php }
                        }

?>

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