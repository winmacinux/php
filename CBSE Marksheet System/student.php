<?php
	
if(isset($_GET['roll_no']) && isset($_GET['date']) && isset($_GET['month']) && isset($_GET['year'])) {
	$roll_no=$_GET['roll_no'];
	$date=$_GET['date'];
	$month=$_GET['month'];
	$year=$_GET['year'];

	if(!empty($roll_no) && !empty($date) && !empty($month) && !empty($year)) {

		$dob=$year.'-'.$month.'-'.$date;
		if(strlen($roll_no)==6) {

			$mysql_host='localhost';
			$mysql_user='root';
			$mysql_pass='ravi';
			$mysql_db='students';
			
			if(@!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || @!mysql_select_db($mysql_db)) {
			
				die('Could not connect o the Mysql Server.');
			}
			$query="SELECT * FROM STUDENT NATURAL JOIN RESULT WHERE ROLL_NO='$roll_no' AND DOB='$dob'";


			$query_run=mysql_query($query);
			

			if(@mysql_num_rows($query_run)==NULL) {
				echo '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Invalid roll number or date of birth.</strong></div>';
			}
			else{
				$details=mysql_fetch_assoc($query_run);
				$name=$details['NAME'];
				$father_name=$details['FATHER_NAME'];
				$mother_name=$details['MOTHER_NAME'];
				$english=$details['ENGLISH'];
				$science=$details['SCIENCE'];
				$maths=$details['MATHS'];
				$hindi=$details['HINDI'];
				$sst=$details['SST'];

				echo $time=time();
				setcookie('name',$name,$time+30);
				setcookie('father_name',$father_name,$time+30);
				setcookie('mother_name',$mother_name,$time+30);
				setcookie('roll_no',$roll_no,$time+30);
				setcookie('dob',$dob,$time+30);
				setcookie('english',$english,$time+30);
				setcookie('science',$science,$time+30);
				setcookie('maths',$maths,$time+30);
				setcookie('hindi',$hindi,$time+30);
				setcookie('sst',$sst,$time+30);

				header("Location: student_report.php");



			}


		}
		else {
			echo '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Roll number must of 6 digits.</strong></div>';
		}
	}
	else{
		echo '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Please fill the fields.</strong></div>';
	}
}




?>


<!DOCTYPE html>
<html>
<head>
	<title>Student DataBase</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="fonts/glyphicons-halflings-regular.svg">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>

</head>
<body>
<div class="container">

	<div class="panel panel-info">
		<div class="panel-heading">
			<h1>Student Result</h1>
		</div>
		<div class="panel-body">

			
			<form name="student" action="student.php" method="GET" class="form-horizontal">
					<div class="form-group">
      					<h1 class=" col-sm-offset-4 col-sm-6">Please enter your details</h1>
      				</div>

      				<div class="form-group">
      					<label class="control-label col-sm-offset-2 col-sm-2">Roll Number:</label>
      					<div class="col-sm-6">          
        					<input type="text" class="form-control" name="roll_no" placeholder="Enter Roll Number" autofocus required>
      					</div>
      				</div>

      				<div class="form-group">
      					<label class="control-label col-sm-offset-2 col-sm-2">Date Of Birth:</label>
    
      					<div class="col-sm-2">          
        					<input type="number" min="1" max="31" class="form-control" name="date" placeholder="Date" required>
      					</div>
      					<div class="col-sm-2">          
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
						        <option value=30>October</option>
						        <option value=11>November</option>
						        <option value=12>December</option>
						    </select>
      					</div>
      					<div class="col-sm-2">          
        					<input type="number" class="form-control" name="year" placeholder="Year" required>
      					</div>
     				</div>
     				<div class="form-group">
     					<div class="col-sm-offset-4 col-sm-6">
     				<button type="submit" class="btn btn-info btn-block">Submit</button>
			</form>
		</div>
	</div>     

</div>
</form>
</div>
</body>
</html>