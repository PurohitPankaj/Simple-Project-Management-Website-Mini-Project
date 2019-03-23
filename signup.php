<?php 
require "connect.php";
//session_start();
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
								<Label><h3><b>STUDENT SIGNUP/<a href="fsignup.php">FACULTY SIGNUP</a></b></h3></label>
							</div>
							<div class="panel-body">
								<form class="form-group" method="POST" action="signup_script.php">
									<div class="form-group">
									<input type="text" name="name" class="form-control" placeholder="Enter Name"></input><br>
									
								<input type="Email" name="email" class="form-control" placeholder=" Email " required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
								 <br>
								 <div> <?phpecho $_GET['email_error']?></div>
								<input type="password" name="password" class="form-control" placeholder=" Password (Min 6 Character)" required = "true" pattern=".{6,}">
								</input><br>
									<input type="number" name="age" class="form-control" placeholder="Age" pattern=".{10,10}"></input><br>
									<!---<input type="text" name="college" class="form-control" placeholder="College"></input><br>--->
									<input type="text" name="rno" class="form-control" placeholder="Roll.no"></input><br>
									<b>Branch</b><input type="radio" value="1" name="branch">COMPS
									<input type="radio" name="branch" value="2" >IT
									<input type="radio" name="branch" value="3">CIVIL
									<input type="radio" name="branch" value="4">EXTC
									<input type="radio" name="branch" value="5" >ETRX<br>
									</div>
									<button type="Submit "class="btn btn-primary" >Submit</button>
								</form>
							</div>
							<div class="panel-footer">
								Have an account? <a href="login.php">Login</a>
							</div>
						</div>
					</div>
				</div>
	</div>
	
	<!--<div class="footer">
				<div class="container">
					<center>
					Copyright © <a href="bindex.php">Lifestyle Store.</a> All Rights
					Reserved” and “Contact Us: +91 90000 00000"
					</center>
				</div>
	</div>	--->
	<?php 
		include 'footer.php';
	?>
	
</body>
</html>