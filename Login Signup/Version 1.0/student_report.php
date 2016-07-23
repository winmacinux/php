<?php
	if(isset($_COOKIE['name']) && isset($_COOKIE['father_name']) && isset($_COOKIE['mother_name']) && isset($_COOKIE['roll_no']) && isset($_COOKIE['dob']) && isset($_COOKIE['english']) && isset($_COOKIE['science']) && isset($_COOKIE['maths']) && isset($_COOKIE['hindi']) && isset($_COOKIE['sst'])) {
		
    $name=$_COOKIE['name'];
		$father_name=$_COOKIE['father_name'];
		$mother_name=$_COOKIE['mother_name'];
		$roll_no=$_COOKIE['roll_no'];
		$dob=$_COOKIE['dob'];
		$english=$_COOKIE['english'];
		$science=$_COOKIE['science'];
		$maths=$_COOKIE['maths'];
		$hindi=$_COOKIE['hindi'];
		$sst=$_COOKIE['sst'];

    $total=$english+$science+$maths+$hindi+$sst;

    if($total>166){
    $result="Passed";
    }
    else{
      $result="Fail";
    }

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Marksheet</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="fonts/glyphicons-halflings-regular.svg">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
    <style>
      .table_color{
        background-color: #393abd;
        color: white;
        font-size: 18px;
      }
      .vr_space{
        margin:100px 0;
        
      }
      .floating{
        float:right;
      }
      .size{
        width: 100%;
      }
    </style>
    </head>
<body>
<div class="container-fluid">
  <img src="cbse_header.jpg" class=" size img-responsive">
</div>
<div class="container">
<div class="panel panel-info">
		<div class="panel-heading">
    		<h1>Student Marksheet</h1>
    
      <button onclick="location.href='student.php';" class="floating btn btn-danger">Check New Result</button>
    

    </div>
		<div class="panel-body">
    
    
    
    <div class="row vr_space">
      
      <div class="col-sm-2">
        <h4>Roll No:</h4><br>
        <h4>Father's Name:</h4>
      </div>
      <div class="col-sm-4">
        <h4><?php echo @$roll_no ?></h4><br>
        <h4><?php echo @$father_name ?></h4>
      </div>
      <div class="col-sm-2">
        <h4>Name:</h4><br>
        <h4>Mother's Name:</h4>
      </div>
      <div class="col-sm-4">
        <h4><?php echo @$name ?></h4><br>
        <h4><?php echo @$mother_name ?></h4>
      </div>
    </div>

<div class="table-responsive">          
  <table class="table table-striped">
    <thead>
      <tr class="table_color">
        <th>SUB CODE</th>
        <th>SUBJECT NAME</th>
        <th>MARKS OBTAINED</th>
        <th>MAX. MARKS</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>ENGLISH</td>
        <td><?php echo @$english ?></td>
        <td>100</td>
      </tr>

      <tr>
        <td>2</td>
        <td>SCIENCE</td>
        <td><?php echo @$science ?></td>
        <td>100</td>
      </tr>

      <tr>
        <td>3</td>
        <td>MATHS</td>
        <td><?php echo @$maths ?></td>
        <td>100</td>
      </tr>

      <tr>
        <td>4</td>
        <td>HINDI</td>
        <td><?php echo @$hindi ?></td>
        <td>100</td>
      </tr>

      <tr>
        <td>5</td>
        <td>SST</td>
        <td><?php echo @$sst ?></td>
        <td>100</td>
      </tr>
      <tr class="table_color">
        <td colspan="4" align="center">Result: <?php echo @$result ?></td>
      </tr>

    </tbody>
  </table>
  </div>
</div>
</div>
</div>
</body>
</html>