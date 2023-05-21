<?php session_start();
require_once( '../common/config.php' );
$customstart = 	$_GET['customstart'];
$customend = 	$_GET['customend'];
?>
    
 
                           <table class="table profitReportTable" id="export-table" style="width:100%">
                     <!-- <thead>
                     <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Shipments</th>
                                    <th>Inventory</th>
                                    <th>Transactions</th>
                                 </tr>
                     </thead> -->

                     <tbody> <?php 
                     $get_service = $db->select(array("*"), "services");

                     $get_user = $db->select(array("*"), "registration","","","first_name");
                     if($get_user){
                         $i=0;
                              foreach($get_user as $get_user)
                             {
                                 
                                 $user_id=$get_user->user_id;
                                 
                                 
                                    $re_data = $db->selectSRow(array("SUM(total_amount) as order_amount"), "orders", "user_id = $user_id AND (insertion_date >='".$customstart."' AND insertion_date<='".$customend."')", "", ""); 
                                    $order_amount = $re_data['order_amount'];
                                     $Custom_orders = $db->countfields(array("*"), "orders","user_id=$user_id AND (insertion_date >='".$customstart."' AND insertion_date<='".$customend."') AND estimate!=1 and status!=138");
                                     $parcel_custom = $db->countfields(array("*"), "Parcels","parcel_user_id=$user_id AND (parcel_entry_date >='".$customstart."' AND parcel_entry_date<='".$customend."')");
                                     $autos_custom = $db->countfields(array("*"), "autos","autos_user_id=$user_id AND parcel_entry_date >='".$customstart."' AND parcel_entry_date<='".$customend."')");
                                     $Custom_inventory= $parcel_custom+$autos_custom;
                                        $i++;
                                 
              ?>
            
                     <tr>
                                    <td><?php echo $get_user->first_name." ".$get_user->last_name;;  ?></td>
                                    <td><?php echo $get_user->email; ?></td>
                                   <td> <?php echo $get_user->phone;?></td>
                                     <td><?php echo $Custom_orders; ?></td>
                                     <td><?php echo $Custom_inventory;?></td>
                                    <td>$<?php echo number_format($order_amount,2); $Grand_Balance=$Grand_Balance+$order_amount; ?></td>
                                  </tr>
                                  <?php 
                                  }
                                 }?>
                                 <tfoot>
                                    <td colspan="4" style="font-size: 20px;font-weight: 600;">Total</td>
                                    <td style="font-size: 20px;font-weight: 600;"><?php echo $all_weight;?>Balance</td>
                                    <td>$<?php echo number_format($Grand_Balance,2); ?></td>
                                 </tfoot>
                              </tbody>
                     </table>