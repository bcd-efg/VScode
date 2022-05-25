<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>INFORMATION</title>
</head>
<body>
	<?php
	$name=$_POST["name"];
	$gname=$_POST["guardian_name"];
	$address=$_POST["address"];
	$gender=$_POST["gender"];
	$cnum=$_POST["contact"];
	$courses[]=$_POST["course"];
	echo "<h3>Information</h3>";
	echo "Name is: <b>$name</b>";
	echo "<br>";
	echo "Guardian's Name is: <b>$gname</b>";
	echo "<br>";
	echo "Address: <b>$address</b><br>";
	if($gender=="m"){
		echo "Gender:<b>Male</b><br>";
	}
	else{
		echo "Gender:<b>Female</b><br>";
	}
	echo "Contact Number is: <b>$cnum</b>";
	echo "<br>";

	echo "Courses are: ";

	echo implode(', ',$_POST['course']);	


	?>
</body>
</html>
