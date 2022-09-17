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
					<a href="search.html" class="link"> Search </a>
				</li>
				<li class="item">
					<a href="login.html" class="link"> Login </a>
				</li>
				<li class="item">
					<a href="about.html"class="link"> About </a>
				</li>
				<li class="item">
					<a href="account.html" class="link"> My Account </a>
				</li>
			</ul>
		</nav>
