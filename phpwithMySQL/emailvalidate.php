<?php 
	session_start();
	require_once('new_connection.php');
	// var_dump($connection);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Email Validation with a Database</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h1>Add Email to our Database</h1>
	<form action="success.php" method="POST">
		<label>First Name</label><input type="input" name="first_name"><br />
		<label>Last Name</label><input type="input" name="last_name"><br />
		<label>Email</label><input type="input" name="email"><br />
		<button value="submit">Submit</button>
	</form>

</body>
</html>