<?php @session_start(); 
error_reporting(0);


		define("DBUSER","u652948030_kitabhouse");
		define("DBPASS","5YtUIC@rJ2");
		define("HOST","localhost");
		define("DATABASE","u652948030_kitabhouse");



		define("BASEURL",$_SERVER['DOCUMENT_ROOT'].'/admin/');



		define("SITEURL",'https://www.shipafrika.us/');



		//define("dev",0);



		define("PREFIX","");



 
 	require_once("dbase.php");
 
	$db = new Dbase();

	
 	//date_default_timezone_set('Asia/Karachi');



?>