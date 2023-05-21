<?php 
include '../assets/common/config.php';

$row_id =$_POST['row'];
$qty =$_POST['upd_qty'];
$total =$_POST['upd_total'];


$upd_qty = array("quantity"=> $qty, "total_price"=> $total );
		$set_new = $db->updateCondition($upd_qty,"order_detail","id = '$row_id' ");

		$getRecord = $db->selectSROW(array("*"),"order_detail","id = '$row_id'");
		$order_id = $getRecord['order_id'];
		$get_order_detail = $db->select(array("*"),"order_detail","order_id = '$order_id'");

foreach ($get_order_detail as $get_order_detail) { ?>
						<tr>
                                    <td><?php echo $get_order_detail->isbn ; ?></td>
                                    <td><?php echo $get_order_detail->name ; ?></td>
                                    <!-- <td><?php echo substr($get_order_detail->publisher,0,20); ?></td> -->
                                    <td><?php echo $get_order_detail->list_price ; ?></td>
                                    <td><?php echo $get_order_detail->sale_price ; ?></td>
                                    <td><?php echo $get_order_detail->quantity ; ?></td>
                                    <td><?php echo $get_order_detail->total_price ; ?></td>
                                    <td>        	
                                       <a href="#" data-bs-toggle="modal" onclick="edit_row(<?php echo $get_order_detail->id ; ?>)" data-bs-target="#editBilling" data-bs-id=" " class="me-2 "><i class="bi bi-pencil-square" style="color:blue;"></i></a>
                                       <a onclick="del_rec(<?php echo $get_order_detail->id ; ?>)" href="#"> <i class="bi bi-trash" style="color:red;"></i></a>
                                    </td>
                                 </tr>
					<?php } ?>


