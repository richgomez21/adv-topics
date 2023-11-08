<?php
include("../includes/config.inc.php");
$pageTitle = "Blog";
$pageDescription = "A listing of links to blog posts";
include("../includes/header.inc.php");



// get_link() is in the config.inc.php for access to the DB
include('../includes/PageDataAccess.inc.php');
$da = new PageDataAccess(get_link());
$allPosts = $da->getAll();


// creating a function that puts the title as a link and the description (as html elements) into the $html variable and returns it.
function createPostList($posts){
	$html = "<ol>";

	foreach($posts as $p){
		$html .= "<li>";
		$html .= "<h2><a href='blog-page.php?id={$p['id']}'>{$p["title"]}</a></h2>";
		$html .= "<p>{$p["description"]}</p>";
		$html .= "</li>";

	}

	$html .= "</ol>";

	return $html;
}

?>


		<main>
			<h1>Blog List</h1>
			<!-- below php code means echo() out what is inside the tags: 
			<.?php echo(createPostList($allPosts)) ?> (without the dot)-->
			<p><?= createPostList($allPosts); ?></p>
		</main>
		<aside>
				Side Bar
		</aside>
		

<?php
include("../includes/footer.inc.php");
?>