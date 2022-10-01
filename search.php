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
	
	//Setting the sort and adjusting the query 
	if(!isset($_POST['sort'])){
		$_POST['sort'] = "";
	}

	echo $_POST['sort'];

	if  (($_POST['sort']) == "a-z"){
		$search_query = "SELECT * FROM charities ORDER BY charity_name ASC ";
	} elseif (($_POST['sort']) == "z-a"){
		$search_query = "SELECT * FROM charities ORDER BY charity_name DESC ";
	} elseif ((($_POST['sort']) == "Mental health") or (($_POST['sort']) == "General health") or (($_POST['sort']) == "Children") or (($_POST['sort']) == "Third-world")){
		$search_query = "SELECT * FROM charities WHERE category = '".$_POST['sort']."'";
	} 
	else {
		$search_query = "SELECT * FROM charities";
	}
		
	
	$search_result = mysqli_query($dbcon, $search_query);
	
	
	


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
				
			</ul>
		</nav>
		
		
		
		<article>
		
			<h2> Search for A Charity </h2>
		
			<!--Search form -->
			<form method="post">
				<input type="text" name="search">
				<input type="submit" name="submit" value="search">
			</form>
			
			<!-- Order queries Form -->
			<form name='sort_form' id='sort_form' method='post' action='search.php'>
				<!-- Dropdown Menu -->
				<select name='sort' id='sort'>
					<!-- Options -->
					<option value="a-z">Sort A-Z</option>
					<option value="z-a">Sort Z-A</option>
					<option value="Children">Category: Children </option>
					<option value="General health">Category: General Health </option>
					<option value="Mental health">Category: Mental Health </option>
					<option value="Third-world">Category: Third-world </option>
				</select>
				<!--- Drink Button -->
				<input type="submit" name="sort_button" value="Filter">
			</form>
			
			
			<h2> Charity Information</h2>
			<!--Table to display the infomation-->
			<table>
				<tr>
					<th>Charity Name</th>
					<th>Blurb</th>
					<th>Catagory </th>
					<th>Donation Goal</th>
				</tr>
				<?php
					
					//Shows all the charities if there is no search yet
					if( !isset($_POST['search'])) { 
							while($row = mysqli_fetch_array($search_result)) {

								echo "<tr>";
								echo "<td>".$row['charity_name']."</td>";
								echo "<td>".$row['blurb']."</td>";
								echo "<td>".$row['category']."</td>";
								echo "<td>".$row['don_goal']."</td>";
								echo "<type=hidden name=charity_id value='".$row['charity_id']."'>";
								echo "<type=hidden name=account_id value='".$row['account_id']."'>";
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
										echo "<td>".$row['category']."</td>";
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

