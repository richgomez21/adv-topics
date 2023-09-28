<?php

$host = "localhost";
$db = "user_test_db";
$user = "root";
$password = "test";

$link = mysqli_connect($host, $user, $password, $db);
// var_dump($link);

// if(!$link){
//     die("Unable to connect..");
// }

$qStr = "SELECT * FROM users";
$result = mysqli_query($link, $qStr);
// var_dump($result);

// if(!$result){
//     die("QUERY FAILED");
// }

// echo(mysqli_num_rows($result));

// echo("<table border='1'>");
// while($row = mysqli_fetch_assoc($result)){
//     // var_dump($row);
//     echo("<tr><td>{$row['user_first_name']}</td></tr>");
// }
// echo("</table>");

$users = [];
while($row = mysqli_fetch_assoc($result)){
   $u = [];
   $u['user_id'] = htmlentities($row['user_id']);
   $u['user_first_name'] = htmlentities($row['user_first_name']);
   $users[] = $u; // this pushes $u onto the users array
}

echo("<table border='1>");
foreach($users as $user){
    echo("<tr><td><a href='user-details.php?id={$user['user_id']}'>{$user['user_first_name']}</a></td></tr>");
}
echo("</table>");



?>