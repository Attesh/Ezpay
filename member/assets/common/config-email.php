<?php @session_start();
// error_reporting(0);

	 if(!class_exists("Dbase"))	{
		define("DBUSER","shipaf5_auser");



		define("DBPASS","E8Tfduag6x]$");



		define("HOST","localhost");



		define("DATABASE","shipaf5_web");  



		define("BASEURL",$_SERVER['DOCUMENT_ROOT'].'/shipafrika/');



		define("SITEURL",'http://shipafrika.us/');



		//define("dev",0);



		define("PREFIX","");
		require_once("controller/dbase.php");
	}

	$db = new Dbase();

		
 		
 
	

	
 	//date_default_timezone_set('Asia/Karachi');



?>