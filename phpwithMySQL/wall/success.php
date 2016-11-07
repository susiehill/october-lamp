<?php 
session_start();
 ?>
 <!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Login Granted: The Wall - Coding Dojo</title>
	<link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>
<h1>Welcome to The Wall</h1>

 <?php 
 	echo "Howdy, {$_SESSION['first_name']}!";
  ?>
 <p><a href="index.php">Logout</a></p>
 </body>
 </html>