<?php
$page = isset($_GET['page']) ? $_GET['page'] : "";
echo("The page you requested: <b>{$page}</b><br>");
echo("The php script that is running: <b>{$_SERVER['SCRIPT_FILENAME']}</b><br>");
die();
?>
