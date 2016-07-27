<?php
require 'connect.inc.php';
require 'core.inc.php';

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


</head>

<body>

<div class="container">
	<div class="jumbotron">
    	<h1 ><span class="text-primary">HOTEL.</span>COM</h1>
        <span class="text-success">Its just like your Home</span>
    </div>
    
    <div class="content">
    <div class="col-sm-2">
        
        <span><b>SEARCH ROOMS</b>
        <br>FOR RATES AND AVAILABILTY</span>
    </div>
        
     <div class="col-sm-10">   
    <form class="form-inline" role="form">
    <div class="row">
    <div class="col-sm-4">
    <div class="form-group">
      <label for="check_in">Check in</label>
      <input type="date" class="form-control" id="check_in">
    </div>
    </div>
    <div class="col-sm-4">
    <div class="form-group">
      <label for="adults">Adults</label>
      <input type="number" class="form-control" id="adults">
    </div>

    </div>
    <div class="col-sm-2">
    <div class="checkbox">
    <label>With Flights?</label></div>
    <div class="checkbox">
    <label><input type="checkbox"> Yes</label>
   
    
      <label><input type="checkbox"> No</label>
    </div>

    </div>
    </div>


    <div class="row">
    <div class="col-sm-4">
    <div class="form-group">
      <label for="check_in">Check out</label>
      <input type="date" class="form-control" id="check_out">
    </div>
    </div>
    <div class="col-sm-4">
    <div class="form-group">
      <label for="children">Children</label>
      <input type="number" class="form-control" id="children">
    </div>
    </div>
    <div class="col-sm-2">
    <div class="checkbox">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
    </div>


    </form>
    </div>    
    <div>
    </div>
    </div>

    <div class="content2">
        <div class="row">
        <div class="col-sm-6 text-center ">
           <a href="standard-collection.php"><img src="standard-collection-double-room-photo-large.jpg" class="img-thumbnail" ></a><br><br>
           <button class="btn btn-warning " onclick="window.location.href='standard-collection.php';">View All Rooms</button>
        </div>
        <div class="col-sm-6 text-center">
            <a href="premier-collection.php"><img src="premier_collection.jpg" class="img-thumbnail" ></a><br><br>
            <button class="btn btn-warning" onclick="window.location.href='premier-collection.php';" >View All Rooms</button>
        </div>   
        </div>
        <div class="row">
            <p class="text-justify">
                
<h4><b>Superior <span class="text-warning">Accommodation</span></b></h4>
At <span class="text-warning">Premier Luxury Mountain Resort</span> all room types are tastefully decorated and fully furnished, ensuring the highest level of comfort and tranquility to each guest. The standard room <span class="text-warning">accommodation</span> options are <b>Single</b> and <b>Double</b> <b><span class="text-warning">Rooms</span></b>, as well as a variety of Suites.

<h4><b>The <span class="text-warning">Premier</span> Collection</b></h4>

Created for an ultimate stay experience, Premier Luxury Mountain Resort reserved 14 suites with an extra touch on the interior and services; the Premier Collection. 

The additional <span class="text-warning">services</span> of the <b><span class="text-warning">Premier</span> Collection<b> are:
<pre>
• Express check-in and check-out
• Guided check-in to the room by Guest Relations
• Early check-in, late check-out upon availability
• Welcome wine and fruit basket
• Turndown service with personalized sweets
• <span class="text-warning">Luxury</span> brand bath amenities (Bulgari)
• Modern individual room decoration and Italian furniture
• Special Pillows Menu (upon request) 
• Unpacking and packing (upon request)
• No Room Service fee
• Private Chef service (in selected rooms upon request, extra charge)
• Kimbo coffee machine
• Bath Menus (Penthouse Suite only with extra charge) 
• Chauffeur service (upon request, extra charge)
• Free transfer to the Banderitsa station (Penthouse Suite only)
• Complimentary DVD movies collection box (upon request)
• Complimentary magazines
• Complimentary underground garage parking (limited - upon availability)
• Goodbye souvenir
</pre>
For more details, please contact our <span class="text-warning">Reservations Desk</span>.
            </p>
        </div>
    </div>


</div>
</body>
</html>