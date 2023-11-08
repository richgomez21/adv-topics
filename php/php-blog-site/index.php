<?php
include("includes/config.inc.php");
$pageTitle = "Welcome to My PHP Site";
$pageDescription = "This is the homepage for my PHP Blog Site";
include("includes/header.inc.php");
// TESTING OUR ERROR AND EXCEPTION HANDLERS
// error testing below
// echo($x);
// exception testing below
// throw new Exception("This is an EXCEPTION test");
?>


		<main>
			<h1>Hello</h1>
			<p>This is my blog site</p>
		</main>
		<aside>
				Side Bar
		</aside>


<?php
include("includes/footer.inc.php");
?>