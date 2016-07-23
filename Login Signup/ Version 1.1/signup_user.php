<?php
	session_start();
	
	if(isset($_SESSION['email']) && isset($_SESSION['name'])) {
	$email=$_SESSION['email'];
	$name=$_SESSION['name'];
	
	if(!empty($email) && !empty($name)) {
		echo '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><h2><u>'.$name.'</u>,you have been registered with <u>'.$email.'</u> email id.</h2></div>';
	
	}
	session_destroy();
	

}


?>


<!DOCTYPE html>
<html>
<head>
	<title><?php echo 'Welcome '.$_SESSION['name']; ?></title>
	<meta charset="utf-8">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 
</head>
<body>
<div class="container">
<a href="index.php" class="btn btn-block btn-success">Click here to login.</a>
</div>
</body>
</html>
