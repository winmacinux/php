<?php
	ob_start();
	session_start();

	if(isset($_SESSION['email']) && !empty($_SESSION['email'])) {
		header("Location: login_user.php");
	}
	else{


	if(isset($_POST['email']) && isset($_POST['pwd'])) {

		$email=strtolower(htmlentities($_POST['email']));
		$password=md5(htmlentities($_POST['pwd']));
		




		if(!empty($email) && !empty($password)) {
			$mysql_host='localhost';
			$mysql_user='root';
			$mysql_pass='ravi';
			$mysql_db='users_db';

			$query="SELECT * FROM USER WHERE EMAIL='$email' AND PASSWORD='$password'";

			if(@!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || @!mysql_select_db($mysql_db)) {
		
				die('Could not connect to the Mysql Server, may be database is invalid.');
			}

			if($query_run=mysql_query($query)) {

				if(mysql_num_rows($query_run)==NULL) {

					echo  '<div class="alert alert-danger">
    					   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     						Invalid User</div>';
				}
				else{

					$details=mysql_fetch_assoc($query_run);

					$fetched_name=$details['NAME'];
					$fetched_email=$details['EMAIL'];

					$_SESSION['name']=$fetched_name;
					$_SESSION['email']=$fetched_email;

					header("Location: login_user.php");

					
					}
				}
			}

			mysql_close();
		}


	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="fonts/glyphicons-halflings-regular.svg">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>

<script type="text/javascript">

	function recovery(){
		var set = "width=800,height=600";
		var URL="recovery.php";

		var myWindow = window.open(URL, "", set);



	}

</script>

</head>
<body>

<div class="container">



<div class="panel panel-success">
<div class="panel-heading">
<h1>Login Page</h1>
</div>

<div class="panel-body">
	<form role="form" action="login.php" method="POST">
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" name="email" id="email" placeholder="Enter email id" autofocus required>
		</div>

		<div class="form-group">
			<label for="email">Password </label>
			<input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter password" required>
		</div>
		<div class="checkbox">
		<div class="col-xs-10">
		<label><input type="checkbox">Remember me</label>
		</div>
		<div class="col-xs-2">
		<label ><a onclick="recovery()">Need a help?</a></label>
		</div>
		</div>
		<button type="submit" class="btn btn-block btn-success">Login</button>
		
	</form>
	<h3 class="text-center">OR</h3>
	<button type="button" onclick="location.href='signup.php';" class="btn btn-block btn-warning">Signup</button>
</div>

</div>
</div>


</body>
</html>