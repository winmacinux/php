<?php
	
	ob_start();
	session_start();

	$current_page=$_SERVER['SCRIPT_NAME'];

	function loggedin(){
		if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
			return true;
		}
		else{
			return false;
		}
	}

	function get_user_field($field) {
		$id=$_SESSION['id'];

		$query="SELECT $field FROM USER WHERE ID='$id'";
		
		if(@$query_run=mysql_query($query)){
			return @mysql_result($query_run, 0, $field);
		}
		else{
			return false;
		}
	}
	
?>