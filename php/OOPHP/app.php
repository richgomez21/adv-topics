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

var_dump($u2->is_valid());

$rows = [
    ["user_id" => 1, "user_first_name" => "Greg", "user_last_name" => "Heffley"],
    ["user_id" => 2, "user_first_name" => "K", "user_last_name" => "DOT"],
    ["user_id" => 3, "user_first_name" => "Big", "user_last_name" => "SCARR"]
];

$users = [];

foreach($rows as $row){
    $users[] = new User($row);
};

var_dump($users);




?>