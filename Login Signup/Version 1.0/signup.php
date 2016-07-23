<?php
	session_start();

	if(!isset($_SESSION['email'])) {	
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])  && isset($_POST['mobile']) && isset($_POST['gender']) && isset($_POST['date'])  && isset($_POST['month']) && isset($_POST['date']) && isset($_POST['year'])) {

		$name=strtoupper(htmlentities($_POST['name']));
		$email=strtolower(htmlentities($_POST['email']));
		$password=md5(htmlentities($_POST['password']));
		$password2=md5(htmlentities($_POST['password2']));
		$mobile=htmlentities($_POST['mobile']);
		$gender=strtoupper(htmlentities($_POST['gender']));
		$date=htmlentities($_POST['date']);
		$month=htmlentities($_POST['month']);
		$year=htmlentities($_POST['year']);

		


if(!empty($name) && !empty($email) && !empty($password) && !empty($mobile) && !empty($gender) && !empty($date) && !empty($month) && !empty($year)) {
		
	$mysql_host='localhost';
	$mysql_user='root';
	$mysql_pass='ravi';
	$mysql_db='users_db';


	if(strcmp($password,$password2)==0) {
				$query_check="SELECT MAX(ID) FROM USER";
				$query_check_run=mysql_query($query_check);
				$id=mysql_result($query_check_run, 0, 'max(ID)');
				$id++;
	
			$query="INSERT INTO USER VALUES ('$name', '$email', '$password', '$mobile', '$gender', '$year-$month-$date','$id')";

	if(@!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || @!mysql_select_db($mysql_db)) {
		
		die('Could not connect o the Mysql Server.');
	}

	if($query_run=mysql_query($query))
	{
		$_SESSION['name']=$name;
		$_SESSION['email']=$email;
		
		header("Location: signup_user.php");
		
	}
	else{
		echo '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Cannot be registered due to the problem.</strong><br>';
		echo '<h2>'.mysql_error().'</h2></div>';
	}

	}
	else{
		echo '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Password doesn\'t matched. Please check your entered password.</strong><br></div>';

	}
}
	@mysql_close();
}
}
else {
	header('Location: login.php');
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="fonts/glyphicons-halflings-regular.svg">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
</head>

<body>

<div class="container">

<div class="panel panel-danger">
<div class="panel-heading">

<h2>Signup Form
<div class="col-sm-offset-8 col-sm-4">
<button type="button" onclick="location.href='login.php';" class="btn btn-block btn-success">Log in</button>
</div></h2>
</div>
<div class="panel-body">

<form role="form" name="signup" action="signup.php" method="POST">
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" autofocus required>
	</div>

	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email"id="email" placeholder="Enter email" required>
	</div>

	<div class="form-group">
		<label for="pwd1">Password</label>
		<input type="password" class="form-control" name="password" id="pwd1" placeholder="Enter password" required>
	</div>

	<div class="form-group">
		<label for="pwd2">Re-enter Password</label>
		<input type="password" class="form-control" id="pwd2" name="password2" placeholder="Re-enter password" required>
	</div>

	<div class="form-group">
      <label for="mobile">Mobile No.</label>
      <input type="number" maxlength="10" name="mobile" class="form-control" id="mobile" placeholder="Enter mobile number" required>
    </div>

    <div class="form-group">
    	<label>Gender</label>
    </div>
    <div class="radio">
    <label><input type="radio" name="gender" value="Male" required> Male</label>
    <label><input type="radio" name="gender" value="Female">Female</label>
    <label><input type="radio" name="gender" value="Others">Others</label>

    </div>

	<div class="form-group">
      <label>Date of birth</label>
      <div class="row">
      <div class="col-xs-4">
      <input type="number" min="1" max="31" step="1" name="date" class="form-control" placeholder="Date">
      </div>
      <div class="col-xs-4">
      <select class="form-control" name="month" required>
        <option value=-1 selected>Month</option>
        <option value=01>January</option>
        <option value=02>February</option>
        <option value=03>March</option>
        <option value=04>April</option>
        <option value=05>May</option>
        <option value=06>June</option>
        <option value=07>July</option>
        <option value=08>August</option>
        <option value=09>September</option>
        <option value=10>October</option>
        <option value=11>November</option>
        <option value=12>December</option>
      </select>
      </div>
      <div class="col-xs-4">
      <input type="number" min="1920" max="2016" step="1" name="year" class="form-control" placeholder="Year" required>
      </div>
    </div> 
    </div>
    <div class="checkbox">
		<label><input type="checkbox" required>I accept all the terms and conditions of Homework.</label>
		</div>
    	<button type="submit" class="btn btn-block btn-danger">Register</button>  
</form>
</div>
</div>
</div>
</body>
</html>

