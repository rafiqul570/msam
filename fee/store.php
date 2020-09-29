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
	$date = $_POST['date']; 
	$des = $_POST['des']; 
	$taka = $_POST['taka']; 
	include('../include/connect.php');
	$con = connectBD();
	$sql = "INSERT INTO fees VALUES (NULL,'$name','$class','$section','$roll','$date','$des','$taka');";
	if(mysqli_query($con,$sql)) {
	
	header("Location:index.php? success= 1");
	} else {
		
	header("Location:create.php? error = 1");
	
	}
?>