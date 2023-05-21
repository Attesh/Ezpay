<?php 
include '../assets/common/config.php';
session_start();
$userid = $_SESSION['userid'];
$searchname =$_GET['search_keyword'];
// $getRecord = $db->select(array("*"),"items","item LIKE '%$searchname%'","user_id=$userid");
$getRecord = $db->select(array("*"),"items","item LIKE '%$searchname%' ","user_id='$userid'");
// echo $db->sql;
?>

<?php if($getRecord){
	foreach($getRecord as $key => $record){?>
		<li onclick="get_detail(<?= $record->id?>)"><?= $record->item?></li>
		<?php } }else{ ?>
		<span>No Record Found.</span>
<?php }?>

