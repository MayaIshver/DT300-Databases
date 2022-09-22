<?php
	//declaring php file

	

	/* Connect to database */

	$dbcon = mysqli_connect("localhost", "mayaishver", "YjHS6Z8", "mayaishver_fundraiser");
	if ($dbcon == NULL) {
		echo "Database is not connected.";
		exit();
	}

	if(isset($_GET['charity_id'])){
		$charity_id = $_GET['charity_id'];
	} else{
		$charity_id = 1;
	}

	$query = "SELECT * FROM charities WHERE charities.charity_id = '".$charity_id."'";;
	$query_result  = mysqli_query($dbcon, $query);
	$query_record = mysqli_fetch_assoc($query_result);


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
			<a href="login.php" class="button1">Login/sign-up</a>
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
					<a href="search.php" class="link"> Search </a>
				</li>
				<li class="item">
					<a href="login.php" class="link"> Login </a>
				</li>
				<li class="item">
					<a href="about.php"class="link"> About </a>
				</li>
				<li class="item">
					<a href="account.php" class="link"> My Account </a>
				</li>
			</ul>
		</nav>
		
		<article> 
		<?php
			
			$charity_query = "SELECT * FROM charities WHERE charity_id='".$_GET['charity_id'].'"';
			$charity_result = mysqli_query($dbcon, $charity_query);
			$charity_record = mysqli_fetch_assoc($charity_result);
								   
			
			echo " " . $charity_record['charity_name'] . "<br>";
			echo "" . $charity_record['blurb' ]. "<br>";
						
		
		?>
			
		</article>
		<section id="pledge">
			<h2> Donate Now! </h2>
			<form action="insert.php" method="post">
				First Name: <input type="text" name="f_name"><br>
				Last Name: <input type="text" name="l_name"><br>
				Email: <input type="text" name="email"><br>
				Pledge amount: <input type ="text" name=pledge><br>
				<?php
					echo "<type=hidden name=account_id value'".$_GET['charity_id']."'>";
				?>
				<input type ="submit" value="Insert">
				
			</form> 
		</section>
			
	</body>
</html>
