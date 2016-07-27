<?php
	require 'connect.inc.php';
	require 'core.inc.php';

	if(isset($_SESSION['id'])){

	$_id=$_SESSION['id'];
	if(!empty($id)){
	$query="SELECT * FROM ALLOTMENT WHERE CUST_ID='$id'";
	$query_run=mysql_query($query);








?>

<!DOCTYPE html>
<html>
<head>
	<title>Accomodation and Rooms</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="fonts/glyphicons-halflings-regular.svg">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>

    </head>
<body>
	<div class="container text-center">
	<div class="jumbotron text-left">
    	<h1 ><span class="text-primary">HOTEL.</span>COM</h1>
        <span class="text-success">Its just like your Home</span>
   	</div>

   	<?php  echo '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong> Welcome'.get_cust_info($id,'NAME').', you booked yoour rooms with ID='.$id.' in Hotel.com from '.get_cust_info($id,'CHECK_IN').' to '.get_cust_info($id,'CHECK_OUT').'<br>Your rooms details are listed Below:</strong><br></div>';

 ?>
   	<table class="table table-striped">
    <thead>
      <tr class="warning"> 
        <th>Room Number</th>
        <th>Room Type</th>
        <th>Charges</th>
      </tr>
    </thead>
    <tbody>
<?php
	while($room_allotment_info=mysql_fetch_assoc($query_run)){

			$room_no=$room_allotment_info['NO'];
			$room_type=$room_allotment_info['TYPE'];

			$query_2="SELECT * FROM ROOMS WHERE TYPE='$room_type'";
			$query2_run=mysql_query($query2);
			$room_type_name=mysql_result($query2_run,0,'TYPE_NAME');
			$Charges=mysql_result($query2_run,0, PRICES);
?>
<tr>
	<td><?php echo $room_no; ?></td>
	<td><?php echo $room_type_name;?></td>
	<td><?php echo $charges; ?></td>
</tr>;
<?php
}
}
}
?>


    </tbody>
  </table>
