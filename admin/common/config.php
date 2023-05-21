<?php @session_start();
 error_reporting(0);
 if($_SESSION['userid']==''){?>

	
	<?php 
	
			}
 
		define("DBUSER","u652948030_ezpay");
		define("DBPASS","C[vB1cRx;7");
		// define("DBPASS","2>ZkvwwJ*");
		// define("DBPASS","#O8c>uH@7Gd");
		define("HOST","localhost");
		define("DATABASE","u652948030_ezpay");



		define("BASEURL",$_SERVER['DOCUMENT_ROOT'].'/admin/');



		define("SITEURL",'https://www.shipafrika.us/');



		//define("dev",0);



		define("PREFIX","");



 
 	require_once("dbase.php");
 
	$db = new Dbase();

	
 	//date_default_timezone_set('Asia/Karachi');



?>