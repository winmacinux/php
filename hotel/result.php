<?php

	require 'connect.inc.php';
	require 'core.inc.php';

	if(isset($_POST['check_in']) && isset($_POST['check_out']) && isset($_POST['adults']) && isset($_POST['children'])){
			$check_in=$_POST['check_in'];
			$check_out=$_POST['check_out'];
			$adults=$_POST['adults'];
			$children=$_POST['children'];
			
			if(isset($_POST['flight'])){
				$flight=$_POST['flight'];
			}else
			{
				$flight='No';
			}

			if(!empty($check_in) && !empty($check_out) && !empty($adults) && !empty($children)){

				if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['rooms']) && isset($_POST['address'])){
					$name=$_POST['name'];
					$email=$_POST['email'];
					$mobile=$_POST['mobile'];
					$rooms=$_POST['rooms'];
					$address=$_POST['address'];
					$count=0;

					if(!empty($name) && !empty($email) && !empty($mobile) && !empty($rooms) && !empty($address)){
			
						foreach ($rooms as $selected_rooms) {
			 				 $count++;  
						}
						
			
						if($count<=get_total_rooms_availability()){

							foreach ($rooms as $selected_rooms) {
								
								if(!get_room_types_availability($selected_rooms)){

									$room_type_name=get_rooms_field($selected_rooms,'TYPE_NAME');
									echo 'The '.$room_type_name.' is not available as all this type of rooms is fulled.Sorry. Please try for other rooms.';
									die();
								}
							}
								$amount_pay=amount_pay($rooms,@$flag,$check_in,$check_out);
								echo "$flight";

								$id=customer_entry($name,$email,$mobile,$address,$check_in,$check_out,$adults,$children,@$flight,$amount_pay);

							foreach ($rooms as $selected_rooms) {

								get_alloted($id,$selected_rooms);
							}
							
							$_SESSION['id']=$id;
			 				header("Location: booked.php");
							}

						}
			

				}
			}
		}



?>


<!doctype html>
<html>
<head>
<title>Accomodation and Rooms</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container text-center">
	<div class="jumbotron text-left">
    	<h1 ><span class="text-primary">HOTEL.</span>COM</h1>
        <span class="text-success">Its just like your Home</span>
   	</div>

   	<h2 class="text-info">BOOK YOUR ROOMS OF YOUR LIKES.</h2>
   	<h3 class="text-danger">Different types of rooms that will attract to be here always.</h3>
  <form role="form" action="result.php" method="POST">
  <ul class="list-group text-left	">
    
    <li class="list-group-item list-group-item-warning">
    	<div class="form-group">
      		<label>Name</label>
      		<input type="text" class="form-control" name="name" placeholder="Enter name" required>
    	</div>
    </li>
    <li class="list-group-item list-group-item-warning">
    	<div class="form-group">
      		<label>Email</label>
      		<input type="email" class="form-control" name="email" placeholder="Enter email" required>
    	</div>
    </li>
    <li class="list-group-item list-group-item-warning">
    	<div class="form-group">
      		<label>Mobile</label>
      		<input type="number" maxlength="10" class="form-control" name="mobile" placeholder="Enter mobile" required>
    	</div>
    </li>
    <li class="list-group-item list-group-item-warning">
    	<div class="form-group">
      		<label>Address</label>
      		<input type="address" class="form-control" name="address" placeholder="Enter Address" required>
    	</div>
    </li>
    <li class="list-group-item list-group-item-warning">
    	<div class="form-group">
      		<label>Check In Date</label>
      		<input type="date" class="form-control" name="check_in" value="<?php if(isset($_POST['check_in'])){echo $_POST['check_in'];} ?>" required>
    	</div>
    </li>
    <li class="list-group-item list-group-item-warning" >
    	<div class="form-group">
      		<label>Check Out Date</label>
      		<input type="date" class="form-control" name="check_out" value="<?php if(isset($_POST['check_out'])){ echo $_POST['check_out']; }?>" required>
    	</div>
    </li>
    <li class="list-group-item list-group-item-warning">
    	<div class="form-group">
      		<label>Adults with you(including you)</label>
      		<input type="number" class="form-control" name="adults" value="<?php if(isset($_POST['adults'])){ echo $_POST['adults']; } ?>" placeholder="Enter number of adults" required>
    	</div>
    </li>
    <li class="list-group-item list-group-item-warning">
    	<div class="form-group">
      		<label>Children with you</label>
      		<input type="number" class="form-control" name="children" value="<?php if(isset($_POST['children'])){ echo $_POST['children'];} ?>" placeholder="Enter number of childrens" required>
    	</div>
    </li>
    <li class="list-group-item list-group-item-warning">
    	<label for="sel2">Mutiple select list (hold shift to select more than one): Type of rooms you Want</label>
      <select multiple class="form-control" name="rooms[]" required>
       <option value="11">Single Rooms</option>
        <option value="12">Double Room </option>
        <option value="13">Junior Suite</option>
        <option value="14">Superior Suite	</option>
        <option value="15">Executive Suite</option>
        <option value="16">Family Suite</option>
        <option value="17">Grande Guite</option>
        <option value="21">Premier Double</option>
        <option value="22">Preimer Junior suite</option>
        <option value="23">Honeymoon Suite</option>
        <option value="24">Premier Executive Suite</option>
        <option value="25">Premier Prestige Suite</option>
        <option value="26">Penthouse Suite</option>
        <option value="27">Presidential Suite</option>
      </select>
    </li>
    
    <li class="list-group-item list-group-item-success">
    	<button class="btn btn-danger btn-block" type="submit">Click to Book! </button>
    </li>
  </ul>

