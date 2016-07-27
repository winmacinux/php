<?php


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

<div class="container">
	<div class="jumbotron">
    	<h1 ><span class="text-primary">HOTEL.</span>COM</h1>
        <span class="text-success">Its just like your Home</span>
    </div>
    
    <div class="row text-center">
    <form class="form-inline" action="result.php" method="POST" role="form">
      <div class="row">
      <div class="col-sm-3">
      <div class="form-group">
      <label for="check_in">Check In:</label>
      <input type="date" class="form-control" name="check_in" id="check_in" required>
      </div>  </div>
      <div class="col-sm-3">
      <div class="form-group">
      <label for="check_out">Check Out:</label>
      <input type="date" class="form-control" name="check_out" id="check_out" required>
      </div>  </div>
      <div class="col-sm-3">
      <div class="form-group">
      <label for="adults">Adults:</label>
      <input type="number" class="form-control" name="adults" id="adults" required> 
      </div> </div>
      <div class="col-sm-3">
      <div class="form-group">
      <label for="children">Children:</label>
      <input type="number" class="form-control" name="children" id="children" required> 
      </div>  </div>
      </div>
      <br>
      <div class="row">
      <div class="col-sm-offset-2 col-sm-3">
      
        <label class="radio-inline">With Flight?</label>
        <label class="radio-inline">
              <input type="radio" name="flight" value="Yes">Yes 
          </label> 
          <label class="radio-inline">
              <input type="radio" name="flight" value="No" required> No
          </label>  
       </div>

      <div class="col-sm-2">
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </div>
    </form>
   </div>



<div class="content2">
<div class="row">
  <div class="col-md-4">
    <div class="thumbnail text-center border_remove">
      <img src="premier_1.jpg" style="height:200px;" >
        <h2><span class="text-info">Premier Double Room</span></h2>
        <h4><span class="text-justify">The Premier Double Room offers a space of 40-42m², providing a comfortable and luxurious stay for two guests.</span></h4>
    <button class="btn btn-warning">Read More</button>
    <button class="btn btn-danger" onclick="window.location.href='result.php'; ">Book Now</button>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail text-center border_remove">
      <img src="premier_2.jpg" style="height:200px;" >
        <h2><span class="text-info">Premier Junior Suite</span></h2>
        <h4><span class="text-justify">An elegant space of 55-60m² invites you to enjoy your vacations in luxury. The separate bedroom and living room provide ample space for an unforgettable two-person stay.</span></h4>
        <button class="btn btn-warning">Read More</button>
    <button class="btn btn-danger" onclick="window.location.href='result.php'; ">Book Now</button>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail text-center border_remove">
      <img src="premier_3.jpg" style="height:200px;" >
        <h2><span class="text-info">Honeymoon Suite</span></h2>
        <h4><span class="text-justify">The ideal choice for special occasions: honeymooners, romantic getaways or just an unforgettable escape.</span></h4>
        <button class="btn btn-warning">Read More</button>
    <button class="btn btn-danger" onclick="window.location.href='result.php'; ">Book Now</button>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="thumbnail text-center border_remove">
      <img src="premier_4.jpg" style="height:200px;" >
        <h2><span class="text-info">Premier Executive Suite</span></h2>
        <h4><span class="text-justify">The Premier Executive Suite is the preferred choice for families with children or companies of up to 4 guests.</span></h4>
        <button class="btn btn-warning">Read More</button>
    <button class="btn btn-danger" onclick="window.location.href='result.php'; ">Book Now</button>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail text-center border_remove">
      <img src="premier_5.jpg" style="height:200px;" >
        <h2><span class="text-info">Premier Prestige Suite</span></h2>
        <h4><span class="text-justify">A unique approach to luxury, ideal for the stay of 4 guests; two spacious levels with two bedrooms, spanning 95-110m², invite you for an escape like no other.</span></h4>
        <button class="btn btn-warning">Read More</button>
    <button class="btn btn-danger" onclick="window.location.href='result.php'; ">Book Now</button>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail text-center border_remove">
      <img src="premier_6.jpg" style="height:200px;" >
        <h2><span class="text-info">Penthouse Suite</span></h2>
        <h4><span class="text-justify">The one and only Penthouse Suite, a work of art spanning 150m² on two levels. Two separate bedrooms and a study room guarantee an unforgettable stay for up to five guests.</span></h4>
        <button class="btn btn-warning">Read More</button>
    <button class="btn btn-danger" onclick="window.location.href='result.php'; ">Book Now</button>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="thumbnail text-center border_remove">
      <img src="premier_7.jpg" style="height:200px;" >
        <h2><span class="text-info">Presidential Suite</span></h2>
        <h4><span class="text-justify">This Unique Suite offers 3 bedrooms in two-levels, ensuring the comfortable stay of big families or groups of friends.</span></h4>
        <button class="btn btn-warning">Read More</button>
    <button class="btn btn-danger" onclick="window.location.href='result.php'; ">Book Now</button>
    </div>
  </div>
  </div>





</div>



    </div>
    </body>
    </html>
