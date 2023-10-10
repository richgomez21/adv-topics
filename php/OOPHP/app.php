<?php

include("User.inc.php");

$u1 = new User();
$u1->firstName = "Bob";
$u1->lastName = "Smith";

var_dump($u1);

$row = [];
$row['user_id'] = 1;
$row['user_first_name'] = "Bob";
$row['user_last_name'] = "Smith";

$u2 = new User($row);

var_dump($u2);



?>