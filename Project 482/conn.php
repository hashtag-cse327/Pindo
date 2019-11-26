<?php 

	  session_start();
	  $conn=mysqli_connect("localhost","root","","onlineshop");
	  if(!$conn)
	    die("Connection Failed".mysqli_connect_error());

?>