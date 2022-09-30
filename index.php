<?php
	//declaring php file

	

	/* Connect to database */

	$dbcon = mysqli_connect("localhost", "mayaishver", "YjHS6Z8", "mayaishver_fundraiser");
	if ($dbcon == NULL) {
		echo "Database is not connected.";
		exit();
	}
	
	$top5_query = "SELECT charities.charity_name, charities.charity_id, SUM(donors.pledge) AS pledge 
					FROM `donors`, `charities`
					WHERE charities.charity_id = donors.charity_id 
					GROUP BY charities.charity_name, charities.charity_id
					ORDER BY pledge DESC
					LIMIT 0,5 ";
	$top5_result = mysqli_query($dbcon, $top5_query);
	//$top5_record = mysqli_fetch_assoc($top5_result);
	
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
			<a href="fundraiser.php" class="button1"> Create A Fundraiser </a>
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
					<a href="index.php" class="link"> Home </a>
				</li>
				<li class="item">
					<a href="search.php" class="link"> Search </a>
				</li>
				<li class="item">
					<a href="fundraiser.php" class="link"> Create A Fundraiser </a>
				</li>
				<li class="item">
					<a href="about.php"class="link"> About </a>

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
				<a href="search.php" class="button2">Donate Now!</a>
				<form action="search.php" method="post">
					<input type="text" name="search" placeholder="Search..">
					<input type='submit' id='search' value='search'>
				</form>
				
				
				<!--<div class="search_block">
					<a href="search.html" class="button2">Donate Now!</a>
					<input type="text" placeholder="Search..">
				</div>-->
			</div>
		
			<div class="grid-item grid-item-3">
				<h3>Top 5 Charities</h3>
				<div class="grid-container">
					<?php 
						while ($row = mysqli_fetch_assoc($top5_result)) {
							echo "<div class='small-grid-item'>".$row['charity_name']."</div>";
							echo "<a href='charity.php?charity_id=".$row['charity_id']."'class='grid-button'>Pledge!</a>";
							
							}
					?>
					
				</div>
			</div>
		</div>
	</body>
</html>