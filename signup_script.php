<?php
  $con=mysqli_connect("localhost","root","","dbms");
 session_start();


$Name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$pass = $_POST['password'];
$age = $_POST['age'];
$rno = $_POST['rno'];
$bran= $_POST['branch'];
echo $bran;
$select_query="select semail from students where semail='".$_POST['email']."'";
$select_query_result= mysqli_query($con,$select_query) or die(mysqli_error($con));
$check_email= mysqli_fetch_array($select_query_result);
 if($check_email>0)
 {
	header('location: index.php?email_error=Enter Email is Already register');
 }
 else
 {
$user_registration_query = "INSERT INTO `students` ( `semail`, `spass`, `BranchId`, `sname`, `rno`, `age`) values ('$email', '$pass', '$bran', '$Name' , '$rno','$age')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
 $_SESSION['semail']=$email;
 $_SESSION['id']= mysqli_insert_id($con);
 header('location:login.php');
 }
?>