<?php 
include'../common/config.php';
$country =$_POST['country'];
?>
<select class="form-select" name="custState" id="state_list">
   <option value="0" >State</option>
<?php
$get_state = $db->select(array("*"),"states","country_id = '$country'");
if($get_state){
	foreach ($get_state as $get_state) { ?>
		<option value="<?php echo $get_state->id ; ?>" ><?php echo $get_state->state_title ; ?></option>

<?php	} } else{ ?>
            
<?php }
?>
</select>
<script type="text/javascript">
	$("#state_list").change(function(){
            var country_val = $('#set_contry').find(":selected").val();
             var state_val = $('#state_list').find(":selected").val();
            //alert(country_val);
            $.ajax({
              method: "POST",
              url: "ajaxfiles/get_city.php",
              data: { country:country_val, state:state_val }
            })

              .done(function( result ) {
                
               $("#city_div").html('');
               $("#city_div").html(result);
                
              });
            }); 
</script>

