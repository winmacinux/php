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
<link rel="stylesheet" href="fonts/glyphicons-halflings-regular.svg">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
 
</head>
<body>
<div class="container">
<a href="login.php" class="btn btn-block btn-success">Click here to login.</a>
</div>
</body>
</html>