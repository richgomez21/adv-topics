<!DOCTYPE html>
<html>
<head>
	<title><?php echo($pageTitle); ?></title>
	<meta charset="utf-8">
	<meta name="description" content="<?php echo($pageDescription); ?>">
    <meta name="viewport" content="width=device-width">
	<!-- in the href attribute, you can echo out a variable like the constant PROJECT_FOLDER -->
	<link rel="stylesheet" type="text/css" href="<?=PROJECT_FOLDER?>styles/reset.css">
	<link rel="stylesheet" type="text/css" href="<?=PROJECT_FOLDER?>styles/main.css">
	<script src="<?=PROJECT_FOLDER?>js/main.js"></script>
</head>
<body>
	<header>
		<h1>Welcome to my site!</h1>
		<div id="menu-button">&#9776;</div>
	</header>
	<div id="menu">
		<nav>
			<ul>
				<li><a href="<?=PROJECT_FOLDER?>index.php">Home</a></li>
				<li><a href="<?=PROJECT_FOLDER?>blog/index.php">Blog</a></li>
			</ul>
		</nav>
	</div>
	<div id="content">