<?php

	require 'core.inc.php';
	require 'connect.inc.php';

	if(loggedin()) {
		header("Location: login_user.php");
	}
	else if(!loggedin()){
		include 'signupform.inc.php';

	}

?>