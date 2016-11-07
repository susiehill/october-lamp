<?php 
session_start();
var_dump($_SESSION);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>The Wall - Coding Dojo</title>
 	<link rel="stylesheet" type="text/css" href="../styles.css">
 </head>
 <body>
 	<h1>Welcome to The Wall</h1>
	<!--  <?php 
	 	echo "Howdy, {$_SESSION['first_name']}!";
	  ?> -->
 	<div class="wallbox">
 		<h2>Post a Message</h2>
		 <form action="process.php" method="POST">
		 	<textarea></textarea>
		 	<button value="postMessage">Post a Message</button>
		 </form>
	 </div>
	 <div class="commentbox">
	 	<p>User Name - Date</p>
	 	<p class="usercomment">Comments, comment, comment.</p>

	 </div>
 </body>
 </html>