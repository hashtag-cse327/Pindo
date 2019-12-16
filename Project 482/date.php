<?php 
	
	date_default_timezone_set("Asia/Dhaka");
	$today = date("d-m-Y");
	$time = date("h:i:sa");

	$t =  "Time: " . $time. "   " . "Date: " . $today;

	echo $t;


?>