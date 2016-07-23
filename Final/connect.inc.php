<?php 
	

	$mysql_host='localhost';
	$mysql_user='root';
	$mysql_pass='ravi';
	$mysql_db='users_db';
 	
 	if(@!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || @!mysql_select_db($mysql_db)) {
		
				die('Could not connect to the Mysql Server, may be database is invalid.<br>'.mysql_error());
			}


 ?>