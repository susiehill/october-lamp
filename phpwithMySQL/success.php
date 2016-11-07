<?php 
session_start();
require_once('new_connection.php');

$query = "INSERT INTO people (first_name, last_name, email)
          VALUES('{$_POST['first_name']}','{$_POST['last_name']}','{$_POST['email']}'";
if(run_mysql_query($query))
{
    $_SESSION['message'] = "Your email address has been added successfully.";
}
else
{
    $_SESSION['message'] = "Failed to add email. Please try again."; 
}
//header('Location: success.php');

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Submission Successful</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<h1>Submitted Information</h1>
<?php 
	echo $_SESSION['message']."<br /><br />";
 ?>
	<table>
		<tr>
			<td class="format">First Name</td>
			<td>
				<?php echo $_POST['first_name'];?>
 			</td>
		</tr>
			<td class="format">Last Name</td>
			<td>
				<?php echo $_POST['last_name'];?>
 			</td>
		<tr>
			<td class="format">Email</td>
			<td>
				<?php echo $_POST['email'];?>
			</td>
		</tr>
	</table>
</body>
</html>
 