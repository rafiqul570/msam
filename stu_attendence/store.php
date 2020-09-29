

<?php
	
	$name = $_POST['name'];
	$class = $_POST['class'];
	$roll = $_POST['roll']; 
	include('../include/connect.php');
	$con = connectBD();
	$sql = "INSERT INTO attendence(name,class,roll) VALUES('$name','$class','$roll')";
	if(mysqli_query($con,$sql)) {
	
	header("Location:index.php? success= 1");
	} else {
		
	header("Location:create.php? error = 1");
	
	}
?>