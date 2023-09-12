<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP and HTML</title>
</head>
<body>
<?php
$first_name = "bob";

/*
Another approach (vs php-html-spaghetti) is to concatenate all the HTML code into one big string
and then echo it all at once onto the page:
*/

// Add all HTML output to a string and echo it out all at once
$html = "";
$html .= "<h1>This is an H1</h1>";
// maybe more PHP code goes here (maybe to get data from a db)
$html .= "<h1>This is an H1</h1>";
$html .= "<h3>$first_name</h3>";
echo($html);

/*
A similar approach is to create an array and add all the
HTML to it as the PHP script runs:
*/

// Add all HTML output to an array and echo it out all at once
$html = []; // or array();
$html[] = "<h1>This is an H1</h1>";
// maybe more PHP code goes here (maybe to get data from a db)
$html[] = "<h1>This is an H1</h1>";
//echo($html); // this won't work (can't convert array to string)
echo(implode($html));
// Side note: JS has a join() METHOD
// PHP has an implode() FUNCTION
// What's the difference between a method and a function???

// you could also add a 'glue' param
echo(implode($html,"<b>glue</b>"));

?>
</body>
</html>