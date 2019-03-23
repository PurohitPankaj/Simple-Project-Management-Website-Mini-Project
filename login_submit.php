<?php
 $con=mysqli_connect("localhost","root","","dbms");
 session_start();
 

$email = mysqli_real_escape_string($con, $_POST['email']);
$password= $_POST['password'];
$select_email= "select * from students where semail='".$_POST['email']."' ";
$select_pass= "select spass from students where semail='".$_POST['email']."'";
$select_email_result= mysqli_query($con,$select_email);
$select_pass_result= mysqli_query($con,$select_pass);
$check_email=mysqli_fetch_array($select_email_result);
$check_pass=mysqli_fetch_array($select_pass_result);
echo $check_email['semail'];
echo $check_email['spass'];
if($check_email['semail'] == $email && $check_pass['spass'] == $password)
{
	$_SESSION['semail']= $email;
	$_SESSION['email']= $email;
	$_SESSION['sname']=$check_email['sname'];
	$_SESSION['rno']=$check_email['rno'];
	$_SESSION['age']=$check_email['age'];
	$_SESSION['college']=$check_email['college'];
	$_SESSION['BranchId']=$check_email['BranchId'];
	if($_SESSION['BranchId']==1){ $_SESSION['bname']="COMPS";}
							  if($_SESSION['BranchId']==2){$_SESSION['bname']= "IT";}
							  if($_SESSION['BranchId']==3){$_SESSION['bname']="CIVIL";}
	$_SESSION['sid']=$check_email['sid'];
	header('location: project.php');
}
else
{?>
	<script>alert('Entered Email or Password is Incorrect');</script>

	<?php	
		//header('location: login.php?email_error=enter correct email');
		include('login.php');
}
?>