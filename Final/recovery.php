<?php
	require 'connect.inc.php';
	require 'core.inc.php';

	if(isset($_POST['mobile']) ) {

		$mobile=htmlentities($_POST['mobile']);
		
		if(!empty($mobile)) {

			if(strlen($mobile)==10) {
			
				$query="SELECT ID FROM USER WHERE MOBILE='$mobile'";
				
				if($query_run=mysql_query($query)){
					$id=mysql_result($query_run, 0,'ID');
					
					$_SESSION['id']=$id;

				header("Location: new_password.php");
														
				}
				else{
					echo '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>This number is not registered with our website.</div>';

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
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
