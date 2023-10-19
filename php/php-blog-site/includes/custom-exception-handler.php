<?php
/*
EXCEPTION HANDLING
*/

set_exception_handler("myExceptionHandler");

function myExceptionHandler($exception) {

	$str ="<div>";
	$str .= "THIS IS OUR CUSTOM EXCEPTION HANDLER<br>";
	$str .= $exception->getMessage() . "<br>";
	$str .= "FILE: " . $exception->getFile() . "<br>";
	$str .= "LINE: " . $exception->getLine() . "<br>";
	$str .= "STRACK TRACE: " . print_r($exception->getTrace(), true) . "<br>";

	// You might want to send all the super globals with the error message 
	$str .= "<h3>POST</h3>" . print_r($_POST, true);
	$str .= "<h3>GET</h3>" . print_r($_GET, true);
	$str .= "<h3>SERVER</h3>" . print_r($_SERVER, true);
	$str .= "<h3>FILES</h3>" . print_r($_FILES, true);
	$str .= "<h3>COOKIE</h3>" . print_r($_COOKIE, true);
	//$str .= "<h3>SESSION<h3>" . print_r($_SESSION, true); // uncomment this if you are using sessions
	$str .= "<h3>REQUEST</h3>" . print_r($_REQUEST, true);
	$str .= "<h3>ENV</h3>" . print_r($_ENV, true);
	
	$str .="</div>";

    if(DEBUG_MODE){
		echo($str);
		// Note that we aren't sending the SERVER ERROR header, so that you can easily read the error message in the body
	}else{
		
		//send email to web admin
		mail(SITE_ADMIN_EMAIL, SITE_DOMAIN . " - ERROR", $str);
		// header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
		header("Location: " . PROJECT_FOLDER . "error.php");
	}
}
