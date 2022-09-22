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



$insert_donor = "INSERT INTO donor (f_name, l_name, email, pledge, charity_id) VALUES ('$f_name','$l_name','$email','$pledge','$charity_id')";

if(!mysqli_query($dbcon, $insert_donor))
{
	echo 'Not Inserted';
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

	

header("refresh:5; url = charity.php");

?>