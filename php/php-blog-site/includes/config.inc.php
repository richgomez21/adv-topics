<?php
include("custom-error-handler.php");
include("custom-exception-handler.php");

if($_SERVER['SERVER_NAME'] == 'localhost'){
    define("PROJECT_FOLDER", "/php-blog-site/");
    define("DEBUG_MODE", true);
    define("SITE_ADMIN_EMAIL", "gomezr3@students.westerntc.edu");
    define("SITE_DOMAIN", $_SERVER['SERVER_NAME']);
    define("DB_HOST", "localhost ");
    define("DB_USER", "root");
    define("DB_PASSWORD", "root");
    define("DB_NAME", "php_blog_site");

}else{
    define("PROJECT_FOLDER", "/php-blog-site/");
    define("DEBUG_MODE", false);
    define("SITE_ADMIN_EMAIL", "gomezr3@students.westerntc.edu");
    define("SITE_DOMAIN", $_SERVER['SERVER_NAME']);
    define("DB_HOST", "localhost ");
    define("DB_USER", "root");
    define("DB_PASSWORD", "root");
    define("DB_NAME", "php_blog_site");

}

$link = null;

function get_link(){
    global $link;
    if($link == null){
        $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    }
    
    return $link;
}

?>