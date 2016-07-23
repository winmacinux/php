<?php
if(isset($_POST['text'])){
$text=$_POST['text'];

	if(!empty($text)){
		


		if(mysqli_connect('localhost','root','ravi','users_db')){
			//$query="INSERT INTO DATA VALUES ('".mysql_real_escape_string($text)."')";
			$query="SELECT NAME FROM USER WHERE NAME LIKE '".mysql_real_escape_string($text)."'";

			$query_run = mysql_query($query);
		}else{
			echo 'Could not connect to the server.';
		}
	}
}
?>