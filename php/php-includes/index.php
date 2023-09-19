<?php
require_once("includes/config.inc.php");
$page_title = "Home Page";
$page_desc = "This is the home page..";
require_once("includes/header.inc.php");
?>
      <h1>Home Page</h1>
      <p>Notice that the <b>products</b> page is in a different folder than the <b>home</b> page and <b>about-us</b> page (that will come into play after we create the header and footer includes).</p>
      <ul>
        <li>Create an 'includes' folder, then create header.inc.php and footer.inc.php inside the folder.</li>
        <li>Slice out everything up to, and including, the opening div tag that has an id of 'content'. Put this code into the header.inc.php  include file.</li>
        <li>Slice out everything from the closing div tag that has the id of 'content'  to the bottom of the page. Put this code into the footer.inc.php include file.</li>
        <li>
          Replace the duplicate code in the <b>about-us</b> and <b>products</b> page, use the include files instead.
        </li>
        <li>Note that the PHP paths to the include files in the <b>products</b> page is different.</li>
        <li>Note the title and desc are the same for all pages.</li>
        <li>Add a $page_title and $page_desc variable to each page, and use it in the header include file.</li>
        <li>
          Note that the links don't work in the products page (inlcuding css and js links).
        </li>
        <li>Create config.inc.php file</li>
        <li>Create PROJECT_DIR const in the config file</li>
        <li>include the config file in each of the web pages.</li>
        <li>Fix links in the header to use PROJECT_DIR.</li>
        <li>Move the project to a different folder and update the PROJECT_DIR.</li>
        <li>OPTIONAL - Experiment with $_SERVER['DOCUMENT_ROOT'] and create INCLUDES_DIR.</li>
        <li>OPTIONAL - Use semantic tags (header, footer, article, maybe aside).</li>
        <li>OPTIONAL - Create a side bar include file (or a few of them) and plug them into the pages.</li>
      </ul>
      <?php
      require_once("includes/footer.inc.php");
      ?>
