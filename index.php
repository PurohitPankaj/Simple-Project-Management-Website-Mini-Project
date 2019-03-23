<?php 
	require "connect.php";
	session_start(); 
	
	if (isset($_SESSION['email'])) 
		{
			header('location: project.php'); 
		}
	

?>
<?php
  $url = "www.youtube.com/embed/QUVdnzC19oU";
  $urltokens = explode("/", $url);
  $vid_id = $urltokens[2];
  echo "http://img.youtube.com/vi/" . $vid_id . "/0.jpg";
?>
<?php
			include 'header.php';	
?>
<html>
    <head>
        <link rel="stylesheet" href=" css\bootstrap.min.css" >
        <!--jQuery library--> 
        <script src=" js/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src=" js\bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bindex.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap FreeStyle Store</title>
    </head>
<body>

	
	<div class="banner-image" style="background:url(banner1.jpg) center;">
		<div class="container">
			
				<div id="banner_content" >
						<font color="Black" ><h1>Manage your Project.</h1>
						<p>Simple and easy way to Manage Your Project.</p></font>
						<br>
						<a href="login.php" class="btn btn-danger btn-lg active">Try Now </a>
				</div>
			
		</div>
	
	</div>
	
	<div class="container" style="background-image:banner1.jpg;">
	    <div class="parallax">
		<div class="row text-center" style="background-image:banner1.jpg;">
			
				<div class="col-md-4 col-sm-4">
					<div class="thumbnail">
						<a href="bindex.php">
						<img src="images.jpg" alt="Watches" width="308px"></img>
							<div class="caption">
								<h3>Your Website Project</h3>
								<p>Manage among the best available in the world.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="thumbnail">
						<a href="bindex.php">
						<img src="top.jpg" alt="shirt" width="350px" ></img>
							<div class="caption">
								<h3>Your Android Projects</h3>
								<p>Manage among the best available in the world.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="thumbnail">
						<a href="bindex.php">
						<img src="images.jpg" alt="Watches" width="308px"></img>
							<div class="caption">
								<h3>Your Website Project</h3>
								<p>Manage among the best available in the world.</p>
							</div>
						</a>
					</div>
				</div>
		</div>
		</div>
		<div id="back2" style="">
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