<?php 
include'../common/config.php';
$country =$_POST['country'];
$state =$_POST['state'];
?>
 <select class="form-select " name="custCity" id="city_list">
 	<option value="0" >City</option>
<?php
$get_city = $db->select(array("*"),"city","country_id = '$country' AND state_id = '$state'");
if($get_city){
	foreach ($get_city as $get_city) { ?>
		<option value="<?php echo $get_city->id ; ?>" ><?php echo $get_city->c_title ; ?></option>
}
<?php	} }else{
?>
					<option value="0" >City</option>

<?php }
?>
</select>

