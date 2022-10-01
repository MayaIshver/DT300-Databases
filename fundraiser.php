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
		<article>
			<h2> Enter your charity information here</h2>
			<p id="smalltext">You can not change this once you have sumbitted it </p>
			<form action="insert.php" method="post">
					First Name: <input type="text" name="f_name"><br>
					Last Name: <input type="text" name="l_name"><br>
					Email: <input type="email" name="email"><br>
					Date Of Birth: <input type ="text" name="DOB"><br>
					Charity Name: <input type="text" name="charity_name"><br>
					Blurb: <input type="text" name="blurb" maxlength="500"><br>
					Category: <select name='category' id='category'>
						<option value="Children">Children</option>
						<option value="General health">General health</option>
						<option value="Mental health">Mental health</option>
						<option value="Third-world">Third-world</option>
					</select>
					Donation Goal: <input type ="integer" name="don_goal"><br>
					

					<input type ="submit" value="Create Fundraiser">

			</form> 
		</article>
	</body>
</html>
