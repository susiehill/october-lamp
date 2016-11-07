<?php 
//session_start();
require_once('connection.php');

//get quotes from database "quotes"
$query = 	"SELECT * FROM quotes.users ORDER BY created_at DESC";

//$datetime = new DateTime();
//var_dump($_POST);
//var_dump($quoteslist);

//insert quote to database

if ($_POST['first_name'] != NULL AND $_POST['email'] != NULL AND $_POST['quote'] != NULL) {
	$firstname = $_POST['first_name'];
	$email = $_POST['email'];
	$quoteentry = $_POST['quote'];
	$insert = 	"INSERT INTO users (first_name, email, quote, created_at, updated_at)
				VALUES ('{$firstname}', '{$email}', '{$quoteentry}', NOW(),NOW())";

	$insertquote = run_mysql_query($insert);
	} else {
	}
$quoteslist = fetch_all($query);
 ?>