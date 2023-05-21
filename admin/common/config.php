<?php @session_start();
 error_reporting(0);
 if($_SESSION['userid']==''){?>

	
	<?php 
	
			}
 
		define("DBUSER","");
		define("DBPASS","");
		
		define("HOST","localhost");
		define("DATABASE","");



		define("BASEURL",$_SERVER['DOCUMENT_ROOT'].'');



		define("SITEURL",'');



		//define("dev",0);



		define("PREFIX","");



 
 	require_once("dbase.php");
 
	$db = new Dbase();

	
 	//date_default_timezone_set('Asia/Karachi');



?>