<?php 
session_start();
require('connection.php');

if(isset($_POST['action']) AND $_POST['action'] == 'register') {
	 regUser($_POST); 
	 die('hello');
}
elseif(isset($_POST['action']) AND $_POST['action'] == 'login') {
	loginUser($_POST); 
}
else 
{
	session_destroy($_POST);
	header('location: index.php');
	die();
}
//validation checks begin here
function regUser($post)	
{
	$_SESSION['errors']= array(); //set new array for error messages

	if(empty($post['first_name'])) 
	{
		$_SESSION['errors'][] = "First name is blank. Please enter your first name.";
	}
	if(empty($post['last_name'])) 
	{
		$_SESSION['errors'][] = "Last name is blank. Please enter your last name.";
	}
	if(empty($post['password'])) 
	{
		$_SESSION['errors'][] = "Password is required.";
	}
	if($post['password'] != $post['confirm_password']) 
	{
		$_SESSION['errors'][] = "Passwords must match. Please try again.";
	}
	if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL))
	{
		$_SESSION['errors'][] = "Please use a valid email address.";
	}
	if(count($_SESSION['errors']) > 0)
	{
		header('location: index.php');
		die();
// insert registratino into database
	}else {
			$query = "INSERT into users (first_name, last_name, email, password, created_at, updated_at) 
					VALUES ('{$post['first_name']}','{$post['last_name']}','{$post['email']}','{$post['password']}',NOW(),NOW())";
			//var_dump($query);
			run_mysql_query($query);
			$_SESSION['success_message']='User registration successful!';
			header('location: index.php');
			die();

	}
//validation checks end here

	// header('location: index.php');
	// die();
}
//user login begins here

function loginUser($post)	
{
	$query = "SELECT * 
				FROM USERS 
				WHERE users.email = '{$post['email']}'
				AND users.password = '{$post['password']}'";
	$user = fetch_all($query);
	if(count($user)>0)
	{
		$_SESSION['user_id']= $user[0]['id'];
		$_SESSION['first_name']= $user[0]['first_name'];
		$_SESSION['logged_in'] = TRUE;
		header('location: thewall.php');
	}else 
	{
		$_SESSION['errors'][]= "Email and password combination do not match. Please try again.";
		header('location: index.php');
		die();
	}

}
//user login ends here

?>
