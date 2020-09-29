<?php
	session_start();
	if (! isset($_SESSION['login'])){
	header ('Location:login.php');
} ?> 


<?php
	
	$name = $_POST['name'];
	$class = $_POST['class'];
	$section = $_POST['section'];
	$roll = $_POST['roll']; 
	include('../include/connect.php');
	$con = connectBD();
	$sql = "INSERT INTO student(name,class,section,roll) VALUES('$name','$class','$section','$roll');";
	if(mysqli_query($con,$sql)) {
	
	header("Location:index.php? success= 1");
	} else {
		
	header("Location:create.php? error = 1");
	
	}
?>