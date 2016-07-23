<?php
	session_start();
	session_destroy();
	
	if(isset($_POST['email']) && isset($_POST['email'])){
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		if(!empty($email) && !empty($password)){
			
			$query="SELECT * FROM USER WHERE EMAIL='".mysql_real_escape_string($email)."' AND PASSWORD='".mysql_real_escape_string($password)."'";
			

			if(@$query_run=mysql_query($query)){
				if(mysql_num_rows($query_run)==0){
					echo 'Please enter valid Username/password';
				}
				else{
					$id=mysql_result($query_run,0,'ID');
					$_SESSION['id']=$id;
					
					header("Location: index.php");
				}
			}
		}
		else{
			echo 'Please enter all the fields.';
		}
	}

?>


<form action="<?php echo $current_file; ?>" method="POST">
Email:<input type="email" name="email">
Password:<input type="password" name="password">

<input type="submit" value="Login">

</form>