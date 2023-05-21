<?php include'../common/config.php' ?>

<?php 
ob_clean();

if ($_POST) {
	  $passValue = $_POST['passValue'];
	  $getPasscode=	$db->selectSRow(array("*"),PREFIX."users","passcode='$passValue'");
	
	  	if ($getPasscode['id']) {
		 	echo 'Yes';
	  	}else{
	  		echo 'No';
	  	}
	  	
    }
  ?>