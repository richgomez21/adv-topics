<?php
include('custom-error-handler.inc.php');
include('custom-exception-handler.inc.php');



if($_SERVER['SERVER_NAME'] == 'localhost'){
    define('PROJECT_FOLDER', '/php-blog-site/');
    define('DEBUG_MODE', true);
    define('SITE_ADMIN_EMAIL', 'parkesm@students.westerntc.edu');
    define('SITE_DOMAIN', $_SERVER['SERVER_NAME']);
    // Setting up constants for access to the database: DEV
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'test');
    define('DB_NAME', 'php_blog_site');
}else{
    define('PROJECT_FOLDER', '/');
    define('DEBUG_MODE', false);
    define('SITE_ADMIN_EMAIL', 'parkesm@students.westerntc.edu');
    define('SITE_DOMAIN', $_SERVER['SERVER_NAME']);
        // Setting up constants for access to the database: LIVE
    define('DB_HOST', 'xxxxxxxxx');
    define('DB_USER', 'xxxxxxxxx');
    define('DB_PASSWORD', 'xxxxxxxxx');
    define('DB_NAME', 'xxxxxxxxx');
}



// Singleton: means only setting up the DB connection one time because of the time and data computation expense of connecting more than needed.
$link = null;

function get_link(){
    global $link;
    if($link == null){
        $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    }
    return $link;
}