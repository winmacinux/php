<?php
	session_start();

	if(isset($_POST['mobile']) ) {

		$mobile=htmlentities($_POST['mobile']);
		
		if(!empty($mobile)) {
			$mysql_host='localhost';
			$mysql_user='root';
			$mysql_pass='ravi';
			$mysql_db='users_db';

			if(strlen($mobile)==10) {
			
			$query="SELECT * FROM USER WHERE MOBILE='$mobile'";
			

				if(@!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || @!mysql_select_db($mysql_db)) {
					die('Could not connect to the Mysql Server, may be database is invalid.');
				}
					if($query_run=mysql_query($query)) {
						if(mysql_num_rows($query_run)!=NULL) {
							
							$details=mysql_fetch_assoc($query_run);
							$_SESSION['email']=$details['EMAIL'];
							$_SESSION['name']=$details['NAME'];

							header("Location: new_password.php");
															
						}
						else{
							echo '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>This number is not registered with our website.</div>';

						}
					}
				}

			}
		}
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Account recovery</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="fonts/glyphicons-halflings-regular.svg">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="panel panel-warning">
<div class="panel-heading">
<h1>Account recovery Process</h1>
</div>
<div class="panel-body">
<form role="form" action="recovery.php" method="POST">
<div class="form-group">
<label for="recovery_number">To recover your email's password, please enter your  Mobile Number. Here</label>
<input type="number" maxlength="10" name="mobile" id="recovery_number" class="form-control" placeholder="Enter your mobile number">
</div>
<button type="submit" class="btn btn-block btn-warning">Check</button>


</div>
</form>
</div>
</div>
</div>



</body>
</html>