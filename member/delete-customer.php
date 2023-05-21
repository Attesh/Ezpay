<?php include 'assets/common/config.php' ?>

<?php 

 $id = base64_decode($_GET['id']);
 $result = $db->delete("id=$id",PREFIX."customers");
 		$_SESSION['message'] = "Items Record Deleted";
		?>

<script language="javascript">
	window.location = 'manage-cutomers.php';
</script>
		 
