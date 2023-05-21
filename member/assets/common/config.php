<?php @session_start();
 error_reporting(0);
 
// 		define("DBUSER","u930617408_ezpay_new");
// 		define("DBPASS","GYBtox&6R[p");
// 		define("HOST","localhost");
// 		define("DATABASE","u930617408_ezpay_new");

	    define("DBUSER","u652948030_ezpay");
		define("DBPASS","C[vB1cRx;7");
		define("HOST","localhost");
		define("DATABASE","u652948030_ezpay");


		define("BASEURL",$_SERVER['DOCUMENT_ROOT'].'/member/');



		define("SITEURL",'https://www.shipafrika.us/');



		//define("dev",0);



		define("PREFIX","");



 
 	require_once("dbase.php");
 
	$db = new Dbase();

	
 	//date_default_timezone_set('Asia/Karachi');



?>