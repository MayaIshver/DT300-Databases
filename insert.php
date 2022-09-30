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

if(!mysqli_query($dbcon, $insert_donor))
{
	echo "Error: " . $insert_donor . "<br>" . mysqli_error($dbcon);
	echo "Not Inserted";
}
else 
{
	echo 'Inserted';
}

//testing
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
echo $insert_donor;

	

//header("refresh:5; url = charity.php");


					
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$DOB = $_POST['DOB'];
$charity_name = $_POST['charity_name'];
$blurb = $_POST['blurb'];
$don_goal = $_POST['don_goal'];
$account_id = 0;
$donor_id = 1;


echo "<br>";

$insert_fundraiser = "INSERT INTO fundraisers (f_name, l_name, email, birth_date) VALUES ('$f_name','$l_name','$email','$DOB')";

echo "<br>";


if(!mysqli_query($dbcon, $insert_fundraiser))
{
	echo "<br>";
	echo "Error: " . $insert_fundraiser . "<br>" . mysqli_error($dbcon);
	echo "Not Inserted";
	echo "<br>";
}
else 
{
	echo "<br>";
	echo 'Inserted';
	echo "<br>";
}

$account_id = $dbcon->insert_id;
echo $account_id;
echo "<br>";

$insert_charity = "INSERT INTO charities (charity_name, blurb, don_goal, account_id, donor_id) VALUES ('$charity_name','$blurb','$don_goal','$account_id','$donor_id')";
echo "<br>";


if(!mysqli_query($dbcon, $insert_charity))
{
	echo "<br>";
	echo "Error: " . $insert_charity . "<br>" . mysqli_error($dbcon);
	echo "Not Inserted";
	echo "<br>";
}
else 
{
	echo 'Inserted';
}



?>