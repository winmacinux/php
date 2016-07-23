<?php
	ob_start();
	session_start();
	
	if(isset($_SESSION['email']) && isset($_SESSION['name'])) {
	$email=$_SESSION['email'];
	$name=$_SESSION['name'];
	
	if(!empty($email) && !empty($name)) {
		echo '<div class="alert alert-info"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Welcome '.$name.' to your account.<br>'.'Your Email Id is '.$email.'</div>';
	
	}
	
	

}


?>


<!DOCTYPE html>
<html>
<head>
	<title><?php echo 'Welcome '.@$_SESSION['name']; ?></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="fonts/glyphicons-halflings-regular.svg">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <script type="text/javascript">
	function logout(){

		location.href='logout.php';
		
	}
</script>
<style>
.size{
        width: 100%;
      }
</style>
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