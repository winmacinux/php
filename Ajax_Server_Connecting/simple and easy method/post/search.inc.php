<?php
	
	
	if(isset($_POST['text_value'])){
		$search_text=$_POST['text_value'];
		
		if(!empty($search_text)){


			
			if(mysql_connect('localhost','root','ravi') &&mysql_select_db('users_db')){
				$query = "SELECT NAME FROM USER WHERE NAME LIKE '".mysql_real_escape_string($search_text)."%'";
				$query_run=mysql_query($query);
				if(mysql_num_rows($query_run)==0){
					echo 'Sorry this name is not available in our database.';
				}else{
				while($query_row=mysql_fetch_assoc($query_run)){
					echo $name = $name=$query_row['NAME'].'<br>';
				}
			}
			}else{
				echo 'Cannot connect to the server.';
			}
		}else{
			echo 'Please type name';
		}

	
}

?> 