<?php


$check_in="1997-04-05";
$check_out="1997-04-10";

$no_of_days= (strtotime($check_out) - strtotime($check_in))/(60*60*24);
echo $no_of_days;

?>