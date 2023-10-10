<?php
include("config.inc.php");

// We'll use an assoc array to 'model' a row from the database
$user = [];
$user['user_id'] = "";
$user['user_first_name'] = "";
$user['user_last_name'] = "";
$user['user_email'] = "";
$user['user_password'] = "";
$user['user_role'] = "user";  // default to standard 'user'
$user['user_active'] = "yes"; // default to 'yes'

if($_SERVER['REQUEST_METHOD'] == "GET"){
	
	// extract the 'user_id' param from the URL
	$id = $_GET['user_id'] ?? "";
	
	// if we have an id, fetch the user and populate the model
	if($id > 0){
		$user = get_users_by_id($id);
	}

}else if($_SERVER['REQUEST_METHOD'] == "POST"){
	
	// get the data posted and load up the model
	$user['user_id'] = $_POST['user_id'];
	$user['user_first_name'] = $_POST['user_first_name'];
	$user['user_last_name'] = $_POST['user_last_name'];
	$user['user_email'] = $_POST['user_email'];
	$user['user_password'] = $_POST['user_password'];
	$user['user_role'] = $_POST['user_role'];
	$user['user_active'] = $_POST['user_active'];
	
	// validate the data
	if(!validate_user($user)){
		http_response_code(400);
		die();
	}

	// update/insert the user
	if($user['user_id'] > 0){
		update_user($user);	
	}else{
		insert_user($user);
	}

	// redirect back to user-list page
	header("Location:user-list.php");

}else{
	http_response_code(400);
	die("We only handle GET and POST requests");
}

function get_user_by_id($id){
	global $link;
	
	// note, we should sanitize $id before we concatenate it into the SQL!
	$qStr = "SELECT * FROM users WHERE user_id = " . $id;
	$result = mysqli_query($link, $qStr) or die(mysqli_error($link));
	$row = mysqli_fetch_assoc($result); 
	
	$user['user_id'] = htmlentities($row['user_id']);
	$user['user_first_name'] = htmlentities($row['user_first_name']);
	$user['user_last_name'] = htmlentities($row['user_last_name']); //--second error -->
	$user['user_email'] = htmlentities($row['user_email']);
	$user['user_password'] = htmlentities($row['user_password']);
	$user['user_role'] = htmlentities($row['user_role']);
	$user['user_active'] = htmlentities($row['user_active']);

	return $user;
}

function update_user($user){
	global $link;
	
	$qStr = "UPDATE users SET 
				user_first_name='{$user['user_first_name']}',
				user_last_name={$user['user_last_name']}',
				user_email='{$user['user_email']}',
				user_password='{$user['user_password']}',
				user_role='{$user['user_role']}',
				user_active='{$user['user_active']}' 
			WHERE user_id = " . $user['user_id'];
	
	$result = mysqli_query($link, $qStr) or die(mysqli_error($link));
	
}

function insert_user($user){
	global $link;
	$qStr = "INSERT INTO users (
				user_first_name, 
				user_last_name, 
				user_mail, 
				user_password, 
				user_role, 
				user_salt, 
				user_active
			) VALUES (
				'{$user['user_first_name']}',
				'{$user['user_last_name']}',
				'{$user['user_email']}',
				'{$user['user_password']}',
				'{$user['user_role']}',
				'xxx',
				'{$user['user_active']}'
			)";
	
	mysqli_query($link, $qStr) or die(mysqli_error($link));
	$user['user_id'] = mysqli_insert_id($link);
	return $user;
}

function validate_user($user){
	$is_valid = true;
	
	// first name must not be empty and must be less than 30 characters
	if(empty($user['user_first_name'])){
		$is_valid = false;
	}else if(strlen($user['user_first_name']) > 30){
		$is_valid = false;
	}

	// last name must not be empty and must be less than 30 characters
	if(empty($user['user_last_name'])){
		$is_valid = false;
	}else if(strlen($user['user_last_name']) > 30){
		$is_valid = false;
	}

	// email must be valid and less than 255 characters
	if(!filter_var($user['user_email'], FILTER_VALIDATE_EMAIL)) {
		$is_valid = false;
	}else if(strlen($user['user_email']) > 255){
		$is_valid = false;
	}

	// password must not be empty and must be less than 32 characters
	if(empty($user['user_password'])){
		$is_valid = false;
	}else if(strlen($user['user_password']) > 32){
		$is_valid = false;
	}

	// no need to validate the user_salt

	// role must be 'admin' or 'user'
	if($user['user_role'] != "admin" && $user['user_role'] != "user"){
		$is_valid = false;
	}

	// active must be 'yes' or 'no'
	if($user['user_active'] != "yes" && $user['user_active'] != "no"){
		$is_valid = false;
	}

	return $is_valid;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Details</title>
	<style type="text/css">
		label{ display:block; }
	</style>
</head>
<body>

	<form autocomplete="off" method="POST" action="<?=$_SERVER['PHP_SELF']?>">
		<input type="hidden" name="user_id" value="<?=$user['user_id']?>" />
		<label>First Name:</label> 
		<input type="text" name="user_first_name" value="<?=$user['user_first_name']?>" />
		<label>Last Name:</label> 
		 <input type="text" name="user_last_name" value="<?=$user['user_last_name']?>" /> <!--first error -->
		<label>Email:</label> 
		<input type="text" name="user_email" value="<?=$user['user_email']?>" />
		<label>Password:</label> 
		<input type="password" name="user_password" value="<?=$user['user_password']?>" />
		<label>Role:</label> 
		<input type="text" name="user_role" value="<?=$user['user_role']?>" />
		<label>Active:</label> 
		<input type="text" name="user_active" value="<?=$user['user_active']?>" />
		<br>
		<input type="submit" value="SAVE" />
	</form>

</body>
</html>
