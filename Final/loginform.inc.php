<?php
	

	if(isset($_POST['email']) && isset($_POST['pwd'])) {

	$email=strtolower(htmlentities($_POST['email']));
	$password=md5(htmlentities($_POST['pwd']));
	
	if(!empty($email) && !empty($password)) {
	$query="SELECT * FROM USER WHERE EMAIL='$email' AND PASSWORD='$password'";	

	if(@$query_run=mysql_query($query)) {

				if(mysql_num_rows($query_run)==NULL) {

					echo  '<div class="alert alert-danger">
    					   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     						Invalid User</div>';
				}
				else{

					$details=mysql_fetch_assoc($query_run);

					$fetched_id=$details['ID'];
					$fetched_name=$details['NAME'];

					$_SESSION['id']=$fetched_id;
					$_SESSION['name']=$fetched_name;


					header("Location: index.php");

					
					}
			}
		}

			
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

  <script src="script.js"></script>
</head>

<body>

<div class="container">

<div class="panel panel-success">
<div class="panel-heading">
<h1>Login Page</h1>
</div>

<div class="panel-body">
	<form role="form" action="<?php echo @$current_page; ?>" method="POST">
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
