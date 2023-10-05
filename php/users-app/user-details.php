<?php
include("config.inc.php");

// We'll use an assoc array to 'model' a row from the database
$user = [];
$user['user_id'] = "";
$user['user_first_name'] = "";
$user['user_last_name'] = "";
$user['user_email'] = "";
$user['user_password'] = "";
$user['user_role'] = "";
$user['user_active'] = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
	// var_dump($_POST);
	$user = [];
	$user['user_id'] = $_POST['user_id'];
	$user['user_first_name'] = $_POST['user_first_name'];
	$user['user_last_name'] = $_POST['user_last_name'];
	$user['user_email'] = $_POST['user_email'];
	$user['user_password'] = $_POST['user_password'];
	$user['user_role'] = $_POST['user_role'];
	$user['user_active'] = $_POST['user_active'];
	// var_dump($user);	
	
	// Validate the data posted
	if(empty($user['user_first_name'])){
		header("Status:400");
	}

	if(empty($user['user_last_name'])){
		header("Status:400");
	}

	if(empty($user['user_id'])){
		header("Status:400");
	}

	if(empty($user['user_email'])){
		header("Status:400");
	}

	if(empty($user['user_password'])){
		header("Status:400");
	}

	if(empty($user['user_role'])){
		header("Status:400");
	}
	
	if(empty($user['user_active'])){
		header("Status:400");
	}

	// Update (or insert) the user
	if($user['user_id'] > 0){
		$qStr = "UPDATE users SET 
					user_first_name = '{$user['user_first_name']}', 
					user_last_name = '{$user['user_last_name']}', 
					user_email = '{$user['user_email']}', 
					user_password = '{$user['user_password']}', 
					user_role = '{$user['user_role']}', 
					user_active = '{$user['user_active']}' 
				WHERE user_id = " . $user['user_id'];
		// echo($qStr);
		$result = mysqli_query($link, $qStr);
		// var_dump($result);
		

	}else{
		//TODO: Insert User
		$qStr = "INSERT INTO users (user_first_name, user_last_name, user_email, user_password, user_salt, user_role, user_active)
				VALUES ({$user['user_first_name']}, {$user['user_last_name']}, {$user['user_email']}, 
				{$user['user_password']}, 'xxx', {$user['user_role']}, {$user['user_active']})";
				$result = mysqli_query($link, $qStr);	
				// var_dump($result);
	}
	// redirect back to user-list page
	header("Location:user-list.php");

}else{
	$user['user_id'] = $_GET['user_id'] ?? "";
	// echo($user['user_id']);
	// fetch the user and populate the model assoc array
	if($user['user_id'] > 0){
		$qStr = "SELECT * FROM users WHERE user_id = " . $user['user_id'];
		$result = mysqli_query($link, $qStr);
		// var_dump($result);
		$row = mysqli_fetch_assoc($result);
		// var_dump($row);
		$user['user_first_name'] = htmlentities($row['user_first_name']);
		$user['user_last_name'] = htmlentities($row['user_last_name']);
		$user['user_email'] = htmlentities($row['user_email']);
		$user['user_password'] = htmlentities($row['user_password']);
		$user['user_role'] = htmlentities($row['user_role']);
		$user['user_active'] = htmlentities($row['user_active']);
	}
	
	
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

	<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
		<input type="hidden" name="user_id" value="<?= $user['user_id'] ?>" /> <!-- another way to echo -->
		<label>First Name:</label> 
		<input type="text" name="user_first_name" value="<?php echo($user['user_first_name']); ?>" />
		<label>Last Name:</label> 
		<input type="text" name="user_last_name" value="<?php echo($user['user_last_name']); ?>" />
		<label>Email:</label> 
		<input type="text" name="user_email" value="<?php echo($user['user_email']); ?>" />
		<label>Password:</label> 
		<input type="password" name="user_password" value="<?php echo($user['user_password']); ?>" />
		<label>Role:</label> 
		<input type="text" name="user_role" value="<?php echo($user['user_role']); ?>" />
		<label>Active:</label> 
		<input type="text" name="user_active" value="<?php echo($user['user_active']); ?>" />
		<br>
		<input type="submit" value="SAVE" />
	</form>

</body>
</html>