<?php 
	
	$mysql_host='localhost';
	$mysql_user='root';
	$mysql_pass='ravi';
	$mysql_db='hotel';

	if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !@mysql_select_db($mysql_db)){
		die("Connect connect to server<br>".mysql_error());
	}
	


?>