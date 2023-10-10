<?php
include('config.inc.php');

$qStr = "SELECT * FROM users";
$result = mysqli_query($link, $qStr);
//var_dump($result);


//echo(mysqli_num_rows($result));

/*
echo("<table border='1'>");
while($row = mysqli_fetch_assoc($result)){
    //var_dump($row);
    echo("<tr><td>{$row['user_first_name']}</td></tr>");
}
echo("</table>");
*/


$users = [];
while($row = mysqli_fetch_assoc($result)){
    $u = [];
    $u['user_id'] = htmlentities($row['user_id']);
    $u['user_first_name'] = htmlentities($row['user_first_name']);
    $u['user_email'] = htmlentities($row['user_email']);
    $users[] = $u; // this pushes $u onto the $users array
}

/*
echo("<table border='1'>");
foreach($users as $user){
    echo(
        "<tr>
            <td>
                <a href='user-details.php?id={$user['user_id']}'>
                    {$user['user_email']}
                </a>
            </td>
        </tr>"
    );
}
echo("</table>");
*/

function createUsersTable($users){
    $html = "<table border='1'>";
    $html .= "<tr>
                <th>First Name</th>
                <th>Email</th>
                <th></th>
              </tr>";
    foreach($users as $u){
        $html .= "<tr>";
        $html .=    "<td>{$u['user_first_name']}</td>";
        $html .=    "<td>{$u['user_email']}</td>";
        $html .=    "<td><a href='user-details.php?user_id={$u['user_id']}'>EDIT</a></td>";
        $html .= "</tr>";
    }
    $html .= "</table>";
    return $html;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User List</title>
	<style type="text/css">
		label{ display:block; }
	</style>
</head>
<body>
<?php
echo("<a href='user-details.php'>Add User</a>");
echo(createUsersTable($users));
?>
</body>
</html>
