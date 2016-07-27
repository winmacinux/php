<?php
	ob_start();
	session_start();

	$current_file = $_SERVER['SCRIPT_NAME'];

	function get_total_rooms_availability () {

		$query="SELECT COUNT(*) FROM ALLOTMENT WHERE FLAG='A'";
		$query_run=mysql_query($query);
		return mysql_result($query_run, 0);
	}

	function get_room_types_availability($field) {

		$query="SELECT COUNT(*) FROM ALLOTMENT WHERE TYPE='$field' AND FLAG='A'";
		$query_run=mysql_query($query);
		return mysql_result($query_run, 0);
	}

		function get_rooms_field($field,$required_field) {

		$query="SELECT $required_field FROM ROOMS WHERE TYPE='$field' ";
		$query_run=mysql_query($query);
		return mysql_result($query_run, 0);
	}
		function get_alloted($cust_id,$room_type) {

		
		$query_search="SELECT * FROM ALLOTMENT WHERE TYPE='$room_type' AND FLAG='A'";
		echo $room_type.'<br>';
		$query_search_run=mysql_query($query_search);
		$room_no=mysql_result($query_search_run, 0,'NO');

		echo $room_no.'<br>';
		
			

		$query="UPDATE ALLOTMENT SET FLAG='B', CUST_ID='$cust_id' WHERE NO='$room_no'";
		$query_run=mysql_query($query);
		
	}
		function customer_entry($name,$email,$mobile,$address,$check_in,$check_out,$adults,$children,$flight,$amount_pay){
			$user_id=1;
			$query="SELECT MAX(ID) FROM CUSTOMERS";
			$query_run=mysql_query($query);
			 $maxid=mysql_result($query_run,0);
			 if($maxid>=1){
			 	$user_id=$maxid;
			 	}else{
			 	$user_id=1;
			 	}
			 	++$user_id;

			$query_entry="INSERT INTO CUSTOMERS VALUES ('$user_id','$name','$email','$mobile','$address','$check_in','$check_out','$adults','$children','$flight','$amount_pay')";
			$query_entry_run=mysql_query($query_entry);

				return $user_id;
			
		}

		function amount_pay($rooms,$flag,$check_in,$check_out){
			$amount=0;
			$no_of_days= (strtotime($check_out) - strtotime($check_in))/(60*60*24);
			if($flag='Yes'){
				$amount=$amount+15000;
			}
			foreach ($rooms as $selected_rooms) {
				$query="SELECT PRICES FROM ROOMS WHERE TYPE='$selected_rooms'";
				$query_run=mysql_query($query);
				$room_amount=mysql_result($query_run,0,'PRICES');
				$amount=$amount+$room_amount*$no_of_days;
			}


			return $amount;
		}

		function get_cust_info($id,$info){

			$query="SELECT $info FROM CUSTOMERS WHERE ID='$id'";
			$query_run=mysql_query($query);

			return mysql_result($query_run, 0);

		}
?>

