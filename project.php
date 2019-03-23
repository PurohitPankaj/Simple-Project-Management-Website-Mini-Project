<?php 
	$con=mysqli_connect("localhost","root","","dbms"); 
	session_start(); 
?>
<html>
    <head>
        <link rel="stylesheet" href="css\bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="js/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="js\bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bindex.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Project Mgmt</title>
    </head>
<body>
<?php 
 include "header.php";
?>
 <div class="container">
	<div class="banner" style="margin-top:6%; background:url(banner.jpg); background-repeat:fixed;">
		<div class="jumbotron ">
			<h2 align="center" style="padding-top:4%; color:#101010;">
			<b>Welcome 
			
			<?php 
			
			if(isset($_SESSION['femail']))
			{
				echo $_SESSION['fname'];
				echo $_SESSION['fbran'];
				
			}
            else
            {	if(isset($_SESSION['semail']))
				{
             	echo $_SESSION['sname'];
				}	
			}
			?>
			
			</b>
			</h2>
			<p align="center" style=" margin-bottom:4%;" ><b>World Best Project Management Site Welcomes you.</b><br><br>
			<!--<button type="button" href="#" class="btn btn-danger btn-lg" >Lets Explore</button>-->
			</p>
		</div>
	</div>
	<?php
	if (isset($_SESSION['fname']))
	{?>
	<div class="sdetail">
	
						<div class="table-responsive">
				<table class="table table-hover">
					<tbody>
						<tr><th>Search for STUDENTS Details </th> <th>List All the Projects in our Branch</th> <th>Search for PROJECTS Details</th></tr>
						<tr>
						<th>
						<form  method="POST" action="sdetail.php" class="form-group">
						<!--<input type="email" name="email" placeholder="Student Email"class="form-control"><br>OR--><br><br>
						<input type="number" name="rno" placeholder="Student Roll.No"class="form-control"><br>
						<a href="sdetail.php"><input type="submit" class="btn btn-block btn-primary" value="Search" name="sdetail"></th></a> 
					
						</form>
					
						
						<th><br><br><a href="list.php"><input type="submit" class="btn btn-block btn-primary" name="list" > </th></a>
						
						<form class="form-group" action="pdetail.php" method="POST">
						<th><!---<input type="text" name="pname" placeholder="Project Name"class="form-control"><br>OR---><br><br>
						<input type="number" name="pid" placeholder="Project Id"class="form-control"><br>
						<a href="pdetail.php"><input type="submit" class="btn btn-block btn-primary" name="pdetail" ></th></a></th>
						</form>
						</tr>
				
					</tbody>
				</table>
				</div>
	</div>
	</div>
	<?php
	}
	else
	{
		
		
$select_query="select * from projects where sid='".$_SESSION['sid']."'";
$select_query_result= mysqli_query($con,$select_query) or die(mysqli_error($con));
 
 if(mysqli_num_rows($select_query_result)<= 0)  
 {
	//header('location:index.php?email_error=Enter Email is Already register');
?>

<div class="container">
	<div class="banner" style="margin-top:6%; background:url(banner.jpg); background-repeat:fixed;">
		<div class="jumbotron ">
			<h2 align="center" style="padding-top:4%; color:#101010;">
						<?php 
			
			if(isset($_SESSION['femail']))
			{
				echo $_SESSION['fname'];
				//echo $_SESSION['BranchId'];
				
			}
            else
            {	if(isset($_SESSION['semail']))
				{
             	echo $_SESSION['sname'];
				}	
			}
			?>
			<b> No Project Created by you 
			<br>

			
			</b>
			</h2>
			<p align="center" style=" margin-bottom:4%;" ><b>want to add Project.</b><br><br>
			<a href="addnew.php" ><button type="button"  class="btn btn-danger btn-lg" >Add New</button></a>
			</p>
		</div>
	</div>
<?php
 }
 
 
 else
 {
	 while( $check_email= mysqli_fetch_array($select_query_result))
	 {
		 
//echo $check_email['pname'];
//echo $check_email1['pid'];
 //for pid
    //$_SESSION['semail']= $check_email['semail'];
	$_SESSION['pname']=$check_email['pname'];
	$_SESSION['marks']=$check_email['marks'];
	$_SESSION['ptype']=$check_email['ptype'];
	//$_SESSION['college']=$check_email['college'];
	//$_SESSION['BranchId']=$check_email['BranchId'];
	$_SESSION['pid']=$check_email['pid'];
	$_SESSION["sid"]=$check_email['sid'];
	
//for Students Detail

$select_query1="select * from students where sid='".$_SESSION['sid']."'";
$select_query_result1= mysqli_query($con,$select_query1) or die(mysqli_error($con));
$check_email1= mysqli_fetch_array($select_query_result1);
	
//for rno
	$_SESSION['semail']= $check_email1['semail'];
	$_SESSION['sname']=$check_email1['sname'];
	$_SESSION['rno']=$check_email1['rno'];
	$_SESSION['age']=$check_email1['age'];
	$_SESSION['college']=$check_email1['college'];
	$_SESSION['BranchId']=$check_email1['BranchId'];
	$_SESSION['sid']=$check_email1['sid'];


	 ?>
	
		<div class="container" style="padding-top:10%;">
            <div class="table-responsive">
            <table class="table table-hover">
                <tbody>
             
	
	
                    <tr><th>PROJECT ID </th><th>PROJECT NAME </th><th>PROJECT TYPE </th><th>MARKS </th><th>BRANCH </th><!--<th>BRANCH </th>
					<th>STUDENT NAME</th> <th>ROLL.NO </th><th>COLLEGE </th></tr>--->
                    <tr><th><?PHP ecHo $_SESSION['pid']?> </th>
					<th><?PHP ecHo $_SESSION['pname']?> </th>
					<th><?PHP ecHo $_SESSION['ptype']?> </th>
					<th><?PHP ecHo $_SESSION['marks']?> </th>
					<th><?PHP if($_SESSION['BranchId']=1){echo "COMPS";}
							  elseif($_SESSION['BranchId']=2){echo "IT";}
							  elseif($_SESSION['BranchId']=3){echo "CIVIL";}
						?> </th></tr>
					<!---<th><?PHP ecHo $_SESSION['sname']?> </th>
					<th><?PHP ecHo $_SESSION['rno']?> </th>
					<th><?PHP ecHo $_SESSION['college']?> </th>---->
                    
            </table>
			
			<?php 
			
	 }
	 ?>
        </div>
		<p align="center" style=" margin-bottom:4%;" ><b>Want to add new PROJECT</b><br><br>
			<a href="addnew.php" ><button type="button"  class="btn btn-danger btn-lg" >Add New</button></a>
		</div>

	
 <?php
     
	}
}
	

?>

	
	
	<?php 
		include 'footer.php';
	?>
		
</body>
</html>