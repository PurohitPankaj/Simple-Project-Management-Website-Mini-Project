
<?php 
$con=mysqli_connect("localhost","root","","dbms");
session_start();
?>
<html>
  <head>
        <link rel="stylesheet" href=" css\bootstrap.min.css" >
        <!--jQuery library--> 
        <script src=" js/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src=" js\bootstrap.min.js"></script>
		<!---<link rel="stylesheet" href="css/bindex.css">--->
		<link rel="stylesheet" href="css/bindex.css">
        <m	eta name="viewport" content="width=device-width, initial-scale=1">
        <title>SignUp </title>
	<style>
	</style>
  </head>
<body>

	
	
	<?php
	
	 include "header.php";
	?>
	<div class="container" style="margin-top:7.1%;">
				<div class="row">
					<div class="col-xs-4 col-xs-offset-4">
						<div class="panel" id="panel">
							<div class="panel-heading">
								<Label><h3><b>ADD NEW PROJECT/</h3><?php echo $_SESSION['bname'];?></b></label>
							</div>
							<div class="panel-body">
								<form class="form-group" method="POST" action="addnew_script.php">
									<div class="form-group">
									<input type="text" name="pname" class="form-control" placeholder="Enter Project Name" required ></input><br>
									
								<input type="text" name="ptype"	 class="form-control" placeholder="Project Type EX. COMPS-(SUBJECT)" required = "true">
								 <br>
									<input type="number" name="marks" class="form-control" placeholder="Marks(If Given)"></input><br>
									</div>
									<button type="Submit "class="btn btn-primary" >ADD</button>
								</form>
							</div>
						
						</div>
					</div>
				</div>
	</div>
	