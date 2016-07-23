<?php
	session_start();
	
	if(isset($_SESSION['email']) && isset($_SESSION['name'])) {
	$email=$_SESSION['email'];
	$name=$_SESSION['name'];
	
	if(!empty($email) && !empty($name)) {

		echo '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close" >&times;</a><strong>'.$name.' your new password have been updated. you may now login with your '.$email.' email id.</strong><br></div>';
	
	}
	session_destroy();

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

</body>
</html>