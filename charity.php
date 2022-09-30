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
	
	echo $charity_id;
	//$query = "SELECT * FROM charities WHERE charities.charity_id = '".$charity_id."'";;
	//$query_result  = mysqli_query($dbcon, $query);
	//$query_record = mysqli_fetch_assoc($query_result);
	
	

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
			<?php
				$id = $_GET['charity_id'];
				$amount_pledged = "SELECT charities.charity_name, charities.charity_id, SUM(donors.pledge) AS pledge 
					FROM `donors`, `charities`
					WHERE charities.charity_id = donors.charity_id 
					AND charities.charity_id ='".$charity_id."'
					GROUP BY charities.charity_name, charities.charity_id";
				$pledged_result = mysqli_query($dbcon, $amount_pledged);
				$pledged_record = mysqli_fetch_assoc($pledged_result);
			
				$charity_id = intval($id);
				//echo $charity_id;
				echo "<br>";
				$charity_query = "SELECT * FROM charities WHERE charity_id='".$charity_id."'";
				//echo $charity_query;
				$charity_result = mysqli_query($dbcon, $charity_query);
				//echo $charity_result;
				$charity_record = mysqli_fetch_assoc($charity_result);

				echo "Amount Pledged: ".$pledged_record['pledge']."<br>";
				echo "Charity Name: " . $charity_record['charity_name'] . "<br>";
				echo "Charity Blurb: " . $charity_record['blurb' ]. "<br>";


			?>

			<section id="pledge">
				<h2> Donate Now! </h2>
				<form action="insert.php" method="post">
					First Name: <input type="text" name="f_name"><br>
					Last Name: <input type="text" name="l_name"><br>
					Email: <input type="text" name="email"><br>
					Pledge amount: <input type ="integer" name="pledge"><br>
					<input type="hidden" name="charity_id" value="<?php echo $charity_id; ?>">

					<input type ="submit" value="Insert">

				</form> 
			</section>
			

		</article>	
	</body>
</html>