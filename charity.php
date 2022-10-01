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
	
	//Selects charity name, blurb, and who made the charity
	$charity_query = "SELECT charities.charity_name, charities.blurb, fundraisers.f_name, fundraisers.l_name FROM charities, fundraisers WHERE charities.charity_id='".$charity_id."' AND charities.account_id = fundraisers.account_id";
	
	$charity_result = mysqli_query($dbcon, $charity_query);
	
	$charity_record = mysqli_fetch_assoc($charity_result);

	//Calculates the total amount pledged to the charity 
	$amount_pledged = "SELECT charities.charity_id, SUM(donors.pledge) AS pledge 
					FROM `donors`, `charities`
					WHERE charities.charity_id = donors.charity_id 
					AND charities.charity_id ='".$charity_id."'
					GROUP BY charities.charity_name, charities.charity_id";

?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Funderly</title>
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
			</ul>
		</nav>
		
		<article> 
			<?php
			
				
				
				$pledged_result = mysqli_query($dbcon, $amount_pledged);
				$pledged_record = mysqli_fetch_assoc($pledged_result);
			
				//$charity_id = intval($id);
				
				echo "<br>";
				
				//Displays the information
				echo "<h3>Amount Pledged: </h3> $".$pledged_record['pledge']."<br>";
				echo "<h3>Charity Name: </h3>" . $charity_record['charity_name'] . "<br>";
				echo "<h3>Charity Blurb: </h3>" . $charity_record['blurb' ]. "<br>";
				echo "<h3>Made By: </h3>".$charity_record['f_name' ]." ". $charity_record['l_name' ]."<br>";


			?>
			<!--The form for donors to donate money to the charity-->
			<section id="pledge">
				<h2> Donate Now! </h2>
				<form action="insert.php" method="post">
					First Name: <input type="text" name="f_name" maxlength="25" required><br>
					Last Name: <input type="text" name="l_name" maxlength="30" required><br>
					Email: <input type="email" name="email" maxlength="34" required><br>
					Pledge amount: <input type ="number" name="pledge" required><br>
					<input type="hidden" name="charity_id" value="<?php echo $charity_id; ?>">

					<input type ="submit" value="Make donation">

				</form> 
			</section>
			

		</article>	
	</body>
</html>