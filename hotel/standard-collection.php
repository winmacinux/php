<?php

  
?>



<!doctype html>
<html>
<head>
<title>Accomodation and Rooms</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>


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
      <input type="date" class="form-control" name="check_in" id="check_in" required >
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
      <img src="standard_1.jpg" style="height:200px;">
        <h2><span class="text-info">Single Room</span></h2>
        <h4><span class="text-justify">Single Rooms provide a space of 30-40m², offering a comfortable stay for one guest.</span></h4>
    <button class="btn btn-warning">Read More</button>
    <button class="btn btn-danger">Book Now</button>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail text-center border_remove">
      <img src="standard_2.jpg" style="height:200px;">
        <h2><span class="text-info">Double Room</span></h2>
        <h4><span class="text-justify">Double Rooms provide a space of 35-42m², offering a comfortable stay for one or two guests.</span></h4>
        <button class="btn btn-warning">Read More</button>
    <button class="btn btn-danger">Book Now</button>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail text-center border_remove">
      <img src="standard_3.jpg" style="height:200px;">
        <h2><span class="text-info">Junior Suite</span></h2>
        <h4><span class="text-justify">Featuring an elegant space of 45-60m², our Junior Suites invite you to enjoy your vacations with an air of discrete luxury.</span></h4>
        <button class="btn btn-warning">Read More</button>
    <button class="btn btn-danger">Book Now</button>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="thumbnail text-center border_remove">
      <img src="standard_4.jpg" style="height:200px;">
        <h2><span class="text-info">Superior Suite</span></h2>
        <h4><span class="text-justify">For those that wish to enjoy your vacations in style, the Superior Suite is the ideal choice. Two levels and 75m² give you the space you need for unique vacations.</span></h4>
        <button class="btn btn-warning">Read More</button>
    <button class="btn btn-danger">Book Now</button>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail text-center border_remove">
      <img src="standard_5.jpg" style="height:200px;">
        <h2><span class="text-info">Executive Suite</span></h2>
        <h4><span class="text-justify">The Executive Suites are the preferred choice for families with children or companies of up to 4 guests.</span></h4>
        <button class="btn btn-warning">Read More</button>
    <button class="btn btn-danger">Book Now</button>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail text-center border_remove">
      <img src="standard_6.jpg" style="height:200px;">
        <h2><span class="text-info">Family Suite</span></h2>
        <h4><span class="text-justify">The Family Suite is the preferred choice for families with children or companies of up to 4 guests.</span></h4>
        <button class="btn btn-warning">Read More</button>
    <button class="btn btn-danger">Book Now</button>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="thumbnail text-center border_remove">
      <img src="standard_7.jpg" style="height:200px;">
        <h2><span class="text-info">Grande Suite</span></h2>
        <h4><span class="text-justify">The preferred choice for groups of up to 6 guests, the Grande Suite offers 3 separate bedrooms and a spacious living room at a total of 175m², providing you with a unique stay experience.</span></h4>
        <button class="btn btn-warning">Read More</button>
    <button class="btn btn-danger">Book Now</button>
    </div>
  </div>
  </div>
    </div>





    </div>
    </body>
    </html>
