<?php

	require 'connect.inc.php';
	require 'core.inc.php';

	if(loggedin()) {

		header("Location: login_user.php");

	}
	else{
	include 'loginform.inc.php';
	}

?>