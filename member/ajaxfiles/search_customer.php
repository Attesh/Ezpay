<?php 
include '../assets/common/config.php';
session_start();
$userid = $_SESSION['userid'];
$searchname =$_GET['search_keyword'];
$getRecord = $db->select(array("*"),"customers","customer_name LIKE '%$searchname%' OR email LIKE '%$searchname%' OR phone LIKE '%$searchname%' ","user_id='$userid'");
// echo $db->sql;
?>

<?php if($getRecord){
	foreach($getRecord as $key => $record){?>
		<li onclick="get_customer(<?= $record->id ?>)" ><?= $record->customer_name?></li>
		<?php } }else{ ?>
		<span>No Record Found.</span>
<?php }?>

