<?php
	require 'connect.inc.php';
	require 'core.inc.php';

	if(loggedin()) {

		echo 'You are logged in '.getfield('NAME').'. <a href="logout.php">Logout</a>';

	}
	else{
	include 'loginform.inc.php';
	}

?>