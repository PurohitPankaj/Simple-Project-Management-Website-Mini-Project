<?php
	//CreateConnection
	$con=mysqli_connect("localhost","root","","dbms");
	if(!$con)
	{
	  die("Connection failed: " . mysqli_connect_error());
	}
	//echo "connection Successfull";
	//session_start();
?>