<?php
/*
ERROR HANDLING
*/

set_error_handler("myErrorHandler");

function myErrorHandler($errno, $errstr, $errfile, $errline){
	$str ="<div>";
	
	$str .= "THIS IS OUR CUSTOM ERROR HANDLER<br>";
	$str .= "ERROR NUMBER: " . $errno . "<br>ERROR MSG: " . $errstr . "<br>FILE: " . $errfile . "<br>LINE NUMBER: " . $errline . "<br>";
	
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
		// If DEBUG_MODE is set to true, we'll dump the error into the page
		echo($str);
	}else{
		// If not, then send email to web admin
		mail(SITE_ADMIN_EMAIL, SITE_DOMAIN . " - ERROR", $str);
		// header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
		header("Location: " . PROJECT_FOLDER . "error.php");

	}
}



