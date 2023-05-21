<?php include'common/config.php' ?>

<?php 

 $id = $_GET['id'];
 $memberid = $_GET['memberid'];
	$result = $db->delete("id=$id",PREFIX."notes");
 		$_SESSION['message'] = "Notes Deleted";
		?>

<script language="javascript">window.location='view-member.php?vpid=<?php echo $memberid; ?>';
</script>
		 
