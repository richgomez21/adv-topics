<?php
include("includes/config.inc.php");
$pageTitle = "Sorry for the error";
$pageDescription = "Error page";
include("includes/header.inc.php");
// TESTING OUR ERROR AND EXCEPTION HANDLERS
// error testing below
// echo($x);
// exception testing below
// throw new Exception("This is an EXCEPTION test"); - exception
?>


		<main>
			<h1>Sorry!</h1>
			<p>We are working on the error</p>
		</main>
		<aside>
				Side Bar
		</aside>


<?php
include("includes/footer.inc.php");
?>