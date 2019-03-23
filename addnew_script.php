<?php
	$con=mysqli_connect("localhost","root","","dbms");
	session_start();
	
$Name = mysqli_real_escape_string($con, $_POST['pname']);
$ptype = mysqli_real_escape_string($con, $_POST['ptype']);
$marks = $_POST['marks'];
$bran= $_SESSION['BranchId'];
$sid=$_SESSION['sid'];
	
	$insert="insert into projects (pname,ptype,marks,bid,sid) values ('$Name','$ptype',$marks,$bran,$sid) ";
	$insert_result= mysqli_query($con,$insert) or die(mysqli_error($con));
	header('location: project.php');
	
	
?>
