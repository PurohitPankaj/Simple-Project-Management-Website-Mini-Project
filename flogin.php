<?php 
require "connect.php";
?>
<html>
    <head>
        <link rel="stylesheet" href="css\bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="js/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="js\bootstrap.min.js"></script>
		<!---<link rel="stylesheet" href="css/bindex.css">--->
		<link rel="stylesheet" href="css/bindex.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login FreeStyle Store</title>
	<style>
		#panel{margin-top:28.5%; border:;}
		.content{ padding-top:4%; }
		.footer{ margin-top:9%; }
	</style>
    </head>
<body>

	
	
	<?php
	 include "header.php";
	?>
	</div>
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-5 col-xs-offset-3">
						<div class="panel panel-primary" id="panel">
							<div class="panel-heading">
								<h3> Faculty LOGIN</h3>
							</div>
							<div class="panel-body">
								<p class="text-warning">Login to your Account </p>
								<form class="form-group" method="POST" action="faculty_login.php">
									<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder=" Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></input><br>
									<input type="password" name="password" class="form-control" placeholder=" Password" required = "true" pattern=".{6,}"></input>
									<div> <?phpecho $_GET['email_error']?></div>
									</div>
									<button type="Submit "class="btn btn-primary"  >Login</button>
								</form>
							</div>
							<div class="panel-footer">
								<!---Don't have an account? <a href="signup.php">Register</a>--->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<div class="footer">
				<div class="container">
					<center>
					Copyright © <a href="index.php">ArpTech.</a> All Rights
					Reserved” and “Contact Us: +91 70286 93789"
					</center>
				</div>
	</div>
</body>
</html>