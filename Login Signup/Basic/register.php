<?php

	require 'core.inc.php';

	if(loggedin()) {
		echo 'You are already logged in.'.getfield('NAME');
	}
	else if(!loggedin()){
		echo 'Please Register';

	}

?>