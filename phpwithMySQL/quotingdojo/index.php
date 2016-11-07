<?php 
session_start();
require_once('connection.php');
//require('process.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Coding Dojo–Add a Quote</title>
	<link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>
<h1>Welcome to the Quoting Dojo</h1>
<form action="main.php" method="POST">
		<label>First Name</label><input type="input" name="first_name"><br />
		<label>Email</label><input type="input" name="email"><br />
		<label>Your Quote</label><textarea rows="4" cols="50" name="quote"></textarea><br />
		<button value="submit">Add my Quote</button>
		<button value="main.php">Skip to Quotes</button>
	</form>
</body>
</html>
<!-- <?php 
//header('Location: main.php');
 ?> -->