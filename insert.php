<?php
	//declaring php file

	/* Connect to database */

	$dbcon = mysqli_connect("localhost", "mayaishver", "YjHS6Z8", "mayaishver_fundraiser");
	if ($dbcon == NULL) {
		echo "Database is not connected.";
		exit();
	}


$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$pledge = $_POST['pledge'];
$charity_id = $_POST['charity_id'];



$insert_donor = "INSERT INTO donors (f_name, l_name, email, pledge, charity_id) VALUES ('$f_name','$l_name','$email','$pledge','$charity_id')";



/*testing
echo "<br>";
echo $f_name;
echo "<br>";
echo $l_name;
echo "<br>";
echo $email;
echo "<br>";
echo $pledge;
echo "<br>";
echo $charity_id;
echo "<br>";
echo $insert_donor;*/

	




					
$fund_f_name = $_POST['f_name'];
$fund_l_name = $_POST['l_name'];
$email = $_POST['email'];
$DOB = $_POST['DOB'];
$charity_name = $_POST['charity_name'];
$blurb = $_POST['blurb'];
$don_goal = $_POST['don_goal'];
$category = $_POST['category'];
$account_id = 0;



echo "<br>";

$insert_fundraiser = "INSERT INTO fundraisers (f_name, l_name, email, birth_date) VALUES ('$fund_f_name','$fund_l_name','$email','$DOB')";

echo "<br>";






echo "<br>";

$account_id = $dbcon->insert_id;

$insert_charity = "INSERT INTO charities (charity_name, blurb, category, don_goal, account_id) VALUES ('$charity_name','$blurb','$category','$don_goal','$account_id')";
echo "<br>";

	//header("refresh:15; url = charity.php");



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
			<?php
				if(!mysqli_query($dbcon, $insert_donor))
				{
					//echo "Error: " . $insert_donor . "<br>" . mysqli_error($dbcon);
					echo "Not Inserted donor";
				}
				else 
				{
					$donor_id = $dbcon->insert_id;
					$insert_donor_query = "SELECT donors.f_name, donors.l_name, charities.charity_name FROM donors, charities WHERE donors.donor_id = ".$donor_id." AND charities.charity_id = ".$charity_id;
					//echo $insert_donor_query;
					$insert_donor_result = mysqli_query($dbcon, $insert_donor_query);
					$insert_donor_record = mysqli_fetch_assoc($insert_donor_result);
					echo "Thank you ".$insert_donor_record['f_name']." ".$insert_donor_record['l_name']." for donating to ".$insert_donor_record['charity_name']."!";
					//echo 'Inserted donor';
					echo "<br>";
				}
				
				if(!mysqli_query($dbcon, $insert_fundraiser))
				{
					echo "<br>";
					//echo "Error: " . $insert_fundraiser . "<br>" . mysqli_error($dbcon);
					echo "Not Inserted fundraiser";
					echo "<br>";
				}
				else 
				{
					$account_id = $dbcon->insert_id;
					
					echo "<br>";
					$insert_charity = "INSERT INTO charities (charity_name, blurb, category, don_goal, account_id) VALUES ('$charity_name','$blurb','$category','$don_goal','$account_id')";
echo "<br>";
					
					if(!mysqli_query($dbcon, $insert_charity))
					{
						echo "<br>";
						echo "Error: " . $insert_charity . "<br>" . mysqli_error($dbcon);
						echo "Not Inserted charity";
						echo "<br>";
					}
					else 
					{
						echo "Thanks ".$fund_f_name." for creating ".$charity_name;
						//echo 'Inserted charity';
					}
					
					//echo 'Inserted fundraiser';
					echo "<br>";
				}
			
				
				
				//header("refresh:30; url = index.php");
			?>
		</article>
	</body>
</html>

			