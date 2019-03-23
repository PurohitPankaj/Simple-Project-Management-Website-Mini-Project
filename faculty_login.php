<?php
 $con=mysqli_connect("localhost","root","","dbms");
 session_start();
 

$email = mysqli_real_escape_string($con, $_POST['email']);
$password= $_POST['password'];
$select_email= "select * from faculty where femail='".$_POST['email']."' ";
$select_pass= "select fpass from faculty where femail='".$_POST['email']."'";
$select_email_result= mysqli_query($con,$select_email);
$select_pass_result= mysqli_query($con,$select_pass);
$check_email=mysqli_fetch_array($select_email_result);
$check_pass=mysqli_fetch_array($select_pass_result);
echo $check_email['femail'];
echo $check_email['fpass'];
if($check_email['femail'] == $email && $check_pass['fpass'] == $password)
{
	$_SESSION['femail']= $email;
	$_SESSION['email']= $email;
	$_SESSION['fname']=$check_email['fname'];	
	$_SESSION['fid']=$check_email['fid'];
	$_SESSION['fbran']=$check_email['BranchId'];
	header('location:project.php');
}
else
{?>
	<script>alert('Entered Email or Password is Incorrect');</script>

	<?php	
		//header('location: login.php?email_error=enter correct email');
		include('login.php');
}
?>