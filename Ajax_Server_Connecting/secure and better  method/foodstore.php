<?php
header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

echo '<response>';
	
	$food = $_GET['food'];
	$foodArray = array("tuna","bacon","beef","loaf","ham");
	if(in_array($food, $foodArray))
		echo 'We do have '.$food.'!';
	else if($food=='')
		echo 'Enter a food you idiot.';
	else
		echo 'Sorry punk we dont sell no '.$food.'!';

echo '</response>';


?>