<?php
	require 'connect.inc.php';
	require 'core.inc.php';
	
	$email = get_user_field('EMAIL');
	$name = get_user_field('NAME');
	if(!empty($email) && !empty($name)) {

		echo '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close" >&times;</a><strong>'.$name.' your new password have been updated. you may now login with your '.$email.' email id.</strong><br></div>';
			session_destroy();
	}else{
		echo 'Error';
		session_destroy();
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
  <script src="script.js"></script>
</head>
<body>

<div class="container">
	<button class="btn btn-block btn-success" onclick="closeWindow()">Close</button>

</div>

</body>
</html>
