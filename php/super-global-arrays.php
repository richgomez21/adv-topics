<form method="POST">
	First Name:<input type="text" name="firstName">
	<br>
	Last Name:<input type="text" name="lastName">
	<br>
	<input type="checkbox" name="acceptTerms" value="yes!">
	Check to accept our terms of service
	<br>
	<input type="submit" value="Submit Form"> 
</form>

<?php

var_dump($_SERVER);
// Step 1 - define a function called 'dump', it should take two params:
// The first param should be a string, the second param should be an associative array.
// The function should generate the following HTML string:
// 		- An h1 that displays the string param
// 		- A table that displays the contents of the associative array (key/value pairs).
// 			The table should have two columns, the first should display the key for each element,
//			and the second column should display the value for each element
//	The function should then return the HTML string

// Step 2 - Use the function you created to 'dump' the contents of the super global arrays in PHP

function dump($name, $ar){
	$html = "<h3>$name</h3>";

	if(!empty($ar)){
		$html .= "<table border='1'>";

		foreach($ar as $key => $value){
			$html .= "<tr><td>$key</td><td>$value</td></tr>";
		}
	
		$html .= "</table>";
	}else{
		$html .= "The array $name is empty";
	}
	
	return $html;
}

// echo(dump("SERVER VARS", $_SERVER));
// echo($_SERVER['DOCUMENT_ROOT']);
// echo(dump("GET VARS", $_GET));
echo(dump("POST VARS", $_POST));
	

?>



