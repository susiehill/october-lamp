<?php 
//session_start();
require('process.php');
//var_dump($quoteslist);
//var_dump($connection);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Coding Dojo Quotes</title>
	<link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>
	<h1>Here are the Awesome Quotes!</h1>
	<div class="quote">
     <?php 
 		foreach ($quoteslist as $quote) {
 			echo "<p align='left'>"."'" . $quote['quote'] ."'". "<br />";
 			echo "&ndash;".$quote['first_name'] . " at " . $quote['created_at'] . "<br />";
			echo "</p>";
			echo "<hr />";
 		}

      ?>
    </div>


</body>
</html>