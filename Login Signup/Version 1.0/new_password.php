<?php
	session_start();

if(isset($_SESSION['email']) && isset($_POST['password1']) && isset($_POST['password2'])) {
$password1=md5($_POST['password1']);
$password2=md5($_POST['password2']);
$email=$_SESSION['email'];


if(!empty($password1) && !empty($password2) && !empty($email)) {
	$mysql_host='localhost';
	$mysql_user='root';
	$mysql_pass='ravi';
	$mysql_db='users_db';

if(strcmp($password1,$password2)==0) {

	if(@!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || @!mysql_select_db($mysql_db)) {
					die('Cannot connect to the Mysql Server, may be database is invalid.');
				}

$change_password="UPDATE USER SET PASSWORD='$password1' WHERE EMAIL='$email'";
$query_run2=mysql_query($change_password);

header("Location: alert_password_change.php");

}
else{
	echo '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close" >&times;</a><strong>New Entered password doesn\'t matched. Please enter your passowrd again carefully.</strong><br></div>';
}
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Account Recovery</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="fonts/glyphicons-halflings-regular.svg">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
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
