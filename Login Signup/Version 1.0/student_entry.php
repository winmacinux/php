<?php

  if(isset($_POST['name']) && isset($_POST['father_name']) && isset($_POST['mother_name']) && isset($_POST['roll_no']) && isset($_POST['date']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['english']) && isset($_POST['science']) && isset($_POST['maths']) && isset($_POST['hindi']) && isset($_POST['sst'])) {
  
    $name=htmlentities(strtoupper(($_POST['name'])));
    $father_name=htmlentities(strtoupper(($_POST['father_name'])));
    $mother_name=htmlentities(strtoupper(($_POST['mother_name'])));
    $roll_no=htmlentities(strtoupper(($_POST['roll_no'])));
    $date=$_POST['date'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $english=$_POST['english'];
    $science=$_POST['science'];
    $maths=$_POST['maths'];
    $hindi=$_POST['hindi'];
    $sst=$_POST['sst'];
      if(!empty($roll_no) && !empty($date) && !empty($month) && !empty($year) &&!empty($name) && !empty($father_name) && !empty($mother_name) && !empty($english) && !empty($science) && !empty($maths) && !empty($hindi) && !empty($sst)) {

    if(strlen($roll_no)==6){
      $mysql_host='localhost';
      $mysql_user='root';
      $mysql_pass='ravi';
      $mysql_db='students';


      if(@!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || @!mysql_select_db($mysql_db)) {
      
        die('Could not connect o the Mysql Server.');
      }

      $query_student="INSERT INTO STUDENT VALUES ('$name','$roll_no','$year-$month-$date','$father_name','$mother_name')";
      $query_result="INSERT INTO RESULT VALUES ('$roll_no','$english','$science','$maths','$hindi','$sst')";
      if(mysql_query($query_student)){

       if(mysql_query($query_result)){
        
        echo '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Student & Result data has been updated.<br>'.mysql_error().'</strong></div>';
        }
        else{
        echo '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Sorry! error occured while updating Result database.Please Try Again.<br>'.mysql_error().'</strong></div>'; 
        }
      }
      else{
        echo '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Sorry! error occured while updating Student database.Please Try Again.<br>'.mysql_error().'</strong></div>'; 
      }


    }
    else{
      echo '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Roll number munst be of six digits. Please re-check it.</strong></div>';  
    }
  
  }
  else{
    echo '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Please fill all the Contents.</strong></div>';
  }
  @mysql_close();
}



?>















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
<div class="panel panel-warning">
		<div class="panel-heading">
			<h1>Student Marks Database Entry</h1>
		</div>
		<div class="panel-body">
    
    <form for="form" class="form-horizontal" action="student_entry.php" method="POST">
    
    
    <div class="row">

      <div class="form-group">
        <div class="col-sm-6">
          <label class="control-label col-sm-4">Roll No:</label>
          <div class="col-sm-8"><input type="number" name="roll_no" class="form-control" placeholder="Enter roll number" autofocus required></div>
        </div>
           
        <div class="col-sm-6">  
         <label class="control-label col-sm-4">Name:</label>
          <div class="col-sm-8"><input type="text" name="name" class="form-control" placeholder="Enter student name" required></div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <div class="col-sm-6">
          <label class="control-label col-sm-4">Mother's Name:</label>
           <div class="col-sm-8"><input type="text" name="mother_name" class="form-control" placeholder="Enter mother's name" required></div>
         </div>
        

        
      
        <div class="col-sm-6">
          <label class="control-label col-sm-4">Father's Name:</label>
          <div class="col-sm-8"><input type="text" name="father_name" class="form-control" placeholder="Enter father's name" required></div>
        </div>
    </div>

        
      
    <div class="row">
      <div class="col-sm-6">
      <div class="form-group">
        <label class="control-label col-sm-4">Date Of Birth:</label>
    
          <div class="col-sm-2">          
            <input type="number" min="1" max="31" class="form-control" name="date" placeholder="Date" required>
          </div>
          <div class="col-sm-4">          
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
        <td><input type="number" min="0" max="100" name="english" class="form-control" placeholder="0-100" required></td>
        <td>100</td>
      </tr>

      <tr>
        <td>2</td>
        <td>SCIENCE</td>
        <td><input type="number" min="0" max="100" name="science" class="form-control" placeholder="0-100" required></td>
        <td>100</td>
      </tr>

      <tr>
        <td>3</td>
        <td>MATHS</td>
        <td><input type="number" min="0" max="100" name="maths" class="form-control" placeholder="0-100" required></td>
        <td>100</td>
      </tr>

      <tr>
        <td>4</td>
        <td>HINDI</td>
        <td><input type="number" min="0" max="100" name="hindi" class="form-control" placeholder="0-100" required></td>
        <td>100</td>
      </tr>

      <tr>
        <td>5</td>
        <td>SST</td>
        <td><input type="number" min="0" max="100" name="sst" class="form-control" placeholder="0-100" required></td>
        <td>100</td>
      </tr>
      <tr>
        <td colspan="4"><button type="submit" class="btn btn-block btn-warning">Submit</button></td>
      </tr>

    </tbody>
  </table>
  </div>
</div>
</div>
</div>
</body>
</html>