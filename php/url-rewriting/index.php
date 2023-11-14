<?php

// Get the path that was requested by the client
// Remember that the .htaccess file takes the requested path, appends it as a url parameter
// and then redirects to this page (index.php):
//
// 		RewriteRule ^(.*)$ index.php?path=$1 [L,QSA]
//
// So we can get the requested path by using $_GET['path']
$path = $_GET['path'] ?? "";


// STEP 1 - Observe the behavior
// echo("The page requested (relative to the folder that has the .htaccess file in it):<br><b>{$path}</b><br>");
// echo("The php script that is running:<br><b>{$_SERVER['SCRIPT_FILENAME']}</b><br>");
// die();



// STEP 2 - DEFINE PATHS AND ROUTES FOR YOUR API
if(empty($path)){
	$path = "index.html";
}

// In this example the valid paths are the keys in the $routes associative array
$routes = [
	"index.html" => "Show the home page",
	"contact.html" => "Show the contact page",
	"users/" => "Show all users",
	"products/" => "Show products"
];

// Check to see if we have a route that matches the requested path:
if(isset($routes[$path])){
	echo($routes[$path]);
}else{
	header("HTTP/1.0 404 Not Found");
	echo("No route for the requested path (404)");
}



/*
// STEP 3 - SIMULATE MVC (Model/View/Controller) 
// In this example the paths (keys) point to a CONTROLLER and an ACTION METHOD
$routes = [
	"index.html" => ["controller" => "HomeController", "action" => "Index"],
	"contact.html" => ["controller" => "ContactController", "action" => "Index"],
	"users/" => ["controller" => "UserController", "action" => "Index"],
	"products/" => ["controller" => "ProductController", "action" => "Index"]
];

// BTW - it would be good practice to recreate the $routes variable in JS!

// Check to see if we have a route that matches the requested path:
if(isset($routes[$path])){
	$controller = $routes[$path]["controller"];
	$action = $routes[$path]["action"];
	echo("Instantiate this controller class: <b>$controller</b> ");
	echo("and then invoke this method of it: <b>$action</b>.");
}else{
	header("HTTP/1.0 404 Not Found");
	echo("No route for the requested path (404)");
}
*/

// Question - would this path have a matching route?: users


?>


