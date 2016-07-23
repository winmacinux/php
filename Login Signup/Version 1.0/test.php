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
<style type="text/css">
    .content{
        width:100%;
        background-color: yellow;
    }
</style>

</head>

<body>

<div class="container">
	<div class="jumbotron">
    	<h1>HOTEL.COM</h1>
        <p>Its just like your Home</p>
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
      <label><input type="checkbox"> Yes</label>
      </div>
    <div class="checkbox">
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
            
    </div>

</div>
</body>
</html>