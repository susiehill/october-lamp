<?php 
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login/Registration: The Wall - Coding Dojo</title>
	<link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>
<?php 
	if (isset($_SESSION['errors']))
	{
		foreach ($_SESSION['errors'] as $error) 
		{
			echo "<p> {$error} </p>";
		}
		unset($_SESSION['errors']);
	}
	if(isset($_SESSION['success_message']))
	{
		echo $_SESSION['success_message'];
		unset($_SESSION['success_message']);
	}
 ?>
<h1>The Wall</h1>
<div class="wallbox">
<h2>Register</h2>
<form action="process.php" method="POST">
		<input type="hidden" name="action" value="register">
		<label>First Name</label><input type="input" name="first_name"><br />
		<label>Last Name</label><input type="input" name="last_name"><br />
		<label>Email Address</label><input type="input" name="email"><br />
		<label>Password</label><input type="password" name="password"><br />
		<label>Confirm Password</label><input type="password" name="confirm_password"><br />
		<button value="register">Submit</button>
	</form>
	</div>
	<div class="wallbox">
	<h2>Login</h2>
	<form action="process.php" method="POST">
		<input type="hidden" name="action" value="login">
		<label>Email Address</label><input type="input" name="email"><br />
		<label>Password</label><input type="password" name="password"><br />
		<button value="submit">Submit</button>
	</form>
	</div>
</body>
</html>
<!-- <?php 
//header('Location: main.php');
 ?> -->