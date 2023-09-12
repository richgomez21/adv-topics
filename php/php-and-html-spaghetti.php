<?php
$first_name = "Bob";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo("This is the page title"); ?></title>
</head>
<body>
<?php echo("<h1>This is an H1</h1>"); ?>
<p>PHP code is often used to generate HTML code, which then gets sent to the browser</p>
<p>You might even see attributes getting set by PHP code:</p>
<input type="text" value="<?php echo($first_name);?>" />
</body>
</html>