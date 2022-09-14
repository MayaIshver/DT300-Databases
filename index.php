<?php
	//declaring php file

	

	/* Connect to database */

	$dbcon = mysqli_connect("localhost", "mayaishver", "YjHS6Z8", "mayaishver_fundraiser");
	if ($dbcon == NULL) {
		echo "Database is not connected.";
		exit();
	}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Funderly </title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
	<body>
		<header>
			<h1> Funderly </h1>
			<a href="login.html" class="button1">Login/sign-up</a>
		</header>
		<!-- hamburger -->
		<input type="checkbox" id="navi-toggle" class="checkbox" />
		<label for="navi-toggle" class="button">
			<span class="icon">&nbsp;</span>
		</label>
		<div class="background">&nbsp;</div>
		<!-- nav -->
		<nav class="nav">
			<ul class="list">
				<li class="item">
					<a class="link"> Search </a>
				</li>
				<li class="item">
					<a class="link"> Login </a>
				</li>
				<li class="item">
					<a class="link"> About </a>
				</li>
				<li class="item">
					<a class="link"> My Account </a>
				</li>
			</ul>
		</nav>
		<div class="big-grid-container">
		
			<div class="grid-item grid-item-1">
				<article>
					<h3> What is Funderly?</h3>
					<p> Funderly is an online charity platform. It is similar to sites like 'go fund me' and 'pledge me'. The site allows people wanting a charity to do so and make an account while also allowing donors to donate without an account.<p>
					
					<p> For more info check out the ABOUT page linked below and in the nav bar. </p>
				
					<a href="about.html" class="button2">About</a>	
				
				</article>
			</div>
			<div class="grid-item grid-item-2">
				<p></p>
				<a href="search.html" class="button2">Donate Now!</a>
				<input type="text" placeholder="Search..">
				<!--<div class="search_block">
					<a href="search.html" class="button2">Donate Now!</a>
					<input type="text" placeholder="Search..">
				</div>-->
			</div>
		
			<div class="grid-item grid-item-3">
				<h3>Top 5 Charities</h3>
				<div class="grid-container">
					<div class="small-grid-item">charity</div>
					<a href="charity.html" class="grid-button">Pledge!</a>
					<div class="small-grid-item">charity</div>
					<a href="charity.html" class="grid-button">Pledge!</a>
					<div class="small-grid-item">charity</div>
					<a href="charity.html" class="grid-button">Pledge!</a>
					<div class="small-grid-item">charity</div>
					<a href="charity.html" class="grid-button">Pledge!</a>
					<div class="small-grid-item">charity</div>
					<a href="charity.html" class="grid-button">Pledge!</a>
				</div>
			</div>
		</div>
	</body>
</html>