<?php 
	$date = $_POST['date'];
	$month = $_POST['month'];
	$year = $_POST['year'];	
	$description = $_POST['description'];
	$incum = $_POST['incum'];
	$expense = $_POST['expense'];
	include('../include/connect.php');
	$con = connectBD();
	$sql = "INSERT INTO cash VALUES(NULL,'$date','$month','$year','$description','$incum','$expense');";
	if(mysqli_query($con,$sql)) {
		
	header("Location:index.php? success= 1");
	} else {
		
	header("Location:incum.php? error = 1");
	}
?>