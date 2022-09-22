<?php
	//declaring php file

	

	/* Connect to database */

	$dbcon = mysqli_connect("localhost", "mayaishver", "YjHS6Z8", "mayaishver_fundraiser");
	if ($dbcon == NULL) {
		echo "Database is not connected.";
		exit();
	}

	
	$query = "SELECT * FROM charities"; //You don't need a ; like you do in SQL
	$result = mysqli_query($dbcon, $query);
	
	echo "<table>"; // start a table tag in the HTML

	//while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
		
	//echo "<tr><td>" . htmlspecialchars($row['charity_name']) . "</td><td>" . htmlspecialchars($row['blurb']) .  "</td><td>" . htmlspecialchars($row['don_goal']) . "</td></tr>";  //$row['index'] the index here is a field name
		
	//}

	echo "</table>"; //Close the table in HTML










	if(isset($_GET['charity_sel'])){
		$charity_id = $_GET['charity_sel'];
	} else{
		$charity_id = "";
	}

	//All charity search query
	$all_charities = "SELECT * FROM charities";
	$all_charities_record = mysqli_query($dbcon, $all_charities);


	$search_query = "SELECT * FROM charities";
	$search_result = mysqli_query($dbcon, $search_query);
	$search_record = mysqli_fetch_assoc($search_result);

	$char_name = array();
	while($row=mysqli_fetch_array($search_result)){
		$char_name[]=explode(",",$row['charity_name']);
	}
	//foreach ($char_name as $value){
	//	mail_function($value);
	//}

	echo $char_name;

	
	echo $search_record;


	//All charity display 
	//$all_charities_query
	//$query_result
	//$query_record
	
	/*$sql = "SELECT * FROM charities";
	$result = mysqli_query($dbcon, $sql);
	$c=0;
	$myarray= array();
	while ($c < mysqli_num_fields($result))
	{
		 # Get field name
		 $fld = mysqli_fetch_field($result, $c);

		 # Put field name in array
		 $myarray[] = $fld->name;

		 # Count + 1 for next field
		 $c++;
	}
	echo "<table style='border:1px solid #ccc;'>\n";
	echo "<thead>\n";
	echo "<tr>\n";
	foreach($myarray as $columnheading) {
		echo "<th>".$columnheading."</th>\n";
	}
	echo "</tr>\n";
	echo "</thead>\n";
	echo "<tbody>\n";
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>\n";
			foreach($row as $td) {
				echo "<td>".$td."</td>";
			}
			echo "</tr>\n";
		}
	}
	echo "</tbody>\n";
	echo "</table>"; 

	echo $myarray;*/

/*
$sql = "SELECT * FROM  charities";
$result = mysqli_query($dbcon, $sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($dbcon));
    exit();
}
while($row = mysqli_fetch_array($result, MYSQLI_NUM))
{
//print the values using echo
}
	
$c=0;
$myarray = array();
while ($c < mysqli_num_fields($result))
{
     # Get field name
     $fld = mysqli_fetch_field($result, $c);

     # Put field name in array
     $myarray[] = $fld->name;

     # Count + 1 for next field
     $c++;
}

echo "<table style='border:1px solid #ccc;'>n";
echo "<thead>n";
echo "<tr>n";
foreach($myarray as $columnheading) {
    echo "<th>".$columnheading."</th>n";
}
echo "</tr>n";
echo "</thead>n";
echo "<tbody>n";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>n";
        foreach($row as $td) {
            echo "<td>".$td."</td>";
        }
        echo "</tr>n";
    }
}
echo "</tbody>n";
echo "</table>";*/
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
		
		
		<!--<div class="grid-container">
			<?php /*
				echo "<div class='grid-item'>".$search_record['charity_name']."</div><br>";
				echo "<div class='grid-item'>".$search_record['blurb']."</div><br>";
				echo "<div class='grid-item'>".$search_record['don_goal']."</div><br>";*/
				
			?>
			
		</div>-->
		<article>
		
			<h2> Search for A Charity </h2>
		
		
			<form action="" method="post">
				<input type="text" name="search">
				<input type="submit" name="submit" value="Search">
			</form>
			<h2> Charity Information</h2>
			<table>
				<tr>
					<th>charity name</th>
					<th>blurb</th>
					<th>don_goal</th>
				</tr>
					<?php
						/* Display the query results into an option tag*/


						?>


				<?php
					/*while($search_record = mysqli_fetch_assoc($search_result)){
							echo "<option value ='".$search_record['charity_id'] ."'>";
							echo $search_record['charity_name'];
							//Show the drink name in the option box
							echo "</option>";}

					while($row=mysqli_fetch_array($all_charities_record))
					{
						echo "<tr>";
						echo "<td>".$row['charity_name']."</td>";
						echo "<td>".$row['blurb']."</td>";
						echo "<td>".$row['don_goal']."</td>";
						echo "< type=hidden name=charity_id value'".$row['charity_id']."'>";
						echo "< type=hidden name=account_id value'".$row['account_id']."'>";
						echo "<td><a href=charity.php?charity_id=" .$row['charity_id']." class=button2> pledge</a></td>";
						//echo "<td><input type=submit></td>";
						//echo "<td><a href=delete.php?charity_id=" .$row['charity_id']. "> Delete</a></td>";
						//echo "</form></tr>";
						}*/

					?>

					
					<!-- Options-->
					
		
	


					<!-- Display the results-->
					<?php
						if(isset($_POST['search'])){
							$start_count = 1;
							$search = $_POST['search'];

							$query_search = "SELECT * FROM charities WHERE charities.charity_name LIKE '%$search%'";
							$query_result = mysqli_query($dbcon, $query_search);
							$count = mysqli_num_rows($query_result);

							//if ($search == ""){
								//(get charities and display them)
							if($count == 0 or $start_count != 1){
								echo $count;
								echo $query_result;
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
										$start_count == 0;

									}
								}
							}
						?>
				</table>
		</article>
	</body>
</html>

