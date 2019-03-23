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
	
	<?php
	$con=mysqli_connect("localhost","root","","dbms");
	session_start();
	include'header.php';
 
    
 //$pname = mysqli_real_escape_string($con, $_POST['pname']);
//$email = mysqli_real_escape_string($con, $_POST['email']);
//$rno = $_POST['rno'];
 $pid= $_POST['pid'];

$select_query="select * from projects where pid='".$_POST['pid']."'";
$select_query_result= mysqli_query($con,$select_query) or die(mysqli_error($con));
$check_email= mysqli_fetch_array($select_query_result);
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
			<b> No Record Found with this Detail
			<br>

			
			</b>
			</h2>
			<p align="center" style=" margin-bottom:4%;" ><b>Try Again with other Option.</b><br><br>
			<a href="project.php" ><button type="button"  class="btn btn-danger btn-lg" >Lets Try</button></a>
			</p>
		</div>
	</div>
<?php
 }
 
 
 else
 {?>
	
		<div class="container" style="padding-top:10%;">
            <div class="table-responsive">
            <table class="table table-hover">
                <tbody>
				<panel><h3>Projects Detail :</h3></panel>
                    <tr><th>PROJECT ID </th><th>PROJECT NAME </th><th>PROJECT TYPE </th><th>MARKS </th><th>BRANCH </th> <th>STUDENT NAME</th> <th>ROLL.NO </th><th>COLLEGE </th></tr>
                    <tr><th><?PHP ecHo $_SESSION['pid']?> </th>
					<th><?PHP ecHo $_SESSION['pname']?> </th>
					<th><?PHP ecHo $_SESSION['ptype']?> </th>
					<th><?PHP ecHo $_SESSION['marks']?> </th>
					<th><?PHP if($_SESSION['BranchId']=1){echo "COMPS";}
							  elseif($_SESSION['BranchId']=2){echo "IT";}
							  elseif($_SESSION['BranchId']=3){echo "CIVIL";}
						?> </th>
					<th><?PHP ecHo $_SESSION['sname']?> </th>
					<th><?PHP ecHo $_SESSION['rno']?> </th>
					<th><?PHP ecHo $_SESSION['college']?> </th></tr>
                    
            </table>
        </div>
		<p align="center" style=" margin-bottom:4%;" ><b>Search for other PROJECT</b><br><br>
			<a href="project.php" ><button type="button"  class="btn btn-danger btn-lg" >Lets SEARCH</button></a>
		</div>

	
 <?php
 }

?>