<div class="navbar navbar-inverse navbar-fixed-top"> 
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
			</button> 
			<a class="navbar-brand" href="index.php">Project Management </a> 
		</div> 
		<div class="collapse navbar-collapse" id="myNavbar"> 
			<ul class="nav navbar-nav navbar-right"> 
			
		<?php 
		if (isset($_SESSION['email'])) 
		{
		?> 
			<li><a href = "index.php"><span class = "glyphicon glyphicon-Home"></span>Home </a></li>
			<!--<li><a href = "setting.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li> -->
			<li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
		?> 
		<?php

		} 
		else 
		{ 
		?> 
			<li><a href = "index.php"><span class = "glyphicon glyphicon-Home"></span>Home </a></li>
			<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
			<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Student Login</a></li> 
			<li><a href = "flogin.php"><span class = "glyphicon glyphicon-log-in"></span>Faculty Login</a></li>

		<?php 
		} 
		?> 
			</ul> 
		</div>
		</div> 
</div>