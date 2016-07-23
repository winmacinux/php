<?php

	require 'connect.inc.php';
	require 'core.inc.php';

	if(isset($_SESSION['id']) && isset($_POST['password1']) && isset($_POST['password2'])) {
	$password1=md5($_POST['password1']);
	$password2=md5($_POST['password2']);
	$id=$_SESSION['id'];
	 
		if(!empty($id) && !empty($password2) && !empty($password1)) {
			if(strcmp($password1,$password2)==0) {
			
				echo $change_password="UPDATE USER SET PASSWORD='$password1' WHERE ID='$id";
				
				$query_run=mysql_query($change_password);

				header("Location: alert_password_change.php");
			}
		
			else{
				echo '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close" >&times;</a><strong>New Entered password doesn\'t matched. Please enter your passowrd again carefully.</strong><br></div>';
			}
		}

	}
	else{
		echo '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close" >&times;</a><strong>Can\'t left fields blank. please update the new passsword.</strong><br></div>';
	}	
	


?>


<!DOCTYPE html>
<html>
<head>
	<title>Account Recovery</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<form name="new_password" role="from" method="POST">
		<div class="form-group">
			<label for="pwd">New password:</label>
			<input type="password" class="form-control" name="password1" id="pwd" autofocus placeholder="Enter password" required>
		</div>

		<div class="form-group">
			<label for="pwd">Confirm password:</label>
			<input type="password" class="form-control" name="password2" id="pwd" placeholder="Enter password" required>
		</div>
			<button type="submit" class="btn btn-success btn-block">Change Password</button>
	</form>
</div>
</body>
</html>
