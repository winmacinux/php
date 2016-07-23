<?php
	
	require 'core.inc.php';

	if(isset($_SESSION['id']) && !empty($_SESSION['id']) && isset($_SESSION['name']) && !empty($_SESSION['name'])) {
	echo	$email=get_user_field('EMAIL');
		$name=$_SESSION['name'];
	

	//if(!empty($email)) {
		echo '<div class="alert alert-info"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Welcome '.$name.' to your account.<br>'.'Your Email Id is '.$email.'</div>';
	
	//}
	
	

}



?>


<!DOCTYPE html>
<html>
<head>
	<title><?php echo 'Welcome '.@$_SESSION['name']; ?></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="script.js"></script>

</head>
<body>
<div class="container">
<button type="button" onclick="logout()" class="btn btn-block btn-primary">Log Out</button>

</div>
<div class="conatiner-fluid">
<img src="<?php  echo @$_SESSION['name']; ?>.jpg" class="size img-responsive">
</div>
</body>
</html>
