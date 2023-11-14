<?php
include("../includes/config.inc.php");
$pageTitle = "Blog";
$pageDescription = "A listing of links to blog posts";
include("../includes/header.inc.php");

$host = "localhost";
$db = "php_blog_site";
$user = "root";
$password = "test";

$link = mysqli_connect($host, $user, $password, $db);
// var_dump($link);

$qStr = "SELECT * FROM pages WHERE published IS NOT NULL";

$result = mysqli_query($link, $qStr);
// var_dump($result);

$allPosts = [];
while($row = mysqli_fetch_assoc($result)){
	$post = [];
	$post["id"] = htmlentities($row['id']);
	$post["title"] = htmlentities($row['title']);
	$post["description"] = htmlentities($row['description']);
	$allPosts[] = $post;
}
// var_dump($allPosts);

function createPostLists($posts){
	$html = "<ol>";

	foreach($posts as $p){
		$html .= "<li>";
		$html .= "<h2><a href='blog-page.php?id={$p["id"]}'>{$p["title"]}</a></h2>";
		$html .= "<p>{$p["description"]}</p>";
		$html .= "</li>";
	}

	$html .= "</ol>";
	return $html;
}

?>


		<main>
			<h1>Blog List</h1>
			<?php echo(createPostLists($allPosts)); ?>
		</main>
		<aside>
				Side Bar
		</aside>

<?php
include("../includes/footer.inc.php");
?>