<?php
include("../includes/config.inc.php");
$pageTitle = "";
$pageDescription = "";

$post = [];
$postId = $_GET["id"] ?? null;

if($postId){

    $host = "localhost";
    $db = "php_blog_site";
    $user = "root";
    $password = "test";

    $link = mysqli_connect($host, $user, $password, $db);

    $qStr = "SELECT * FROM pages WHERE id = " . $postId . " AND published IS NOT NULL";
    // echo($qStr);
    $result = mysqli_query($link, $qStr);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        // var_dump($row);
        $post['title'] = htmlentities($row["title"]);
        $post['description'] = htmlentities($row["description"]);
        $post['content'] = ($row["content"]);
        // echo($post['content']);
        $pageTitle = $post['title'];
        $pageDescription = $post['description'];
    }else{
       throw new Exception("INVALID POST ID"); 
    }

}else{
    throw new Exception("NO ID");
}

include("../includes/header.inc.php");
?>


		<main>
			<h1><?php echo($post['title']); ?></h1>
            <?php echo($post['content']); ?>
			
		</main>
		<aside>
				Side Bar
		</aside>

<?php
include("../includes/footer.inc.php");
?>