<?php 
include'../common/config.php';

$inv_no =$_POST['inv']; 

//echo $db->sql;
$getRecord = $db->selectSROW(array("*"),"orders","invoice = '$inv_no'");
		$order_id = $getRecord['id'];
		$get_order_detail = $db->select(array("*"),"order_detail","order_id = '$order_id'");

foreach ($get_order_detail as $get_order_detail) { ?>
						<tr>
                                    <td style="text-align:left"><?php echo $get_order_detail->isbn ; ?></td>
                                    <td style="text-align:left"><?php echo $get_order_detail->name ; ?></td>
                                    <!-- <td style="text-align:left"><?php echo substr($get_order_detail->publisher,0,20); ?></td> -->
                                    <td style="text-align:right"><?php echo $get_order_detail->list_price ; ?></td>
                                    <td style="text-align:right"><?php echo $get_order_detail->sale_price ; ?></td>
                                    <td><?php echo $get_order_detail->quantity ; ?></td>
                                    <td style="text-align:right"><?php echo $get_order_detail->total_price ; ?></td>
                                    <td>        	
                                       <a href="''" data-bs-toggle="modal" onclick="edit_row(<?php echo $get_order_detail->id ; ?>)"   class="me-2 "><i class="bi bi-pencil-square" style="color:blue;"></i></a>
                                       <a onclick="del_rec(<?php echo $get_order_detail->id ; ?>)" href="#"> <i class="bi bi-trash" style="color:red;"></i></a>
                                    </td>
                                 </tr>
					<?php } ?>


