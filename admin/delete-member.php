<?php include 'common/config.php' ?>

<?php 

 $id = $_GET['vpid'];
 $result = $db->delete("id=$id",PREFIX."users");
 		$_SESSION['message'] = "Customers Record Deleted";
		?>

<script language="javascript">
	window.location = 'manage-member.php';
</script>
		 
