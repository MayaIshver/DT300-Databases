<?php
	//declaring php file

	

	/* Connect to database */

	$dbcon = mysqli_connect("localhost", "mayaishver", "YjHS6Z8", "mayaishver_fundraiser");
	if ($dbcon == NULL) {
		echo "Database is not connected.";
		exit();
	}

	

	if(isset($_GET['charity_sel'])){
		$charity_id = $_GET['charity_sel'];
	} else{
		$charity_id = "";
	}

	//All charity search query
	//$all_charities = "SELECT * FROM charities";
	//$all_charities_record = mysqli_query($dbcon, $all_charities);


	$search_query = "SELECT * FROM charities";
	
	$search_result = mysqli_query($dbcon, $search_query);
	
	$search_record = mysqli_fetch_assoc($search_result);
	echo $search_record['charity_name'];


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
		
			<h2> Search for A Charity </h2>
		
			<?php 
				/*$test = $_GET['search'];
				echo $test;*/
			?>
			<form action="" method="post">
				<input type="text" name="search">
				<input type="submit" name="submit" value="search">
			</form>
			<h2> Charity Information</h2>
			<table>
				<tr>
					<th>Charity Name</th>
					<th>Blurb</th>
					<th>Donation Goal</th>
				</tr>
				<?php
					
					if( !isset($_POST['search']))  { 
						
						while($row = mysqli_fetch_array($search_result)) {
							//echo $row['charity_name']; Not sure why but it's starting with the second result
							//echo $start_count;
							echo "<tr>";
							echo "<td>".$row['charity_name']."</td>";
							echo "<td>".$row['blurb']."</td>";
							echo "<td>".$row['don_goal']."</td>";
							echo "<type=hidden name=charity_id value'".$row['charity_id']."'>";
							echo $row['charity_id'];
							echo "<type=hidden name=account_id value'".$row['account_id']."'>";
							echo "<td><a href=charity.php?charity_id=" .$row['charity_id']." class=button2> pledge</a></td>";
						}
					}
				?>




					<!-- Display the results-->
					<?php
						if(isset($_POST['search'] )or isset($_GET['search'])){
							if (isset($_GET['search'])){
								$search = $_GET['search'];
								//echo $search;
								$query_search = "SELECT * FROM charities WHERE charities.charity_name LIKE '%$search%'";
								$query_result = mysqli_query($dbcon, $query_search);
								$count = mysqli_num_rows($query_result);
							}
							else{
								$search = $_POST['search'];
								//echo $search;
								$query_search = "SELECT * FROM charities WHERE charities.charity_name LIKE '%$search%'";
								$query_result = mysqli_query($dbcon, $query_search);
								$count = mysqli_num_rows($query_result);
							}
							//$start_count = 0;

							//if ($search == ""){
								//(get charities and display them)
							if($count == 0 ){
								echo "There was no seach results.";
								}
								else {
									while($row = mysqli_fetch_array($query_result)) {
										echo "<tr>";
										echo "<td>".$row['charity_name']."</td>";
										echo "<td>".$row['blurb']."</td>";
										echo "<td>".$row['don_goal']."</td>";
										echo "<type=hidden name=charity_id value'".$row['charity_id']."'>";
										echo "<type=hidden name=account_id value'".$row['account_id']."'>";
										echo "<td><a href=charity.php?charity_id=" .$row['charity_id']." class=button2> pledge</a></td>";
										//echo $row['charity_id'];
										//$start_count == 0;

								}
							}
						}
					?>
				</table>
		</article>
	</body>
</html>

